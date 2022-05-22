@extends('layouts.wookie')

@section('content')

    <div id="tt-pageContent">
        @includeIf('wookie.parts.homepage.slider', $slider)
        @includeIf('wookie.parts.blocks.categories.homepage_categories', $categories)

        <product-block products="{{$products}}" title="TRENDING" subtitle="TOP VIEW IN THIS WEEK"></product-block>
        @includeIf('wookie.parts.homepage.promos')
        <product-block products="{{$products}}" title="BEST SELLER" subtitle="TOP SALE IN THIS WEEK"></product-block>

        @includeIf('wookie.parts.homepage.blog')


        @includeIf('wookie.parts.common.instagram.feed')
        @includeIf('wookie.parts.homepage.benefits')
    </div>
@endsection
