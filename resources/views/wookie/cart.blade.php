@extends('layouts.suha')

@section('content')
    <div class="page-content-wrapper">

        {{--        <div class="container">--}}
        {{--            <table>--}}
        {{--                <thead>--}}
        {{--                <tr>--}}
        {{--                    <th>Product</th>--}}
        {{--                    <th>Qty</th>--}}
        {{--                    <th>Price</th>--}}
        {{--                    <th>Subtotal</th>--}}
        {{--                </tr>--}}
        {{--                </thead>--}}

        {{--                <tbody>--}}

        {{--                <?php foreach(Cart::content() as $row) :?>--}}

        {{--                <tr>--}}
        {{--                    <td>--}}
        {{--                        <p><strong><?php echo $row->name; ?></strong></p>--}}
        {{--                        <p><?php echo ($row->options->has('size') ? $row->options->size : ''); ?></p>--}}
        {{--                    </td>--}}
        {{--                    <td><input type="text" value="<?php echo $row->qty; ?>"></td>--}}
        {{--                    <td>$<?php echo $row->price; ?></td>--}}
        {{--                    <td>$<?php echo $row->total; ?></td>--}}
        {{--                </tr>--}}

        {{--                <?php endforeach;?>--}}

        {{--                </tbody>--}}

        {{--                <tfoot>--}}
        {{--                <tr>--}}
        {{--                    <td colspan="2">&nbsp;</td>--}}
        {{--                    <td>Subtotal</td>--}}
        {{--                    <td><?php echo Cart::subtotal(); ?></td>--}}
        {{--                </tr>--}}
        {{--                <tr>--}}
        {{--                    <td colspan="2">&nbsp;</td>--}}
        {{--                    <td>Tax</td>--}}
        {{--                    <td><?php echo Cart::tax(); ?></td>--}}
        {{--                </tr>--}}
        {{--                <tr>--}}
        {{--                    <td colspan="2">&nbsp;</td>--}}
        {{--                    <td>Total</td>--}}
        {{--                    <td><?php echo Cart::total(); ?></td>--}}
        {{--                </tr>--}}
        {{--                </tfoot>--}}
        {{--            </table>--}}
        {{--        </div>--}}
        <div class="container">
            <!-- Cart Wrapper-->
            <div class="cart-wrapper-area py-3">
                <div class="cart-table card mb-3">
                    <div class="table-responsive card-body">
                        <table class="table mb-0">
                            <tbody>
                            <?php foreach(Cart::content() as $row) :?>

                            <tr>
                                <th scope="row">

                                    <form id="removeCartItem{{$row->rowId}}"
                                          action="{{route('cart.remove',$row->rowId)}}" method="POST">
                                        @csrf
                                        <a onclick="document.getElementById('removeCartItem{{$row->rowId}}').submit()"
                                           class="remove-product" href="#"><i class="lni lni-close"></i></a>
                                    </form>
                                </th>
                                <td><img src="img/product/11.png" alt=""></td>
                                <td><a href="single-product.html">{{$row->name}}
                                        <span>${{$row->price}} × {{$row->qty}}</span></a></td>
                                <td>
                                    <div class="quantity">
                                        <form id="updateQty-{{$row->id}}" action="{{route('cart.update', $row->rowId)}}"
                                              method="POST">
                                            @csrf
                                            <input
                                                onchange="document.getElementById('updateQty-{{$row->rowId}}').submit()"
                                                class="qty-text" type="text" name="product_qty"
                                                value="{{$row->qty}}"/>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>

            {{--                <!-- Coupon Area-->--}}
            {{--                <div class="card coupon-card mb-3">--}}
            {{--                    <div class="card-body">--}}
            {{--                        <div class="apply-coupon">--}}
            {{--                            <h6 class="mb-0">Have a coupon?</h6>--}}
            {{--                            <p class="mb-2">Enter your coupon code here &amp; get awesome discounts!</p>--}}
            {{--                            <div class="coupon-form">--}}
            {{--                                <form action="#">--}}
            {{--                                    <input class="form-control" type="text" placeholder="SUHA30">--}}
            {{--                                    <button class="btn btn-primary" type="submit">Apply</button>--}}
            {{--                                </form>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            <!-- Cart Amount Area-->
                <div class="card cart-amount-area">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <h5 class="total-price mb-0">$<span class="counter">{{ Cart::total()}}</span></h5>
                        <a class="btn btn-warning"
                            href="{{route('checkout')}}">Checkout Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
