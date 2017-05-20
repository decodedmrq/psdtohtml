<!-- Register form -->
<div class="register-form row">
    <div class="col-sm-12">
        {{ Form::open([
            'url' => '#',
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

        <div class="form-email">
            {{ Form::email('email', null, [
                'class' => 'email-input',
                'placeholder' => 'Nhập email của bạn'
            ]) }}

            <button class="btn-submit" type="submit">
                <i class="fa fa-angle-right"></i>
            </button>
        </div>

        {{ Form::close() }}
    </div>
</div>
