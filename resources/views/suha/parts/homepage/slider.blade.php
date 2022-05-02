@if($slider && count($slides = $slider->slides)>0)
    <div class="container">
        <div class="pt-3">
            <!-- Hero Slides-->
            <div class="hero-slides owl-carousel">
            @foreach($slides as $slide)
                <!-- Single Hero Slide-->
                    <div class="single-hero-slide" style="background-image: url({{$slide->image}})">
                        <div class="slide-content h-100 d-flex align-items-center">
                            <div class="slide-text">
                                <h4 class="text-white mb-0" data-animation="fadeInUp" data-delay="100ms"
                                    data-duration="1000ms">
                                    {{$slide->title}}
                                </h4>
                                <p class="text-white" data-animation="fadeInUp" data-delay="400ms"
                                   data-duration="1000ms">{{$slide->subtitle}}</p>

                                @if($slide->btn_enabled)
                                    <a class="btn {{$slide->btn_color}} btn-sm" href="#"
                                       data-animation="fadeInUp"
                                       @if($slide->btn_link_external)
                                           target="_blank"
                                       @endif
                                       data-delay="800ms" data-duration="1000ms">{{$slide->btn_text}}</a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
                {{--                <!-- Single Hero Slide-->--}}
                {{--                <div class="single-hero-slide" style="background-image: url('img/bg-img/1.jpg')">--}}
                {{--                    <div class="slide-content h-100 d-flex align-items-center">--}}
                {{--                        <div class="slide-text">--}}
                {{--                            <h4 class="text-white mb-0" data-animation="fadeInUp" data-delay="100ms"--}}
                {{--                                data-duration="1000ms">--}}
                {{--                                Amazon Echo</h4>--}}
                {{--                            <p class="text-white" data-animation="fadeInUp" data-delay="400ms" data-duration="1000ms">--}}
                {{--                                3rd--}}
                {{--                                Generation, Charcoal</p><a class="btn btn-primary btn-sm" href="#"--}}
                {{--                                                           data-animation="fadeInUp"--}}
                {{--                                                           data-delay="800ms" data-duration="1000ms">Buy Now</a>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <!-- Single Hero Slide-->--}}
                {{--                <div class="single-hero-slide" style="background-image: url('img/bg-img/2.jpg')">--}}
                {{--                    <div class="slide-content h-100 d-flex align-items-center">--}}
                {{--                        <div class="slide-text">--}}
                {{--                            <h4 class="text-white mb-0" data-animation="fadeInUp" data-delay="100ms"--}}
                {{--                                data-duration="1000ms">--}}
                {{--                                Light Candle</h4>--}}
                {{--                            <p class="text-white" data-animation="fadeInUp" data-delay="400ms" data-duration="1000ms">--}}
                {{--                                Now--}}
                {{--                                only $22</p><a class="btn btn-success btn-sm" href="#" data-animation="fadeInUp"--}}
                {{--                                               data-delay="500ms" data-duration="1000ms">Buy Now</a>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <!-- Single Hero Slide-->--}}
                {{--                <div class="single-hero-slide" style="background-image: url('img/bg-img/3.jpg')">--}}
                {{--                    <div class="slide-content h-100 d-flex align-items-center">--}}
                {{--                        <div class="slide-text">--}}
                {{--                            <h4 class="text-white mb-0" data-animation="fadeInUp" data-delay="100ms"--}}
                {{--                                data-duration="1000ms">--}}
                {{--                                Best Furniture</h4>--}}
                {{--                            <p class="text-white" data-animation="fadeInUp" data-delay="400ms" data-duration="1000ms">3--}}
                {{--                                years warranty</p><a class="btn btn-danger btn-sm" href="#" data-animation="fadeInUp"--}}
                {{--                                                     data-delay="800ms" data-duration="1000ms">Buy Now</a>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
            </div>
        </div>
    </div>
@endif
