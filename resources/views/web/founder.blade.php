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
                <li>Team</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- Team One -->
    <section class="team-one">
        <div class="container">
            <div class="row clearfix">

                <!-- Team Block One -->
                <div class="team-block_one col-md-6 col-sm-12">
                    <div class="team-block_one-inner">
                        <div class="border-one"></div>
                        <div class="border-two"></div>
                        <!-- Social Box -->
                        <div class="team-block_one-socials">
                            <a href="https://facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="https://instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                            <a href="https://twitter.com/"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
                            <a href="https://youtube.com/"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                        <div class="team-block_one-image">
                            <a href="{{route('team-detail')}}"><img src="{{asset('/')}}web/images/resource/team-1.jpg" alt="" /></a>
                        </div>
                        <div class="team-block_one-content">
                            <div class="team-block_one-share flaticon-share"></div>
                            <h4 class="team-block_one-heading"><a href="{{route('team-detail')}}">Noah Smith</a></h4>
                            <div class="team-block_one-title">MANAGER</div>
                        </div>
                    </div>
                </div>

                <!-- Team Block One -->
                <div class="team-block_one col-md-6 col-sm-12">
                    <div class="team-block_one-inner">
                        <div class="border-one"></div>
                        <div class="border-two"></div>
                        <!-- Social Box -->
                        <div class="team-block_one-socials">
                            <a href="https://facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="https://instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                            <a href="https://twitter.com/"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
                            <a href="https://youtube.com/"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                        <div class="team-block_one-image">
                            <a href="{{route('team-detail')}}"><img src="{{asset('/')}}web/images/resource/team-2.jpg" alt="" /></a>
                        </div>
                        <div class="team-block_one-content">
                            <div class="team-block_one-share flaticon-share"></div>
                            <h4 class="team-block_one-heading"><a href="{{route('team-detail')}}">Emma Evelyn</a></h4>
                            <div class="team-block_one-title">MANAGER</div>
                        </div>
                    </div>
                </div>

                <!-- Team Block One -->


            </div>
        </div>
    </section>
    <!-- End Team One -->


@endsection

