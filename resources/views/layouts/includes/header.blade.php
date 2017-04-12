<div id="navbar">
    <div class="container">
        <nav class="navbar navbar-toggleable-md navbar-light">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="/"><img src="{{ asset('images/logo.png') }}"/></a>

            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav mr-auto mt-2 mt-md-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{trans('string.product')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{trans('string.knowledge')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{trans('string.news')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{trans('string.about')}}</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
