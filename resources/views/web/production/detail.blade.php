@extends('web.layout.master')
@section('title')
    Contact
@endsection
@section('body')

    <!-- Page Title -->
    <section class="page-title_two" style="background-image:url({{asset($drama->title_image)}} )">
        <div class="page-title_two-gradient" style="background-image:url({{asset('/')}}web/images/background/pattern-6.png)"></div>
        <div class="container">
            <h2>{{$drama->title}}</h2>
            <ul class="bread-crumb clearfix">
                <li><a href="{{route('home')}}">Home</a></li>
                <li>Production Detail</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- Project Detail -->
    <section class="project-detail">
        <div class="container">
            <div class="row clearfix">
                <!-- Image Column -->
                <div class="project-detail_image-column col-lg-5 col-md-8 col-sm-12">
                    <div class="project-detail_image">
                        <img src="{{asset($drama->feature_image)}} " alt="" style="height: 450px!important;"/>
                    </div>
                </div>
                <!-- Content Column -->
                <div class="project-detail_content-column col-lg-7 col-md-12 col-sm-12">
                    <div class="project-detail_content-outer">
                        <h2 class="project-detail_title">{{$drama->title}}</h2>
                        <p>  {{$drama->short_biography}}</p>
                        <ul class="project-detail_list">
                            <li><strong>Director :</strong>{{$drama->director}}</li>
                            <li><strong>Writer :</strong>{{$drama->writer}}</li>
                            <li><strong>Producer :</strong>{{$drama->producer}}</li> 
                            <li><strong>Release date:</strong>{{$drama->release_date}}</li>  
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="pb-3"/>
            <div class="project-detail_lower-content">
                <div class="row clearfix">
                    <!-- Column --> 
                    <div class="col-md-12">
                        <div class="card card-body rounded-0 border-0">
                            {!! $drama->description_one !!}
                        </div>
                    </div>
                </div>
                <!--End Comment Form -->
            </div>
        </div>
    </section>
    <!-- End Project Detail -->


    <!-- CTA One -->
    <section class="cta-one" style="background-image: url({{asset($drama->video_background_image)}});background-position:cover">
        <div class="cta-one_pattern" style="background-image: url({{asset('/')}}web/images/background/pattern-4.png)" data-parallax='{"x" : 80}'></div>
        <div class="auto-container">
            <div class="row"> 
                <div class="col-11 mx-auto">  
                    <a href="{{$drama->video_link}}" class="lightbox-video cta-one_play"><span class="fa-solid fa-play fa-fw"><i class="ripple"></i></span></a>
                </div>
            </div>
        </div>
    </section>
    <!-- End CTA One -->

    <section class="project-detail">
        <div class="container">
            <div class="project-detail_lower-content">
                <div class="row clearfix">
                    <!-- Column --> 
                    <div class="col-md-12">
                        <div class="card card-body rounded-0 border-0">
                            {!! $drama->description_two !!}
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
    </section>
    <!-- End Project Detail -->

@endsection
