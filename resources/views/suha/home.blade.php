@extends('layouts.suha')

@section('content')
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
    <div class="page-content-wrapper">

    @includeIf('suha.parts.homepage.slider', $slider)

        <div class="container">
            {!! $paymentForm !!}
        </div>
    @includeIf('suha.parts.homepage.product_categories', $categories)
    @includeIf('suha.parts.blocks.product.flash.list')
    @includeIf('suha.parts.blocks.product.simple.list')

    <!-- Cool Facts Area-->
        <div class="cta-area">
            <div class="container">
                <div class="cta-text p-4 p-lg-5" style="background-image: url(img/bg-img/24.jpg)">
                    <h4>Winter Sale 50% Off</h4>
                    <p>Suha is a multipurpose, creative &amp; <br>modern mobile template.</p><a class="btn btn-danger"
                                                                                                href="#">Shop Today</a>
                </div>
            </div>
        </div>
    @includeIf('suha.parts.blocks.product.bestseller.list')

    <!-- Discount Coupon Card-->
        <div class="container">
            <div class="card discount-coupon-card border-0">
                <div class="card-body">
                    <div class="coupon-text-wrap d-flex align-items-center p-3">
                        <h5 class="text-white pe-3 mb-0">Get 20% <br> discount</h5>
                        <p class="text-white ps-3 mb-0">To get discount, enter the<strong class="px-1">GET20</strong>code
                            on the checkout page.</p>
                    </div>
                </div>
            </div>
        </div>
        @includeIf('suha.parts.blocks.product.featured.list')
    </div>
    <!-- Internet Connection Status-->
    <div class="internet-connection-status" id="internetStatus"></div>
    <div class="w-100 mb-4">
        <div class="card border-0">
            <div class="card-body">
                <div class="coupon-text-wrap d-flex flex-wrap align-items-center justify-content-center">
                    <h5 class="text-black pe-3 mb-0 align-items-center">Зв'яжіться<br>з нами ☺️</h5>
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
                            <li><a href="https://www.mastercard.ua/uk-ua.html"><img src="{{asset('img/payments/mastercard/mc_symbol.svg')}}" alt=""></a></li>
                            <li><a href="https://www.visa.com.ua/uk_UA"><img src="{{asset('img/payments/visa/Visa_Brandmark_Blue_RGB_2021.png')}}" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @includeIf('suha.parts.common.footer.footer')
@endsection
