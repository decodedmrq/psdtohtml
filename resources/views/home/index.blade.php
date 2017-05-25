@extends('layouts.desktop')
@push('css')
{{ html()->style('/css/home.css') }}
@endpush
@section('content')
    @include('home.banner.product')
    <div class="container">
        @include('home.intro.product')
        @include('home.feature.product')
        @include('home.benefit.product')
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

    function resetInput(block) {
        block.removeClass('danger');
        block.val('');
    }

    function resetNotif(block)
    {
        block.addClass('hidden-xs-up').removeClass('text-green text-red').html('');
    }


    //  Timer
    let timerDay = $('#timer-day');
    let timerHour = $('#timer-hour');
    let timerMin = $('#timer-min');
    let timerSec = $('#timer-sec');

    let rmnDay = {{ $timeRemaining->d }};
    let rmnHour = {{ $timeRemaining->h }};
    let rmnMin = {{ $timeRemaining->m }};
    let rmnSec = {{ $timeRemaining->s }};

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
                }
            }
        }

        timerDay.html(makeStringTime(rmnDay));
        timerHour.html(makeStringTime(rmnHour));
        timerMin.html(makeStringTime(rmnMin));
        timerSec.html(makeStringTime(rmnSec));
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
        clickSlide($(slideItems[index]));
    });

    ///  animate slider
    slideItems.on('click', function () {
        clickSlide($(this));
    });


    //  Run
    clickSlide($(slideItems[0]));


    //  Functions
    function clickSlide(slide) {
        let index = $(slideItems).index(slide);
        let leftIndex = index - 1;
        let rightIndex = index + 1;

        leftIndex = leftIndex >= 0 ? leftIndex : slideLength + leftIndex;
        rightIndex = rightIndex < slideLength ? rightIndex : rightIndex - slideLength;

        slideItems.removeClass('active left right');
        $(slideItems[leftIndex]).addClass('left');
        $(slideItems[rightIndex]).addClass('right');
        slide.addClass('active');

        pointers.removeClass('active');
        $(pointers[index]).addClass('active');
    }

    function makeStringTime(time) {
        return time >= 10 ? `${time}` : `0${time}`;
    }
</script>
@endpush
