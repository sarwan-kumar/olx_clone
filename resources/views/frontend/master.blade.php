<!DOCTYPE HTML>

<html lang="en">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width,initial-scale=1">

    <meta name="keywords" content="">

    <meta name="description" content="">

    <title>CarForYou - Responsive Car Dealer HTML5 Template</title>

    <!--Bootstrap -->

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">

    <!--Custome Style -->

    <link rel="stylesheet" href="assets/css/style.css" type="text/css">

    <link rel="stylesheet" href="assets/css/custom.css" type="text/css">

    <!--OWL Carousel slider-->

    <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">

    <link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">

    <!--slick-slider -->

    <link href="assets/css/slick.css" rel="stylesheet">

    <!--bootstrap-slider -->

    <link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">

    <!--FontAwesome Font Style -->

    <link href="assets/css/fontawesome.min.css" rel="stylesheet">



    <!-- SWITCHER -->

    <link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all">

    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all"
        data-default-color="true">

    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/orange.css" title="orange"
        media="all">

    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/blue.css" title="blue" media="all">

    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/pink.css" title="pink" media="all">

    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/green.css" title="green" media="all">

    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/purple.css" title="purple"
        media="all">



    <!-- Fav and touch icons -->

    <link rel="apple-touch-icon-precomposed" sizes="144x144"
        href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">

    <link rel="apple-touch-icon-precomposed" sizes="114x114"
        href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.png">

    <link rel="apple-touch-icon-precomposed" sizes="72x72"
        href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">

    <link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">

    <link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">

    <!-- Google-Font-->

    <link href="../../css?family=Lato:300,400,700,900" rel="stylesheet">

</head>

