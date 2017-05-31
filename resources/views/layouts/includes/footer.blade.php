<footer id="footer" class="footer">
    <div class="container footer-container">
        <div class="row">
            <div class="footer-col col-md-5">
                <div class="footer-logo">
                    <a href="/" lang="vi" title="{{ config('app.name') }}">
                        <img src="/images/footer_logo.png" alt="{{ config('app.name') }}">
                    </a>
                </div>

                <h5 class="company-name">Công ty Cổ phần Giáo Dục Tiềm Chất</h5>

                <ul class="footer-contact row">
                    <li class="contact-item col-md-12">
                        <i class="icon fa fa-map-marker"></i>
                        <a href="{{ config('contact.address.gg_map') }}"
                           title="{{ config('contact.address.text') }}"
                           target="_blank">
                            {{ config('contact.address.text') }}
                        </a>
                    </li>
                    <li class="contact-item col-md-12">
                        <i class="icon fa fa-envelope"></i>
                        <a href="mailto:{{ config('contact.mail.real') }}"
                           title="{{ config('contact.mail.text') }}"
                           target="_blank">
                            {{ config('contact.mail.text') }}
                        </a>
                    </li>
                    <li class="contact-item col-md-12">
                        <i class="icon fa fa-phone"></i>
                        <a href="tel:{{ config('contact.tel.real') }}"
                           title="{{ config('contact.tel.text') }}"
                           target="_blank">
                            {{ config('contact.tel.text') }}
                        </a>
                    </li>
                </ul>
            </div>

            <div class="footer-col col-md-3">
                <ul class="row">
                    <li class="footer-link col-md-12 active">
                        {!! make_a_tag("#", "SEE: Nhân Tướng Trong Quản Trị") !!}
                    </li>
                    <li class="footer-link col-md-12">
                        {!! make_a_tag(route('home'), trans('string.home_page')) !!}
                    </li>
                    <li class="footer-link col-md-12">
                        {!! make_a_tag(route('about_us'), trans('string.about_us')) !!}
                    </li>
                    <li class="footer-link col-md-12">
                        {!! make_a_tag("#", trans('string.blog')) !!}
                    </li>
                    <li class="footer-link col-md-12">
                        {!! make_a_tag("#", trans('string.support')) !!}
                    </li>
                    <li class="footer-link col-md-12">
                        {!! make_a_tag("#", trans('string.terms_of_use')) !!}
                    </li>
                    <li class="footer-link col-md-12">
                        {!! make_a_tag("#", trans('string.popular_question')) !!}
                    </li>
                    <li class="footer-link col-md-12">
                        {!! make_a_tag("#", trans('string.privacy_policy')) !!}
                    </li>
                </ul>
            </div>

            <div class="footer-col col-md-4">
                @include("layouts.includes.footer_feedback")
            </div>
        </div>
    </div>
</footer>
@yield('after-footer')
