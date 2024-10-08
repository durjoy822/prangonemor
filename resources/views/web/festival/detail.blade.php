@extends('web.layout.master')
@section('title')
    Contact
@endsection
@section('body')

    <!-- Page Title -->
    <section class="page-title_two" style="background-image:url({{asset($festival->title_image)}})">
        <div class="page-title_two-gradient" style="background-image:url({{asset('/')}}web/images/background/pattern-6.png)"></div>
        <div class="container">
            <h2>{{$festival->title}}</h2>
            <ul class="bread-crumb clearfix">
                <li><a href="{{route('home')}}">Home</a></li>
                <li>Festival Detail</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- Sidebar Page Container -->
    <div class="sidebar-page-container">
        <div class="container">
            <div class="row clearfix">

                <!-- Content Side -->
                <div class="content-side col-md-12 col-sm-12">
                    <div class="news-detail">
                        <div class="news-detail_inner">
                            <div class="news-detail_image">
                                <div class="news-detail_date">{{$festival->created_at->format('d')}} <br/> <span>{{$festival->created_at->format('F')}}</span></div>
                                <img src="{{asset($festival->feature_image)}}" alt="" />
                            </div>
                            <div class="news-detail_content">
                               {!! $festival->description_one !!}
                                <div class="news-detail_gallery">
                                    <div class="row clearfix">
                                        <div class="column col-sm-12">
                                            <!-- Video Box -->
                                            <div class="video-box">
                                                <figure class="video-image">
                                                    <img src="{{asset($festival->video_image)}}" alt="" />
                                                    <a href="{{$festival->video_link}}" class="lightbox-video overlay-box"><span class="fa-solid fa-play fa-fw"><i class="ripple"></i></span></a>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <!-- Post Share Options-->
                                <div class="news-detail_gallery">
                                    <div class="row clearfix">
                                        <div class="column col-sm-12"> 
                                            {!! $festival->description_two !!} 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
 
                        <!-- End Comments Area -->

                        <!-- Comment Form -->
                        <div class="comment-form">
                            <div class="group-title">
                                <h4>Leave a reply here</h4>
                            </div>
                            <!-- Default Form -->
                            <div class="default-form">
                                <form method="post" action="https://themerange.net/html/monic/blog.html">
                                    <div class="row clearfix">

                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <input type="text" name="username" placeholder="Name" required="">
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <input type="text" name="username" placeholder="Email" required="">
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <textarea class="" name="message" placeholder="Enter your Comment"></textarea>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <!-- Button Box -->
                                            <button type="submit" class="theme-btn btn-style-four">
												<span class="btn-wrap">
													<span class="text-one">send message</span>
													<span class="text-two">send message</span>
												</span>
                                            </button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                            <!-- End Default Form -->
                        </div>
                        <!--End Comment Form -->

                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
