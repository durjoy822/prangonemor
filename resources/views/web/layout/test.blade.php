

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Prangonemor || @yield('title') </title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('web')}}/assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('web')}}/assets/images/favicons/fav-icon-big.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('web')}}/assets/images/favicons/fav-icon-big.png" />
    <link rel="manifest" href="{{asset('web')}}/assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Zeinet HTML 5 Template " />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&amp;display=swap"
          rel="stylesheet">

    <link rel="stylesheet" href="{{asset('web')}}/assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{asset('web')}}/assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="{{asset('web')}}/assets/vendors/animate/custom-animate.css" />
    <link rel="stylesheet" href="{{asset('web')}}/assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="{{asset('web')}}/assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="{{asset('web')}}/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="{{asset('web')}}/assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="{{asset('web')}}/assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="{{asset('web')}}/assets/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="{{asset('web')}}/assets/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="{{asset('web')}}/assets/vendors/zeinet-icons/style.css">
    <link rel="stylesheet" href="{{asset('web')}}/assets/vendors/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="{{asset('web')}}/assets/vendors/reey-font/stylesheet.css" />
    <link rel="stylesheet" href="{{asset('web')}}/assets/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="{{asset('web')}}/assets/vendors/owl-carousel/owl.theme.default.min.css" />
    <link rel="stylesheet" href="{{asset('web')}}/assets/vendors/bxslider/jquery.bxslider.css" />
    <link rel="stylesheet" href="{{asset('web')}}/assets/vendors/bootstrap-select/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="{{asset('web')}}/assets/vendors/vegas/vegas.min.css" />
    <link rel="stylesheet" href="{{asset('web')}}/assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="{{asset('web')}}/assets/vendors/timepicker/timePicker.css" />
    <!-- template styles -->
    <link rel="stylesheet" href="{{asset('web')}}/assets/css/zeinet.css" />
    <link rel="stylesheet" href="{{asset('web')}}/assets/css/zeinet-responsive.css" />

</head>
<body class="custom-cursor">

<div class="custom-cursor__cursor"></div>
<div class="custom-cursor__cursor-two"></div>

<!-- /.preloader start -->
<div class="preloader">
    <div class="preloader__image"></div>
</div>
<!-- /.preloader end -->


<div class="page-wrapper">
    <!----header start--->
    <header class="main-header-three">
        <!-------- top header start -------->
    {{-- @include('web.layout.top-header') --}}
    <!----- top header end -------->

        <!------Main navbar start------>
    @include('web.layout.header')
    <!-------- main navbar end -------->
    </header>
    <!----header end--->

    <div class="stricky-header stricked-menu main-menu main-menu-three">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->

    <!-------------Main content start  --------->
@yield('body')
<!-------------Main content end    --------->


    <!--Site Footer Start-->
@include('web.layout.footer')
<!--Site Footer End-->


</div>
<!-- /.page-wrapper -->


<!-----Mobile nav start ------>
@include('web.layout.mobile-nav')
<!------- Mobile nav end  ---->




