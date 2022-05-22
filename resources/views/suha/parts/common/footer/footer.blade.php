<!-- Footer Nav-->
<div class="footer-nav-area" id="footerNav">
    <div class="container h-100 px-0">
        <div class="suha-footer-nav h-100">
            <ul class="h-100 d-flex align-items-center justify-content-between ps-0">
                <li class="active"><a href="{{route('home')}}"><i class="lni lni-home"></i>Home</a></li>
                <li><a href="message.html"><i class="lni lni-life-ring"></i>Support</a></li>
                <li><a class="d-flex flex-column justify-content-center align-items-center" href="{{route('cart')}}"><i class="lni lni-shopping-basket"></i><span>Cart @if(Cart::count() > 0)<span class="badge badge-sm badge-warning">{{Cart::count()}}</span>@endif</span></a></li>
                <li><a href="pages.html"><i class="lni lni-heart"></i>Pages</a></li>
                <li><a href="settings.html"><i class="lni lni-cog"></i>Settings</a></li>
            </ul>
        </div>
    </div>
</div>
