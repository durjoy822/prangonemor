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
                        <h3 class="text-center">Show Booking Form</h3>
                        <hr/>
                        <h4 class="text-center text-primary">Drama : {{$drama[0]['title']}}</h4>
                         <br>
                        <form action="{{route('booking-store')}}" method="POST">
                            @csrf
                            <input type="hidden" name="drama_id" value="{{$drama[0]['id']}}">
                            <div class="row mb-3">
                                <label class="col-md-3">Name</label>
                                <div class="col-md-9">
                                    <input class="form-control" name="name" required/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Mobile</label>
                                <div class="col-md-9">
                                    <input class="form-control" name="phone" required/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Email</label>
                                <div class="col-md-9">
                                    <input class="form-control" name="email"  />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Price</label>
                                <div class="col-md-9">
                                     <select class="form-control" name="price_id" id="">
                                        <option>Select Price</option>
                                        @foreach ($dramaPrice as $price ) 
                                        <option value="{{$price->id}}">{{ $price->label }}-{{$price->price}}</option>
                                        @endforeach
                                     </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-success rounded-0" value="Booking Ticket"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Team One -->
@endsection
