<!-- Register form -->
<div class="register-form row">
    <div class="col-md-12">
        {{ Form::open([
            'url' => route('guest.store'),
            'method' => 'post',
            'role' => 'form',
            'id' => 'register-form',
        ]) }}

        <div class="title">
            <em class="text-gradient">
                <span> Đăng ký dùng thử sản phẩm</span>
                <strong class="free-text"> MIỄN PHÍ </strong>
            </em>
        </div>

        <fieldset class="form-email">
            {{ Form::email('email', null, [
                'class' => 'email-input',
                'placeholder' => 'Nhập email của bạn',
                'required',
                'id' => 'form-email',
            ]) }}

            <button class="btn-submit" type="submit">
                <i class="fa fa-angle-right"></i>
            </button>

            <div class="email-notif hidden-xs-up fa fa-close" id="email-notif"></div>
        </fieldset>

        {{ Form::close() }}
    </div>
</div>
