<template>
    <div class="tt-product thumbprod-center product-nohover">
<!--        <div>-->
<!--            option 1: {{ getOptionsVariant() }} <br>-->
<!--            option 2: XXS <br>-->
<!--            option 3: pack <br>-->
<!--        </div>-->
        <div class="tt-image-box">
            <a href="#" @click="productPreview(product)" class="tt-btn-quickview" data-toggle="modal"
               data-target="#ModalquickView"
               data-tooltip="Швидкий перегляд" data-tposition="left"></a>
            <!--            <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist"-->
            <!--               data-tposition="left"></a>-->
            <!--            <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare"-->
            <!--               data-tposition="left"></a>-->
            <a href="product.html">
                                    <span class="tt-img"><img src="images/loader.svg"
                                                              :data-src="product.picture"
                                                              :alt="product.picture"></span>
                <span class="tt-img-roll-over"><img src="images/loader.svg"
                                                    :data-src="product.back_image"
                                                    :alt="product.back_image"></span>
                <span class="tt-label-location">
<!--									<span class="tt-label-new">New</span>-->
								</span>
            </a>
        </div>
        <div class="tt-description">
            <div class="tt-row">
                <ul class="tt-add-info">
                    <li><a href="#">{{ product.category.name }}</a></li>
                </ul>
                <div class="tt-rating">
                    <i class="icon-star"></i>
                    <i class="icon-star"></i>
                    <i class="icon-star"></i>
                    <i class="icon-star-half"></i>
                    <i class="icon-star-empty"></i>
                </div>
            </div>
            <h2 class="tt-title"><a href="product.html">{{ product.name }}</a></h2>
            <div class="tt-price">
                {{ product.formatted_price }} ₴
            </div>
            <div class="tt-option-block">
                <ul class="tt-options-swatch js-change-img">
                    <li v-if="product.options.length" class="active">
                        <a @click="setOptionsVariant" href="#" class="options-color-img"
                           :data-src="product.picture"
                           :data-src-hover="product.back_image"
                           :data-tooltip="product.name" data-tposition="top"><img
                            src="images/loader.svg" :data-src="product.picture"
                            :alt="product.name">
                        </a>
                    </li>
                    <li v-for="option in product.options" v-if="product.options.length">
                        <a @click="setOptionsVariant(option)" href="#" class="options-color-img"
                           :data-src="option.picture"
                           :data-src-hover="option.back_image"
                           :data-tooltip="option.name" data-tposition="top"><img
                            src="images/loader.svg" :data-src="option.picture"
                            :alt="option.name">
                        </a>
                    </li>
                    <!--                    <li><a href="#" class="options-color-img"-->
                    <!--                           data-src="images/product/product-03-05.jpg"-->
                    <!--                           data-src-hover="images/product/product-03-05-hover.jpg"-->
                    <!--                           data-tooltip="Light Blue" data-tposition="top"><img-->
                    <!--                        src="images/loader.svg" data-src="images/product/product-03-05.jpg"-->
                    <!--                        alt=""></a></li>-->
                    <!--                    <li><a href="#" class="options-color-img"-->
                    <!--                           data-src="images/product/product-03-06.jpg"-->
                    <!--                           data-src-hover="images/product/product-03-06-hover.jpg"-->
                    <!--                           data-tooltip="Green" data-tposition="top"><img src="images/loader.svg"-->
                    <!--                                                                          data-src="images/product/product-03-06.jpg"-->
                    <!--                                                                          alt=""></a></li>-->
                    <!--                    <li><a href="#" class="options-color-img"-->
                    <!--                           data-src="images/product/product-03-07.jpg"-->
                    <!--                           data-src-hover="images/product/product-03-07-hover.jpg"-->
                    <!--                           data-tooltip="Pink" data-tposition="top"><img src="images/loader.svg"-->
                    <!--                                                                         data-src="images/product/product-03-07.jpg"-->
                    <!--                                                                         alt=""></a></li>-->
                    <!--                    <li><a href="#" class="options-color-img"-->
                    <!--                           data-src="images/product/product-03-08.jpg"-->
                    <!--                           data-src-hover="images/product/product-03-08-hover.jpg"-->
                    <!--                           data-tooltip="Orange" data-tposition="top"><img src="images/loader.svg"-->
                    <!--                                                                           data-src="images/product/product-03-08.jpg"-->
                    <!--                                                                           alt=""></a></li>-->
                </ul>
            </div>
            <div class="tt-product-inside-hover">
                <div class="tt-row-btn">
                    <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal"
                       data-target="#modalAddToCartProduct">ADD TO CART</a>
                </div>
                <div class="tt-row-btn">
                    <a href="#" class="tt-btn-quickview" data-toggle="modal"
                       data-target="#ModalquickView"></a>
                    <a href="#" class="tt-btn-wishlist"></a>
                    <a href="#" class="tt-btn-compare"></a>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import {eventBus} from "../../app";

export default {
    props: ['product'],
    data() {
        return {
            options: {
                variant: null
            }
        }
    },
    mounted() {
        // console.log(this.product)
    },
    methods: {
        setOptionsVariant(option = null) {
            this.options.variant = option
        },
        getOptionsVariant() {
            if (!this.options.variant) return;

            return this.options.variant.name
        },
        productPreview(product) {
            if (!product) return;


            eventBus.$emit('productPreview', product, this.options)
        }
    }
}
</script>
