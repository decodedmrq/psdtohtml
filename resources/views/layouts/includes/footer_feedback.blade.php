<!-- Feedback -->
<div class="feedback row">
    <h5 class="title col-sm-12">Gửi thư cho chúng tôi</h5>
    {{ Form::open([
        'url' => route('feedback.store'),
        'method' => 'POST',
        'role' => 'form',
        'class' => 'feedback-form col-sm-12',
        'id' => 'footer-feedback-form'
    ]) }}
    <div class="form-body row">
        <!-- Notify -->
        <div class="col-md-12">
            <div class="alert alert-success text-center hidden-xs-up"
                 id="footer-notify"></div>
        </div>
        <!-- /Notify -->

        <div class="form-group col-sm-12">
            {{ Form::text('author', null, [
                'class' => 'input-field form-control',
                'placeholder' => trans('string.full_name'),
                'id' => 'author'
            ]) }}
        </div>

        <div class="form-group col-sm-12">
            {{ Form::email('email', null, [
                'class' => 'input-field form-control',
                'placeholder' => trans('string.email_address'),
                'id' => 'email'
            ]) }}
        </div>

        <div class="form-group col-sm-12">
            {{ Form::textarea('content', null, [
                'rows' => 5,
                'class' => 'input-field form-control',
                'placeholder' => trans('string.content...'),
                'id' => 'content'
            ]) }}
        </div>

        <div class="form-group col-sm-12">
            {{ Form::submit(trans('string.submit'), ['class' => 'btn btn-feedback-submit']) }}
        </div>
    </div>

    {{ Form::close() }}
</div>
<!-- /Feedback -->