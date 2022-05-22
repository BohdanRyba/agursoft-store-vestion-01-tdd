<!-- Top Products-->
<div class="top-products-area clearfix py-3">
    <div class="container">
        <div class="section-heading d-flex align-items-center justify-content-between">
            <h6>Top Products</h6><a class="btn btn-danger btn-sm" href="shop-grid.html">View All</a>
        </div>
        <div class="row g-3">
            @forelse($products as $product)
                @includeIf('suha.parts.blocks.product.simple.item', $product)

            @empty
            @endforelse
        </div>
    </div>
</div>
