<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
{{--    <link rel="dns-prefetch" href="//fonts.gstatic.com">--}}
{{--    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">--}}

{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
<!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    @stack('styles')

</head>
<body>
<div id="app">
    <cart-component></cart-component>
    @includeIf('wookie.parts.common.header.header')
    <main class="py-4">
        @yield('content')
    </main>
    @includeIf('wookie.parts.common.footer.footer')
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="external/jquery/jquery.min.js"><\/script>')</script>
<script defer src="{{asset('js/bundle.js')}}"></script>
<a href="#" class="tt-back-to-top" id="js-back-to-top">BACK TO TOP</a>

@stack('scripts')

<!-- Modal (newsletter) -->
{{--    <div class="modal  fade"  id="Modalnewsletter02" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true"  data-pause=1500>--}}
{{--        <div class="modal-dialog modal-newslettet02">--}}
{{--            <div class="modal-content ">--}}
{{--                <div class="modal-header">--}}
{{--                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon icon-clear"></span></button>--}}
{{--                </div>--}}
{{--                <div class="tt-layout-center">--}}
{{--                    <svg width="99" height="98" viewBox="0 0 99 98" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                        <path id="btnsvg-fire" d="M24.532 73.4679C29.156 78.0919 29.156 85.6886 24.532 90.3128C19.908 94.9367 6.28343 100.965 1.65944 96.3406C-2.96456 91.7166 3.06309 78.0921 7.68729 73.4682C12.3113 68.844 19.8254 68.844 24.532 73.4679Z" fill="#FFEC54"></path>--}}
{{--                        <path d="M57.2902 40.7426C69.141 52.5933 71.4971 69.4336 60.2702 80.6605L54.9339 85.9968C43.707 97.2237 51.4689 70.2652 39.6182 58.4145C27.7675 46.5638 0.739632 54.395 12.0359 43.0987L17.3721 37.7625C28.5992 26.5357 45.4395 28.892 57.2902 40.7426Z" fill="url(#paint0_linear)"></path>--}}
{{--                        <path fill-rule="evenodd" clip-rule="evenodd" d="M76.4175 50.1685C98.5249 27.9917 100.119 5.12209 96.515 1.51838C92.9113 -2.15449 70.1108 -0.491291 48.0036 21.6159C33.6581 36.0308 28.5297 45.1787 28.5297 45.1787C21.946 54.8118 26.4505 59.4551 32.5492 65.5536C38.6479 71.6521 43.291 76.0875 52.924 69.5731C52.924 69.5731 62.0026 64.514 76.4175 50.1685Z" fill="white"></path>--}}
{{--                        <path d="M46.2285 60.1373L35.6574 54.7233L38.0461 52.3345L41.3748 54.2711C42.2056 54.7645 42.9471 55.2212 43.5991 55.6412C44.2406 56.0506 44.6717 56.3447 44.8925 56.5233L45.2394 56.7753C44.6827 56.0709 43.8796 54.7511 42.8302 52.8158L40.9727 49.4079L42.9659 47.4147L46.3579 49.288C47.2204 49.7708 47.9829 50.2169 48.6454 50.6264C49.2974 51.0253 49.7391 51.3088 49.9704 51.4768L50.3017 51.7131C49.7554 51.0192 48.9418 49.7099 47.8608 47.7852L45.9716 44.409L48.2496 42.131L53.6794 52.6863L51.3065 55.0592L47.9936 53.1384C47.2784 52.7185 46.6158 52.3196 46.0059 51.9417C45.4065 51.5532 44.9858 51.2697 44.744 51.0911L44.3813 50.8233C44.9799 51.6329 45.7464 52.8423 46.6805 54.4514L48.6014 57.7644L46.2285 60.1373Z" fill="url(#paint1_linear)"></path>--}}
{{--                        <path d="M60.0936 46.5243C58.8386 47.7794 57.4953 48.3765 56.0636 48.3158C54.6214 48.2447 53.3117 47.6205 52.1347 46.4434C50.905 45.2138 50.2547 43.8463 50.1836 42.341C50.102 40.8251 50.6571 39.4713 51.8488 38.2796C53.0933 37.0351 54.4419 36.4537 55.8946 36.5354C57.3473 36.6171 58.6675 37.2517 59.855 38.4393C61.0636 39.6479 61.714 40.9944 61.8062 42.4786C61.8984 43.9419 61.3275 45.2904 60.0936 46.5243ZM53.6459 40.1083C53.1397 40.6145 52.9755 41.2096 53.1533 41.8936C53.3311 42.5776 53.7615 43.2612 54.4446 43.9443C55.1278 44.6274 55.8166 45.0631 56.5111 45.2514C57.2056 45.4187 57.8113 45.2439 58.3281 44.7271C58.8343 44.2209 58.9985 43.6363 58.8207 42.9734C58.6429 42.2894 58.2124 41.6058 57.5293 40.9227C55.9634 39.3568 54.6689 39.0853 53.6459 40.1083Z" fill="url(#paint2_linear)"></path>--}}
{{--                        <path d="M72.1043 34.2614L69.4309 36.9349L62.9428 35.5723L66.8681 39.4976L64.5585 41.8073L53.681 30.9298L55.9907 28.6202L62.4541 35.0836L61.4067 28.974L64.0643 26.3163L65.1109 32.9313L72.1043 34.2614Z" fill="url(#paint3_linear)"></path>--}}
{{--                        <path d="M72.8837 33.482L64.8911 25.4895L67.2008 23.1798L75.1933 31.1724L72.8837 33.482Z" fill="url(#paint4_linear)"></path>--}}
{{--                        <path d="M76.2412 20.6659L76.052 20.4767C75.0428 19.6152 74.1638 19.5588 73.4151 20.3076C73.0459 20.6767 72.8556 21.1403 72.8441 21.6983C72.8221 22.2458 73.0264 22.8297 73.457 23.4501L76.2412 20.6659ZM80.2511 21.3538L82.1744 23.277C81.9833 24.1828 81.3235 25.1999 80.1951 26.3283C78.8768 27.6466 77.4702 28.2965 75.9753 28.278C74.4804 28.2385 73.1339 27.6197 71.9358 26.4216C70.6641 25.15 70.0243 23.8035 70.0162 22.3823C70.0082 20.94 70.5262 19.6968 71.5703 18.6527C72.646 17.577 73.8103 17.0433 75.0631 17.0516C76.3054 17.0495 77.5466 17.6684 78.7867 18.9086C79.0285 19.1503 79.4014 19.6076 79.9056 20.2805L75.1914 24.9947C75.791 25.2779 76.4068 25.3453 77.0387 25.1968C77.6706 25.0483 78.2608 24.6998 78.8092 24.1514C79.6213 23.3394 80.1019 22.4068 80.2511 21.3538Z" fill="url(#paint5_linear)"></path>--}}
{{--                        <path d="M83.835 13.0721L83.6458 12.8829C82.6366 12.0214 81.7577 11.965 81.0089 12.7138C80.6398 13.0829 80.4494 13.5465 80.4379 14.1045C80.4159 14.652 80.6202 15.2359 81.0508 15.8563L83.835 13.0721ZM87.8449 13.76L89.7682 15.6832C89.5771 16.5889 88.9174 17.606 87.7889 18.7345C86.4706 20.0528 85.064 20.7027 83.5691 20.6842C82.0742 20.6447 80.7277 20.0259 79.5296 18.8278C78.2579 17.5562 77.6181 16.2097 77.61 14.7885C77.602 13.3461 78.12 12.1029 79.1641 11.0589C80.2398 9.98314 81.4041 9.44946 82.6569 9.4578C83.8992 9.45564 85.1404 10.0746 86.3806 11.3148C86.6223 11.5565 86.9952 12.0138 87.4994 12.6867L82.7852 17.4009C83.3848 17.6841 84.0006 17.7515 84.6325 17.603C85.2644 17.4545 85.8546 17.106 86.403 16.5576C87.2151 15.7456 87.6957 14.813 87.8449 13.76Z" fill="url(#paint6_linear)"></path>--}}
{{--                        <defs>--}}
{{--                            <linearGradient id="paint0_linear" x1="58.5" y1="85.5" x2="15" y2="42.5" gradientUnits="userSpaceOnUse">--}}
{{--                                <stop stop-color="#417DFB"></stop>--}}
{{--                                <stop offset="1" stop-color="#1FBCFF"></stop>--}}
{{--                            </linearGradient>--}}
{{--                            <linearGradient id="paint1_linear" x1="86.5" y1="16" x2="39" y2="57.5" gradientUnits="userSpaceOnUse">--}}
{{--                                <stop stop-color="#C928FE"></stop>--}}
{{--                                <stop offset="1" stop-color="#2879FE"></stop>--}}
{{--                            </linearGradient>--}}
{{--                            <linearGradient id="paint2_linear" x1="86.5" y1="16" x2="39" y2="57.5" gradientUnits="userSpaceOnUse">--}}
{{--                                <stop stop-color="#C928FE"></stop>--}}
{{--                                <stop offset="1" stop-color="#2879FE"></stop>--}}
{{--                            </linearGradient>--}}
{{--                            <linearGradient id="paint3_linear" x1="86.5" y1="16" x2="39" y2="57.5" gradientUnits="userSpaceOnUse">--}}
{{--                                <stop stop-color="#C928FE"></stop>--}}
{{--                                <stop offset="1" stop-color="#2879FE"></stop>--}}
{{--                            </linearGradient>--}}
{{--                            <linearGradient id="paint4_linear" x1="86.5" y1="16" x2="39" y2="57.5" gradientUnits="userSpaceOnUse">--}}
{{--                                <stop stop-color="#C928FE"></stop>--}}
{{--                                <stop offset="1" stop-color="#2879FE"></stop>--}}
{{--                            </linearGradient>--}}
{{--                            <linearGradient id="paint5_linear" x1="86.5" y1="16" x2="39" y2="57.5" gradientUnits="userSpaceOnUse">--}}
{{--                                <stop stop-color="#C928FE"></stop>--}}
{{--                                <stop offset="1" stop-color="#2879FE"></stop>--}}
{{--                            </linearGradient>--}}
{{--                            <linearGradient id="paint6_linear" x1="86.5" y1="16" x2="39" y2="57.5" gradientUnits="userSpaceOnUse">--}}
{{--                                <stop stop-color="#C928FE"></stop>--}}
{{--                                <stop offset="1" stop-color="#2879FE"></stop>--}}
{{--                            </linearGradient>--}}
{{--                        </defs>--}}
{{--                    </svg>--}}
{{--                    <style>--}}
{{--                        #btnsvg-fire{--}}
{{--                            animation-name: btnsvg-fire_a;--}}
{{--                            animation-duration: 0.2s;--}}
{{--                            animation-iteration-count: infinite;--}}
{{--                            transform-origin: 76.3% 10.1%;--}}
{{--                        }--}}
{{--                        @keyframes btnsvg-fire_a {--}}
{{--                            0%{--}}
{{--                                transform: scale(1);--}}
{{--                            }--}}
{{--                            70%{--}}
{{--                                transform: scale(0.97);--}}
{{--                            }--}}
{{--                            100%{--}}
{{--                                transform: scale(1);--}}
{{--                            }--}}
{{--                        }--}}
{{--                    </style>--}}
{{--                    <div class="text-simple-01">--}}
{{--                        MAKE YOUR<br>--}}
{{--                        STORE A SELLING MACHINE!--}}
{{--                    </div>--}}
{{--                    <div class="text-simple-02">--}}
{{--                        Are you ready to<br>--}}
{{--                        blow up your sales?--}}
{{--                    </div>--}}
{{--                    <div class="text-simple-03">--}}
{{--                        That converts your visitors into loyal customers.--}}
{{--                    </div>--}}
{{--                    <a href="https://themeforest.net/item/wokiee-ecommerce-html-template/22564267" target="_blank" class="btn btn-popup-simple"><span>YES!</span> I want More Sales on My Store!</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
</body>
</html>
