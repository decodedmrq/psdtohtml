@extends('layouts.desktop')
@push('css')
<link rel="stylesheet" href="{!! asset('css/news.css') !!}">
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,900&amp;subset=vietnamese" rel="stylesheet">
@endpush
@push('js')
<script>
    var category = {!! $category !!};
</script>
<script src="{{ asset('js/category/show.js') }}"></script>
<script src="{{ asset('js/news/subscribe.js') }}"></script>
@endpush
@section('content')
    @include('components.header')
    <div class="content">
        <div class="container pr-0 pl-0">
            <div class="slogan text-center">
                <h2 class="title">{{ trans('string.article_head_title') }}</h2>
                <div class="description">{{ trans('string.article_head_description') }}</div>
            </div>
            <div class="row">
                <div id="news" class="col-xl-8 articles">

                </div>
                @include('components.sidebar')
            </div>
        </div>
    </div>
@endsection