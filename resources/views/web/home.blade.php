@extends('web.layout.master')

@section('body')
    <!-- Slider One -->
    <div class="auto-container" style="position: relative">
        <div class="row">
            <div class="col-md-6 cmb  p-0">
                <section class="slider-two">
                    <div class="swiper_carousel swiper-container" data-swiper='{"spaceBetween":0,"slidesPerView":1,"navigation":{"nextEl":".slider-two_button-next","prevEl":".slider-two_button-prev","clickable":"true"},"pagination":{"el":".slider-two_pagination","clickable":"true"},"autoplay":{"delay":"6000"},"breakpoints":{"320":{"slidesPerView":1,"spaceBetween":0},"480":{"slidesPerView":1,"spaceBetween":0},"640":{"slidesPerView":1,"spaceBetween":0}}}'>
                        <div class="swiper-wrapper" > 
                            <!-- Slide -->
                            @foreach ($upcoming_show_productions as $up_show_pr) 
                            <div class="swiper-slide">
                                <div class="slider-two_image" style="background-image: url({{asset($up_show_pr->slider_image)}})"></div> 
                                <div class="slider-three_shape" style="background-image: url({{asset('/')}}web/images/main-slider/slider-three_shape.png)"></div> 
                                <div class="container">
                                    <!-- Content Column -->
                                    <div class="slider-two_content-column">
                                        <div class="slider-two_content-inner">
                                            <div class="slider-two_title">Upcoming Show</div>
                                            <h6 class="slider-two_heading">{{$up_show_pr->title}}</h6>
                                            <!-- Button Box -->
                                            <div class="slider-two_button-box">
                                                <a class="btn-style-one theme-btn" href="{{route('show-booking-form',$up_show_pr->id)}}">
                                                    <div class="btn-wrap">
                                                        <span class="text-one">Booking Ticket</span>
                                                        <span class="text-two">Booking Ticket</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                            @endforeach  
                        </div> 
                        <!-- If we need pagination -->
                        <div class="slider-two_pagination"></div> 
                        <!-- If we need navigation buttons -->
                        <div class="slider-two_button-prev fas fa-arrow-left fa-fw"></div>
                        <div class="slider-two_button-next fas fa-arrow-right fa-fw"></div>

                    </div>
                </section>
            </div>
            <div class="fluid-one_color-layer2"></div>
            <div class="col-md-6  p-0" >
                <section class="slider-two abcd">
                    <div class="swiper_carousel swiper-container h-519" data-swiper='{"spaceBetween":0,"slidesPerView":1,"navigation":{"nextEl":".slider-two_button-next","prevEl":".slider-two_button-prev","clickable":"true"},"pagination":{"el":".slider-two_pagination","clickable":"true"},"autoplay":{"delay":"6000"},"breakpoints":{"320":{"slidesPerView":1,"spaceBetween":0},"480":{"slidesPerView":1,"spaceBetween":0},"640":{"slidesPerView":1,"spaceBetween":0}}}'>
                        <div class="swiper-wrapper"> 
                            <!-- Slide -->
                            @foreach ($upcoming_new_productions as $up_new_pr ) 
                                <div class="swiper-slide">
                                    <div class="slider-two_image" style="background-image: url({{asset($up_new_pr->slider_image)}})"></div> 
                                    <div class="slider-two_pattern" style="background-image: url({{asset('/')}}web/images/main-slider/slider-two_pattern.png)"></div>
                                    <div class="container">
                                        <!-- Content Column -->
                                        <div class="slider-two_content-column">
                                            <div class="slider-two_content-inner">

                                                <div class="slider-two_title">Upcoming New Production</div>
                                                <h6 class="slider-two_heading">{{$up_new_pr->title}}</h6>
                                                <!-- Button Box -->
                                                 
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            @endforeach
                        </div>

                        <!-- If we need pagination -->
                        <div class="slider-two_pagination"></div>

                        <!-- If we need navigation buttons -->
                        <div class="slider-two_button-prev fas fa-arrow-left fa-fw"></div>
                        <div class="slider-two_button-next fas fa-arrow-right fa-fw"></div>

                    </div>
                </section>
            </div>

        </div>
    </div>
    <!-- End Slider One -->

    <!-- Our All Production  -->
    <section class="gallery-two">
        <div class="gallery-two_pattern" style="background-image: url({{asset('/')}}web/images/background/gallery-two_pattern.png)"></div>
        <div class="gallery-two_pattern-two" style="background-image: url({{asset('/')}}web/images/background/gallery-two_pattern-1.png)"></div>
        <div class="container">
            <!-- Sec Title -->
            <div class="sec-title mb-3">
                <h2 class="sec-title_heading tx-split-text split-in-up text-center">Our All Production</h2>
            </div>
        </div>
        <div class="swiper_carousel swiper-container" data-swiper='{"spaceBetween":30,"slidesPerView":2,"centeredSlides":true,"loop":true,"navigation":{"nextEl":".swiper-button-next","prevEl":".swiper-button-prev","clickable":"true"},"pagination":{"el":".gallery-one_pagination","clickable":"true"},"autoplay":{"delay":"6000"},"breakpoints":{"320":{"slidesPerView":1,"spaceBetween":0},"700":{"slidesPerView":1,"spaceBetween":0},"600":{"slidesPerView":2,"spaceBetween":15},"700":{"slidesPerView":2,"spaceBetween":15},"900":{"slidesPerView":3,"spaceBetween":15},"1000":{"slidesPerView":3,"spaceBetween":15},"1200":{"slidesPerView":4,"spaceBetween":15},"1500":{"slidesPerView":5,"spaceBetween":15}}}'>
            <div class="swiper-wrapper"> 
                <!-- Slide -->
                @foreach ($productions as $production )
                    <div class="swiper-slide">
                        <!-- Gallery Block One -->
                        <div class="gallery-block_one">
                            <div class="gallery-block_one-inner">
                                <div class="gallery-block_one-image">
                                    <img src="{{asset($production->video_background_image)}}" alt="" style="height: 400px!important;"/>
                                    <div class="gallery-block_one-overlay">
                                        <a target="_blank" href="{{$production->video_link}}" class="lightbox-video gallery-block_one-play"><span class="fa-solid fa-play fa-fw"><i class="ripple"></i></span></a>
                                         
                                        <div class="gallery-block_one-content"> 
                                            <h4 class="gallery-block_one-heading"><a target="_blank" href="{{route('production-detail',$production->id)}}">{{$production->title}}</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                @endforeach
               

            </div>
        </div>
    </section>
    <!-- End Our All Production Two -->


    <!-- Image Gallery  -->
    <section class="fiber-one pt-2 pb-3">
        <div class="fiber-one_pattern" style="background-image: url({{asset('/')}}web/images/background/fiber-one_pattern.png)"></div>
        <div class="fiber-one_pattern-two" style="background-image: url({{asset('/')}}web/images/background/fiber-one_pattern-1.png)"></div>
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered mb-3">
                <h2 class="sec-title_heading tx-split-text split-in-up mb-0">Image Gallery</h2>
            </div>
            <div class="swiper_carousel swiper-container" data-swiper='{"spaceBetween":30,"slidesPerView":3,"centeredSlides":false,"loop":true,"navigation":{"nextEl":".fiber-one_button-next","prevEl":".fiber-one_button-prev","clickable":"true"},"pagination":{"el":".fiber-one_pagination","clickable":"true"},"autoplay":{"delay":"6000"},"breakpoints":{"320":{"slidesPerView":1,"spaceBetween":15},"700":{"slidesPerView":2,"spaceBetween":25},"600":{"slidesPerView":2,"spaceBetween":25},"700":{"slidesPerView":2,"spaceBetween":25},"900":{"slidesPerView":2,"spaceBetween":25},"1000":{"slidesPerView":3,"spaceBetween":25},"1200":{"slidesPerView":3,"spaceBetween":30},"1500":{"slidesPerView":3,"spaceBetween":30}}}'>
                <div class="swiper-wrapper">

                    <!-- Slide -->
                    @foreach ($productions as $pro_img )
                        
                    <div class="swiper-slide">
                        <!-- Fiber Block One -->
                        <div class="fiber-block_one">
                            <div class="fiber-block_one-inner">
                                <div class="fiber-block_one-image" >
                                    <a target="_blank" href="{{route('production-detail',$pro_img->id)}}"><img style="height: 250px" src="{{asset($pro_img->feature_image)}} " alt="" /></a>
                                </div>
                                <div class="fiber-block_one-content">
                                    <h4 class="fiber-block_one-heading text-center"><a target="_blank" href="{{route('production-detail',$pro_img->id)}}">{{$pro_img->title}}</a></h4>
                                </div>
                            </div>
                        </div>
                    </div> 
                    @endforeach

                </div>
                <!-- If we need pagination -->
                <div class="fiber-one_pagination"></div>
            </div>

        </div>
    </section>
    <!-- End Image Gallery  -->

    <!-- Gallery Two -->
    <section class="gallery-two">
        <div class="gallery-two_pattern" style="background-image: url({{asset('/')}}web/images/background/gallery-two_pattern.png)"></div>
        <div class="gallery-two_pattern-two" style="background-image: url({{asset('/')}}web/images/background/gallery-two_pattern-1.png)"></div>
        <div class="container">
            <!-- Sec Title -->
            <div class="sec-title mb-3">
                <h2 class="sec-title_heading text-center">Video Gallery</h2>
            </div>
        </div>
        <div class="swiper_carousel swiper-container" data-swiper='{"spaceBetween":30,"slidesPerView":2,"centeredSlides":true,"loop":true,"navigation":{"nextEl":".swiper-button-next","prevEl":".swiper-button-prev","clickable":"true"},"pagination":{"el":".gallery-one_pagination","clickable":"true"},"autoplay":{"delay":"6000"},"breakpoints":{"320":{"slidesPerView":1,"spaceBetween":0},"700":{"slidesPerView":1,"spaceBetween":0},"600":{"slidesPerView":2,"spaceBetween":15},"700":{"slidesPerView":2,"spaceBetween":15},"900":{"slidesPerView":3,"spaceBetween":15},"1000":{"slidesPerView":3,"spaceBetween":15},"1200":{"slidesPerView":4,"spaceBetween":15},"1500":{"slidesPerView":5,"spaceBetween":15}}}'>
            <div class="swiper-wrapper">

                <!-- Slide -->
                @foreach ($productions as $video )
                <div class="swiper-slide">
                    <!-- Gallery Block One -->
                    <div class="gallery-block_one">
                        <div class="gallery-block_one-inner">
                            <div class="gallery-block_one-image">
                                <img src="{{asset($video->video_background_image)}} " alt="" style="height: 400px!important;"/>
                                <div class="gallery-block_one-overlay">
                                    <a target="_blank" href="{{$video->video_link}}" class="lightbox-video gallery-block_one-play"><span class="fa-solid fa-play fa-fw"><i class="ripple"></i></span></a>
                                     
                                    <div class="gallery-block_one-content">
                                        <div class="gallery-block_one-title"></div>
                                        <h4 class="gallery-block_one-heading"><a target="_blank" href="{{route('production-detail',$video->id)}}">{{$video->title}}</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                

            </div>
        </div>
    </section>
    <!-- End Gallery Two -->

    <!-- Fluid Two -->
    <section class="fluid-two"> 
            <div class="outer-container clearfix">
                <!-- Left Box -->
                <div class="left-box clearfix">
                    <div class="left-box_inner">
                        <div class="fluid-one_color-layer"></div>
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <h2 class="sec-title_heading">About Prangonemor</h2>
                        </div>
                        <div class="fluid-two_text ">
                          {!! $about->details !!}
                        </div>
                        <!-- Button Box -->
                        <div class="fluid-two_button">
                            <a class="btn-style-four theme-btn" href="">
                                <div class="btn-wrap">
                                    <span class="text-one">get started</span>
                                    <span class="text-two">get started</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="fluid-two_router"></div>
                </div>
                <!-- Right Box -->
                <div class="right-box" style="background-image: url({{asset($about->image)}} );">
                    <div class="right-box_inner">
                        <div class="fluid-two_image"></div>
                    </div>
                </div>
            </div>  
    </section>
    <!-- End Fluid Two -->

@endsection
