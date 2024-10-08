@extends('web.layout.master')
@section('title')
Founder
@endsection
@section('body') 
    <!-- Page Title -->
    <section class="page-title_two" style="background-image:url({{asset('/')}}web/images/background/page-title-2.jpg)">
        <div class="page-title_two-gradient" style="background-image:url({{asset('/')}}web/images/background/pattern-6.png)"></div>
        <div class="container">
            <h2>Our Experts</h2>
            <ul class="bread-crumb clearfix">
                <li><a href="{{route('home')}}">Home</a></li>
                <li>Founder</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- Team One -->
    <section class="team-one">
        <div class="container">
            <div class="row clearfix"> 
                <!-- Team Block One -->
                @foreach ($founders as $founder) 
                    <div class="team-block_one col-md-6 col-sm-12">
                        <div class="team-block_one-inner">
                            <div class="border-one"></div>
                            <div class="border-two"></div>
                            <!-- Social Box -->
                            <div class="team-block_one-socials">
                                <a href="{{$founder->facebook}}"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="{{$founder->instagram}}"><i class="fa-brands fa-instagram"></i></a>
                                <a href="{{$founder->linkdin}}"><i class="fa-brands fa-linkedin"></i></a>
                                <a href="{{$founder->twitter}}"><i class="fa-brands fa-twitter"></i></a>
                                <a href="{{$founder->youtube}}"><i class="fa-brands fa-youtube"></i></a>
                            </div>
                            <div class="team-block_one-image"  >
                                <a href="{{route('team-detail',$founder->id)}}"> 
                                    <img src="{{$founder->image }}"  alt="" />
                                </a>
                            </div>
                            <div class="team-block_one-content">
                                <div class="team-block_one-share flaticon-share"></div>
                                <h4 class="team-block_one-heading"><a href="{{route('team-detail',$founder->id)}}">{{$founder->name }}</a></h4>
                                <div class="team-block_one-title">{{$founder->designation }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach 
            </div>
        </div>
    </section>
    <!-- End Team One -->


@endsection