<body id="index1">



    <!--Header-->

    <header>

        <div class="default-header">

            <div class="container">

                <div class="row" id="top">

                    <div class="col-sm-3 col-md-2">

                        <div class="logo"> <a href="{{asset('/')}}"><img src="assets/images/logo.png" alt="image"></a>
                        </div>

                    </div>

                    <div class="col-sm-9 col-md-10">

                        <div class="header_info">

                            <div class="header_widgets">

                                <div class="circle_icon"> <i class="fa-solid fa-envelope"></i> </div>

                                <p class="uppercase_text">For Support Mail us : </p>

                                <a href="mailto:info@example.com">info@example.com</a>
                            </div>

                            <div class="header_widgets">

                                <div class="circle_icon"> <i class="fa fa-phone" aria-hidden="true"></i> </div>

                                <p class="uppercase_text">Service Helpline Call Us: </p>

                                <a href="tel:61-1234-5678-09">+61-1234-5678-9</a>
                            </div>

                            <div class="social-follow">

                                <ul>

                                    <li><a href="#"><i class="fa fa-facebook-square"
                                                aria-hidden="true"></i></a></li>

                                    <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                                    </li>

                                    <li><a href="#"><i class="fa fa-linkedin-square"
                                                aria-hidden="true"></i></a></li>

                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>

                                </ul>

                            </div>

                            <div class="login_btn"> <a href="#loginform" class="btn btn-xs uppercase"
                                    data-bs-toggle="modal" data-bs-dismiss="modal">Login / Register</a> </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>



        <!-- Navigation -->

        <nav id="navigation_bar" class="navbar navbar-expand-lg">

            <div class="container">

                <div class="row header-row desktop">

                    <div class="navbar-header">

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation"> <i class="fa fa-bars"></i>
                        </button>

                    </div>



                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <ul class="nav navbar-nav">
                            <li><a href="{{ asset('/') }}">Home</a></li>
                            <li><a href="{{ asset('/about') }}">About Us</a></li>
                            <li><a href="{{ asset('/classified') }}">Find Car</a></li>
                            <li><a href="{{ asset('/blog') }}">Blogs</a></li>
                            <li><a href="{{ asset('/services') }}">Services</a></li>
                            <li><a href="{{ asset('/support') }}">Contact Us</a></li>

                        </ul>

                    </div>

                    <div class="header_wrap">

                        <div class="user_login">

                            <ul>

                                <li class="dropdown dropdown-toggle"> <a href="#" class="dropdown-toggle"
                                        id="dropdownMenuButton6" data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="fa fa-user-circle" aria-hidden="true"></i> Jhon Anderson <i
                                            class="fa fa-angle-down" aria-hidden="true"></i></a>

                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton6">

                                        <li><a class="dropdown-item" href="{{ asset('/profile') }}">Profile
                                                Settings</a>
                                        </li>

                                        <li><a class="dropdown-item" href="{{ asset('/myvehicle') }}">My Vehicles</a>
                                        </li>

                                        <li><a class="dropdown-item" href="{{ asset('/postvehicle') }}">Post a
                                                Vehicle</a></li>

                                        <li><a class="dropdown-item" href="#">Sign Out</a></li>

                                    </ul>

                                </li>

                            </ul>

                        </div>

                        <div class="header_search">

                            <div id="search_toggle"><i class="fa fa-search" aria-hidden="true"></i></div>

                            <form action="#" method="get" id="header-search-form">

                                <input type="text" placeholder="Search..." class="form-control">

                                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>

                            </form>

                        </div>

                    </div>

                </div>



                <!-- mobile-view -->

                <div class="row header-row mobile">

                    <div class="col-10 col-md-8 right">

                        <div class="navbar-header">

                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1"
                                aria-expanded="false" aria-label="Toggle navigation"> <i class="fa fa-bars"></i>
                            </button>

                        </div>



                        <div class="collapse navbar-collapse" id="navbarSupportedContent1">

                            <ul class="nav navbar-nav">

                                <li><a href="{{ asset('/') }}">Home</a></li>
                                <li><a href="{{ asset('/about') }}">About Us</a></li>


                                <li><a href="{{ asset('/classified') }}">Inventory</a></li>

                                <li class="dropdown"><a href="#" id="dropdownMenuButton10"
                                        data-bs-toggle="dropdown" aria-expanded="false">Dealers</a>

                                    <ul class="dropdown-menu">

                                        <li><a href="{{ asset('/dealerlist') }}">Dealer List</a></li>

                                    <li><a href="{{ asset('/dealerdetail') }}">Dealer Details</a></li>

                                    </ul>

                                </li>

                                <li class="dropdown"><a href="#" id="dropdownMenuButton11"
                                        data-bs-toggle="dropdown" aria-expanded="false">Pages</a>

                                    <ul class="dropdown-menu">

                                        <li><a href="{{ asset('/services') }}">Services</a></li>

                                    <li><a href="{{ asset('/support') }}">Contact Us</a></li>

                                    <li><a href="{{ asset('/faq') }}">FAQ</a></li>

                                    </ul>

                                </li>

                                <li class="dropdown"><a href="#" id="dropdownMenuButton12"
                                        data-bs-toggle="dropdown" aria-expanded="false">News</a>

                                    <ul class="dropdown-menu">

                                        <li><a href="{{ asset('/blog') }}">blogs</a></li>

                                    <li><a href="{{ asset('/blogdetail') }}">Blog Detail</a></li>

                                    </ul>

                                </li>

                            </ul>

                        </div>

                        <div class="header_wrap">

                            <div class="user_login">

                                <ul>

                                    <li class="dropdown dropdown-toggle"> <a href="#" class="dropdown-toggle"
                                            id="dropdownMenuButton13" data-bs-toggle="dropdown"
                                            aria-expanded="false"><i class="fa fa-user-circle"
                                                aria-hidden="true"></i> Jhon Anderson <i class="fa fa-angle-down"
                                                aria-hidden="true"></i></a>

                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton13">

                                            <li><a class="dropdown-item" href="{{ asset('/profile') }}">Profile
                                                Settings</a>
                                        </li>

                                        <li><a class="dropdown-item" href="{{ asset('/myvehicle') }}">My Vehicles</a>
                                        </li>

                                        <li><a class="dropdown-item" href="{{ asset('/postvehicle') }}">Post a
                                                Vehicle</a></li>

                                        <li><a class="dropdown-item" href="#">Sign Out</a></li>

                                        </ul>

                                    </li>

                                </ul>

                            </div>

                            <div class="header_search">

                                <div id="search_toggle1"><i class="fa fa-search" aria-hidden="true"></i></div>

                                <form action="#" method="get" id="header-search-form1">

                                    <input type="text" placeholder="Search..." class="form-control">

                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>

                                </form>

                            </div>

                        </div>

                    </div>



                    <div class="col-2 col-md-4 right">

                        <div class="user_login mobile">

                            <ul>

                                <li class="dropdown"> <a href="#" id="dropdownMenuButton15"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-user-circle"
                                            aria-hidden="true"></i></a>

                                    <ul class="dropdown-menu">

                                        <li><a class="dropdown-item" href="{{ asset('/profile') }}">Profile
                                            Settings</a>
                                    </li>

                                    <li><a class="dropdown-item" href="{{ asset('/myvehicle') }}">My Vehicles</a>
                                    </li>

                                    <li><a class="dropdown-item" href="{{ asset('/postvehicle') }}">Post a
                                            Vehicle</a></li>

                                    <li><a class="dropdown-item" href="#">Sign Out</a></li>
                                    </ul>

                                </li>

                            </ul>

                        </div>

                    </div>



                </div>

                <!-- mobile-view -->



            </div>

        </nav>

        <!-- Navigation end -->



    </header>

    <!-- /Header -->



    @yield('content')


    <!--Brands-->

    <section class="brand-section gray-bg">

        <div class="container">

            <div class="brand-hadding">

                <h5>Popular Brands</h5>

            </div>

            <div class="brand-logo-list">

                <div id="popular_brands">

                    <div><a href="#"><img src="assets/images/brand-logo-1.png" class="img-fluid"
                                alt="image"></a></div>

                    <div><a href="#"><img src="assets/images/brand-logo-2.png" class="img-fluid"
                                alt="image"></a></div>

                    <div><a href="#"><img src="assets/images/brand-logo-3.png" class="img-fluid"
                                alt="image"></a></div>

                    <div><a href="#"><img src="assets/images/brand-logo-4.png" class="img-fluid"
                                alt="image"></a></div>

                    <div><a href="#"><img src="assets/images/brand-logo-5.png" class="img-fluid"
                                alt="image"></a></div>

                    <div><a href="#"><img src="assets/images/brand-logo-1.png" class="img-fluid"
                                alt="image"></a></div>

                    <div><a href="#"><img src="assets/images/brand-logo-2.png" class="img-fluid"
                                alt="image"></a></div>

                </div>

            </div>

        </div>

    </section>

    <!-- /Brands-->



    <!--Footer -->

    <footer>

        <div class="footer-top">

            <div class="container">

                <div class="row">

                    <div class="col-md-3 col-sm-6">

                        <h6>Top Categores</h6>

                        <ul>

                            <li><a href="#">Crossovers</a></li>

                            <li><a href="#">Hybrids</a></li>

                            <li><a href="#">Hybrid Cars</a></li>

                            <li><a href="#">Hybrid SUVs</a></li>

                            <li><a href="#">Concept Vehicles</a></li>

                        </ul>

                    </div>

                    <div class="col-md-3 col-sm-6">

                        <h6>About Us</h6>

                        <ul>

                            <li><a href="#customers">About Us</a></li>

                            <li><a href="{{asset('/privacy')}}">Privacy</a></li>

                            <li><a href="{{asset('/cookie')}}">Cookies</a></li>

                            <li><a href="{{asset('/terms')}}">Terms of use</a></li>

                            <li><a href="#customers">Our Satisfied Customers</a></li>

                        </ul>

                    </div>

                    <div class="col-md-3 col-sm-6">

                        <h6>Useful Links</h6>

                        <ul>

                            <li><a href="{{asset('/')}}">Home</a></li>
                            <li><a href="{{asset('/dealerlist')}}">Dealers</a></li>
                            <li><a href="{{asset('/blog')}}">Blogs</a></li>
                            <li><a href="{{asset('/faq')}}">FAQ's</a></li>
                            <li><a href="{{asset('/support')}}">Contact Us</a></li>

                        </ul>

                    </div>

                    <div class="col-md-3 col-sm-6">

                        <h6>Subscribe Newsletter</h6>

                        <div class="newsletter-form">

                            <form action="#">

                                <div class="form-group">

                                    <input type="email" class="form-control newsletter-input" required=""
                                        placeholder="Enter Email Address">

                                </div>

                                <button type="submit" class="btn btn-block">Subscribe <span class="angle_arrow"><i
                                            class="fa fa-angle-right" aria-hidden="true"></i></span></button>

                            </form>

                            <p class="subscribed-text">*We send great deals and latest auto news to our subscribed
                                users every week.</p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="footer-bottom">

            <div class="container">

                <div class="row">



                    <div class="col-md-6">

                        <p class="copy-right">Copyright &copy; 2022 CarForYou. All Rights Reserved</p>

                    </div>

                    <div class="col-md-6 text-right">

                        <div class="footer_widget">

                            <p>Download Our APP:</p>

                            <ul>

                                <li><a href="#"><i class="fa fa-android" aria-hidden="true"></i></a></li>

                                <li><a href="#"><i class="fa fa-apple" aria-hidden="true"></i></a></li>

                            </ul>

                        </div>

                        <div class="footer_widget">

                            <p>Connect with Us:</p>

                            <ul>

                                <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                                </li>

                                <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                                </li>

                                <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                                </li>

                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </footer>

    <!-- /Footer-->




    <!--Login-Form -->

    <div class="modal fade" id="loginform">

        <div class="modal-dialog modal-lg" role="document">

            <div class="modal-content">

                <div class="modal-header">

                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>

                    <h3 class="modal-title">Login</h3>

                </div>

                <div class="modal-body">



                    <div class="login_wrap">

                        <div class="row">

                            <div class="col-md-12 col-sm-12">

                                <form action="#" method="get">

                                    <div class="form-group">

                                        <input type="text" class="form-control"
                                            placeholder="Username or Email address*">

                                    </div>

                                    <div class="form-group">

                                        <input type="password" class="form-control" placeholder="Password*">

                                    </div>

                                    <div class="form-group checkbox">

                                        <input type="checkbox" id="remember">

                                        <label for="remember">Remember Me</label>

                                    </div>

                                    <div class="form-group">

                                        <input type="submit" value="Login" class="btn btn-block">

                                    </div>

                                </form>

                            </div>



                        </div>

                    </div>

                </div>

                <div class="modal-footer text-center">

                    <p>Don't have an account? <a href="#signupform" data-bs-toggle="modal"
                            data-bs-dismiss="modal">Signup
                            Here</a>
                    </p>

                    <p><a href="#forgotpassword" data-bs-toggle="modal" data-bs-dismiss="modal">Forgot Password ?</a>
                    </p>

                </div>

            </div>

        </div>

    </div>

    <!--/Login-Form -->



    <!--Register-Form -->

    <div class="modal fade" id="signupform">

        <div class="modal-dialog modal-lg" role="document">

            <div class="modal-content">

                <div class="modal-header">

                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>

                    <h3 class="modal-title">Sign Up</h3>

                </div>

                <div class="modal-body">



                    <div class="signup_wrap">

                        <div class="row">

                            <div class="col-md-12 col-sm-12">

                                <form action="#" method="get">

                                    <div class="form-group">

                                        <input type="text" class="form-control" placeholder="Full Name">

                                    </div>

                                    <div class="form-group">

                                        <input type="email" class="form-control" placeholder="Email Address">

                                    </div>

                                    <div class="form-group">

                                        <input type="password" class="form-control" placeholder="Password">

                                    </div>

                                    <div class="form-group">

                                        <input type="password" class="form-control" placeholder="Confirm Password">

                                    </div>

                                    <div class="form-group checkbox">

                                        <input type="checkbox" id="terms_agree">

                                        <label for="terms_agree">I Agree with <a href="#">Terms and
                                                Conditions</a></label>

                                    </div>

                                    <div class="form-group">

                                        <input type="submit" value="Sign Up" class="btn btn-block">

                                    </div>

                                </form>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="modal-footer text-center">

                    <p>Already got an account? <a href="#loginform" data-bs-toggle="modal"
                            data-bs-dismiss="modal">Login
                            Here</a>
                    </p>

                </div>

            </div>

        </div>

    </div>

    <!--/Register-Form -->



    <!--Forgot-password-Form -->

    <div class="modal fade" id="forgotpassword">

        <div class="modal-dialog" role="document">

            <div class="modal-content">

                <div class="modal-header">



                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>

                    <h3 class="modal-title">Password Recovery</h3>

                </div>

                <div class="modal-body">

                    <div class="row">

                        <div class="forgotpassword_wrap">

                            <div class="col-md-12">

                                <form action="#" method="get">

                                    <div class="form-group">

                                        <input type="email" class="form-control" placeholder="Your Email address*">

                                    </div>

                                    <div class="form-group">

                                        <input type="submit" value="Reset My Password" class="btn btn-block">

                                    </div>

                                </form>

                                <div class="text-center">

                                    <p class="gray_text">For security reasons we don't store your password. Your
                                        password
                                        will be reset and
                                        a new one will be send.</p>

                                    <p><a href="#loginform" data-bs-toggle="modal" data-bs-dismiss="modal"><i
                                                class="fa fa-angle-double-left" aria-hidden="true"></i> Back to
                                            Login</a>
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!--/Forgot-password-Form -->



    <!--Back to top-->

    <div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a>
    </div>

    <!--/Back to top-->


    <!-- Scripts -->

    <script src="assets/js/jquery.min.js"></script>

    <script src="assets/js/popper.min.js"></script>

    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/js/interface.js"></script>

    <script src="assets/js/31f5977fdc.js"></script>

    <!--Switcher-->

    <script src="assets/switcher/js/switcher.js"></script>

    <!--bootstrap-slider-JS-->

    <script src="assets/js/bootstrap-slider.min.js"></script>

    <!--Slider-JS-->

    <script src="assets/js/slick.min.js"></script>

    <script src="assets/js/owl.carousel.min.js"></script>



</body>

</html>
