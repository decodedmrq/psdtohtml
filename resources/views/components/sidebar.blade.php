<div class="sidebar col-xl-4">
    <div class="search hidden-xs-down">
        <form>
            <input placeholder="{{ trans('string.search_3_dot') }}" type="text" name="keyword"
                   class="form-control"/>
            <input type="submit" value=""/>
        </form>
    </div>
    <div class="sidebar-item card">
        <div class="card-header">
            {{ trans('string.subscribe_for_article') }}
            <div class="sidebar-head-text">{{ trans('string.subscribe_description') }}</div>
        </div>
        <div class="card-block">
            <form class="subscribe" action="" method="post">
                <input placeholder="{{ trans('string.enter_email_three_dot') }}" type="text" name="email"
                       class="form-control"/>
                <button type="submit" class="button-subscribe">
                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                </button>
            </form>
        </div>
    </div>

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
                    @for($i = 1; $i < 6; $i++)
                        <div class="article-title {{ $i%2 == 0?'active':'' }}">
                            <a href="#">{{ \Faker\Factory::create()->sentence() }}</a>
                        </div>
                    @endfor
                </div>
                <div class="tab-pane" id="read" role="tabpanel">
                    @for($i = 1; $i < 6; $i++)
                        <div class="article-title {{ $i%2 == 0?'active':'' }}">
                            <a href="#">{{ \Faker\Factory::create()->sentence() }}</a>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>

    <div class="sidebar-item card">
        <div class="card-header">
            {{ trans('string.follow_fb') }}
        </div>
        <div class="card-block">
            <div class="fb-page" data-href="https://www.facebook.com/nhantuongsee/" data-tabs="timeline" data-small-header="false"
                 data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                <blockquote cite="https://www.facebook.com/nhantuongsee/" class="fb-xfbml-parse-ignore"><a
                            href="https://www.facebook.com/nhantuongsee/">SEE: Nhân tướng trong quản trị</a></blockquote>
            </div>
        </div>
    </div>
</div>