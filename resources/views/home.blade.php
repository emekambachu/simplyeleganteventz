@extends('includes.layout')

@section('title')
    Home
@endsection

@section('content')
    <!-- Banner Section Three -->
    <section class="banner-section-three">
        <div class="main-slider-carousel owl-carousel owl-theme">

            <div class="slide" style="background-image: url({{ asset('images/main-slider/image-3.jpg') }})">
                <div class="auto-container">
                    <!-- Content Column -->
                    <div class="content-column">
                        <div class="inner-column">
                            <div class="title">Simply Elegant Events & Apparel</div>
                            <h2 class="text-white">A catering and event management company, based in Abuja, Nigeria.</h2>
                            <div class="btns-box">
                                <a href="{{ url('reservation') }}" class="theme-btn btn-style-seven">
                                    <span class="txt">Reservation</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slide" style="background-image: url({{ asset('images/main-slider/image-4.jpg') }})">
                <div class="auto-container">
                    <!-- Content Column -->
                    <div class="content-column">
                        <div class="inner-column">
                            <h3 class="text-white">We provide custom catering services, safety African, oriental, continental dishes and cocktails. </h3>
                            <div class="btns-box">
                                <a href="{{ url('reservation') }}" class="theme-btn btn-style-seven">
                                    <span class="txt">Reservation</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Banner Section Three -->

    <!-- Menu Section Four -->
    <section class="menu-section-four">
        <div class="auto-container">
            <div class="inner-container clearfix">

                <!-- Menu Block Six -->
                <div class="menu-block-six col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="{{ asset('images/home/birthday.jpg') }}" alt="" />
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <h2><a href="">Birthdays</a></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Menu Block Six -->
                <div class="menu-block-six col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="{{ asset('images/home/corporate.jpg') }}" alt="" />
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <h2><a href="">Corporate</a></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Menu Block Six -->
                <div class="menu-block-six col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="{{ asset('images/home/weddings.jpg') }}" alt="" />
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <h2><a href="">Weddings</a></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Menu Section Four -->

    <!-- Welcome Section Two -->
    <section class="welcome-section-two">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Sec Title Two -->
                        <div class="sec-title-two">
                            <div id="about-us" class="title">Introduction</div>
                            <h2>Simply Elegant Events and Apparels</h2>
                            <div class="separator"></div>
                        </div>
                        <div class="bold-text">At Simply Elegant Events & Apparel we believe in providing every client with an unrivaled level of services that capture the essence of your event.</div>
                        <div class="text">Personal Event Planning such as Wedding Planning,Anniversaries, Birthday paties,End of the year parties, Bridal shower, Bachelor's Eve, Pre-wedding party, Baby shower, Naming ceremony, Dinner parties,Outdoor Events. supplying of Aso-ebi, Sales of unisex clothes and accessories. </div>

                        <!-- Fact Counter -->
{{--                        <div class="fact-counter">--}}
{{--                            <div class="row clearfix">--}}

