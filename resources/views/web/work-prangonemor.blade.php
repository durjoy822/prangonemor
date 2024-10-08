@extends('web.layout.master')

@section('body')

    <!-- Page Title -->
    <section class="page-title_two" style="background-image:url({{asset('/')}}web/images/background/page-title-2.jpg)">
        <div class="page-title_two-gradient" style="background-image:url({{asset('/')}}web/images/background/pattern-6.png)"></div>
        <div class="container">
            <h2>Work Prangonemor</h2>
            <ul class="bread-crumb clearfix">
                <li><a href="{{route('home')}}">Home</a></li>
                <li>Work Prangonemor</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- Sidebar Page Container -->
    <div class="sidebar-page-container">
        <div class="container">
            <div class="row clearfix">
                <!-- Content Side -->
                @foreach ($workPrangonmors as  $workPrangonmor)
                    
                <div class="content-side col-sm-6">
                    <div class="blog-classic"> 
                        <!-- News Block -->
                        <div class="news-block_one">
                            <div class="news-block_one-inner">
                                <div class="news-block_one-image" style="top:42px" > 
                                    <div class="news-block_one-date">{{$workPrangonmor->created_at->format('d')}} <br/> <span>{{$workPrangonmor->created_at->format('F')}}</span></div>
                                    <a href="">
                                        <img  src="{{asset($workPrangonmor->image)}}" alt="" />
                                    </a>
                                    {{-- <div class="news-block_one-author">
                                        <div class="news-block_one-author_image"><img src="{{asset('/')}}web/images/resource/author-8.jpg" alt="" /></div>
                                        Monica Wasll
                                    </div> --}}
                                </div>
                                <div class="news-block_one-content">
                                    <h4 class="news-block_one-heading"><a href="">{{$workPrangonmor->title}}</a></h4>
                                    <div class="news-block_one-text">  {!! $workPrangonmor->description !!} </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div> 
                @endforeach
            </div>
        </div>
    </div>
@endsection
