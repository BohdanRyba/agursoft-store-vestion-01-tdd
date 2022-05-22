<!-- Single Top Product Card-->
<div class="col-6 col-md-4 col-lg-3">
    <div class="card top-product-card">
        <div class="card-body"><span class="badge badge-success">Sale</span><a class="wishlist-btn" href="#"><i
                    class="lni lni-heart"></i></a><a class="product-thumbnail d-block" href="single-product.html"><img
                    class="mb-2" src="{{url($product->picture)}}" alt=""></a><a class="product-title d-block"
                                                                                href="single-product.html">{{$product->name}}</a>
            <p class="sale-price">${{$product->formatted_price}}@if($product->old_price)
                    <span>${{$product->old_price}}</span>@endif</p>
            <div class="product-rating"><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i
                    class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i
                    class="lni lni-star-filled"></i></div>
            <form action="{{route('cart.add', $product->id)}}" method="POST" id="product-{{$product->id}}">
                @csrf
                <a onclick="document.getElementById('product-{{$product->id}}').submit()" class="btn btn-success btn-sm" href="#"><i class="lni lni-plus"></i></a>
            </form>
        </div>
    </div>
</div>
