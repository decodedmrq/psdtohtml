<!-- Feedback -->
<div class="feedback row">
    <h5 class="title col-sm-12">{{ trans('fixed_data.feedback_title') }}</h5>
    {{ Form::open([
        'url' => route('feedback.store'),
        'method' => 'POST',
        'role' => 'form',
        'class' => 'feedback-form col-sm-12',
        'id' => 'feedback-form'
    ]) }}
        <div class="form-body row">
            <div class="col-sm-6">
                <div class="row">
                    <div class="form-group col-sm-12">
                        {{ Form::label('name', trans('string.full_name')) }}
                        {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => trans('string.full_name'), 'autofocus']) }}
                    </div>
                    <div class="form-group col-sm-12">
                        {{ Form::label('email', trans('string.email')) }}
                        {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => trans('string.email')]) }}
                    </div>
                </div>
            </div>

            <div class="form-group col-sm-6">
                {{ Form::label('content', trans('string.content')) }}
                {{ Form::textarea('content', null, ['rows' => 5, 'class' => 'form-control', 'placeholder' => trans('string.content')]) }}
            </div>

            <div class="form-group col-sm-12 text-right">
                {{ Form::submit(trans('string.submit'), ['class' => 'btn btn-feedback-submit']) }}
            </div>
        </div>

    {{ Form::close() }}
</div>
<!-- /Feedback -->
