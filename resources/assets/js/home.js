/**
 * Created by nuocg on 4/20/2017.
 */

//1  Form
let $registerForm = $('.register-form');
let $fieldsetEmail = $registerForm.find('fieldset');
let $emailInput = $('.form-email');
let $emailNotif = $('.email-notif');

$registerForm.on('submit', function (e) {
    let $this= $(this);

    e.preventDefault();
    let data = $this.serialize();
    $fieldsetEmail.attr('disabled', 'disabled').addClass('disabled');
    axios.post($this.attr('action'), data)
        .then(function (response) {
            let message = response.data.message;
            if (response.data.success) {
                $emailNotif.removeClass('hidden-xs-up')
                    .addClass('text-green').html(message);

            } else {
                $emailInput.addClass('danger');
                $emailNotif.removeClass('hidden-xs-up')
                    .addClass('text-red').html(message);
            }
            setTimeout(function () {
                $fieldsetEmail.removeAttr('disabled');
            }, 3000);
        })
        .catch(function (error) {
            let message = error.response.data.email[0];
            $emailInput.addClass('danger');
            $emailNotif.removeClass('hidden-xs-up')
                .addClass('text-red').html(message)
                .removeAttr('disabled');
            setTimeout(function () {
                $fieldsetEmail.removeAttr('disabled');
            }, 3000);
        });
});

$emailNotif.on('click', function () {
    $fieldsetEmail.removeClass('disabled');
    resetNotif($(this));
});

$emailInput.on('click', function () {
    $(this).removeClass('danger');
    resetNotif($emailNotif);
});

//2  Timer
let $timerDay = $('.timer-day');
let $timerHour = $('.timer-hour');
let $timerMin = $('.timer-min');
let $timerSec = $('.timer-sec');

if (timeRemaining === undefined) {
    let timeRemaining = {d: 0, h: 0, m: 0, s: 0};
}

let rmnDay = timeRemaining.d;
let rmnHour = timeRemaining.h;
let rmnMin = timeRemaining.m;
let rmnSec = timeRemaining.s;

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

//3  Toggle Info content
let btnTglContent = $('.btn-tgl-content');
btnTglContent.on('click', function () {
    let contentId = $(this).attr('data-toggle');
    let content = $(`#${contentId}`);

    if (content.css('display') === "none") {
        content.slideDown();
        btnTglContent.html('Thu gọn');
    } else {
        content.slideUp();
        btnTglContent.html('Xem thêm');
    }
});

//4  Slider
let slideItems = $('.slide-item');
let slideLength = slideItems.length;
let featureItems = $('.feature-item');
let intervalTime = 3000;

///  generate navigator
let navigator = $('#slider-navigator');
for (let i = 0; i < slideLength; i++) {
    navigator.append(
        `<div class="pointer" data-index="${i}"><span class="content">${i
        + 1}</span></div>`);
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

//  Scroll window
$('.container-part .part-index').on('click', function (e) {
    let $part = $(this).parent('.container-part');
    windowScroll($part.offset().top);
});

//  Functions
function clickSlide(items, item, relate = []) {
    let index = $(items).index(item);
    let leftIndex = index - 1;
    let rightIndex = index + 1;

    leftIndex = leftIndex >= 0 ? leftIndex : slideLength + leftIndex;
    rightIndex = rightIndex < slideLength ? rightIndex : rightIndex
        - slideLength;

    items.removeClass('active left right');
    $(items[leftIndex]).addClass('left');
    $(items[rightIndex]).addClass('right');
    item.addClass('active');

    pointers.removeClass('active');
    $(pointers[index]).addClass('active');

    if (relate[index] !== undefined) {
        relate.removeClass('active');
        $(relate[index]).addClass('active');
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

function animateTimer($timers, newContent) {
    let length = $timers.length;
    for(let i = 0; i < length; i++) {
        let $timer = $($timers[i]);
        let timerId = 'timer-running-' + i;

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
}
