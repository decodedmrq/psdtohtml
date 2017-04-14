<div class="feedback-content {{ $index == 0 ? 'active' : '' }}" id="fb-content-{{ $index }}">
    <small class="info col-sm-12">
        {{ $feedback->info }}
    </small>
    <div class="content col-sm-12">
        {{ '"' . $feedback->content . '"' }}
    </div>
</div>