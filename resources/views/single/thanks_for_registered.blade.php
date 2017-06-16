@extends('layouts.desktop')
@push('css')
{{ html()->style('css/thanks_page.css') }}
@endpush

@section('content')
    <div class="container text-center py-3">

        <div class="title text-uppercase text-black row align-items-center justify-content-center">
            <div class="d-inline-block px-3">Cảm ơn đã đăng ký</div>
            <img src="/images/thanks_for_registered/icon_success.png"
                 alt="{{ trans('string.image') }}">
        </div>
        <div class="row">
            <div class="description col-md-12">
                Cảm ơn bạn đã quan tâm và mong muốn dùng thử sản phẩm
                <br class="hidden-sm-up">
                <strong>Ứng dụng mobile <br class="hidden-sm-up"> “SEE: Nhân Tướng Trong Quản
                    Trị”</strong>
                <br class="hidden-sm-up">
                của chúng tôi.
            </div>
        </div>

        <div class="row">
            <p class="content col-md-12">
                <em>
                    <span>
                    Chúng tôi sẽ gửi thông tin đến bạn ngay khi sản phẩm ra mắt,
                    <br class="hidden-sm-down">
                    rất mong tiếp tục nhận được sự ủng hộ và đồng hành của bạn thông qua website
                    chính thức:
                    <br class="hidden-sm-up">
                    <a href="{{ route('home') }}" title="{{ route('home') }}">https://www.hocnhantuong.com</a>
                    <br>
                    </span>
                    <strong class="bigger">Trân trọng.</strong>
                </em>
            </p>
        </div>

        <div class="row mb-2">
            <div class="col-md-12">
                <a class="btn-back-home" href="{{ route('home') }}" title="Về trang chủ">
                    <strong class="px-2">Về trang chủ</strong>
                    <img class="blue-icon" src="/images/thanks_for_registered/icon_back_blue.png"
                         alt="{{ trans('string.image') }}">
                    <img class="yellow-icon"
                         src="/images/thanks_for_registered/icon_back_yellow.png"
                         alt="{{ trans('string.image') }}">
                </a>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <img src="/images/thanks_for_registered/image_teacup.png"
                     alt="{{ trans('string.image') }}">
            </div>
        </div>

    </div>
@endsection
@section('footer')
@endsection
