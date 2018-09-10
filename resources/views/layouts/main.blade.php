<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ZFilm - @yield('title')</title>
    
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}" /> --}}
    <link rel="stylesheet" href="{{ asset('css/customized.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
    <link href="{{ asset('css/fontello.css') }}" media="screen" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/font-awesome.css') }}" media="screen" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/nevis.css') }}" media="screen" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/slick.css') }}" media="screen" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/slick-theme.css') }}" media="screen" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Raleway:400,700,300" media="screen" rel="stylesheet" type="text/css" />
    @yield('css')
  </head>
  <body class="hide">
    
    @yield('content')

    <script src="{{ asset('bower_components/modernizr/modernizr.js') }}"></script>
    <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('bower_components/foundation/js/foundation.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/masonry.pkgd.js') }}"></script>
    <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/jquery.appear.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('js')
  </body>
</html>
