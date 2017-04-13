<!-- Feedback -->
<div class="feedbacks col-sm-12">
    <div class="feedbacks-head row text-center">
        <div class="title col-sm-12">{{ trans('string.feedback.title') }}</div>
        <small class="description col-sm-12">{{ trans('string.feedback.description') }}</small>
    </div>

    <div class="feedbacks-body row text-center">
        <div class="feedback-images col-sm-12">
            @foreach($feedbacks as $feedback)
                @include('home.feedback.image', ['feedback' => $feedback, 'index' => $loop->index])
            @endforeach
        </div>

        <div class="feedback-contents col-sm-12">
            @foreach($feedbacks as $feedback)
                @include('home.feedback.content', ['feedback' => $feedback, 'index' => $loop->index])
            @endforeach
        </div>
    </div>
</div>
<hr>
<!-- /Feedback -->
