<!-- Banner -->
<div class="banner" id="banner-block">
    @include('home.banner.background')
<!-- Banner main content -->
    <div class="banner-main">
        <div class="bg-fog"></div>
        <div class="container h-100">
            <div class="row align-content-around h-100">
                <!-- Title head -->
                <div class="col-md-12">
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
                </div>

                <!-- Badges -->
                <div class="col-md-12">
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
                </div>

                <div class="col-md-12">
                    @include('home.banner.register_form')
                </div>
                <div class="col-md-12">
                    @include('home.banner.time_remaining')
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Banner -->
