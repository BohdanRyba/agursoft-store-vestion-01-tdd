<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#100DD1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Favicon-->
    <link rel="icon" href="{{asset('img/icons/icon-72x72.png')}}">
    <!-- Apple Touch Icon-->
    <link rel="apple-touch-icon" href="{{asset('img/icons/icon-96x96.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('img/icons/icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="167x167" href="{{asset('img/icons/icon-167x167.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('img/icons/icon-180x180.png')}}">
    <!-- CSS Libraries-->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/default/lineicons.min.css')}}">
    <!-- Stylesheet-->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Web App Manifest-->
    <link rel="manifest" href="{{asset('manifest.json')}}">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>

</head>
<body>
<div id="app">
    <main class="py-4">
        @yield('content')
    </main>
</div>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/waypoints.min.js')}}"></script>
<script src="{{asset('js/jquery.easing.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('js/default/jquery.passwordstrength.js')}}"></script>
<script src="{{asset('js/default/dark-mode-switch.js')}}"></script>
<script src="{{asset('js/default/no-internet.js')}}"></script>
<script src="{{asset('js/default/active.js')}}"></script>
<script src="{{asset('js/pwa.js')}}"></script>
</body>
</html>
