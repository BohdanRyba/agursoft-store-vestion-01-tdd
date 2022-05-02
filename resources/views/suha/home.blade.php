@extends('layouts.suha')

@section('content')
    <!-- Preloader-->
    <div class="preloader" id="preloader">
        <div class="spinner-grow text-secondary" role="status">
            <div class="sr-only">Loading...</div>
        </div>
    </div>
    <!-- Header Area-->
    <div class="header-area" id="headerArea">
        <div class="container h-100 d-flex align-items-center justify-content-between">
            <!-- Logo Wrapper-->
            <div class="logo-wrapper"><a href="home.html"><img src="img/core-img/logo-small.png" alt=""></a></div>
            <!-- Search Form-->
            <div class="top-search-form">
                <form action="" method="">
                    <input class="form-control" type="search" placeholder="Enter your keyword">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <!-- Navbar Toggler-->
            <div class="suha-navbar-toggler d-flex flex-wrap" id="suhaNavbarToggler"><span></span><span></span><span></span></div>
        </div>
    </div>
    <!-- Sidenav Black Overlay-->
    <div class="sidenav-black-overlay"></div>
    <!-- Side Nav Wrapper-->
    <div class="suha-sidenav-wrapper" id="sidenavWrapper">
        <!-- Sidenav Profile-->
        <div class="sidenav-profile">
            <div class="user-profile"><img src="img/bg-img/9.jpg" alt=""></div>
            <div class="user-info">
                <h6 class="user-name mb-0">Suha Sarah</h6>
                <p class="available-balance">Credit <span>$<span class="counter">461</span></span></p>
            </div>
        </div>
        <!-- Sidenav Nav-->
        <ul class="sidenav-nav ps-0">
            <li><a href="profile.html"><i class="lni lni-user"></i>My Profile</a></li>
            <li><a href="notifications.html"><i class="lni lni-alarm lni-tada-effect"></i>Notifications<span class="ms-3 badge badge-warning">3</span></a></li>
            <li class="suha-dropdown-menu"><a href="#"><i class="lni lni-cart"></i>Shop Pages</a>
                <ul>
                    <li><a href="shop-grid.html">- Shop Grid</a></li>
                    <li><a href="shop-list.html">- Shop List</a></li>
                    <li><a href="single-product.html">- Product Details</a></li>
                    <li><a href="featured-products.html">- Featured Products</a></li>
                    <li><a href="flash-sale.html">- Flash Sale</a></li>
                </ul>
            </li>
            <li><a href="pages.html"><i class="lni lni-empty-file"></i>All Pages</a></li>
            <li class="suha-dropdown-menu"><a href="wishlist-grid.html"><i class="lni lni-heart"></i>My Wishlist</a>
                <ul>
                    <li><a href="wishlist-grid.html">- Wishlist Grid</a></li>
                    <li><a href="wishlist-list.html">- Wishlist List</a></li>
                </ul>
            </li>
            <li><a href="settings.html"><i class="lni lni-cog"></i>Settings</a></li>
            <li><a href="intro.html"><i class="lni lni-power-switch"></i>Sign Out</a></li>
        </ul>
        <!-- Go Back Button-->
        <div class="go-home-btn" id="goHomeBtn"><i class="lni lni-arrow-left"></i></div>
    </div>
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
        @includeIf('suha.parts.homepage.product_categories', $categories)
        <!-- Flash Sale Slide-->
        <div class="flash-sale-wrapper">
            <div class="container">
                <div class="section-heading d-flex align-items-center justify-content-between">
                    <h6 class="me-1 d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-lightning me-1" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09zM4.157 8.5H7a.5.5 0 0 1 .478.647L6.11 13.59l5.732-6.09H9a.5.5 0 0 1-.478-.647L9.89 2.41 4.157 8.5z"/>
                        </svg>Flash sale
                    </h6>
                    <!-- Please use event time this format: YYYY/MM/DD hh:mm:ss-->
                    <ul class="sales-end-timer ps-0 d-flex align-items-center" data-countdown="2022/01/01 14:21:37">
                        <li><span class="days">0</span>d</li>
                        <li><span class="hours">0</span>h</li>
                        <li><span class="minutes">0</span>m</li>
                        <li><span class="seconds">0</span>s</li>
                    </ul>
                </div>
                <!-- Flash Sale Slide-->
                <div class="flash-sale-slide owl-carousel">
                    <!-- Single Flash Sale Card-->
                    <div class="card flash-sale-card">
                        <div class="card-body"><a href="single-product.html"><img src="img/product/1.png" alt=""><span class="product-title">Black Table Lamp</span>
                                <p class="sale-price">$7.99<span class="real-price">$15</span></p><span class="progress-title">33% Sold Out</span>
                                <!-- Progress Bar-->
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                                </div></a></div>
                    </div>
                    <!-- Single Flash Sale Card-->
                    <div class="card flash-sale-card">
                        <div class="card-body"><a href="single-product.html"><img src="img/product/2.png" alt=""><span class="product-title">Modern Sofa</span>
                                <p class="sale-price">$14<span class="real-price">$21</span></p><span class="progress-title">57% Sold Out</span>
                                <!-- Progress Bar-->
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 57%" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100"></div>
                                </div></a></div>
                    </div>
                    <!-- Single Flash Sale Card-->
                    <div class="card flash-sale-card">
                        <div class="card-body"><a href="single-product.html"><img src="img/product/3.png" alt=""><span class="product-title">Classic Garden Chair</span>
                                <p class="sale-price">$36<span class="real-price">$49</span></p><span class="progress-title">99% Sold Out</span>
                                <!-- Progress Bar-->
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div></a></div>
                    </div>
                    <!-- Single Flash Sale Card-->
                    <div class="card flash-sale-card">
                        <div class="card-body"><a href="single-product.html"><img src="img/product/1.png" alt=""><span class="product-title">Black Table Lamp</span>
                                <p class="sale-price">$7.99<span class="real-price">$15</span></p><span class="progress-title">33% Sold Out</span>
                                <!-- Progress Bar-->
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                                </div></a></div>
                    </div>
                    <!-- Single Flash Sale Card-->
                    <div class="card flash-sale-card">
                        <div class="card-body"><a href="single-product.html"><img src="img/product/2.png" alt=""><span class="product-title">Modern Sofa</span>
                                <p class="sale-price">$14<span class="real-price">$21</span></p><span class="progress-title">57% Sold Out</span>
                                <!-- Progress Bar-->
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 57%" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100"></div>
                                </div></a></div>
                    </div>
                    <!-- Single Flash Sale Card-->
                    <div class="card flash-sale-card">
                        <div class="card-body"><a href="single-product.html"><img src="img/product/3.png" alt=""><span class="product-title">Classic Garden Chair</span>
                                <p class="sale-price">$36<span class="real-price">$49</span></p><span class="progress-title">99% Sold Out</span>
                                <!-- Progress Bar-->
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div></a></div>
                    </div>
                </div>
            </div>
            <div class="container">
                <!--.text-center.mt-3-->
                <!--a.btn.btn-warning.btn-sm(href="flash-sale.html") View All-->
            </div>
        </div>
        <!-- Top Products-->
        <div class="top-products-area clearfix py-3">
            <div class="container">
                <div class="section-heading d-flex align-items-center justify-content-between">
                    <h6>Top Products</h6><a class="btn btn-danger btn-sm" href="shop-grid.html">View All</a>
                </div>
                <div class="row g-3">
                    <!-- Single Top Product Card-->
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="card top-product-card">
                            <div class="card-body"><span class="badge badge-success">Sale</span><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a><a class="product-thumbnail d-block" href="single-product.html"><img class="mb-2" src="img/product/11.png" alt=""></a><a class="product-title d-block" href="single-product.html">Beach Cap</a>
                                <p class="sale-price">$13<span>$42</span></p>
                                <div class="product-rating"><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i></div><a class="btn btn-success btn-sm" href="#"><i class="lni lni-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Top Product Card-->
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="card top-product-card">
                            <div class="card-body"><span class="badge badge-primary">New</span><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a><a class="product-thumbnail d-block" href="single-product.html"><img class="mb-2" src="img/product/5.png" alt=""></a><a class="product-title d-block" href="single-product.html">Wooden Sofa</a>
                                <p class="sale-price">$74<span>$99</span></p>
                                <div class="product-rating"><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i></div><a class="btn btn-success btn-sm" href="#"><i class="lni lni-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Top Product Card-->
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="card top-product-card">
                            <div class="card-body"><span class="badge badge-success">Sale</span><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a><a class="product-thumbnail d-block" href="single-product.html"><img class="mb-2" src="img/product/6.png" alt=""></a><a class="product-title d-block" href="single-product.html">Roof Lamp</a>
                                <p class="sale-price">$99<span>$113</span></p>
                                <div class="product-rating"><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i></div><a class="btn btn-success btn-sm" href="#"><i class="lni lni-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Top Product Card-->
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="card top-product-card">
                            <div class="card-body"><span class="badge badge-danger">-15%</span><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a><a class="product-thumbnail d-block" href="single-product.html"><img class="mb-2" src="img/product/9.png" alt=""></a><a class="product-title d-block" href="single-product.html">Sneaker Shoes</a>
                                <p class="sale-price">$87<span>$92</span></p>
                                <div class="product-rating"><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i></div><a class="btn btn-success btn-sm" href="#"><i class="lni lni-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Top Product Card-->
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="card top-product-card">
                            <div class="card-body"><span class="badge badge-danger">-11%</span><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a><a class="product-thumbnail d-block" href="single-product.html"><img class="mb-2" src="img/product/8.png" alt=""></a><a class="product-title d-block" href="single-product.html">Wooden Chair</a>
                                <p class="sale-price">$21<span>$25</span></p>
                                <div class="product-rating"><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i></div><a class="btn btn-success btn-sm" href="#"><i class="lni lni-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Top Product Card-->
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="card top-product-card">
                            <div class="card-body"><span class="badge badge-warning">Hot</span><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a><a class="product-thumbnail d-block" href="single-product.html"><img class="mb-2" src="img/product/4.png" alt=""></a><a class="product-title d-block" href="single-product.html">Polo Shirts</a>
                                <p class="sale-price">$38<span>$41</span></p>
                                <div class="product-rating"><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i></div><a class="btn btn-success btn-sm" href="#"><i class="lni lni-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cool Facts Area-->
        <div class="cta-area">
            <div class="container">
                <div class="cta-text p-4 p-lg-5" style="background-image: url(img/bg-img/24.jpg)">
                    <h4>Winter Sale 50% Off</h4>
                    <p>Suha is a multipurpose, creative &amp; <br>modern mobile template.</p><a class="btn btn-danger" href="#">Shop Today</a>
                </div>
            </div>
        </div>
        <!-- Weekly Best Sellers-->
        <div class="weekly-best-seller-area py-3">
            <div class="container">
                <div class="section-heading d-flex align-items-center justify-content-between">
                    <h6>Weekly Best Sellers</h6><a class="btn btn-success btn-sm" href="shop-list.html">View All</a>
                </div>
                <div class="row g-3">
                    <!-- Single Weekly Product Card-->
                    <div class="col-12 col-md-6">
                        <div class="card weekly-product-card">
                            <div class="card-body d-flex align-items-center">
                                <div class="product-thumbnail-side"><span class="badge badge-success">Sale</span><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a><a class="product-thumbnail d-block" href="single-product.html"><img src="img/product/10.png" alt=""></a></div>
                                <div class="product-description"><a class="product-title d-block" href="single-product.html">Modern Red Sofa</a>
                                    <p class="sale-price"><i class="lni lni-dollar"></i>$64<span>$89</span></p>
                                    <div class="product-rating"><i class="lni lni-star-filled"></i>4.88 (39)</div><a class="btn btn-danger btn-sm" href="#"><i class="me-1 lni lni-cart"></i>Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Weekly Product Card-->
                    <div class="col-12 col-md-6">
                        <div class="card weekly-product-card">
                            <div class="card-body d-flex align-items-center">
                                <div class="product-thumbnail-side"><span class="badge badge-primary">Sale</span><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a><a class="product-thumbnail d-block" href="single-product.html"><img src="img/product/7.png" alt=""></a></div>
                                <div class="product-description"><a class="product-title d-block" href="single-product.html">Office Chair</a>
                                    <p class="sale-price"><i class="lni lni-dollar"></i>$100<span>$160</span></p>
                                    <div class="product-rating"><i class="lni lni-star-filled"></i>4.82 (125)</div><a class="btn btn-danger btn-sm" href="#"><i class="me-1 lni lni-cart"></i>Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Weekly Product Card-->
                    <div class="col-12 col-md-6">
                        <div class="card weekly-product-card">
                            <div class="card-body d-flex align-items-center">
                                <div class="product-thumbnail-side"><span class="badge badge-danger">-10%</span><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a><a class="product-thumbnail d-block" href="single-product.html"><img src="img/product/12.png" alt=""></a></div>
                                <div class="product-description"><a class="product-title d-block" href="single-product.html">Sun Glasses</a>
                                    <p class="sale-price"><i class="lni lni-dollar"></i>$24<span>$32</span></p>
                                    <div class="product-rating"><i class="lni lni-star-filled"></i>4.79 (63)</div><a class="btn btn-danger btn-sm" href="#"><i class="me-1 lni lni-cart"></i>Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Weekly Product Card-->
                    <div class="col-12 col-md-6">
                        <div class="card weekly-product-card">
                            <div class="card-body d-flex align-items-center">
                                <div class="product-thumbnail-side"><span class="badge badge-warning">New</span><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a><a class="product-thumbnail d-block" href="single-product.html"><img src="img/product/13.png" alt=""></a></div>
                                <div class="product-description"><a class="product-title d-block" href="single-product.html">Wall Clock</a>
                                    <p class="sale-price"><i class="lni lni-dollar"></i>$31<span>$47</span></p>
                                    <div class="product-rating"><i class="lni lni-star-filled"></i>4.99 (7)</div><a class="btn btn-danger btn-sm" href="#"><i class="me-1 lni lni-cart"></i>Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Discount Coupon Card-->
        <div class="container">
            <div class="card discount-coupon-card border-0">
                <div class="card-body">
                    <div class="coupon-text-wrap d-flex align-items-center p-3">
                        <h5 class="text-white pe-3 mb-0">Get 20% <br> discount</h5>
                        <p class="text-white ps-3 mb-0">To get discount, enter the<strong class="px-1">GET20</strong>code on the checkout page.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Featured Products Wrapper-->
        <div class="featured-products-wrapper py-3">
            <div class="container">
                <div class="section-heading d-flex align-items-center justify-content-between">
                    <h6>Featured Products</h6><a class="btn btn-warning btn-sm" href="featured-products.html">View All</a>
                </div>
                <div class="row g-3">
                    <!-- Featured Product Card-->
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="card featured-product-card">
                            <div class="card-body"><span class="badge badge-warning custom-badge"><i class="lni lni-star"></i></span>
                                <div class="product-thumbnail-side"><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a><a class="product-thumbnail d-block" href="single-product.html"><img src="img/product/14.png" alt=""></a></div>
                                <div class="product-description"><a class="product-title d-block" href="single-product.html">Blue Skateboard</a>
                                    <p class="sale-price">$64<span>$89</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Featured Product Card-->
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="card featured-product-card">
                            <div class="card-body"><span class="badge badge-warning custom-badge"><i class="lni lni-star"></i></span>
                                <div class="product-thumbnail-side"><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a><a class="product-thumbnail d-block" href="single-product.html"><img src="img/product/15.png" alt=""></a></div>
                                <div class="product-description"><a class="product-title d-block" href="single-product.html">Travel Bag</a>
                                    <p class="sale-price">$64<span>$89</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Featured Product Card-->
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="card featured-product-card">
                            <div class="card-body"><span class="badge badge-warning custom-badge"><i class="lni lni-star"></i></span>
                                <div class="product-thumbnail-side"><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a><a class="product-thumbnail d-block" href="single-product.html"><img src="img/product/16.png" alt=""></a></div>
                                <div class="product-description"><a class="product-title d-block" href="single-product.html">Cotton T-shirts</a>
                                    <p class="sale-price">$64<span>$89</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Featured Product Card-->
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="card featured-product-card">
                            <div class="card-body"><span class="badge badge-warning custom-badge"><i class="lni lni-star"></i></span>
                                <div class="product-thumbnail-side"><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a><a class="product-thumbnail d-block" href="single-product.html"><img src="img/product/6.png" alt=""></a></div>
                                <div class="product-description"><a class="product-title d-block" href="single-product.html">Roof Lamp </a>
                                    <p class="sale-price">$64<span>$89</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Internet Connection Status-->
    <div class="internet-connection-status" id="internetStatus"></div>
    <!-- Footer Nav-->
    <div class="footer-nav-area" id="footerNav">
        <div class="container h-100 px-0">
            <div class="suha-footer-nav h-100">
                <ul class="h-100 d-flex align-items-center justify-content-between ps-0">
                    <li class="active"><a href="home.html"><i class="lni lni-home"></i>Home</a></li>
                    <li><a href="message.html"><i class="lni lni-life-ring"></i>Support</a></li>
                    <li><a href="cart.html"><i class="lni lni-shopping-basket"></i>Cart</a></li>
                    <li><a href="pages.html"><i class="lni lni-heart"></i>Pages</a></li>
                    <li><a href="settings.html"><i class="lni lni-cog"></i>Settings</a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection
