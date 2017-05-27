<!-- Banner -->
<div class="banner">
@include('home.banner.background')

<!-- Banner main content -->
    <div class="banner-main">
        <div class="container">
            <!-- Title head -->
            <div class="title-head row hidden-xs-down">
                <div class="col-md-12">
                    <div class="app-name row align-items-center justify-content-center">
                        <img class="logo" src="/images/logo.png"
                             alt="S.E.E Nhân Tướng Trong Quản Trị">

                        <h1 class="app-full-name">: Nhân Tướng Trong Quản Trị</h1>
                    </div>

                    <h6 class="app-slogan">{{ trans('fixed_data.slogan') }}</h6>
                </div>
            </div>

            <!-- Badges -->
            <div class="app-badges row">
                <div class="col-md-12">
                    {!! make_break_line(
                        'Ứng dụng học Nhân tướng Duy nhất tại Việt Nam',
                         5,
                         'h2',
                         'app-badge'
                    ) !!}
                </div>
            </div>

            @include('home.banner.download_btn')
            @include('home.banner.register_form')
            @include('home.banner.time_remaining')
        </div>
    </div>
</div>
<!-- /Banner -->
