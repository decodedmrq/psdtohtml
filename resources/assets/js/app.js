require('./bootstrap');

//  Footer feedback
let footerForm = $('#footer-feedback-form');
let footerFormBody = footerForm.find('.form-body');
let footerFormUrl = footerForm.attr('action');
let inputFields = footerForm.find('input, textarea');
let footerNotif = $('#footer-notify');

footerForm.on('submit', function (event) {
    event.preventDefault();
    clearError();

    let formData = footerForm.serialize();
    disableInput(inputFields);

    axios.post(footerFormUrl, formData)
        .then(function (response) {
            if (response.data.success) {
                let notify = response.data.message;
                footerNotif.removeClass('hidden-xs-up');
                footerFormBody.addClass('fade-out');
                footerForm[0].reset();
            } else {
                let messages = response.data.message;
                let keys = Object.keys(messages);
                let values = Object.values(messages);

                keys.map(function (key, index) {
                    let inputElement = $(`#${key}`);
                    inputElement.addClass('error');
                    inputElement.before(
                        `<div class="error-message text-right float-right"><span>${values[index]}</span></div>`);
                });
            }

            enableInput(inputFields);
        })
        .catch(function (error) {
            console.log('error: ' + error);
        });
});

footerNotif.on('click', function () {
    footerNotif.addClass('hidden-xs-up');
    footerFormBody.removeClass('fade-out');
});

inputFields.on('change keyup mousedown', function (event) {
    clearError($(this));
});

function clearError(input = inputFields) {
    return input.removeClass('error').parent().find(
        'div.error-message').remove();
}

// Object.prototype
function disableInput(e) {
    return e.attr('disabled', 'disabled');
}

function enableInput(e) {
    return e.removeAttr('disabled');
}

//  Global functions
window.windowScroll = function (to = 1000, time = 100, from = window.scrollY) {
    let pxPerMs = Math.abs(to - from) / time;

    let scrollTo = from;
    let i = 0;
    let scrollDown = from < to;
    let interval = setInterval(function () {
        scrollTo += scrollDown ? pxPerMs : -pxPerMs;
        window.scrollTo(0, scrollTo);

        if (i++ === time) {
            clearInterval(interval);
        }
    }, 1);
};

window.fixedWH = function ($element) {
    $element.css({
        'width': $element.outerWidth() + 'px',
        'height': $element.outerHeight() + 'px'
    });

    return $element;
};

//Collapse menu
$('.collapse-button').click(function () {
    var content = $($(this).data('target'));
    content.collapse('toggle');
    
    return false;
});
