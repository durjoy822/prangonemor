@extends('web.layout.master')
@section('title')
    Show Booking
@endsection
@section('body')

    <!-- Page Title -->
    <section class="page-title_two" style="background-image:url({{asset('/')}}web/images/background/page-title-2.jpg)">
        <div class="page-title_two-gradient" style="background-image:url({{asset('/')}}web/images/background/pattern-6.png)"></div>
        <div class="container">
            <h2>Booking</h2>
            <ul class="bread-crumb clearfix">
                <li><a href="{{route('home')}}">Home</a></li>
                <li>Show Booking</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- Team One -->
    <section class="team-one">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card card-body border-0">
                        <h3 class="text-center text-primary ">Success Booking </h3>
                        <hr/>
                         
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Team One -->
@endsection