<!-- script  start-->
<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="icon-right-arrow"></i></a>
<script src="{{asset('web')}}/assets/vendors/jquery/jquery-3.6.0.min.js"></script>
<script src="{{asset('web')}}/assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('web')}}/assets/vendors/jarallax/jarallax.min.js"></script>
<script src="{{asset('web')}}/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
<script src="{{asset('web')}}/assets/vendors/jquery-appear/jquery.appear.min.js"></script>
<script src="{{asset('web')}}/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
<script src="{{asset('web')}}/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="{{asset('web')}}/assets/vendors/jquery-validate/jquery.validate.min.js"></script>
<script src="{{asset('web')}}/assets/vendors/nouislider/nouislider.min.js"></script>
<script src="{{asset('web')}}/assets/vendors/odometer/odometer.min.js"></script>
<script src="{{asset('web')}}/assets/vendors/swiper/swiper.min.js"></script>
<script src="{{asset('web')}}/assets/vendors/tiny-slider/tiny-slider.min.js"></script>
<script src="{{asset('web')}}/assets/vendors/wnumb/wNumb.min.js"></script>
<script src="{{asset('web')}}/assets/vendors/wow/wow.js"></script>
<script src="{{asset('web')}}/assets/vendors/isotope/isotope.js"></script>
<script src="{{asset('web')}}/assets/vendors/countdown/countdown.min.js"></script>
<script src="{{asset('web')}}/assets/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="{{asset('web')}}/assets/vendors/bxslider/jquery.bxslider.min.js"></script>
<script src="{{asset('web')}}/assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
<script src="{{asset('web')}}/assets/vendors/vegas/vegas.min.js"></script>
<script src="{{asset('web')}}/assets/vendors/jquery-ui/jquery-ui.js"></script>
<script src="{{asset('web')}}/assets/vendors/timepicker/timePicker.js"></script>
<script src="{{asset('web')}}/assets/vendors/circleType/jquery.circleType.js"></script>
<script src="{{asset('web')}}/assets/vendors/circleType/jquery.lettering.min.js"></script>
<!-- template js -->
<script src="{{asset('web')}}/assets/js/zeinet.js"></script>
<!-- script  end-->
</body>
</html>





@include('web.layout.top-header')
@extends('web.layout.master')
@section('title')
    Home page
