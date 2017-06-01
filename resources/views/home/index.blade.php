@extends('layouts.desktop')
@push('css')
{{ html()->style('/css/home.css') }}
@endpush
@push('js')
{{ html()->script('/js/home.js') }}
@endpush
@section('header')
    @include('home.header')
@endsection

@section('content')
    @include('home.banner.product')
    <div class="container">
        @include('home.intro.product')
        @include('home.feature.product')
        @include('home.benefit.product')
        @include('home.join_facebook')
    </div>
@endsection

@push('script')
<script>
    var timeRemaining = {
        d: {{ $timeRemaining->d }},
        h: {{ $timeRemaining->h }},
        m: {{ $timeRemaining->m }},
        s: {{ $timeRemaining->s }}
    };
</script>
@endpush
