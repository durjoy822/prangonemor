@extends('web.layout.master')
@section('title')
    Contact
@endsection
@section('body')

    <!-- Page Title -->
    <section class="page-title_two" style="background-image:url({{asset('/')}}web/images/background/page-title-2.jpg)">
        <div class="page-title_two-gradient" style="background-image:url({{asset('/')}}web/images/background/pattern-6.png)"></div>
        <div class="container">
            <h2>Our Experts</h2>
            <ul class="bread-crumb clearfix">
                <li><a href="{{route('home')}}">Home</a></li>
                <li>Team</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- Team One -->
    <section class="team-one">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card card-body border-0">
                        <h3 class="border-bottom pb-2">Primary Member</h3>
                    </div>
                </div>
            </div>
            <div class="row clearfix"> 
                <!-- Team Block One -->
                @foreach ($primary_members as $primary_member ) 
                    <div class="team-block_one col-lg-4 col-md-6 col-sm-12">
                        <div class="team-block_one-inner">
                            <div class="border-one"></div>
                            <div class="border-two"></div>
                            <!-- Social Box -->
                            <div class="team-block_one-socials">
                                <a href="{{$primary_member->facebook}}"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="{{$primary_member->twitter}}"><i class="fa-brands fa-twitter"></i></a>
                                <a href="{{$primary_member->instagram}}"><i class="fa-brands fa-instagram"></i></a>
                                <a href="{{$primary_member->youtube}}"><i class="fa-brands fa-youtube"></i></a>
                            </div>
                            <div class="team-block_one-image">
                                <a href="{{route('team-detail',$primary_member->id)}}"><img src="{{$primary_member->image}}" alt="" /></a>
                            </div>
                            <div class="team-block_one-content">
                                <div class="team-block_one-share flaticon-share"></div>
                                <h4 class="team-block_one-heading"><a href="{{route('team-detail',$primary_member->id)}}">{{$primary_member->name}}</a></h4>
                                <div class="team-block_one-title">{{$primary_member->designation}}</div>
                            </div>
                        </div>
                    </div> 
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Team One -->

    <section class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card card-body border-0 bg-transparent">
                        <h3 class="border-bottom pb-2">Permanent Member</h3>
                    </div>
                </div>
            </div>
            <div class="row clearfix"> 
                <!-- Team Block One -->
                @foreach ($permanent_members as $permanent_member )
                    <div class="team-block_one col-lg-4 col-md-6 col-sm-12">
                        <div class="team-block_one-inner">
                            <div class="border-one"></div>
                            <div class="border-two"></div>
                            <!-- Social Box -->
                            <div class="team-block_one-socials">
                                <a href="{{$permanent_member->facebook}}"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="{{$permanent_member->twitter}}"><i class="fa-brands fa-twitter"></i></a>
                                <a href="{{$permanent_member->instagram}}"><i class="fa-brands fa-instagram"></i></a>
                                <a href="{{$permanent_member->youtube}}"><i class="fa-brands fa-youtube"></i></a>
                            </div>
                            <div class="team-block_one-image">
                                <a href="{{route('team-detail',$permanent_member->id)}}"><img src="{{$permanent_member->image }}" alt="" /></a>
                            </div>
                            <div class="team-block_one-content">
                                <div class="team-block_one-share flaticon-share"></div>
                                <h4 class="team-block_one-heading"><a href="{{route('team-detail',$permanent_member->id)}}">{{$permanent_member->name }}</a></h4>
                                <div class="team-block_one-title">{{$permanent_member->designation }}</div>
                            </div>
                        </div>
                    </div> 
                @endforeach 
            </div>
        </div>
    </section>

    <section class="team-one">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card card-body border-0">
                        <h3 class="border-bottom pb-2">Associated Member</h3>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                @foreach ($associate_members as $associate_member )  
                    <!-- Team Block One -->
                    <div class="team-block_one col-lg-4 col-md-6 col-sm-12">
                        <div class="team-block_one-inner">
                            <div class="border-one"></div>
                            <div class="border-two"></div>
                            <!-- Social Box -->
                            <div class="team-block_one-socials">
                                <a href="{{$associate_member->facebook}}"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="{{$associate_member->twitter}}"><i class="fa-brands fa-twitter"></i></a>
                                <a href="{{$associate_member->instagram}}"><i class="fa-brands fa-instagram"></i></a>
                                <a href="{{$associate_member->youtube}}"><i class="fa-brands fa-youtube"></i></a>
                            </div>
                            <div class="team-block_one-image">
                                <a href="{{route('team-detail',$associate_member->id)}}"><img src="{{$associate_member->image}}" alt="" /></a>
                            </div>
                            <div class="team-block_one-content">
                                <div class="team-block_one-share flaticon-share"></div>
                                <h4 class="team-block_one-heading"><a href="{{route('team-detail',$associate_member->id)}}">{{$associate_member->name}}</a></h4>
                                <div class="team-block_one-title">{{$associate_member->designation}}</div>
                            </div>
                        </div>
                    </div> 
                @endforeach
            </div>
        </div>
    </section>
@endsection
