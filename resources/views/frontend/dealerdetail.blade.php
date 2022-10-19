@extends('frontend.master')
@section('content')
    <!--Page Header-->
    <section class="page-header profile_page">
        <div class="container">
            <div class="page-header_wrap">
                <div class="page-heading">
                    <h1>Autospot Used Cars Center</h1>
                </div>
                <ul class="coustom-breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li>Dealers Profile</li>
                </ul>
            </div>
        </div>
        <!-- Dark Overlay-->
        <div class="dark-overlay"></div>
    </section>
    <!-- /Page Header-->

    <!--Dealer-profile-->
    <section class="dealer_profile inner_pages">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-4">
                    <div class="dealer_logo"> <img src="assets/images/dealer-logo.jpg" alt="image"> </div>
                </div>
                <div class="col-md-6 col-sm-5 col-xs-8">
                    <div class="dealer_info">
                        <h4>Autospot Used Cars Center </h4>
                        <p>P.1225 N Broadway Ave <br>
                            Oklahoma City, OK 1234-5678-090</p>
                        <ul class="dealer_social_links">
                            <li class="facebook-icon"><a href="#"><i class="fa fa-facebook-square"
                                        aria-hidden="true"></i></a></li>
                            <li class="twitter-icon"><a href="#"><i class="fa fa-twitter-square"
                                        aria-hidden="true"></i></a></li>
                            <li class="linkedin-icon"><a href="#"><i class="fa fa-linkedin-square"
                                        aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="dealer_contact_info gray-bg">
                        <h6><i class="fa fa-globe" aria-hidden="true"></i> Website</h6>
                        <a href="#">www.example.com</a>
                    </div>
                    <div class="dealer_contact_info gray-bg">
                        <h6><i class="fa fa-envelope" aria-hidden="true"></i> Email Address</h6>
                        <a href="mailto:contact@example.com">contact@example.com</a>
                    </div>
                    <div class="dealer_contact_info gray-bg">
                        <h6><i class="fa fa-phone" aria-hidden="true"></i> Phone Number</h6>
                        <a href="tel:61-1234-5678-09">+61-1234-5678-09</a>
                    </div>
                </div>
            </div>
            <div class="space-60"></div>
            <div class="row">
                <div class="col-md-9">
                    <div class="dealer_more_info">
                        <h5 class="gray-bg info_title"> About Autospot Used Cars Center</h5>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page
                            when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                            distribution of letters, as opposed to using 'Content here, content here', making it look like
                            readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as
                            their default model text, and a search for 'lorem ipsum' will uncover many web sites still in
                            their infancy. </p>
                        <div class="dealer_map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26361315.424069386!2d-113.75658747371207!3d36.241096924675375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1483614660041"
                                width="100%" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                        </div>
                        <div class="dealer_listings">
                            <h6>Inventorys Listing By Autospot</h6>
                            <div class="row">
                                <div class="col-md-4 grid_listing">
                                    <div class="product-listing-m gray-bg">
                                        <div class="product-listing-img"> <a href="{{asset('/profileproduct')}}"><img
                                                    src="assets/images/featured-img-1.jpg" class="img-fluid" alt="image">
                                            </a>
                                            <div class="label_icon">Used</div>

                                        </div>
                                        <div class="product-listing-content">
                                            <h5><a href="{{asset('/profileproduct')}}">Mazda CX-5 SX, V6, ABS, Sunroof </a></h5>
                                            <p class="list-price">$89,000</p>
                                            <div class="car-location"><span><i class="fa fa-map-marker"
                                                        aria-hidden="true"></i> Colorado, USA</span></div>
                                            <ul class="features_list">
                                                <li><i class="fa fa-road" aria-hidden="true"></i>35,000 km</li>
                                                <li><i class="fa fa-tachometer" aria-hidden="true"></i>30.000 miles</li>
                                                <li><i class="fa fa-calendar" aria-hidden="true"></i>2005 model</li>
                                                <li><i class="fa fa-car" aria-hidden="true"></i>Diesel</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 grid_listing">
                                    <div class="product-listing-m gray-bg">
                                        <div class="product-listing-img"> <a href="{{asset('/profileproduct')}}"><img
                                                    src="assets/images/featured-img-2.jpg" class="img-fluid" alt="image">
                                            </a>
                                            <div class="label_icon">Used</div>

                                        </div>
                                        <div class="product-listing-content">
                                            <h5><a href="{{asset('/profileproduct')}}">Maserati QUATTROPORTE 1,6</a></h5>
                                            <p class="list-price">$89,000</p>
                                            <div class="car-location"><span><i class="fa fa-map-marker"
                                                        aria-hidden="true"></i> Colorado, USA</span></div>
                                            <ul class="features_list">
                                                <li><i class="fa fa-road" aria-hidden="true"></i>35,000 km</li>
                                                <li><i class="fa fa-tachometer" aria-hidden="true"></i>30.000 miles</li>
                                                <li><i class="fa fa-calendar" aria-hidden="true"></i>2005 model</li>
                                                <li><i class="fa fa-car" aria-hidden="true"></i>Diesel</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 grid_listing">
                                    <div class="product-listing-m gray-bg">
                                        <div class="product-listing-img"> <a href="{{asset('/profileproduct')}}"><img
                                                    src="assets/images/featured-img-3.jpg" class="img-fluid"
                                                    alt="image"> </a>
                                            <div class="label_icon">Used</div>

                                        </div>
                                        <div class="product-listing-content">
                                            <h5><a href="{{asset('/profileproduct')}}">Maserati QUATTROPORTE 1,6</a></h5>
                                            <p class="list-price">$89,000</p>
                                            <div class="car-location"><span><i class="fa fa-map-marker"
                                                        aria-hidden="true"></i> Colorado, USA</span></div>
                                            <ul class="features_list">
                                                <li><i class="fa fa-road" aria-hidden="true"></i>35,000 km</li>
                                                <li><i class="fa fa-tachometer" aria-hidden="true"></i>30.000 miles</li>
                                                <li><i class="fa fa-calendar" aria-hidden="true"></i>2005 model</li>
                                                <li><i class="fa fa-car" aria-hidden="true"></i>Diesel</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 grid_listing">
                                    <div class="product-listing-m gray-bg">
                                        <div class="product-listing-img"> <a href="{{asset('/profileproduct')}}"><img
                                                    src="assets/images/featured-img-3.jpg" class="img-fluid"
                                                    alt="image"> </a>
                                            <div class="label_icon">Used</div>

                                        </div>
                                        <div class="product-listing-content">
                                            <h5><a href="{{asset('/profileproduct')}}">Maserati QUATTROPORTE 1,6</a></h5>
                                            <p class="list-price">$89,000</p>
                                            <div class="car-location"><span><i class="fa fa-map-marker"
                                                        aria-hidden="true"></i> Colorado, USA</span></div>
                                            <ul class="features_list">
                                                <li><i class="fa fa-road" aria-hidden="true"></i>35,000 km</li>
                                                <li><i class="fa fa-tachometer" aria-hidden="true"></i>30.000 miles</li>
                                                <li><i class="fa fa-calendar" aria-hidden="true"></i>2005 model</li>
                                                <li><i class="fa fa-car" aria-hidden="true"></i>Diesel</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 grid_listing">
                                    <div class="product-listing-m gray-bg">
                                        <div class="product-listing-img"> <a href="{{asset('/profileproduct')}}"><img
                                                    src="assets/images/featured-img-1.jpg" class="img-fluid"
                                                    alt="image"> </a>
                                            <div class="label_icon">Used</div>

                                        </div>
                                        <div class="product-listing-content">
                                            <h5><a href="{{asset('/profileproduct')}}">Mazda CX-5 SX, V6, ABS, Sunroof </a></h5>
                                            <p class="list-price">$89,000</p>
                                            <div class="car-location"><span><i class="fa fa-map-marker"
                                                        aria-hidden="true"></i> Colorado, USA</span></div>
                                            <ul class="features_list">
                                                <li><i class="fa fa-road" aria-hidden="true"></i>35,000 km</li>
                                                <li><i class="fa fa-tachometer" aria-hidden="true"></i>30.000 miles</li>
                                                <li><i class="fa fa-calendar" aria-hidden="true"></i>2005 model</li>
                                                <li><i class="fa fa-car" aria-hidden="true"></i>Diesel</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 grid_listing">
                                    <div class="product-listing-m gray-bg">
                                        <div class="product-listing-img"> <a href="{{asset('/profileproduct')}}"><img
                                                    src="assets/images/featured-img-2.jpg" class="img-fluid"
                                                    alt="image"> </a>
                                            <div class="label_icon">Used</div>

                                        </div>
                                        <div class="product-listing-content">
                                            <h5><a href="{{asset('/profileproduct')}}">Maserati QUATTROPORTE 1,6</a></h5>
                                            <p class="list-price">$89,000</p>
                                            <div class="car-location"><span><i class="fa fa-map-marker"
                                                        aria-hidden="true"></i> Colorado, USA</span></div>
                                            <ul class="features_list">
                                                <li><i class="fa fa-road" aria-hidden="true"></i>35,000 km</li>
                                                <li><i class="fa fa-tachometer" aria-hidden="true"></i>30.000 miles</li>
                                                <li><i class="fa fa-calendar" aria-hidden="true"></i>2005 model</li>
                                                <li><i class="fa fa-car" aria-hidden="true"></i>Diesel</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <aside class="col-md-3">
                    <div class="sidebar_widget">
                        <div class="widget_heading">
                            <h5><i class="fa fa-envelope" aria-hidden="true"></i> Message to Dealer</h5>
                        </div>
                        <form action="#">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <textarea rows="4" class="form-control" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Send Message" class="btn btn-block">
                            </div>
                        </form>
                    </div>
                </aside>
            </div>
        </div>
    </section>
    <!--/Dealer-profile-->
@endsection
