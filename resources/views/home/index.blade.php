@extends('layouts.desktop')
@push('css')
{{ html()->style('/css/home.css') }}
@endpush
@section('header')
    @include('home.header')
@endsection

@section('content')
    @include('home.banner.product')
    <div class="container">
        @include('home.intro.product')
        @include('home.feature.product')
        @include('home.benefit.product')
        @include('home.join_facebook')
    </div>
@endsection

@push('script')
<script>
    //  Form
    let registerForm = $('#register-form');
    let emailInput = $('#form-email');
    let emailNotif = $('#email-notif');

    registerForm.on('submit', function (e) {
        e.preventDefault();
        let data = registerForm.serialize();
        axios.post(registerForm.attr('action'), data)
            .then(function (response) {
                let message = response.data.message;
                if (response.data.success) {
                    emailNotif.removeClass('hidden-xs-up').addClass('text-green').html(message);
                } else {
                    emailInput.addClass('danger');
                    emailNotif.removeClass('hidden-xs-up').addClass('text-red').html(message);
                }
            })
            .catch(function (error) {
                let message = error.response.data.email[0];
                emailInput.addClass('danger');
                emailNotif.removeClass('hidden-xs-up').addClass('text-red').html(message);
            });
    });

    emailInput.on('click', function () {
        emailInput.removeClass('danger');
        resetNotif(emailNotif);
    });

    //  Timer
    let $timerDay = $('#timer-day');
    let $timerHour = $('#timer-hour');
    let $timerMin = $('#timer-min');
    let $timerSec = $('#timer-sec');

    let rmnDay = {{ $timeRemaining->d }};
    let rmnHour = {{ $timeRemaining->h }};
    let rmnMin = {{ $timeRemaining->m }};
    let rmnSec = {{ $timeRemaining->s }};

    fixedWH($timerDay);
    fixedWH($timerHour);
    fixedWH($timerMin);
    fixedWH($timerSec);

    let timerCounter = setInterval(function () {
        rmnSec -= 1;
        if (rmnSec < 0) {
            rmnSec = 59;
            rmnMin -= 1;

            if (rmnMin < 0) {
                rmnMin = 59;
                rmnHour -= 1;

                if (rmnHour < 0) {
                    rmnHour = 23;
                    rmnDay -= 1;

                    if (rmnDay < 0) {
                        rmnDay = 0;
                        clearInterval(timerCounter);
                    }
                    animateTimer($timerDay, makeStringTime(rmnDay));
                }
                animateTimer($timerHour, makeStringTime(rmnHour));
            }
            animateTimer($timerMin, makeStringTime(rmnMin));
        }

        animateTimer($timerSec, makeStringTime(rmnSec));
    }, 1000);

    //  Toggle Info content
    let btnTglContent = $('.btn-tgl-content');
    btnTglContent.on('click', function () {
        let contentId = $(this).attr('data-toggle');
        let content = $(`#${contentId}`);

        if (content.css('display') === "none") {
            content.slideDown();
            btnTglContent.html("{{ trans('string.minimize') }}");
        } else {
            content.slideUp();
            btnTglContent.html("{{ trans('string.view_more') }}");
        }
    });

    //  Slider
    let slideItems = $('.slide-item');
    let slideLength = slideItems.length;
    let featureItems = $('.feature-item');
    let intervalTime = 3000;

    ///  generate navigator
    let navigator = $('#slider-navigator');
    for (let i = 0; i < slideLength; i++) {
        navigator.append(`<div class="pointer" data-index="${i}">
            <span class="content">${i + 1}</span>
        </div>`);
    }

    let pointers = $('.navigator .pointer');
    pointers.on('click', function () {
        let index = $(this).attr('data-index');
        clickSlide(slideItems, $(slideItems[index]), featureItems);
    });

    /// auto Slide
    let autoIndex = 0;
    let slideInterval = setInterval(autoSlide, intervalTime);

    ///  animate slider
    slideItems.on('click', function () {
        clearInterval(slideInterval);
        clickSlide(slideItems, $(this), featureItems);
    });
    featureItems.on('click', function () {
        clearInterval(slideInterval);
        let index = $(this).attr('data-index');
        let slideItem = slideItems[index];
        slideItem = slideItem !== undefined ? slideItem : slideItems[0];
        slideItem = $(slideItem);
        clickSlide(slideItems, slideItem, featureItems);
    });

    //  Run
    clickSlide(slideItems, $(slideItems[0]), featureItems);

    //  Functions
    function clickSlide(items, item, forcus = []) {
        let index = $(items).index(item);
        let leftIndex = index - 1;
        let rightIndex = index + 1;

        leftIndex = leftIndex >= 0 ? leftIndex : slideLength + leftIndex;
        rightIndex = rightIndex < slideLength ? rightIndex : rightIndex - slideLength;

        items.removeClass('active left right');
        $(items[leftIndex]).addClass('left');
        $(items[rightIndex]).addClass('right');
        item.addClass('active');

        pointers.removeClass('active');
        $(pointers[index]).addClass('active');

        if (forcus[index] !== undefined) {
            forcus.removeClass('active');
            $(forcus[index]).addClass('active');
        }
    }

    function autoSlide() {
        clickSlide(slideItems, $(slideItems[autoIndex++]), featureItems);
        autoIndex = autoIndex < slideItems.length ? autoIndex : 0;
    }

    function makeStringTime(time) {
        return time >= 10 ? `${time}` : `0${time}`;
    }

    function resetNotif(block) {
        block.addClass('hidden-xs-up').removeClass('text-green text-red').html('');
    }

    function fixedWH($element) {
        $element.css({
            'width':$element.outerWidth() + 'px',
            'height':$element.outerHeight() + 'px'
        });

        return $element;
    }

    function animateTimer($timer, newContent) {
        let timerId = $timer.attr('id');
        timerId = timerId ? timerId : "timer-running";

        let oldContent = $timer.html();
        let oldId = timerId + '-old';
        let newId = timerId + '-new';

        let oldContentHtml = `<div id="${oldId}" class="timer-animate old">${oldContent}</div>`;
        let newContentHtml = `<div id="${newId}" class="timer-animate new">${newContent}</div>`;
        let contentHtml = oldContentHtml + newContentHtml;

        $timer.html(contentHtml);

        $(`#${oldId}`).animate({
            top: '100%',
            opacity: 0,
        }, 300);

        $(`#${newId}`).animate({
            top: '0',
            opacity: 1,
        }, 300, function () {
            $timer.html(newContent);
        });
    }
</script>
@endpush
