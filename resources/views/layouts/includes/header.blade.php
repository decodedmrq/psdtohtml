<div id="navbar" class="fixed-top">
    <div class="container">
        <nav class="navbar navbar-toggleable-md px-0">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a href="/"><img class="logo" src="{{ asset('images/logo.png') }}"/></a>

            <div class="collapse navbar-collapse justify-content-md-end" id="navbarToggler">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{ trans('string.about_product') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{ trans('string.knowledge') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{ trans('string.news') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">{{ trans('string.contact') }}</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
