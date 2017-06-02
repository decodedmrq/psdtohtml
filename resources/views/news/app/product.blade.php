<!-- Article about app -->
<div class="article-apps articles row">
    <div class="head col-sm-12">
        {{ trans('string.app') }}
    </div>

    <div class="body col-sm-12">
        <div class="article-list row" id="article-list">
            @foreach($articleApps as $app)
                <div class="col-sm-6">
                    @include('article.app.item', ['app' => $app])
                </div>
            @endforeach
        </div>

        <div class="load-more row">
            <div class="col-sm-12 text-center">
                <button class="btn-article-load-more" id="btn-article-load-more" data-url="{{ route('article.load_more') }}">
                    {{ trans('string.load_more') }}
                </button>
            </div>
        </div>
    </div>
</div>
<!-- /Article about app -->
