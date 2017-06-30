@extends('layouts.desktop')
@push('css')
{{ html()->style('/css/home.css') }}
@endpush
@push('js')
{{ html()->script('/js/home.js') }}
@endpush
@section('content')
    <div id="header">
        <div class="top-menu">

        </div>
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col">--}}
                    {{--<p><strong>HOME</strong></p>--}}
                {{--</div>--}}
                {{--<div class="col">--}}
                    {{--<p><strong>PHOTOAPP</strong></p>--}}
                {{--</div>--}}
                {{--<div class="col">--}}
                    {{--<p><img src="{{asset('images/camera.png')}}" alt=""></p>--}}
                {{--</div>--}}
                {{--<div class="col">--}}
                    {{--<p><strong>DESIGN</strong></p>--}}
                {{--</div>--}}
                {{--<div class="col">--}}
                    {{--<p><strong>DOWNLOAD</strong></p>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>
    <div class="feature">

    </div>
    <div id="subscribe">

    </div>
    <div id="download">
    </div>
@endsection
