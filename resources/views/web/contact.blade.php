@extends('web.layout.master')
@section('title')
Contact
@endsection
@section('body')

    <!-- Page Title -->
    <section class="page-title_two" style="background-image:url({{asset('/')}}web/images/background/page-title-2.jpg)">
        <div class="page-title_two-gradient" style="background-image:url({{asset('/')}}web/images/background/pattern-6.png)"></div>
        <div class="container">
            <h2>Contact Us</h2>
            <ul class="bread-crumb clearfix">
                <li><a href="{{route('home')}}">Home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- Contact One -->
    <div class="contact-one" id="contact">
        <div class="container">
            <div class="row clearfix">

                <!-- Content Side -->
                <div class="contact-one_info-column col-lg-6 col-md-12 col-sm-12">
                    <div class="contact-one_info-outer">
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <div class="sec-title_title tx-split-text split-in-up">CONTACT WITH US</div>
                            <h2 class="sec-title_heading tx-split-text split-in-up">Ready to get in <br> touch with monic</h2>
                            <div class="sec-title_text tx-split-text split-in-up">Lorem ipsum dolor sit amet, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris </div>
                        </div>
                        <ul class="contact-one_info-list">
                            <li>
                                <span class="icon flaticon-map"></span>
                                Visit anytime
                                <strong>503 Old Buffalo Street, New York USA</strong>
                            </li>
                            <li>
                                <span class="icon flaticon-smartphone"></span>
                                Write email
                                <strong>needhelp@company.com</strong>
                            </li>
                            <li>
                                <span class="icon flaticon-clock"></span>
                                Have any question?
                                <strong>+88 (2800) 65354</strong>
                            </li>
                        </ul>

                        <ul class="contact-one_socials-links">
                            <span>Social Media :</span>
                            <li><a href="#" class="fa-brands fa-facebook-f fa-fw"></a></li>
                            <li><a href="#" class="fa-brands fa-twitter fa-fw"></a></li>
                            <li><a href="#" class="fa-brands fa-google fa-fw"></a></li>
                            <li><a href="#" class="fa-brands fa-dribbble fa-fw"></a></li>
                        </ul>

                    </div>
                </div>

                <!-- Form Column -->
                <div class="contact-one_form-column col-lg-6 col-md-12 col-sm-12">
                    <div class="contact-one_form-outer">
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <div class="sec-title_title tx-split-text split-in-up">Quick Contact</div>
                            <h2 class="sec-title_heading tx-split-text split-in-up">Interested in discussing?</h2>
                            <div class="sec-title_text tx-split-text split-in-up">Please feel free to get in touch with us using the contact form below. We'd love to hear for you.</div>
                        </div>

                        <!-- Default Form -->
                        <div class="default-form contact-form">
                            <form method="post" action="https://themerange.net/html/monic/blog.html">
                                <div class="row clearfix">

                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="username" placeholder="Name" required="">
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="username" placeholder="Email" required="">
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="subject" placeholder="Subject" required="">
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="phone" placeholder="Phone" required="">
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
                </div>

            </div>
        </div>
    </div>


    <!-- Map One -->
    <section class="map-one">
        <div class="container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d805184.6331292129!2d144.49266890254142!3d-37.97123689954809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2s!4v1574408946759!5m2!1sen!2s" allowfullscreen=""></iframe>
        </div>
    </section>
    <!-- End Map One -->


@endsection
