@extends('layouts.desktop')
@push('css')
<link rel="stylesheet" href="{!! asset('css/article.css') !!}">
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,900&amp;subset=vietnamese" rel="stylesheet">
@endpush
@push('js')
<script>
    var article = {!! json_encode($article) !!};
</script>
<script src="{{ asset('js/articles/show.js') }}"></script>
@endpush
@section('content')
    @include('components.header')
    <div class="content">
        <div class="container">
            <div class="slogan text-center">
                <h2 class="title">Nhân tướng trong quản trị</h2>
                <div class="description">nhìn đúng người, đúng việc</div>
            </div>
            <div class="row">
                <div id="articles" class="col-xl-8 articles pr-xl-5">

                </div>
                @include('components.sidebar')
            </div>
        </div>
    </div>
@endsection