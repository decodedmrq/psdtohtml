<!-- Story -->
<div class="story col-sm-12">
    <div class="story-head row text-center">
        <div class="title col-sm-12">{{ trans('string.story.title') }}</div>
        <small class="description col-sm-12">{{ trans('string.story.description') }}</small>
    </div>

    <div class="story-body row">
        <!-- Left -->
        <div class="col-sm">
            <div class="h-100 d-flex align-items-center">
                <div>
                    <div class="title">{{ $story->name }}</div>
                    <div class="content">{{ $story->content }}</div>
                    <a class="btn-story-read-more btn" href="{{ route('knowledge.index') }}">
                        {{ trans('string.story.read_more') }}
                    </a>
                </div>
            </div>
        </div>
        <!-- /Left -->

        <!-- Right -->
        <div class="col-sm">
            <img src="{{ $story->image }}" alt="{{ trans('string.story.image') }}">
        </div>
        <!-- /Right -->
    </div>
</div>
<!-- /Story -->
