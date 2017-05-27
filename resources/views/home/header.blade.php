<nav class="navbar navbar-toggleable-sm container hidden-sm-up">
    <div class="wrapper row">
        {{--<button class="btn navbar-btn"
                id="navbar-btn">
            <span class="icon fa fa-navicon"></span>
        </button>--}}

        <a href="{{ route('home') }}" class="col-12">
            <div class="title row align-items-center justify-content-center">
                <div class="mobile-logo">
                    <img class="logo" src="/images/mobile_logo.png"/>
                </div>
                <span class="pl-1 pr-2">:</span>
                <div>Nhân Tướng Trong Quản Trị</div>
            </div>
            <div class="slogan row  text-center">
                <div class="col">Nhìn đúng người, dùng đúng việc</div>
            </div>
        </a>

        {{--<div class="col-12 navbar-menu" id="navbar-menu">
            <ul class="navbar-nav mr-auto">
                <li class="{{ nav_item_class('home') }}">
                    <a class="nav-link"
                       href="{{ route('home') }}">{{ trans('string.about_product') }}</a>
                </li>
                <li class="{{ nav_item_class('contact') }}">
                    <a class="nav-link" href="{{ route('contact') }}">{{ trans('string.contact') }}</a>
                </li>
            </ul>
        </div>--}}
    </div>
</nav>

<script>
    let navbarBtn = $('#navbar-btn');
    let navbarMenu = $('#navbar-menu');
    navbarBtn.on('click', function (e) {
        navbarMenu.toggleClass('show');
    });
</script>
