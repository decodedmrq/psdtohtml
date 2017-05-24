@extends('layouts.desktop')
@push('css')
<link rel="stylesheet" href="{!! asset('css/about.css') !!}">
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,900&amp;subset=vietnamese" rel="stylesheet">
@endpush
@section('content')
    <div class="header">
        <div class="container">
            <div class="logo">
                <a href="/"><img src="{{ asset('images/header-logo.png') }}"/></a>
            </div>
            <div class="right-menu">
                <div class="menu-item">
                    <a href="/">{{ trans('string.home') }}</a>
                </div>
                <div class="menu-item">
                    <a href="{{ route('about_us') }}">{{ trans('string.header_about_us') }}</a>
                </div>
                <div class="menu-item">
                    <a target="_blank" href="{{ config('app.facebook') }}">
                        <span class="fa-stack">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-facebook fa-stack-1x"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container post-content">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#introduce" role="tab">{{ trans('string.introduce') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#vision" role="tab">{{ trans('string.vision') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#mission" role="tab">{{ trans('string.mission') }}</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active custom-scroll" id="introduce" role="tabpanel">
                    <h2 class="title">{{ $about->introduce->title }}</h2>
                    <div class="body">{{ $about->introduce->body }}</div>
                </div>
                <div class="tab-pane custom-scroll" id="vision" role="tabpanel">
                    <h2 class="title">{{ $about->vision->title }}</h2>
                    <div class="body">{{ $about->vision->body }}</div>
                </div>
                <div class="tab-pane custom-scroll" id="mission" role="tabpanel">
                    <h2 class="title">{{ $about->mission->title }}</h2>
                    <div class="body">{{ $about->mission->body }}</div>
                </div>
            </div>
        </div>
    </div>
@endsection