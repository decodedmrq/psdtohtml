<div style="background: #eeeeee; padding: 30px 0;">
    <div style="font-family: 'Open Sans', sans-serif; width: 600px; max-width: 100%; margin: 0 auto; background: #ffffff; padding: 45px 30px; -webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;">
        <div style="margin-bottom: 20px; height: 48px;">
            <img style="height: 100%;" src="{{ asset('/images/mails/image_logo.png') }}"
                 alt="{{ trans('string.image') }}">
            <div style="float: right; height: 100%; width: 50px; align-content: space-around !important;">
                <div style="margin:10px 0; width: 100%; height: 8px; background-color: #ebddc6;"></div>
                <div style="margin-left: 40%; width: 60%; height: 6px; background-color: #ebddc6;"></div>
            </div>
        </div>

        <div style="overflow: auto; margin-bottom: 60px;">
            <div style="display: block; width: 100%; color: #666666; font-size: 14px; text-align: justify; clear: both;">
                {{--Title--}}
                <h1 style="font-size: 24px; font-weight: 700; line-height: 1.41; color: #333333; margin-bottom: 35px; margin-top: 5px;">
                    Chào mừng gia nhập
                    <br>
                    Cộng đồng Nhân tướng SEE
                </h1>

                <div>
                    <img style="width: 100%;" src="{{ asset('/images/mails/image_banner.jpg') }}"
                         alt="{{ trans('string.image') }}">
                </div>

                {{--Content--}}
                <div>
                    <p>
                        Cảm ơn bạn đã quan tâm và mong muốn dùng thử sản phẩm Ứng dụng mobile “SEE:
                        Nhân
                        Tướng Trong Quản Trị” của chúng tôi.
                    </p>
                    <p>
                        Đây là Ứng dụng tự học Nhân tướng đầu tiên tại Việt Nam, hứa hẹn sẽ là một
                        công
                        cụ đắc lực trong việc nhìn người nói chung và trong công tác quản lý, nhân
                        sự
                        nói riêng.
                    </p>
                    <p>
                        Chúng tôi sẽ gửi thông tin đến bạn ngay khi sản phẩm
                        ra mắt, rất mong tiếp tục nhận được sự ủng hộ và
                        đồng hành của bạn thông qua website chính thức:
                        <br>
                        <a href="{{ route('home') }}"
                           style="color: #3366cc; font-style: italic; text-decoration: none;"
                           title="{{ route('home') }}">{{ route('home') }}</a>
                    </p>
                    <p>
                        <span style="font-weight: 500;">Trân trọng,</span>
                        <br>
                        <span style="font-style: italic;">Đội ngũ phát triển SEE.</span>
                    </p>
                </div>
            </div>
        </div>

        <hr>

        <div style="font-size: 12px; line-height: 18px;">
            <div style="font-weight: 500; margin-bottom: 8px;">
                <a style="text-decoration: none; color: inherit;" href="{{ asset(route('home')) }}" title="Công ty Cổ phần Giáo Dục Tiềm Chất">
                    Công ty Cổ phần Giáo Dục Tiềm Chất
                </a>
            </div>
            <div>
                <a href="{{ config('contact.address.gg_map') }}"
                   title="{{ config('contact.address.text') }}"
                   target="_blank" style="text-decoration: none; color: inherit;">
                    Địa chỉ: Tầng 4, tòa nhà số 137, Hoàng Quốc Việt, Cầu Giấy, Hà Nội
                </a>
            </div>
            <div>
                <a style="text-decoration: none; color: inherit;"  href="tel:+840969393901" title="SĐT: 0969 393 901">SĐT: 0969 393 901</a>
            </div>
        </div>

    </div>
</div>
