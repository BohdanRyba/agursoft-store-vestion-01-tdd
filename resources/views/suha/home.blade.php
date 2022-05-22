@extends('layouts.suha')

@section('content')



    <div class="page-content-wrapper">

    @includeIf('suha.parts.homepage.slider', $slider)

    @includeIf('suha.parts.homepage.product_categories', $categories)
    @includeIf('suha.parts.blocks.product.flash.list')
    @includeIf('suha.parts.blocks.product.simple.list', $products)

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

@endsection
