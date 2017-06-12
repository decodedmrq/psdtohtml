@extends('layouts.desktop')
@push('css')
<link rel="stylesheet" href="{!! asset('css/news.css') !!}">
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,900&amp;subset=vietnamese" rel="stylesheet">
@endpush
@push('style')
<style>
    /*.fb_iframe_widget span[style]{width:100% !important;}*/
</style>
@endpush

@push('js')
<script>
    var news = {!! json_encode($news) !!};
</script>
<script src="{{ asset('js/news/show.js') }}"></script>
<script src="{{ asset('js/news/subscribe.js') }}"></script>
@endpush
@section('content')
    @include('components.header')
    <div class="content">
        <div class="news-margin"></div>
        <div class="container">
            <div class="row">
                <div id="news" class="col-xl-8 articles pr-xl-5">

                </div>
                @include('components.sidebar')
            </div>
        </div>
    </div>
@endsection