<div class="header">
    <div class="container">
        <div class="logo">
            <a href="/"><img src="{{ asset('images/header-logo.png') }}"/></a>
        </div>
        <div class="right-menu hidden-sm-down">
            <div class="menu-item">
                <a href="{{ route('blog.index') }}">{{ trans('string.blog') }}</a>
            </div>
            <div class="menu-item">
                <a href="/">{{ trans('string.home') }}</a>
            </div>
            <div class="menu-item">
                <a href="{{ route('about_us') }}">{{ trans('string.header_about_us') }}</a>
            </div>
            <div class="menu-item">
                <a target="_blank" href="{{ config('app.facebook') }}">
                        <span class="fa-stack">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-facebook fa-stack-1x"></i>
                        </span>
                </a>
            </div>
        </div>
        <div class="right-menu hidden-sm-up">
            <div class="menu-item">
                <i class="fa fa-bars fa-2x collapse-button" data-toggle="collapse" data-target="#collapseMenu" aria-expanded="false"
                   aria-controls="collapseMenu" aria-hidden="true"></i>
            </div>
        </div>
    </div>
</div>
<div class="collapse" id="collapseMenu">
    <ul class="list-group">
        <li class="list-group-item">
            <a class="btn-block" href="{{ route('blog.index') }}">{{ trans('string.blog') }}</a>
        </li>
        <li class="list-group-item">
            <a class="btn-block" href="/">{{ trans('string.home') }}</a>
        </li>
        <li class="list-group-item">
            <a class="btn-block" href="{{ route('about_us') }}">{{ trans('string.header_about_us') }}</a>
        </li>
        <li class="list-group-item">
            <a class="btn-block" href="{{ config('app.facebook') }}">{{ trans('string.facebook_page') }}</a>
        </li>
    </ul>
</div>