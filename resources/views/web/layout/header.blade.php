<header class="main-header header-style-two"> 
    <!-- Header Top -->
    <div class="header-top_two">
        <div class="auto-container">
            <div class="inner-container">
                <div class="d-flex justify-content-between flex-wrap">
                    <ul class="header-top_list">
                        <li><span class="icon fas fa-mobile-android-alt px-2"></span><a href="tel:01897205737">01897 205 737</a></li>
                        <li class="c-d-none"><span class="icon fas fa-envelope fa-fw px-4"></span><a href="mailto:prangonemordhaka@gmail.com">prangonemordhaka@gmail.com</a></li>
                    </ul>
                    <!-- Social Box -->
                    <div class="header-social_box">
                        <a href="https://www.facebook.com/PrangonemorTheaterBangladesh" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://linkedin.com/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="https://twitter.com/" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                        <a href="https://youtube.com/" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Lower -->
    <div class="header-lower">
        <div class="auto-container">
            <div class="inner-container d-flex align-items-center justify-content-between">
                <!-- Logo Box -->
                <div class="logo-box d-flex align-items-center">
                    <div class="logo"><a href="{{route('home')}}"><img src="{{asset('/')}}web/images/logo-1.png" alt="" title=""></a></div>
                </div>

                <div class="nav-outer d-flex align-items-center">

                    <!-- Main Menu -->
                    <nav class="main-menu show navbar-expand-md">
                        <div class="navbar-header">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li class="dropdown"><a href="#">About</a>
                                    <ul>
                                        <li><a href="{{route('founder')}}">Founder</a></li>
                                        <li><a href="{{route('work-prangonemor')}}">Work Prangonemor</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{route('all-team')}}">Team</a></li>
                                <li class="dropdown"><a href="{{route('all-production')}}">Productions</a>
                                    <ul>
                                        @foreach ($drama as $drama ) 
                                            <li> 
                                                <a href="{{route('production-detail',$drama->id)}}">
                                                    {{$drama->title}}
                                                </a>
                                            </li> 
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="{{route('all-festival')}}">Festivals</a>
                                    <ul>
                                        @foreach ($festivals as $festival )
                                        <li><a href="{{route('festival-detail',$festival->id)}}">{{$festival->title}}</a></li> 
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="{{route('all-workshop')}}">Workshops</a>
                                    <ul>
                                        @foreach ($workshops as $workshop )
                                            <li><a href="{{route('workshop-detail',$workshop->id)}}">{{$workshop->title}}</a></li> 
                                        @endforeach 
                                        
                                    </ul>
                                </li>
                                <li class=""><a href="{{route('contact')}}">Contact</a></li>
                            </ul>
                        </div>

                    </nav>
                    <!-- Main Menu End-->

                </div>

                <!-- Outer Box -->
                <div class="outer-box d-flex align-items-center">

                    <!-- Header Phone Box -->
                    <div class="header-phone_box">
                        <div class="header-phone_box-inner">
                            <div class="header-phone_box-icon flaticon-consulting"></div>
                            Help line <br>
                            <a href="tel:01916136606">01897 205 737</a>
                        </div>
                    </div>

                    <!-- Mobile Navigation Toggler -->
                    <div class="mobile-nav-toggler"><span class="icon"><img src="{{asset('/')}}web/images/icons/menu.png" alt="" /></span></div>

                </div>
                <!-- End Outer Box -->

            </div>

        </div>
    </div>
    <!-- End Header Lower -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon far fa-times fa-fw"></span></div>
        <nav class="menu-box">
            <div class="nav-logo"><a href="index.html"><img src="{{asset('/')}}web/images/logo-1.png" alt="" title=""></a></div>
            <!-- Search -->
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        </nav>
    </div>
    <!--		&lt;!&ndash; End Mobile Menu &ndash;&gt;-->
    <!--		-->
</header>
