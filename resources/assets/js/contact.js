/**
 * Created by nuocg on 4/14/2017.
 */

let form = $('#feedback-form');
let url = form.attr('action');
let inputFields = form.find('input, textarea');

form.on('submit', function (event) {
    inputFields.removeClass('error')
        .parent().find('div.error-message').remove();
    event.preventDefault();

    inputFields.attr('disabled', 'disabled');

    axios.post(url, form.serialize())
        .then(function (response) {
            if (response.success) {

            } else {
                let messages = response.data.messages;
                let keys = Object.keys(messages);
                let values = Object.values(messages);

                keys.map(function (key, index) {
                    let inputElement = $(`#${key}`);
                    inputElement.addClass('error');
                    inputElement.before(`<div class="error-message text-right float-right"><span>${values[index]}</span></div>`);
                });
            }

            inputFields.removeAttr('disabled');
        })
        .catch(function (error) {
            console.log('error: ' + error);
        });


});

inputFields.on('change keyup', function (event) {
    $(this).removeClass('error');
    $(this).parent().find('div.error-message').remove();
});
