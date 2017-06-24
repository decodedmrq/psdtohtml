@extends('layouts.desktop')
@push('style')
<style>
    .form-title {
        display: flex;
        justify-content: center;
        height: 120px;
    }
    .title {
        font-size: 36px;
        color: #364956;
        font-weight: 600;
    }

    .register-trial-form {
        padding-bottom: 10rem;
    }

    .btn-submit {

    }
</style>
@endpush
@section('content')
    @include('components.header')
    <div class="content">
        <div class="container">
            <div class="form-title align-items-center">
                <h2 class="title">Đăng kí dùng thử</h2>
            </div>
            <div class="row justify-content-center register-trial-form">
                {!! Form::open([
                        'url' => route('guest.store'),
                        'method' => 'post',
                        'role' => 'form',
                        'id' => 'register-form',
                        'class' => 'register-form',
                    ]) !!}

                <div class="form-email">
                    <fieldset>
                        {{ Form::email('email', null, [
                            'class' => 'form-control',
                            'placeholder' => 'Nhập email của bạn',
                            'required',
                            'id' => 'form-email',
                        ]) }}
                    </fieldset>
                    <div class="email-notif hidden-xs-up fa fa-close" id="email-notif"></div>
                </div>

                <div class="g-captcha">
                    <fieldset>
                        {!! $captcha->render() !!}
                    </fieldset>
                </div>

                <div class="btn-submit">
                    <button class="btn w-100" type="submit">
                        <i class="fa fa-angle-right"></i>
                    </button>
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
@push('script')
<script>
    $(function() {
        function enableRegisterButton() {

        }
    })
</script>
@endpush