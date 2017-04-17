<header class="navbar navbar-toggleable-md bg-white fixed-top left-nav">

            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                    data-target="#main-nav" aria-controls="main-nav" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="main-nav">

                <div class="mr-auto"></div>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#"
                           id="supportedContentDropdown"
                           data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false"> Welcome {{ auth()->user()->username }}</a>
                        <div class="dropdown-menu" aria-labelledby="supportedContentDropdown">
                            <a class="dropdown-item" href="#">{{ trans('string.profile') }}</a>
                            <a class="dropdown-item" href="#">{{ trans('string.setting') }}</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ url('/logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">{{ trans('auth.logout') }}</a>
                            {!! form()->open(['url' => '/logout', 'method' => 'post', 'id' => 'logout-form']) !!}
                            {!! form()->close() !!}
                        </div>
                    </li>
                </ul>
            </div>
</header>
