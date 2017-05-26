<!DOCTYPE html>
<html lang="{{ config('app.locale') }}"
      xmlns="http://www.w3.org/1999/xhtml"
      xmlns:fb="http://ogp.me/ns/fb#">
@include('layouts.includes.head')
<body>
{!! facebook_sdk() !!}
{!! js_structured_data() !!}
<div id="wrap">
    <div id="main-body">
        <div class="container-fluid px-0">
            @yield('content')
        </div>
    </div>
    @include('layouts.includes.footer')
</div>
@include('layouts.includes.script')
{!! js_ga() !!}
</body>
</html>
