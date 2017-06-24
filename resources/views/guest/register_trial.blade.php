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
        padding-bottom: 8rem;
    }
    form#register-form {
        box-shadow: 0px 1px 2px 2px #ddd;
    }
    #email, #age, #job, #content{
        background-color: transparent;
        border: none;
        border-bottom: 1px solid #9e9e9e;
        border-radius: 0;
        outline: none;
        height: 3rem;
        width: 100%;
        font-size: 1rem;
        margin: 0 0 5px 0;
        padding: 0;
        box-shadow: none;
        box-sizing: content-box;
        transition: all .3s;
    }
    #content {
        height: 110px !important;
    }
    .input-field {
        padding-top: 5px;
        padding-left: 2rem;
        padding-right: 2rem;
        text-align: right !important;
    }
    .input-field label {
        color: red;
        margin-bottom: 0;
    }
    #email:focus, #age:focus, #job:focus, #content:focus {
        border-bottom-color: rgb(64, 164, 155);
        box-shadow: rgba(38, 166, 154, 0.784) 0 0.782536px 0 0;
    }
    .btn-submit {
        background-image: -webkit-gradient(linear, left top, right top, from(#b9a47d), to(#62798c));
        font-weight: bold;
        color: #ddd;

    }
    .input-submit {
        margin-top: 3rem;
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
                <div class="col-sm-4">
                    {!! Form::open([
                        'url' => route('guest.store'),
                        'method' => 'post',
                        'role' => 'form',
                        'id' => 'register-form',
                        'class' => 'register-form',
                    ]) !!}
                    <div class="input-field form-email">
                        <fieldset>
                            {{ Form::email('email', null, [
                                'placeholder' => 'Nhập email của bạn',
                                'required',
                                'id' => 'email'
                            ]) }}
                            <label for="email" id="msg-email" class="active"></label>
                        </fieldset>
                    </div>
                    <div class="input-field">
                        {{ Form::number('age', null, [
                            'type' => 'number',
                            'placeholder' => 'Nhập tuổi của bạn',
                            'required',
                            'id' => 'age'
                        ]) }}
                        <label for="email" id="msg-age" class="active"></label>
                    </div>
                    <div class="input-field">
                        {{ Form::text('job', null, [
                            'placeholder' => 'Nhập nghề nghiệp của bạn',
                            'required',
                            'id' => 'job'
                        ]) }}
                        <label for="email" id="msg-job" class="active"></label>
                    </div>
                    <div class="input-field">
                        {{ Form::textarea('content', null, [
                            'placeholder' => 'Bạn mong muốn nhận được gì từ ứng dụng',
                            'required',
                            'id' => 'content',
                            'rows' => 3
                        ]) }}
                        <label for="email" id="msg-content" class="active"></label>
                    </div>
                    <div class="g-captcha pt-2 row no-gutters justify-content-center">
                        {!! $captcha->render() !!}
                    </div>
                    <div class="input-submit pr-4 pl-4 pb-5">
                        <button class="btn w-100 btn-submit" type="submit">Đăng ký</button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
{!! html()->script('js/register_trial.js') !!}
@endpush
@push('script')
<script>
    $(function () {
        function enableRegisterButton() {

        }
    })
</script>
@endpush