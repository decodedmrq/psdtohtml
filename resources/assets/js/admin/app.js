$('.btn-show-feedback').on('click', function (event) {
    var feedbackId = $(this).data('id');
    axios.get('/admin-nhantuong/feedback/' + feedbackId).then(function (response) {
        if (response.data.success) {
            var feedback = response.data.data;
            var fullName = feedback.author ? feedback.author : feedback.full_name;
            $('form#detail-feedback').find('#author').val(fullName);
            $('form#detail-feedback').find('#email').val(feedback.email);
            $('form#detail-feedback').find('#content').val(feedback.content);

            $('#feedbackShowModal').modal('show');
        }
    }).catch(function (error) {
        console.log(error)
    });
});