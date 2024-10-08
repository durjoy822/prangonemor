@extends('web.layout.master')
@section('title')
    Contact
@endsection
@section('body')

    <!-- Page Title -->
    <section class="page-title_two" style="background-image:url({{asset('/')}}web/images/background/page-title-2.jpg)">
        <div class="page-title_two-gradient" style="background-image:url({{asset('/')}}web/images/background/pattern-6.png)"></div>
        <div class="container">
            <h2>Team Detail</h2>
            <ul class="bread-crumb clearfix">
                <li><a href="{{route('home')}}">Home</a></li>
                <li>Team Detail</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- Team Detail Two -->
    <section class="team-detail_two">
        <div class="container">
            <div class="row clearfix">

                <!-- Image Column -->
                <div class="image-column col-lg-5 col-md-12 col-sm-12">
                    <div class="image">
                        <img src="{{asset($team->image)}} " alt="" />
                    </div>
                </div>

                <!-- Content Column -->
                <div class="content-column col-lg-7 col-md-12 col-sm-12">
                    <div class="content-inner">
                        <h2 class="team-detail_two-title">{{$team->name }}</h2>
                        <div class="team-detail_two-designation">{{$team->designation }}</div>
                        <div class="team-detail_two-text">{{$team->short_description}}</div>
                        <ul class="team-detail_two-list"> 
                            <li><span>Experience:</span>{{$team->experience}}</li>
                            <li><span>Location:</span>{{$team->location}}</li>
                            <li><span>Email:</span>{{$team->email}}</li>
                            <li><span>Phone:</span>{{$team->phone}}</li>
                        </ul>
                        <!-- Socials Box -->
                        <div class="team-detail_two-socials"> 
                            <a href="{{$team->facebook}}"><i class="fab fa-facebook-f fa-fw"></i></a>
                            <a href="{{$team->twitter}}"><i class="fab fa-twitter fa-fw"></i></a>
                            <a href="{{$team->linkdin}}"><i class="fab fa-linkedin-in fa-fw"></i></a>
                            <a href="{{$team->youtube}}"><i class="fab fa-youtube fa-fw"></i></a>
                        </div> 
                    </div>
                </div>

            </div>
            <div class="lower-content">
                {{$team->long_description}}
            </div>
            <div class="contact-box">
                <h3>Contact Me</h3>
                <div class="text">In nec libero luctus, aliquet turpis at, vehicula nisi. Cras eget mauris in nisl tempus lobortis.</div>

                <!-- Default Form -->
                <div class="default-form">
                    <form method="post" action="">
                        <div class="row clearfix">

                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="text" name="username" placeholder="Full Name" autocomplete="off" required="">
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="text" name="phone" placeholder="Phone Number" autocomplete="off" required="">
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="text" name="email" placeholder="Email Address" autocomplete="off" required="">
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <select name="currency" class="custom-select-box">
                                    <option>Select Service Type</option>
                                    <option>Service 01</option>
                                    <option>Service 02</option>
                                    <option>Service 03</option>
                                    <option>Service 04</option>
                                </select>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <textarea class="" name="message" placeholder="Type your message"></textarea>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 form-group text-center">
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
        </div>
    </section>
    <!-- End Team Detail Two -->
@endsection