{{--                                <!-- Column -->--}}
{{--                                <div class="column counter-column col-lg-4 col-md-4 col-sm-12">--}}
{{--                                    <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">--}}
{{--                                        <div class="content">--}}
{{--                                            <div class="icon flaticon-trophy-2"></div>--}}
{{--                                            <div class="count-outer count-box">--}}
{{--                                                <span class="count-text" data-speed="3500" data-stop="17">0</span>+--}}
{{--                                            </div>--}}
{{--                                            <div class="counter-title">Trophies</div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <!-- Column -->--}}
{{--                                <div class="column counter-column col-lg-4 col-md-4 col-sm-12">--}}
{{--                                    <div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">--}}
{{--                                        <div class="content">--}}
{{--                                            <div class="icon flaticon-checked-3"></div>--}}
{{--                                            <div class="count-outer count-box">--}}
{{--                                                <span class="count-text" data-speed="2500" data-stop="29">0</span>+--}}
{{--                                            </div>--}}
{{--                                            <div class="counter-title">Rewards</div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <!-- Column -->--}}
{{--                                <div class="column counter-column col-lg-4 col-md-4 col-sm-12">--}}
{{--                                    <div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">--}}
{{--                                        <div class="content">--}}
{{--                                            <div class="icon flaticon-darts"></div>--}}
{{--                                            <div class="count-outer count-box">--}}
{{--                                                <span class="count-text" data-speed="3000" data-stop="77">0</span>+--}}
{{--                                            </div>--}}
{{--                                            <div class="counter-title">Success Mission</div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="btn-box">--}}
{{--                            <a href="{{ url('about') }}" class="theme-btn btn-style-six">--}}
{{--                                <span class="txt">About us</span></a>--}}
{{--                        </div>--}}

                    </div>
                </div>
                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image wow fadeInRight" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <img src="{{ asset('images/home/h1.jpg') }}" alt="" />
                        </div>
                        <div class="image-two wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <img src="{{ asset('images/home/h2.jpg') }}" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Welcome Section -->

    <!-- Menu Section Five -->
    <section class="menu-section-five" style="background-image: url({{ asset('images/background/6.jpg') }})">
        <div class="auto-container">
            <!-- Sec Title Two -->
            <div class="sec-title-two light centered">
                <div id="food" class="title">Catering</div>
                <h2>Our Food</h2>
                <div class="separator"></div>
            </div>
            <!-- Menu Info Tabs -->
            <div class="menu-info-tabs-three">
                <div class="menu-tabs-three tabs-box">

                    <!--Tabs Container-->
                    <div class="tabs-content">

                        <!-- Tab / Active Tab -->
                        <div class="tab active-tab" id="menu-all">
                            <div class="content">
                                <div class="row clearfix">

                                    <!-- Menu Block Seven -->
                                    <div class="menu-block-seven col-lg-3 col-md-6 col-sm-12">
                                        <div class="inner-box">
                                            <div class="image">
                                                <img src="{{ asset('images/home/food/1.jpg') }}" alt="" />
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Menu Block Seven -->
                                    <div class="menu-block-seven col-lg-3 col-md-6 col-sm-12">
                                        <div class="inner-box">
                                            <div class="image">
                                                <img src="{{ asset('images/home/food/2.jpg') }}" alt="" />
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Menu Block Seven -->
                                    <div class="menu-block-seven col-lg-3 col-md-6 col-sm-12">
                                        <div class="inner-box">
                                            <div class="image">
                                                <img src="{{ asset('images/home/food/3.jpg') }}" alt="" />
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Menu Block Seven -->
                                    <div class="menu-block-seven col-lg-3 col-md-6 col-sm-12">
                                        <div class="inner-box">
                                            <div class="image">
                                                <img src="{{ asset('images/home/food/4.jpg') }}" alt="" />
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Menu Block Seven -->
                                    <div class="menu-block-seven col-lg-3 col-md-6 col-sm-12">
                                        <div class="inner-box">
                                            <div class="image">
                                                <img src="{{ asset('images/home/food/5.jpg') }}" alt="" />
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Menu Block Seven -->
                                    <div class="menu-block-seven col-lg-3 col-md-6 col-sm-12">
                                        <div class="inner-box">
                                            <div class="image">
                                                <img src="{{ asset('images/home/food/6.jpg') }}" alt="" />
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Menu Block Seven -->
                                    <div class="menu-block-seven col-lg-3 col-md-6 col-sm-12">
                                        <div class="inner-box">
                                            <div class="image">
                                                <img src="{{ asset('images/home/food/7.jpg') }}" alt="" />
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Menu Block Seven -->
                                    <div class="menu-block-seven col-lg-3 col-md-6 col-sm-12">
                                        <div class="inner-box">
                                            <div class="image">
                                                <img src="{{ asset('images/home/food/8.jpg') }}" alt="" />
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Menu Section Five -->

    <!-- Services Section Three -->
    <section class="services-section-three">
        <div class="auto-container">
            <!-- Sec Title Two -->
            <div class="sec-title-two centered">
                <div id="services" class="title">Services</div>
                <h2>Services We Provide</h2>
                <div class="separator"></div>
            </div>
            <div class="row clearfix">
                <!-- Left Column -->
                <div class="left-column col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-column">

                        <!-- Service Block Three -->
                        <div class="service-block-three">
                            <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="icon-box flaticon-clock"></div>
                                <h4>
                                    <a href="">Sit down dinners (Consisting of 3 course meal or more as required)</a>
                                </h4>
                                <div class="side-icon flaticon-clock"></div>
                            </div>
                        </div>

                        <!-- Service Block Three -->
                        <div class="service-block-three">
                            <div class="inner-box wow fadeInLeft" data-wow-delay="150ms" data-wow-duration="1500ms">
                                <div class="icon-box flaticon-medal"></div>
                                <h4>
                                    <a href="">Buffet Services (appetizers, main meal with 6 varieties, deserts)</a>
                                </h4>
                                <div class="side-icon flaticon-medal"></div>
                            </div>
                        </div>

                        <!-- Service Block Three -->
                        <div class="service-block-three">
                            <div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="icon-box flaticon-meeting-1"></div>
                                <h4>
                                    <a href="">Finger food/small chops station</a>
                                </h4>
                                <div class="side-icon flaticon-meeting-1"></div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Image Column -->
                <div class="image-column col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image wow fadeInUp" data-wow-delay="150ms"
                             data-wow-duration="1500ms">
                            <img src="{{ asset('images/home/services.jpg') }}"
                                 alt="" />
                        </div>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="right-column col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-column">
                        <!-- Service Block Three / Style Two -->
                        <div class="service-block-three style-two">
                            <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="icon-box flaticon-delivery-man"></div>
                                <h4>
                                    <a href="">Cocktail station</a>
                                </h4>
                                <div class="side-icon flaticon-delivery-man"></div>
                            </div>
                        </div>

                        <!-- Service Block Three / Style Two -->
                        <div class="service-block-three style-two">
                            <div class="inner-box wow fadeInRight"
                                 data-wow-delay="150ms"
                                 data-wow-duration="1500ms">
                                <div class="icon-box flaticon-confetti"></div>
                                <h4><a href="">Event planning consultation</a></h4>
                                <div class="side-icon flaticon-confetti"></div>
                            </div>
                        </div>

                        <!-- Service Block Three / Style Two -->
                        <div class="service-block-three style-two">
                            <div class="inner-box wow fadeInRight"
                                 data-wow-delay="300ms"
                                 data-wow-duration="1500ms">
                                <div class="icon-box flaticon-dining-table"></div>
                                <h4><a href="">Budget and menu preparation</a></h4>
                                <div class="side-icon flaticon-dining-table"></div>
                            </div>
                        </div>

                        <!-- Service Block Three -->
                        <div class="service-block-three">
                            <div class="inner-box wow fadeInLeft"
                                 data-wow-delay="300ms"
                                 data-wow-duration="1500ms">
                                <div class="icon-box flaticon-meeting-1"></div>
                                <h4>
                                    <a href="">Onsite Event Coordination</a>
                                </h4>
                                <div class="side-icon flaticon-meeting-1"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services Section Three -->

    <!-- News Section Three -->
    <section class="news-section-three">
        <div class="auto-container">
            <!-- Sec Title Two -->
            <div class="sec-title-two centered">
                <div id="events" class="title">Discover</div>
                <h2>Our events</h2>
                <div class="separator"></div>
            </div>
            <div class="two-item-carousel owl-carousel owl-theme">

                <!-- News Block Three -->
                <div class="news-block-three">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ asset('images/home/events/1.jpg') }}" alt="" />
                        </div>
                    </div>
                </div>

                <!-- News Block Three -->
                <div class="news-block-three">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ asset('images/home/events/2.jpg') }}" alt="" />
                        </div>
                    </div>
                </div>

                <!-- News Block Three -->
                <div class="news-block-three">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ asset('images/home/events/3.jpg') }}" alt="" />
                        </div>
                    </div>
                </div>

                <!-- News Block Three -->
                <div class="news-block-three">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ asset('images/home/events/4.jpg') }}" alt="" />
                        </div>
                    </div>
                </div>

                <!-- News Block Three -->
                <div class="news-block-three">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ asset('images/home/events/5.jpg') }}" alt="" />
                        </div>
                    </div>
                </div>

                <!-- News Block Three -->
                <div class="news-block-three">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ asset('images/home/events/6.jpg') }}" alt="" />
                        </div>
                    </div>
                </div>

                <!-- News Block Three -->
                <div class="news-block-three">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ asset('images/home/events/7.jpg') }}" alt="" />
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End News Section Three -->

    <!-- Default Section -->
    <section class="default-section">
        <div class="image-layer" style="background-image: url({{ asset('images/background/8.jpg') }})"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Reservation Column -->
                <div class="reservation-column col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column" style="background-image: url({{ asset('images/background/pattern-9.png') }})">
                        <!-- Sec Title Two -->
                        <div class="sec-title-two light">
                            <div id="reservation" class="title">Reservation Form</div>
                            <h2>Book Your Table Here</h2>
                            <div class="separator style-two"></div>
                        </div>

                        <!-- Reservation Form  -->
                        <div class="reservation-form">
                            <form method="post" action="{{ route('reservation.submit') }}">
                                @csrf
                                <div class="row clearfix">
                                    <!-- Form Group -->
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <input type="text" name="name" placeholder="Name" required="">
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <input type="email" name="email" placeholder="Email" required="">
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <input type="text" name="date" placeholder="Date of evcent" required="">
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <textarea name="description" placeholder="Additional Notes"></textarea>
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <button class="theme-btn btn-style-nine" type="submit" name="submit-form">
                                            <span class="txt">Book Now</span></button>
                                    </div>

                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Default Section -->
@endsection
