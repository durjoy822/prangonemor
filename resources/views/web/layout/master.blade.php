<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Prangonemor || @yield('title')</title>
    <!-- Stylesheets -->
    <link href="{{asset('/')}}web/css/bootstrap.css" rel="stylesheet">
    <link href="{{asset('/')}}web/css/style.css" rel="stylesheet">
    <link href="{{asset('/')}}web/css/responsive.css" rel="stylesheet">
    <!--Color Switcher Mockup-->
    <link href="{{asset('/')}}web/css/color-switcher-design.css" rel="stylesheet">
    <link href="{{asset('/')}}web/css/lightbox.css" rel="stylesheet">
    <!-- Color Themes -->
    <link id="theme-color-file" href="{{asset('/')}}web/css/color-themes/default-color.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500;9..40,600;9..40,700;9..40,800;9..40,900;9..40,1000&amp;display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('/')}}web/{{asset('/')}}web/images/fav-icon.png" type="image/x-icon">
    <link rel="icon" href="{{asset('/')}}web/{{asset('/')}}web/images/fav-icon.png" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>
<body>
<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>
    <!-- End Preloader -->
    <!-- Main Header / Header Style Two -->
    @include('web.layout.header')
    <!-- End Main Header -->
    @yield('body')
    @include('web.layout.footer')
</div>
<!-- End PageWrapper -->
<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fas fa-arrow-up fa-fw"></span></div>
<script src="{{asset('/')}}web/js/jquery.js"></script>
<script src="{{asset('/')}}web/js/popper.min.js"></script>
<script src="{{asset('/')}}web/js/bootstrap.min.js"></script>
<script src="{{asset('/')}}web/js/magnific-popup.min.js"></script>
<script src="{{asset('/')}}web/js/appear.js"></script>
<script src="{{asset('/')}}web/js/parallax.min.js"></script>
<script src="{{asset('/')}}web/js/tilt.jquery.min.js"></script>
<script src="{{asset('/')}}web/js/swiper.min.js"></script>
<script src="{{asset('/')}}web/js/wow.js"></script>
<script src="{{asset('/')}}web/js/parallax-scroll.js"></script>

<script src="{{asset('/')}}web/js/gsap.min.js"></script>
<script src="{{asset('/')}}web/js/SplitText.min.js"></script>
<script src="{{asset('/')}}web/js/ScrollTrigger.min.js"></script>
<script src="{{asset('/')}}web/js/ScrollToPlugin.min.js"></script>
<script src="{{asset('/')}}web/js/ScrollSmoother.min.js"></script>

<script src="{{asset('/')}}web/js/odometer.js"></script>
<script src="{{asset('/')}}web/js/parallax-scroll.js"></script>
<script src="{{asset('/')}}web/js/nav-tool.js"></script>
<script src="{{asset('/')}}web/js/jquery-ui.js"></script>
<script src="{{asset('/')}}web/js/color-settings.js"></script>
<script src="{{asset('/')}}web/js/lightbox.js"></script>
<script src="{{asset('/')}}web/js/script.js"></script>

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="{{asset('/')}}web/js/respond.js"></script><![endif]-->

<script>
    lightbox.option({
        albumLabel: 'Image %1 of %2',
        alwaysShowNavOnTouchDevices: false,
        fadeDuration: 600,
        fitImagesInViewport: true,
        imageFadeDuration: 600,
        maxWidth: 800,
        maxHeight: 600,
        positionFromTop: 50,
        resizeDuration: 700,
        showImageNumberLabel: true,
        wrapAround: false, // If true, when a user reaches the last image in a set, the right navigation arrow will appear and they will be to continue moving forward which will take them back to the first image in the set.
        // 	disable<a href="https://www.jqueryscript.net/tags.php?/Scroll/">Scroll</a>ing: false,
        // /*
        // Sanitize Title
        // If the caption data is trusted, for example you are hardcoding it in, then leave this to false.
        // This will free you to add html tags, such as links, in the caption.
        // If the caption data is user submitted or from some other untrusted source, then set this to true
        // to prevent xss and other injection attacks.
        //  */
        sanitizeTitle: false
    })
</script>
</body>
</html>
