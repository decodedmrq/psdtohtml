<div style="background: #eeeeee; padding: 30px 0;">
    <div style="font-family: 'Open Sans', sans-serif; width: 600px; margin: 0 auto; background: #ffffff; padding: 15px; -webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;">
        <div style="margin-bottom: 20px;">
            <img style="height: 48px;" src="{{ asset('/images/mails/image_logo.png') }}" alt="{{ trans('string.image') }}">
        </div>

        <div style="overflow: auto; margin-bottom: 60px;">
            {{--Left col--}}
            <div style="display: inline-block; width: 57%; color: #666666; font-size: 14px; text-align: justify; clear: both;">
                {{--Title--}}
                <h1 style="font-size: 22px; font-weight: 500; line-height: 30px; color: #333333; margin-bottom: 25px; margin-top: 5px;">
                    Chào mừng gia nhập
                    <br>
                    Cộng đồng Nhân tướng SEE
                </h1>

                {{--Content--}}
                <div>
                    <p>
                        Cảm ơn bạn đã quan tâm và mong muốn dùng thử sản phẩm Ứng dụng mobile “SEE: Nhân
                        Tướng Trong Quản Trị” của chúng tôi.
                    </p>
                    <p>
                        Đây là Ứng dụng tự học Nhân tướng đầu tiên tại Việt Nam, hứa hẹn sẽ là một công
                        cụ đắc lực trong việc nhìn người nói chung và trong công tác quản lý, nhân sự
                        nói riêng.
                    </p>
                    <p>
                        Chúng tôi sẽ gửi thông tin đến bạn ngay khi sản phẩm
                        ra mắt, rất mong tiếp tục nhận được sự ủng hộ và
                        đồng hành của bạn thông qua website chính thức:
                        <br>
                        <a href="{{ route('home') }}" style="color: #3366cc; font-style: italic; text-decoration: none;"
                           title="{{ route('home') }}">{{ route('home') }}</a>
                    </p>
                    <p>
                        <span style="font-weight: 500;">Trân trọng,</span>
                        <br>
                        <span style="font-style: italic;">Đội ngũ phát triển SEE.</span>
                    </p>
                </div>
            </div>

            {{--Right col--}}
            <div style="display: inline-block; width: 43%; float: right;">
                <img style="width: 100%;" src="{{ asset('/images/mails/image_phone.png') }}"
                     alt="{{ trans('string.image') }}">
            </div>
        </div>

        <hr>

        <div style="font-size: 12px; line-height: 18px;">
            <div style="font-weight: 500;">Công ty Cổ phần Giáo Dục Tiềm Chất</div>
            <div>
                <a href="{{ config('contact.address.gg_map') }}"
                   title="{{ config('contact.address.text') }}"
                   target="_blank" style="text-decoration: none; color: inherit;">
                    Địa chỉ: Tầng 4, tòa nhà số 137, Hoàng Quốc Việt, Cầu Giấy, Hà Nội
                </a>
                <span style="margin: 0 10px;">-</span> SĐT: 0969 393 901
            </div>
        </div>

    </div>
</div>
