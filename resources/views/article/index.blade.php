@extends('layouts.desktop')
@push('css')
{{ html()->style('/css/article.css') }}
@endpush
@section('content')
    @include('slider.product')
    <div class="container">
        @include('article.app.product')
        {{--@include('article.promotion.product')--}}
    </div>
@endsection
