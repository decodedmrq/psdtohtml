<div id="navbar" class="fixed-top">
    <nav class="navbar navbar-toggleable-sm container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false"
                aria-label="Toggle navigation">
            <div class="navbar-toggler-icon" style="color: #ffffff;">
                <i class="fa fa-th-large fa-2x"></i>
            </div>
        </button>

        <a href="{{ route('home') }}" class="navbar-brand">
            <div class="d-flex pull-left">
                <img class="logo" src="{{ asset('images/logo.png') }}"/>
                <div class="col">
                    <div class="row align-items-center h-100">
                        <div class="col">
                            {{ config('app.name') }}
                        </div>
                    </div>
                </div>
            </div>
        </a>

        <div class="collapse navbar-collapse justify-content-sm-end" id="navbar-menu">
            <ul class="navbar-nav">
                <li class="{{ nav_item_class('home') }}">
                    <a class="nav-link" href="{{ route('home') }}">{{ trans('string.about_product') }}</a>
                </li>
                {{--<li class="{{ nav_item_class('knowledge.index') }}">--}}
                {{--<a class="nav-link" href="{{route('knowledge.index')}}">{{ trans('string.knowledge') }}</a>--}}
                {{--</li>--}}
                {{--<li class="{{ nav_item_class('article.index') }}">--}}
                {{--<a class="nav-link" href="{{ route('article.index') }}">{{ trans('string.news') }}</a>--}}
                {{--</li>--}}
                <li class="{{ nav_item_class('contact') }}">
                    <a class="nav-link" href="{{ route('contact') }}">{{ trans('string.contact') }}</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
