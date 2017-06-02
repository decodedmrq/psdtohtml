<!-- Article app item -->
<div class="article-item row">
    <div class="cover col-sm-12">
        <img src="{{ $app->cover }}" alt="{{ $app->title }}">
        <div class="article-date">
            <div class="day">{{ $app->updated_at->day }}</div>
            <div class="month">{{ trans('string.month') . ' ' . $app->updated_at->month }}</div>
        </div>
    </div>

    <div class="tags col-sm-12">
        @foreach($app->tags as $tag)
            <div class="tag">
                <a href="{{ route('article.tag', $tag->slug) }}">{{ $tag->name }}</a>
            </div>
        @endforeach
    </div>

    <div class="title col-sm-12">
        {{ $app->title }}
    </div>

    <div class="content col-sm-12">
        {{ str_limit($app->content, 200) }}
    </div>

    <div class="read-more col-sm-12">
        <button class="btn-article-read-more">{{ trans('string.read_more') }}</button>
    </div>
</div>
<!-- /Article app item -->
