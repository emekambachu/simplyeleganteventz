<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    <title>@yield('title') | Simply Elegant Event & Apparel</title>

    <meta name="description" content="Simply Elegant Events and Apparels, Event management and catering company in Abuja"/>
    <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>

    <!-- Stylesheets -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&amp;family=Lato:wght@100;300;400;700;900&amp;family=Playfair+Display:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('simply_elegant_events_logo.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('simply_elegant_events_logo.png') }}" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="{{ asset('js/respond.js') }}"></script><![endif]-->
</head>

<body class="hidden-bar-wrapper">

<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Main Header-->
    <header class="main-header header-style-three">

        <!-- Header Top Two -->
        <div class="header-top-two">
            <div class="auto-container">
                <div class="clearfix">
                    <!-- Top Left -->
                    <div class="top-left">
                        <!-- Info List -->
                        <ul class="info-list">
                            <li><a href="tel:08060584298">
                                <span class="icon flaticon-phone-call"></span> 08060584298</a></li>
                            <li><a href="mailto:Simplyelegant2013@yahoo.com">
                                <span class="icon flaticon-email"></span> Simplyelegant2013@yahoo.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!--Header-Upper-->
        <div class="header-upper">
            <div class="auto-container">
                <div class="clearfix">

                    <div class="pull-left logo-box">
                        <div class="logo">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('simply_elegant_events_logo.png') }}"
                                     alt="" title=""></a></div>
                    </div>

                    <div class="pull-right upper-right clearfix">

                        <!--Info Box-->
                        <div class="upper-column info-box">
                            <!-- Quote Btn -->
                            <div class="btn-box">
                                <a href="{{ url('reservation') }}"
                                   class="theme-btn btn-style-six"><span class="txt">Reservation</span></a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <!--Header-Upper-->
        <div class="header-lower">
            <div class="auto-container clearfix">

                <div class="nav-outer clearfix">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="#about-us">About us</a></li>
                                <li><a href="#food">Food</a></li>
                                <li><a href="#events">Events</a></li>
                                <li><a href="{{ url('reservation') }}">Reservation</a></li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->

                </div>

            </div>
        </div>
        <!--End Header Upper-->

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="{{ url('/') }}" title="">
                        <img src="{{ asset('simply_elegant_events_logo.png') }}" alt="" title=""></a>
                </div>
                <!--Right Col-->
                <div class="pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav><!-- Main Menu End-->

                </div>
            </div>
        </div><!-- End Sticky Menu -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-multiply"></span></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href="{{ url('/') }}">
                        <img src="{{ asset('simply_elegant_events_logo.png') }}" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>
        </div><!-- End Mobile Menu -->

    </header>
    <!-- End Main Header -->

    @yield('content')

    <!-- Main Footer -->
    <footer class="footer-style-two" style="background-image: url({{ asset('images/background/9.jpg') }})">
        <div class="auto-container">
            <!-- Upper Box -->
            <div class="upper-box">
                <div class="logo"><a href="{{ url('/') }}">
                        <img src="{{ asset('simply_elegant_events_logo_white.png') }}" alt="" title=""></a></div>
                <div class="upper-text">catering and event management company based in Abuja, Nigeria.</div>
            </div>
            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="row clearfix">

                    <!-- Big Column -->
                    <div class="big-column col-lg-12 col-md-12 col-sm-12">
                        <div class="row clearfix">

                            <!-- Footer Column -->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
                                    <h4>Useful Links</h4>
                                    <ul class="list-link">
                                        <li><a href="#about">About</a></li>
                                        <li><a href="#food">Food</a></li>
                                        <li><a href="#events">Events</a></li>
                                        <li><a href="#about">Reservation</a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Footer Column -->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget contact-widget">
                                    <h4>Contact us</h4>
                                    <!-- Info List -->
                                    <ul class="info-list">
                                        <li><a href="tel:08060584298">
                                                <span class="icon flaticon-phone-call"></span> 08060584298</a></li>
                                        <li><a href="mailto:Simplyelegant2013@yahoo.com">
                                                <span class="icon flaticon-email"></span> Simplyelegant2013@yahoo.com</a></li>
                                        <li><a href="{{ url('contact') }}">
                                                <span class="icon flaticon-placeholder"></span>
                                                33, Damunde Estate Mabora district life camp Abuja</a></li>
                                    </ul>
                                    <!-- Social Box -->
                                    <ul class="social-box">
                                        <li class="connect">Socially Connect With Us</li>
                                        <li class="facebook">
                                            <a href="https://www.facebook.com/Simply0123/"
                                               class="fa fa-facebook-f"></a></li>
                                        <li class="instagram">
                                            <a href="https://www.instagram.com/simplyelegantparties/"
                                               class="fa fa-instagram"></a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="copyright">Copyright © {{ date('Y') }}. All Rights Reserved.</div>
            </div>
        </div>
    </footer>
    <!-- End Main Footer -->

</div>
<!-- End pagewrapper -->

<!-- Search Popup -->
<div class="search-popup">
    <button class="close-search style-two"><span class="flaticon-multiply"></span></button>
    <button class="close-search"><span class="flaticon-multiply"></span></button>
    <form method="post" action="">
        <div class="form-group">
            <input type="search" name="search-field" value="" placeholder="Search Here" required="">
            <button type="submit"><i class="fa fa-search"></i></button>
        </div>
    </form>
</div>
<!-- End Header Search -->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src="{{ asset('js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('js/appear.js') }}"></script>
<script src="{{ asset('js/parallax.min.js') }}"></script>
<script src="{{ asset('js/tilt.jquery.min.js') }}"></script>
<script src="{{ asset('js/jquery.paroller.min.js') }}"></script>
<script src="{{ asset('js/owl.js') }}"></script>
<script src="{{ asset('js/wow.js') }}"></script>
<script src="{{ asset('js/nav-tool.js') }}"></script>
<script src="{{ asset('js/jquery-ui.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>

</body>

</html>
