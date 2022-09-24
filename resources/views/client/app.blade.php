<!DOCTYPE html>
<html lang="en">

<head>


    <!-- Title -->
    <title>The Venue Finder</title>
    {{-- meta description --}}
    <meta name="description" content="The Venue Finder is a venue finding service that helps you find the perfect venue for your event.">
    {{-- meta keywords --}}

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('client/img/core-img/favicon.ico') }}">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('client/style.css') }}">
    <link rel="stylesheet" href="{{ asset('client/css/toastr.min.css') }}">

    <style>
        select {
            display: block !important;
            padding: 10px;
            width: 100%;
        }

        .nice-select {
            display: none !important;
        }

        .book-now-form {
            text-align: center !important;
        }

        input#venue_name {
            height: 40px !important;
        }
    </style>

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="cssload-container">
            <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="palatin-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="palatinNav">

                        <!-- Nav brand -->
                        <a href="{{ route('home') }}" class="nav-brand" style="color: aliceblue">Venue Finder</a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li class="active"><a href="/">Home</a></li>
                                    <li><a href="#">About Us</a></li>                                   
                                    
                                    <li><a href="#">Contact</a></li>
                                </ul>

                                <!-- Button -->
                                <div class="menu-btn">
                                    <a href="#" class="btn palatin-btn">Make a Reservation</a>
                                </div>

                                @if (Auth::user())
                                    {
                                    <div class="dropdown show">
                                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                            id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="{{ route('customer.index') }}">View
                                                Profile</a>
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                                                <i class="bi bi-box-arrow-right"></i> <span>Sign Out</span>
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
                                    }
                                @else
                                    <div class="menu-btn">
                                        @if (Route::is('login'))
                                            <a href="{{ route('register') }}" class="btn palatin-btn">Sign Up</a>
                                        @else
                                            <a href="{{ route('login') }}" class="btn palatin-btn">Login</a>
                                        @endif
                                    </div>
                                @endif

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    @yield('client_main')

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">

                <!-- Footer Widget Area -->
                <div class="col-12 col-lg-5">
                    <div class="footer-widget-area mt-50">
                        <a href="#" class="d-block mb-5"><img
                                src="{{ asset('client/img/core-img/logo.png') }}" alt=""></a>
                        
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="footer-widget-area mt-50">
                        <h6 class="widget-title mb-5">Find us on the map</h6>
                        <img src="{{ asset('client/img/bg-img/footer-map.pn') }}g" alt="">
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="footer-widget-area mt-50">
                        <h6 class="widget-title mb-5">Subscribe to our newsletter</h6>
                        <form action="#" method="post" class="subscribe-form">
                            <input type="email" name="subscribe-email" id="subscribeemail"
                                placeholder="Your E-mail">
                            <button type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>

                <!-- Copywrite Text -->
                <div class="col-12">
                    <div class="copywrite-text mt-30">
                        <p><a href="#">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="{{ asset('client/js/jquery/jquery-2.2.4.min.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ asset('client/js/bootstrap/popper.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('client/js/bootstrap/bootstrap.min.js') }}"></script>
    <!-- All Plugins js -->
    <script src="{{ asset('client/js/plugins/plugins.js') }}"></script>
    <!-- Active js -->
    <script src="{{ asset('client/js/active.js') }}"></script>
    <script src="{{ asset('client/js/toastr.min.js') }}"></script>
    {!! Toastr::message() !!}


    @yield('ajax')
    {{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript">
        $('.date').datepicker({
            format: 'yyyy-mm-dd',
            startDate: new Date(),
            inline: true

        });
    </script>

</body>

</html>
