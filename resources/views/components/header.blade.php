<div class="header">
    <div class="container">
        <div class="logo">
            <a href="/"><img src="{{ asset('images/header-logo.png') }}"/></a>
        </div>
        <div class="right-menu">
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
    </div>
</div>