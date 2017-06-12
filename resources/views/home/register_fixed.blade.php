<div class="register-fixed fixed-bottom">
  <div class="container">
    <div class="row">
      <div class="content-left col-md-4">
        <div class="row h-100 align-content-center">
          <div class="line-one col-md-12">
            ỨNG DỤNG MOBILE
          </div>
          <div class="line-two col-md-12">
            SEE: Nhân tướng trong quản trị
          </div>
        </div>
      </div>

      <div class="form col-md-4">
        {{ Form::open([
          'url' => route('guest.store'),
          'method' => 'post',
          'role' => 'form',
          'id' => 'register-form-2',
          'class' => 'register-form row h-100 align-content-center'
        ]) }}

        <div class="title col-md-12">
          <span> Đăng ký dùng thử</span>
          <strong class="free-text"> MIỄN PHÍ </strong>
        </div>

        <div class="form-email col-md-12">
          <fieldset>
            {{ Form::email('email', null, [
                'class' => 'email-input',
                'placeholder' => 'Nhập email của bạn',
                'required',
                'id' => 'form-email-2',
            ]) }}

            <button class="btn-submit" type="submit">
              <i class="fa fa-angle-right"></i>
            </button>

          </fieldset>
          <div class="email-notif hidden-xs-up fa fa-close" id="email-notif-2"></div>
        </div>
        {{ Form::close() }}
      </div>

      <div class="col-md-4">
        @include('home.banner.time_remaining')
      </div>
    </div>
  </div>
</div>
