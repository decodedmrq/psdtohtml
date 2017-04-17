/**
 * Created by nuocg on 4/14/2017.
 */

let form = $('#feedback-form');
let url = form.attr('action');
let inputFields = form.find('input, textarea');

form.on('submit', function (event) {
    event.preventDefault();
    clearError();
    let formData = form.serialize();

    disableInput(inputFields);

    axios.post(url, formData)
        .then(function (response) {
            if (response.data.success) {
                let notify = response.data.message;
                $('#notify').html(notify).removeClass('hidden-xs-up');
                setInterval(function() {
                    $('#notify').html('').addClass('hidden-xs-up');
                }, 2000);
                form[0].reset();
            } else {
                let messages = response.data.message;
                let keys = Object.keys(messages);
                let values = Object.values(messages);

                keys.map(function (key, index) {
                    let inputElement = $(`#${key}`);
                    inputElement.addClass('error');
                    inputElement.before(`<div class="error-message text-right float-right"><span>${values[index]}</span></div>`);
                });
            }

            enableInput(inputFields);
        })
        .catch(function (error) {
            console.log('error: ' + error);
        });


});

inputFields.on('change keyup', function (event) {
    clearError($(this));
});

function clearError(input = inputFields) {
    return input.removeClass('error').parent().find('div.error-message').remove();
}

// Object.prototype
function disableInput(e) {
    return e.attr('disabled', 'disabled');
}

function enableInput(e) {
    return e.removeAttr('disabled');
}
