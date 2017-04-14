<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
@include('layouts.includes.head')
<body>
<div id="wrap">
    @include('layouts.includes.header')
    <div id="content">
        <div class="container-fluid px-0">
            @yield('content')
        </div>
    </div>
    @include('layouts.includes.footer')
</div>
@include('layouts.includes.script')
</body>
</html>