@endsection
@section('body')

    <!--Main Slider Start-->
    <section class="main-slider-three clearfix">
        <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                "delay": 5000
                }}'>
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="image-layer-three"
                         style="background-image: url({{asset('web')}}/assets/images/backgrounds/main-slider-3-1.jpg);"></div>
                    <!-- /.image-layer -->

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider-three__content">
                                    <h2 class="main-slider-three__title">SHEYMAPREM</h2>
                                    <div class="main-slider-three__btn-box">
                                        <a href="" class="thm-btn main-slider__btn"> Discover more</a>
                                    </div>
                                    <div class="main-slider-three__shape-1">
                                        <img src="{{asset('web')}}/assets/images/shapes/main-slider-three-shape-2.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="image-layer-three"
                         style="background-image: url({{asset('web')}}/assets/images/backgrounds/main-slider-3-2.jpg);"></div>
                    <!-- /.image-layer -->

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider-three__content">
                                    <h2 class="main-slider-three__title">Droho Prem Nari</h2>
                                    <div class="main-slider-three__btn-box">
                                        <a href="" class="thm-btn main-slider__btn"> Discover more</a>
                                    </div>
                                    <div class="main-slider-three__shape-1">
                                        <img src="{{asset('web')}}/assets/images/shapes/main-slider-three-shape-2.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="image-layer-three"
                         style="background-image: url({{asset('web')}}/assets/images/backgrounds/main-slider-3-3.jpg);"></div>
                    <!-- /.image-layer -->

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider-three__content">
                                    <h2 class="main-slider-three__title">Raktakarabi</h2>
                                    <div class="main-slider-three__btn-box">
                                        <a href="" class="thm-btn main-slider__btn"> Discover more</a>
                                    </div>
                                    <div class="main-slider-three__shape-1">
                                        <img src="{{asset('web')}}/assets/images/shapes/main-slider-three-shape-2.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- If we need navigation buttons -->
            <div class="main-slider-three__nav">
                <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                    <i class="icon-left-arrow"></i>
                </div>
                <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                    <i class="icon-right-arrow1"></i>
                </div>
            </div>

        </div>
    </section>
    <!--Main Slider End-->


    <!--About Two Start-->
    <section class="about-two">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-two__left">
                        <div class="section-title text-left">
                            <h2 class="section-title__title">About Prangonemor</h2>
                        </div>

                        <p class="about-two__text" style="text-align: justify!important;">In Bangladesh, Prangonemor Theatre was born in 2003 with a target to practice and
                            spread of Nobel owner Rabindranath Tagore’s drama by untiring regularity. The
                            presentation of Tagore’s drama is standard and artistically presented in Bangladesh
                            and India from the taking birth of it. </p>
                        <p class="mb-4" style="text-align: justify!important;">
                            Prangonemor is the only drama group in the world
                            who announced to practice and spread of Rabindranath’s drama. In this way, already
                            Prangonemor artistically completed five successful Tagore’s productions. Not only
                            that we also produce and perform others world famous playwrights regularly.
                            Those productions are extensively congratulated and praised in Bangladesh and
                            India.</p>
                        <a href="{{route('drama')}}" class="thm-btn about-two__btn">Discover more</a>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-two__right">
                        <div class="about-two__img-box wow slideInRight" data-wow-delay="100ms"
                             data-wow-duration="2500ms">
                            <div class="about-two__img">
                                <img src="{{asset('web')}}/assets/images/resources/about-two-img-1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Two End-->
    <!--Entertainment Start-->
    <section class="entertainment">
        <div class="entertainment-shape-bg"
             style="background-image: url({{asset('web')}}/assets/images/shapes/entertainment-shape-bg.png);"></div>
        <div class="container">
            <div class="section-title text-center">
                <h2 class="section-title__title">Our Upcomin Show</h2>
                <hr/>
            </div>
            <div class="row">
                <!--Entertainment Single Start-->
                <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="entertainment__single">
                        <div class="entertainment__img">
                            <img src="{{asset('web')}}/assets/images/resources/entertainment-img-1-1.jpg" alt="">
                            <div class="entertainment__hover-box">
                                <p class="entertainment__hover-text">2020 <i class="fa fa-star"></i>
                                    <span>6.5</span> </p>
                                <h3 class="entertainment__hover-title"><a href="movie.html">Last Gun Shoot</a></h3>
                                <div class="entertainment__video-link">
                                    <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                        <div class="entertainment__video-icon">
                                            <span class="fa fa-play"></span>
                                            <i class="ripple"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Entertainment Single End-->
                <!--Entertainment Single Start-->
                <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="entertainment__single">
                        <div class="entertainment__img">
                            <img src="{{asset('web')}}/assets/images/resources/entertainment-img-1-2.jpg" alt="">
                            <div class="entertainment__hover-box">
                                <p class="entertainment__hover-text">2020 <i class="fa fa-star"></i>
                                    <span>6.5</span> </p>
                                <h3 class="entertainment__hover-title"><a href="movie.html">Last Gun Shoot</a></h3>
                                <div class="entertainment__video-link">
                                    <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                        <div class="entertainment__video-icon">
                                            <span class="fa fa-play"></span>
                                            <i class="ripple"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Entertainment Single End-->

            </div>
        </div>
    </section>
    <!--Entertainment End-->

    <!--Newsletter Start-->
    <section class="service-available service-available-two">
        <div class="container">
            <div class="service-available__inne">
                <div class="service-available__shape-1 float-bob-y">
                    <img src="{{asset('web')}}/assets/images/shapes/service-available-shape-1.png" alt="">
                </div>
                <div class="service-available__shape-2 float-bob-x">
                    <img src="{{asset('web')}}/assets/images/shapes/service-available-shape-2.png" alt="">
                </div>
                <div class="service-available__shape-3 float-bob-y">
                    <img src="{{asset('web')}}/assets/images/shapes/service-available-shape-3.png" alt="">
                </div>
                <div class="service-available__shape-4 float-bob-x">
                    <img src="{{asset('web')}}/assets/images/shapes/service-available-shape-4.png" alt="">
                </div>
                <div class="service-available__left">
                    <h3 class="service-available__title">Check ability to connect our <br>
                        show in your area</h3>
                </div>
                <div class="service-available__right">
                    <form class="service-available__form" method="POST" action="{{route('newsletters.store')}}">
                        @csrf
                        <div class="service-available__input-box">
                            <input type="text" placeholder="Enter address" name="address">
                            <button type="submit" class="service-available__btn thm-btn">Check availability</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--Newsletter End-->
@endsection
