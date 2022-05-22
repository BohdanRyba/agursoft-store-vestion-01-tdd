<!doctype html>
<html data-theme="dark" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
        <!-- Preloader-->
        <div class="preloader" id="preloader">
            <div class="spinner-grow text-secondary" role="status">
                <div class="sr-only">Loading...</div>
            </div>
        </div>
        @includeIf('suha.parts.common.header.header')
    <!-- PWA Install Alert-->
    {{--    <div class="toast pwa-install-alert shadow bg-white" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="5000" data-bs-autohide="true">--}}
    {{--        <div class="toast-body">--}}
    {{--            <div class="content d-flex align-items-center mb-2"><img src="img/icons/icon-72x72.png" alt="">--}}
    {{--                <h6 class="mb-0">Add to Home Screen</h6>--}}
    {{--                <button class="btn-close ms-auto" type="button" data-bs-dismiss="toast" aria-label="Close"></button>--}}
    {{--            </div><span class="mb-0 d-block">Add Suha on your mobile home screen. Click the<strong class="mx-1">"Add to Home Screen"</strong>button &amp; enjoy it like a regular app.</span>--}}
    {{--        </div>--}}
    {{--    </div>--}}
        @yield('content')
    <!-- Internet Connection Status-->
        <div class="internet-connection-status" id="internetStatus"></div>
        <div class="w-100 mb-4" style="margin-top:auto;">
            <div class="card border-0">
                <div class="card-body">
                    <div class="coupon-text-wrap d-flex flex-wrap align-items-center justify-content-center">
                        <h5 class="text-black text-white pe-3 mb-0 align-items-center">Зв'яжіться<br>з нами ☺️</h5>
                        <div class="d-flex flex-wrap align-items-center justify-content-center">
                            <ul>
                                <li><a href="tel:+380972169161">📱 +38(097)216-91-61</a></li>
                                <li><a href="mail:web.dev.asoft@gmail.com">✉️ web.dev.asoft@gmail.com</a></li>
                            </ul>
                            <ul>
                                <li><a href="tel:+380972169161">📱 +38(097)216-91-61</a></li>
                                <li><a href="mail:web.dev.asoft@gmail.com">✉️ web.dev.asoft@gmail.com</a></li>
                            </ul>
                            <ul>
                                <li><a href="tel:+380972169161">📱 +38(097)216-91-61</a></li>
                                <li><a href="mail:web.dev.asoft@gmail.com">✉️ web.dev.asoft@gmail.com</a></li>
                            </ul>

                            <ul>
                                <li><h6>💳 Платіжні системи: </h6></li>
                                <li><a href="https://www.mastercard.ua/uk-ua.html"><img class="payment-logo"  src="{{asset('img/payments/mastercard/mc_symbol.svg')}}" alt=""></a></li>
                                <li><a href="https://www.visa.com.ua/uk_UA"><img  class="payment-logo" src="{{asset('img/payments/visa/Visa_Brandmark_Blue_RGB_2021.png')}}" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @includeIf('suha.parts.common.footer.footer')
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
