@extends('layouts.desktop')
@push('css')
<link rel="stylesheet" href="{!! asset('css/article.css') !!}">
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,900&amp;subset=vietnamese" rel="stylesheet">
@endpush
@push('js')
<script src="{{ asset('js/articles/index.js') }}"></script>
@endpush
@section('content')
    @include('components.header')
    <div class="content">
        <div class="container">
            <div class="slogan text-center">
                <h2 class="title">{{ trans('string.article_head_title') }}</h2>
                <div class="description">{{ trans('string.article_head_description') }}</div>
            </div>
            <div class="row">
                <div id="articles" class="col-xl-8 articles pr-xl-5">

                </div>
                @include('components.sidebar')
            </div>
        </div>
    </div>
@endsection