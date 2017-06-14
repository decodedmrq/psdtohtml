<div class="sidebar col-xl-4">
    <div class="search hidden-xs-down">
        <form action="{{ route('blog.index') }}">
            <input placeholder="{{ trans('string.search_3_dot') }}" value="{{ $keyword??'' }}" type="text"
                   name="keyword"
                   class="form-control"/>
            <input type="submit" value=""/>
        </form>
    </div>
    <div id="subscribe" class="sidebar-item card"></div>

    <div class="sidebar-item card">
        <div class="card-block tab">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#hot" role="tab">
                        {{ trans('string.hot_article') }}
                        <div class="line"></div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#read" role="tab">
                        {{ trans('string.read_article') }}
                        <div class="line"></div>
                    </a>
                </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="hot" role="tabpanel">
                    @foreach($popularNews as $news)
                        <div class="article-title">
                            <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                            <a href="{{ route('blog.show', $news) }}">{{ $news->title }}</a>
                        </div>
                    @endforeach
                </div>
                <div class="tab-pane" id="read" role="tabpanel">
                    @foreach($recentViewed as $news)
                        <div class="article-title">
                            <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                            <a href="{{ route('blog.show', $news) }}">{{ $news->title }}</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>