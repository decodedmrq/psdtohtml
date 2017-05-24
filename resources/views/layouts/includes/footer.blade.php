<footer id="footer" class="footer">
    <div class="container footer-container">
        <div class="row">
            <div class="col-sm-5">
                <div class="footer-logo">
                    <a href="/" lang="vi" title="{{ config('app.name') }}">
                        <img src="/images/footer_logo.png" alt="{{ config('app.name') }}">
                    </a>
                </div>

                <h5 class="company-name">Công ty Cổ phần Giáo Dục Tiềm Chất</h5>

                <ul class="footer-contact row">
                    <li class="contact-item col-sm-12">
                        <i class="icon fa fa-map-marker"></i>
                        <span>
                            Tầng 4, tòa nhà số 137, Hoàng Quốc Việt, Cầu Giấy, Hà Nội.
                        </span>
                    </li>
                    <li class="contact-item col-sm-12">
                        <i class="icon fa fa-envelope"></i>
                        <span>
                            Mail: Lienhe@wikiedu.vn
                        </span>
                    </li>
                    <li class="contact-item col-sm-12">
                        <i class="icon fa fa-phone"></i>
                        <span>
                            SĐT: 0969 393 901
                        </span>
                    </li>
                </ul>

                <div class="footer-licence hidden-xs-down">
                    Bản quyền thuộc về công ty
                    <strong>Wikiedu</strong>
                </div>
            </div>

            <div class="col-sm-3">
                <ul class="row">
                    <li class="footer-link col-sm-12 active">
                        {!! make_a_tag("#", "SEE: Nhân Tướng Trong Quản Trị") !!}
                    </li>
                    <li class="footer-link col-sm-12">
                        {!! make_a_tag(route('home'), trans('string.home_page')) !!}
                    </li>
                    <li class="footer-link col-sm-12">
                        {!! make_a_tag("#", trans('string.about_us')) !!}
                    </li>
                    <li class="footer-link col-sm-12">
                        {!! make_a_tag("#", trans('string.blog')) !!}
                    </li>
                    <li class="footer-link col-sm-12">
                        {!! make_a_tag("#", trans('string.support')) !!}
                    </li>
                    <li class="footer-link col-sm-12">
                        {!! make_a_tag("#", trans('string.terms_of_use')) !!}
                    </li>
                    <li class="footer-link col-sm-12">
                        {!! make_a_tag("#", trans('string.popular_question')) !!}
                    </li>
                    <li class="footer-link col-sm-12">
                        {!! make_a_tag("#", trans('string.privacy_policy')) !!}
                    </li>
                </ul>
            </div>

            <div class="col-sm-4">
                <div style="width: 100%;" class="fb-page"
                     data-href="https://www.facebook.com/nhantuongsee/"
                     data-small-header="false"
                     data-width="500"
                     data-adapt-container-width="true" data-hide-cover="false"
                     data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/nhantuongsee/"
                                class="fb-xfbml-parse-ignore">
                        <a href="https://www.facebook.com/nhantuongsee/">
                            SEE: Nhân tướng trong quản trị
                        </a>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
</footer>
@yield('after-footer')
