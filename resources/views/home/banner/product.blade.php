<!-- Banner -->
<div class="banner" id="banner-block">
@include('home.banner.background')
<!-- Banner main content -->
    <div class="banner-main">
        <div class="bg-fog"></div>
        <div class="container h-100">
            <div class="row align-content-around h-100">
                <!-- Title head -->
                <div class="title-head col-md-12">
                    <div class="app-name row align-items-center justify-content-center">
                        <img class="logo hidden-xs-down" src="/images/logo.png"
                             alt="S.E.E Nhân Tướng Trong Quản Trị">
                        <img class="logo hidden-sm-up" src="/images/mobile_logo.png"/>

                        <h1 class="app-full-name">: Nhân Tướng Trong Quản Trị</h1>
                    </div>

                    <h6 class="app-slogan">{{ trans('fixed_data.slogan') }}</h6>
                </div>

                <!-- Badges -->
                <div class="col-md-12">
                    <div class="app-badges row">
                        <div class="col-md-12"><h2 class="app-badge">Ứng dụng học Nhân tướng</h2>
                        </div>
                        <div class="col-md-12"><h2 class="app-badge"> Duy nhất tại Việt Nam </h2>
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
