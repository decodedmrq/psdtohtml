<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
@include('admin.layouts.includes.head')
<body>
@include('admin.layouts.includes.header')
@include('admin.layouts.includes.sidebar')
<div class="layout-content">
    <noscript>
        <div class="noscript">
            <p>Sorry, JavaScript must be enabled.<br/>Change your browser options, then <a href="">try
                    again</a>.</p>
        </div>
    </noscript>
    <div class="content-scrollable">
        <div class="container-fluid">
            @yield('content')
        </div>
    </div>
</div>
@include('admin.layouts.includes.script')
@stack('modals')
</body>
</html>
