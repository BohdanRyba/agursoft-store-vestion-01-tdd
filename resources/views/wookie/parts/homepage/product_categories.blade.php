@if($categories)
    <!-- Product Catagories-->
    <div class="product-catagories-wrapper py-3">
        <div class="container">
            <div class="section-heading">
                <h6>{{trans('Product Categories')}}</h6>
            </div>
            <div class="product-catagory-wrap">
                <div class="row g-3">
                @foreach($categories as $category)
                    <!-- Single Catagory Card-->
                        <div class="col-4">
                            <div class="card catagory-card">
                                <div class="card-body"><a class="{{$category->icon_color}}" href="catagory.html">
                                        {!! $category->icon !!}
                                        <span>{{$category->title}}</span></a></div>
                            </div>
                        </div>
                @endforeach

                </div>
            </div>
        </div>
    </div>
@endif
