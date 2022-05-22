<template>
    <!-- modal (quickViewModal) -->


    <div v-if="product" class="modal fade" id="ModalquickView" tabindex="-1" role="dialog" aria-label="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content ">

                <div class="modal-header">
                    <button ref="closeModal" type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        <span class="icon icon-clear"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="tt-modal-quickview desctope">
                        <div class="row">
                            <div class="col-12 col-md-5 col-lg-6">
                                <VueSlickCarousel :arrows="true" :autoplay="true">
                                    <div v-for="media in gallery" :key="media">
                                        <img style="max-width:100%" :src="media" :data-slick="media" :data-lazy="media"
                                             alt="">
                                    </div>
                                </VueSlickCarousel>
                            </div>
                            <div class="col-12 col-md-7 col-lg-6">
                                <!--                                        <pre>-->
                                <!--            {{product}}-->
                                <!--        </pre>-->
                                <div class="tt-product-single-info">
                                    <div class="tt-add-info">
                                        <ul>
                                            <li><span>SKU:</span> {{ product.slug }}</li>
                                            <li><span>Availability:</span> {{ product.quantity }} in Stock</li>
                                        </ul>
                                    </div>
                                    <h2 class="tt-title">{{ product.name }}</h2>
                                    <div class="tt-price">
                                        <span class="new-price">${{ product.formatted_price }}</span>
                                        <span class="old-price"></span>
                                    </div>
                                    <!--                                    <div class="tt-review">-->
                                    <!--                                        <div class="tt-rating">-->
                                    <!--                                            <i class="icon-star"></i>-->
                                    <!--                                            <i class="icon-star"></i>-->
                                    <!--                                            <i class="icon-star"></i>-->
                                    <!--                                            <i class="icon-star-half"></i>-->
                                    <!--                                            <i class="icon-star-empty"></i>-->
                                    <!--                                        </div>-->
                                    <!--                                        <a href="#">(1 Customer Review)</a>-->
                                    <!--                                    </div>-->
                                    <div class="tt-wrapper">
                                        {{ product.short_description }}
                                    </div>
                                    <div class="tt-swatches-container">
                                        <!--                                        <div class="tt-wrapper">-->
                                        <!--                                            <div class="tt-title-options">SIZE</div>-->
                                        <!--                                            <form class="form-default">-->
                                        <!--                                                <div class="form-group">-->
                                        <!--                                                    <select class="form-control">-->
                                        <!--                                                        <option>21</option>-->
                                        <!--                                                        <option>25</option>-->
                                        <!--                                                        <option>36</option>-->
                                        <!--                                                    </select>-->
                                        <!--                                                </div>-->
                                        <!--                                            </form>-->
                                        <!--                                        </div>-->
                                        <!--                                        <div class="tt-wrapper">-->
                                        <!--                                            <div class="tt-title-options">COLOR</div>-->
                                        <!--                                            <form class="form-default">-->
                                        <!--                                                <div class="form-group">-->
                                        <!--                                                    <select class="form-control">-->
                                        <!--                                                        <option value=""></option>-->
                                        <!--                                                        <option>Red</option>-->
                                        <!--                                                        <option>Green</option>-->
                                        <!--                                                        <option>Brown</option>-->
                                        <!--                                                    </select>-->
                                        <!--                                                </div>-->
                                        <!--                                            </form>-->
                                        <!--                                        </div>-->
                                        <div class="tt-wrapper">
                                            <div class="tt-title-options">TEXTURE:</div>
                                            <ul class="tt-options-swatch options-large">
                                                <li @click="setActive" :class="{ 'active': activeIndex === null }"
                                                    v-if="product.options.length"><a
                                                    class="options-color" href="#">
												<span class="swatch-img">
													<img :src="product.picture"
                                                         :data-src="product.picture" alt="">
												</span>
                                                    <span class="swatch-label color-black"></span>
                                                </a></li>
                                                <li @click="setActive(option,index)"
                                                    v-for="(option, index) in product.options"
                                                    :class="{ 'active': activeIndex === index }"
                                                    :key="option.id"
                                                    v-if="product.options.length"><a class="options-color" href="#">
												<span class="swatch-img">
													<img :src="option.picture"
                                                         :data-src="option.picture" alt="">
												</span>
                                                    <span class="swatch-label color-black"></span>
                                                </a></li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tt-wrapper">
                                        <div class="tt-row-custom-01">
                                            <div class="col-item">
                                                <div class="tt-input-counter style-01">
                                                    <span @click="decrementQty" class="minus-btn"></span>
                                                    <input v-model="options.quatity" type="text" size="5">
                                                    <span @click="incrementQty" class="plus-btn"></span>
                                                </div>
                                            </div>
                                            <div class="col-item">
                                                <a @click="addToCart"  class="btn btn-lg text-white"><i class="icon-f-39"></i>ADD TO CART</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import {eventBus} from "../../../app";
import VueSlickCarousel from 'vue-slick-carousel'
import 'vue-slick-carousel/dist/vue-slick-carousel.css'
import 'vue-slick-carousel/dist/vue-slick-carousel-theme.css'

export default {
    data() {
        return {
            gallery: [],
            activeIndex: null,
            product: null,
            options: {
                quatity: 1,
                variant: null
            }
        }
    },
    methods: {
        setGallery(gallery = []) {
            this.gallery = gallery;
        },
        setActive(option = null, index = null) {
            this.setGallery(this.product.media_collection)

            if (!option) return;
            this.activeIndex = index
            this.options.variant = option;
            this.setGallery([option.picture, option.back_image])
        },
        closeModal() {
            // this.resetProduct()
        },
        resetProduct() {
            this.product = null
        },
        incrementQty() {
            this.options.quatity++;
        },
        decrementQty() {
            if ((this.options.quatity - 1) > 0) {
                this.options.quatity--;
            }
        },
        addToCart() {
            eventBus.$emit('addToCart', this.product.id, this.options)
            this.$refs.closeModal.click();
        }
    },
    created() {
        eventBus.$on('productPreview', (product) => {
            this.product = product
            this.setGallery(product.media_collection)
        })
    },
    components: {VueSlickCarousel},
}

</script>
