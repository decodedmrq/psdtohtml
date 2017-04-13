<div class="feedback-image-wrapper {{ $index == 0 ? 'active' : '' }}"
     id="fb-img-{{ $index }}" data-index="{{ $index }}">
    <img class="feedback-image" src="{{ $feedback->image }}" alt="{{ $feedback->info }}">
</div>