<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token()  }}">
    <meta name="AppContentLocale" content="{{ config('app.locale')  }}">
    <meta name="app.env" content="{{ app()->environment()  }}">
    <meta name="app.lang"
          content="{{ substr(config('app.locale'), 0, strpos(config('app.locale'), '_'))  }}">
    <meta name="app.loc"
          content="{{ strtolower(substr(config('app.locale'), strpos(config('app.locale'), '_')  + 1)) }}">
    <title>{{ isset($title) ? $title : config('app.name') }}</title>
    <meta name="google-site-verification" content="{!! config('services.google.web_master') !!}"/>
    <meta name="robots" content="index,follow"/>
    <meta name="description"
          content="{{ isset($description) ? $description : config('app.description') }}">
    <meta name="author" content="{{ config('app.domain') }}">
    <meta name="copyright" content="{{ config('app.name') }}">
    <meta name="keywords"
          content="{{ isset($keywords) ? implode(',', $keywords) : implode(',', config('app.keywords')) }}">
    <meta property="og:image" content="{!! asset('favicon.png') !!}"/>
    <link rel="shortcut icon" href="{!! asset('favicon.ico') !!}">
    <link rel="stylesheet" href="{!! asset('css/app.css?') . config('app.version') !!}">
    @stack('css')
    @stack('style')
    <script>
      window.Security = {
        csrfToken: '{{ csrf_token() }}'
      };
      const trans = function (code) {
          let maps = {!! js_trans(['validation']) !!};
          let pieces = code.split('.');
          if (pieces.length === 2 && typeof maps[pieces[0]] !== undefined) {
              return maps[pieces[0]][pieces[1]] || code;
          }
          return maps[code] || code;
      };
    </script>
    <!--[if lt IE 9]>
    {!! html()->script('vendor/html5shiv/html5shiv.min.js') !!}
    {!! html()->script('vendor/respond/respond.min.js') !!}
    <![endif]-->
    {{ html()->script('js/bootstrap.js') }}
    @include('layouts.includes.routes')
    @stack('script-head')
    @stack('js-head')
</head>
