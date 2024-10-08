@extends('web.layout.master')
@section('title')
    Contact
@endsection
@section('body')


    <!-- Page Title -->
    <section class="page-title_two" style="background-image:url({{asset($workshop->title_image)}} )">
        <div class="page-title_two-gradient" style="background-image:url({{asset('/')}}web/images/background/pattern-6.png)"></div>
        <div class="container">
            <h2>{{$workshop->title}}</h2>
            <ul class="bread-crumb clearfix">
                <li><a href="{{route('home')}}">Home</a></li>
                <li>Workshop Detail</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- Sidebar Page Container -->
    <div class="sidebar-page-container left-sidebar">
        <div class="container">
            <div class="row clearfix">
                <!-- Content Side -->
                <div class="content-side col-md-12 col-sm-12">
                    <div class="service-detail">
                        <div class="service-detail_inner">
                            <div class="service-detail_image">
                                <img src="{{asset($workshop->feature_image)}}" alt="" />
                                <div class="service-detail_icon">
                                    <i class="flaticon-watch-tv"></i>
                                </div>
                            </div>
                            <div class="service-detail_content">
                                {!! $workshop->description_one !!}
                            </div>
                            <div class="news-detail_gallery">
                                <div class="row clearfix">
                                    <div class="column col-sm-12">
                                        <!-- Video Box -->
                                        <div class="video-box">
                                            <figure class="video-image">
                                                <img src="{{asset($workshop->video_image)}}" alt="" />
                                                <a href="{{$workshop->video_link}}" class="lightbox-video overlay-box"><span class="fa-solid fa-play fa-fw"><i class="ripple"></i></span></a>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="service-detail_content">
                                {!! $workshop->description_two !!}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
