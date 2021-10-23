@extends('includes.layout')

@section('title')
    Reservation
@endsection

@section('content')
    <section class="page-title" style="background-image: url({{ asset('images/background/10.jpg') }})">
        <div class="auto-container">
            <h1>Reservation</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ url('/') }}">home</a></li>
                <li>Reservation</li>
            </ul>
        </div>
    </section>

    <section class="contact-page-info-section">
        <div class="auto-container">
            <!-- Contact Info Boxed -->
            <div class="contact-info-boxed">
                <div class="row clearfix">

                    <!-- Info Box -->
                    <div class="info-box col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="content">
                                <span class="icon flaticon-phone-call"></span>
                                <h4>Book a table</h4>
                                <ul>
                                    <li>Phone : <a href="tel:+2348060584298">08060584298</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Info Box -->
                    <div class="info-box col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="content">
                                <span class="icon flaticon-email"></span>
                                <h4>E-mail Us</h4>
                                <ul>
                                    <li>Support : <a href="mailto:Simplyelegant2013@yahoo.com">
                                            Simplyelegant2013@yahoo.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Info Box -->
                    <div class="info-box col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="content">
                                <span class="icon flaticon-placeholder"></span>
                                <h4>Our Location</h4>
                                <ul>
                                    <li>33, Damunde Estate Mabora district life camp Abuja</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <section class="contact-page-form-section">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Form Column -->
                <div class="form-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <div class="title">Reservation</div>
                            <h2>Book Your Table</h2>
                        </div>

                        <!-- Contact Form -->
                        <div class="contact-form">
                            @if(session('success'))
                                <div class="text-center text-white p-3"
                                     style="width: 70%; margin: 4px auto; background-color: #3e976c;">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                    {{ session('success') }}
                                </div>
                            @endif

                            <form method="post" action="{{ route('reservation.submit') }}">@csrf
                                <div class="row clearfix">
                                    <!-- Form Group -->
                                    <div class="form-group col-lg-4 col-md-4 col-sm-12">
                                        <input type="text" name="name" placeholder="Name" required="">
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-4 col-md-4 col-sm-12">
                                        <input type="email" name="email" placeholder="Email" required="">
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-4 col-md-4 col-sm-12">
                                        <input type="text" name="date" placeholder="Date" required="">
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <textarea name="description" placeholder="Additional Information *"></textarea>
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <button class="theme-btn btn-style-three" type="submit"
                                                name="submit-form"><span class="txt">Book Now</span></button>
                                    </div>

                                </div>
                            </form>
                        </div>

                    </div>
                </div>

                <!-- Info Column -->
                <div class="info-column col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-column"
                         style="background-image: url({{ asset('images/background/reserve-info.jpg') }})">
                        <!-- Sec Title -->
                        <div class="sec-title light centered">
                            <div class="title">Reservation</div>
                            <h2>Book Your Table</h2>
                        </div>
                        <ul class="table-list">
                            <li>Mon - Tue<span>07:00AM - 2:00AM</span></li>
                            <li>Wed - Thur<span>06:00AM - 1:00AM</span></li>
                            <li>Friday<span>Closed</span></li>
                            <li>Sat - Sun<span>07:30AM - 4:00AM</span></li>
                        </ul>
                        <div class="btn-box text-center">
                            <a class="phone" href="tel:+2348060584298">08060584298</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
