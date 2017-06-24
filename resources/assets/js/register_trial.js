/**
 * Created by hnc on 6/24/2017.
 */

let $registerForm = $('.register-form');
let $fieldsetEmail = $registerForm.find('fieldset');
let $emailInput = $('.form-email');
let $emailNotif = $('.msg-email');



$registerForm.on('submit', function (e) {
    let $this= $(this);
    e.preventDefault();
    let data = $this.serialize();
    $fieldsetEmail.attr('disabled', 'disabled').addClass('disabled');

    axios.post($this.attr('action'), data)
        .then(function (response) {
            let message = response.data.message;
            if (response.data.success) {
                return window.location = gRoutes.thanks_for_registered;
            }

            console.log(message);
            message = message.email[0];
            // $emailInput.addClass('danger');
            $emailNotif.html(message);

            setTimeout(function () {
                $fieldsetEmail.removeAttr('disabled');
            }, 3000);
        })
        .catch(function (error) {
            console.log(error);
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

function resetNotif(block) {
    block.addClass('hidden-xs-up').removeClass('text-green text-red').html('');
}