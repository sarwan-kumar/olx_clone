@extends('frontend.master')
@section('content')
    <!-- Banners -->

    <section id="banner" class="banner-section">

        <div class="container">

            <div class="div_zindex">

                <div class="row">

                    <div class="col-md-7"></div>

                    <div class="col-md-5">

                        <div class="banner_content">

                            <h1>Find the right car for you.</h1>

                            <p>We have more than a thousand cars for you to choose. </p>

                            <a href="{{asset('/profileproduct')}}" class="btn">Read More <span class="angle_arrow"><i class="fa fa-angle-right"
                                        aria-hidden="true"></i></span></a>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- /Banners -->



    <!-- Filter-Form -->

    <section id="filter_form" class="gray-bg">

        <div class="container">

            <h3>Find Your Dream Car <span>(Easy search from here)</span></h3>



            <form action="#" method="get">

                <div class="row">

                    <div class="form-group col-md-3 col-sm-6 black_input">

                        <div class="select">

                            <select class="form-control">

                                <option value="">Select Location </option>

                                <option value="">Location 1 </option>

                                <option value="">Location 1 </option>

                            </select>

                        </div>

                    </div>

                    <div class="form-group col-md-3 col-sm-6 black_input">

                        <div class="select">

                            <select class="form-control">

                                <option>Select Brand</option>

                                <option>Audi</option>

                                <option>BMW</option>

                                <option>Nissan</option>

                                <option>Toyota</option>

                            </select>

                        </div>

                    </div>

                    <div class="form-group col-md-3 col-sm-6 black_input">

                        <div class="select">

                            <select class="form-control">

                                <option>Select Model</option>

                                <option>Series 1</option>

                                <option>Series 2</option>

                                <option>Series 3</option>

                            </select>

                        </div>

                    </div>

                    <div class="form-group col-md-3 col-sm-6 black_input">

                        <div class="select">

                            <select class="form-control">

                                <option>Year of Model </option>

                                <option>2016</option>

                                <option>2015</option>

                                <option>2014</option>

                            </select>

                        </div>

                    </div>

                    <div class="form-group col-md-6 col-sm-6 black_input">

                        <label class="form-label">Price Range (₹)</label>

                        <input id="price_range" type="text" class="span2" value="" data-slider-min="50"
                            data-slider-max="6000" data-slider-step="5" data-slider-value="[1000,5000]">

                    </div>

                   
                    <div class="form-group col-md-3 col-sm-6">

                        <button type="submit" class="btn btn-block search"><i class="fa fa-search" aria-hidden="true"></i>
                            Search Car
                        </button>

                    </div>

                </div>

            </form>



        </div>

    </section>

    <!-- /Filter-Form -->



    <!-- About -->

    <section class="about-us-section section-padding">

        <div class="container">

            <div class="section-header text-center">

                <h2>Welcome <span>to CarForYou</span></h2>

                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
                    in
                    some form, by injected humour, or randomised words which don't look even slightly believable. If you are
                    going
                    to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the
                    middle of
                    text.</p>

            </div>

            <div class="row">

                <div class="col-lg-6 col-sm-6">

                    <div class="looking-car">

                        <div class="looking-cat-image"> <img src="assets/images/looking-used-car.png" alt="Image"> </div>

                        <div class="looking-car-content">

                            <h3>Looking <span>Used Car?</span></h3>

                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                voluptatum deleniti
                                atque.</p>

                            <a href="{{asset('/profileproduct')}}" class="btn">View Listing<i class="fa fa-chevron-circle-right"
                                    aria-hidden="true"></i></a>
                        </div>

                    </div>

                </div>

               

            </div>

        </div>

    </section>

    <!-- /About -->



    <!-- Resent Cat-->

    <section class="section-padding gray-bg">

        <div class="container">

            <div class="section-header text-center">

                <h2>Find the Best <span>CarForYou</span></h2>

                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
                    in
                    some form, by injected humour, or randomised words which don't look even slightly believable. If you are
                    going
                    to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the
                    middle of
                    text.</p>

            </div>

            <div class="row">



            

                <!-- Recently Listed New Cars -->

                <div class="tab-content" id="myTabContent">

                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                        <div class="col-list-3">

                            <div class="recent-car-list">

                                <div class="car-info-box"> <a href="{{asset('/profileproduct')}}"><img src="assets/images/recent-car-1.jpg"
                                            class="img-fluid" alt=""></a>

                                    <ul>

                                        <li><i class="fa fa-road" aria-hidden="true"></i>20,000 km</li>

                                        <li><i class="fa fa-calendar" aria-hidden="true"></i>2005 Model</li>

                                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>Colorado, USA</li>

                                    </ul>

                                </div>

                                <div class="car-title-m">

                                    <h6><a href="{{asset('/profileproduct')}}">Ford Shelby GT350</a></h6>

                                    <span class="price">₹45,000</span>

                                </div>

                                <div class="inventory_info_m">

                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

                                </div>

                            </div>

                        </div>

                        <div class="col-list-3">

                            <div class="recent-car-list">

                                <div class="car-info-box"> <a href="{{asset('/profileproduct')}}"><img src="assets/images/recent-car-2.jpg"
                                            class="img-fluid" alt=""></a>


                                    <ul>

                                        <li><i class="fa fa-road" aria-hidden="true"></i>20,000 km</li>

                                        <li><i class="fa fa-calendar" aria-hidden="true"></i>2005 Model</li>

                                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>Colorado, USA</li>

                                    </ul>

                                </div>

                                <div class="car-title-m">

                                    <h6><a href="{{asset('/profileproduct')}}">BMW 535i</a></h6>

                                    <span class="price">₹20,000</span>

                                </div>

                                <div class="inventory_info_m">

                                    <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis.</p>

                                </div>

                            </div>

                        </div>

                        <div class="col-list-3">

                            <div class="recent-car-list">

                                <div class="car-info-box"> <a href="{{asset('/profileproduct')}}"><img src="assets/images/recent-car-3.jpg"
                                            class="img-fluid" alt=""></a>

                                    

                                    <ul>

                                        <li><i class="fa fa-road" aria-hidden="true"></i>20,000 km</li>

                                        <li><i class="fa fa-calendar" aria-hidden="true"></i>2005 Model</li>

                                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>Colorado, USA</li>

                                    </ul>

                                </div>

                                <div class="car-title-m">

                                    <h6><a href="{{asset('/profileproduct')}}">Volvo v40</a></h6>

                                    <span class="price">₹60,000</span>

                                </div>

                                <div class="inventory_info_m">

                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

                                </div>

                            </div>

                        </div>

                        <div class="col-list-3">

                            <div class="recent-car-list">

                                <div class="car-info-box"> <a href="{{asset('/profileproduct')}}"><img src="assets/images/recent-car-4.jpg"
                                            class="img-fluid" alt=""></a>

                                   

                                    <ul>

                                        <li><i class="fa fa-road" aria-hidden="true"></i>20,000 km</li>

                                        <li><i class="fa fa-calendar" aria-hidden="true"></i>2005 Model</li>

                                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>Colorado, USA</li>

                                    </ul>

                                </div>

                                <div class="car-title-m">

                                    <h6><a href="{{asset('/profileproduct')}}">Audi TT RS</a></h6>

                                    <span class="price">₹90,000</span>

                                </div>

                                <div class="inventory_info_m">

                                    <p>Great explorer of the truth, the master-builder of human happiness.</p>

                                </div>

                            </div>

                        </div>

                        <div class="col-list-3">

                            <div class="recent-car-list">

                                <div class="car-info-box"> <a href="{{asset('/profileproduct')}}"><img src="assets/images/recent-car-5.jpg"
                                            class="img-fluid" alt=""></a>

                                    

                                    <ul>

                                        <li><i class="fa fa-road" aria-hidden="true"></i>20,000 km</li>

                                        <li><i class="fa fa-calendar" aria-hidden="true"></i>2005 Model</li>

                                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>Colorado, USA</li>

                                    </ul>

                                </div>

                                <div class="car-title-m">

                                    <h6><a href="{{asset('/profileproduct')}}">Audi A3</a></h6>

                                    <span class="price">₹49,000</span>

                                </div>

                                <div class="inventory_info_m">

                                    <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit.</p>

                                </div>

                            </div>

                        </div>

                        <div class="col-list-3">

                            <div class="recent-car-list">

                                <div class="car-info-box"> <a href="{{asset('/profileproduct')}}"><img src="assets/images/recent-car-6.jpg"
                                            class="img-fluid" alt=""></a>

                                    
                                    <ul>

                                        <li><i class="fa fa-road" aria-hidden="true"></i>20,000 km</li>

                                        <li><i class="fa fa-calendar" aria-hidden="true"></i>2005 Model</li>

                                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>Colorado, USA</li>

                                    </ul>

                                </div>

                                <div class="car-title-m">

                                    <h6><a href="{{asset('/profileproduct')}}">BMW 535i</a></h6>

                                    <span class="price">₹20,000</span>

                                </div>

                                <div class="inventory_info_m">

                                    <p>On the other hand, we denounce with righteous indignation and dislike.</p>

                                </div>

                            </div>

                        </div>

                    </div>



                    <!-- Recently Listed Used Cars -->

                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                        <div class="col-list-3">

                            <div class="recent-car-list">

                                <div class="car-info-box"> <a href="{{asset('/profileproduct')}}"><img src="assets/images/recent-car-4.jpg"
                                            class="img-fluid" alt=""></a>

                                    

                                    <ul>

                                        <li><i class="fa fa-road" aria-hidden="true"></i>20,000 km</li>

                                        <li><i class="fa fa-calendar" aria-hidden="true"></i>2005 Model</li>

                                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>Colorado, USA</li>

                                    </ul>

                                </div>

                                <div class="car-title-m">

                                    <h6><a href="{{asset('/profileproduct')}}">Audi TT RS</a></h6>

                                    <span class="price">₹90,000</span>

                                </div>

                                <div class="inventory_info_m">

                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis.</p>

                                </div>

                            </div>

                        </div>

                        <div class="col-list-3">

                            <div class="recent-car-list">

                                <div class="car-info-box"> <a href="{{asset('/profileproduct')}}"><img src="assets/images/recent-car-5.jpg"
                                            class="img-fluid" alt=""></a>

                                   

                                    <ul>

                                        <li><i class="fa fa-road" aria-hidden="true"></i>20,000 km</li>

                                        <li><i class="fa fa-calendar" aria-hidden="true"></i>2005 Model</li>

                                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>Colorado, USA</li>

                                    </ul>

                                </div>

                                <div class="car-title-m">

                                    <h6><a href="{{asset('/profileproduct')}}">Audi A3</a></h6>

                                    <span class="price">₹49,000</span>

                                </div>

                                <div class="inventory_info_m">

                                    <p>But I must explain to you how all this mistaken idea of denouncing.</p>

                                </div>

                            </div>

                        </div>

                        <div class="col-list-3">

                            <div class="recent-car-list">

                                <div class="car-info-box"> <a href="{{asset('/profileproduct')}}"><img src="assets/images/recent-car-6.jpg"
                                            class="img-fluid" alt=""></a>

                                    

                                    <ul>

                                        <li><i class="fa fa-road" aria-hidden="true"></i>20,000 km</li>

                                        <li><i class="fa fa-calendar" aria-hidden="true"></i>2005 Model</li>

                                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>Colorado, USA</li>

                                    </ul>

                                </div>

                                <div class="car-title-m">

                                    <h6><a href="{{asset('/profileproduct')}}">BMW 535i</a></h6>

                                    <span class="price">₹20,000</span>

                                </div>

                                <div class="inventory_info_m">

                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>

                                </div>

                            </div>

                        </div>

                        <div class="col-list-3">

                            <div class="recent-car-list">

                                <div class="car-info-box"> <a href="{{asset('/profileproduct')}}"><img src="assets/images/recent-car-1.jpg"
                                            class="img-fluid" alt=""></a>

                                    

                                    <ul>

                                        <li><i class="fa fa-road" aria-hidden="true"></i>20,000 km</li>

                                        <li><i class="fa fa-calendar" aria-hidden="true"></i>2005 Model</li>

                                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>Colorado, USA</li>

                                    </ul>

                                </div>

                                <div class="car-title-m">

                                    <h6><a href="{{asset('/profileproduct')}}">Ford Shelby GT350</a></h6>

                                    <span class="price">₹45,000</span>

                                </div>

                                <div class="inventory_info_m">

                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

                                </div>

                            </div>

                        </div>

                        <div class="col-list-3">

                            <div class="recent-car-list">

                                <div class="car-info-box"> <a href="{{asset('/profileproduct')}}"><img src="assets/images/recent-car-2.jpg"
                                            class="img-fluid" alt=""></a>

                                    

                                    <ul>

                                        <li><i class="fa fa-road" aria-hidden="true"></i>20,000 km</li>

                                        <li><i class="fa fa-calendar" aria-hidden="true"></i>2005 Model</li>

                                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>Colorado, USA</li>

                                    </ul>

                                </div>

                                <div class="car-title-m">

                                    <h6><a href="{{asset('/profileproduct')}}">BMW 535i</a></h6>

                                    <span class="price">₹20,000</span>

                                </div>

                                <div class="inventory_info_m">

                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>

                                </div>

                            </div>

                        </div>

                        <div class="col-list-3">

                            <div class="recent-car-list">

                                <div class="car-info-box"> <a href="{{asset('/profileproduct')}}"><img src="assets/images/recent-car-3.jpg"
                                            class="img-fluid" alt=""></a>

                                   

                                    <ul>

                                        <li><i class="fa fa-road" aria-hidden="true"></i>20,000 km</li>

                                        <li><i class="fa fa-calendar" aria-hidden="true"></i>2005 Model</li>

                                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>Colorado, USA</li>

                                    </ul>

                                </div>

                                <div class="car-title-m">

                                    <h6><a href="{{asset('/profileproduct')}}">Volvo v40</a></h6>

                                    <span class="price">₹60,000</span>

                                </div>

                                <div class="inventory_info_m">

                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority.</p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- /Resent Cat -->

    <!--Featured Car-->

    <section class="section-padding">

        <div class="container">

            <div class="section-header text-center">

                <h2>Featured Cars <span>Special Offers</span></h2>

                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
                    in
                    some form, by injected humour, or randomised words which don't look even slightly believable. If you are
                    going
                    to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the
                    middle of
                    text. </p>

            </div>

            <div class="row">

                <div class="col-list-3">

                    <div class="featured-car-list">

                        <div class="featured-car-img"> <a href="{{asset('/profileproduct')}}"><img src="assets/images/featured-img-01.jpg"
                                    class="img-fluid" alt="Image"></a>

                            <div class="label_icon">Used</div>

                            

                        </div>

                        <div class="featured-car-content">

                            <h6><a href="{{asset('/profileproduct')}}">Maserati QUATTROPORTE 1,6</a></h6>

                            <div class="price_info">

                                <p class="featured-price">₹90,000</p>

                                <div class="car-location"><span><i class="fa fa-map-marker" aria-hidden="true"></i>
                                        Colorado, USA</span>
                                </div>

                            </div>

                            <ul>

                                <li><i class="fa fa-road" aria-hidden="true"></i>0,000 km</li>

                                <li><i class="fa fa-tachometer" aria-hidden="true"></i>30.000 miles</li>

                                <li><i class="fa fa-calendar" aria-hidden="true"></i>2005 model</li>

                                <li><i class="fa fa-car" aria-hidden="true"></i>Diesel</li>

                                <li><i class="fa fa-user" aria-hidden="true"></i>5 seats</li>

                                <li><i class="fa fa-superpowers" aria-hidden="true"></i>143 kW</li>

                            </ul>

                        </div>

                    </div>

                </div>

                <div class="col-list-3">

                    <div class="featured-car-list">

                        <div class="featured-car-img"> <a href="{{asset('/profileproduct')}}"><img src="assets/images/featured-img-02.jpg"
                                    class="img-fluid" alt="Image"></a>

                            <div class="label_icon">Used</div>

                           

                        </div>

                        <div class="featured-car-content">

                            <h6><a href="{{asset('/profileproduct')}}">Mazda CX-5 SX, V6, ABS, Sunroof</a></h6>

                            <div class="price_info">

                                <p class="featured-price">₹90,000</p>

                                <div class="car-location"><span><i class="fa fa-map-marker" aria-hidden="true"></i>
                                        Colorado, USA</span>
                                </div>

                            </div>

                            <ul>

                                <li><i class="fa fa-road" aria-hidden="true"></i>0,000 km</li>

                                <li><i class="fa fa-tachometer" aria-hidden="true"></i>30.000 miles</li>

                                <li><i class="fa fa-calendar" aria-hidden="true"></i>2005 model</li>

                                <li><i class="fa fa-car" aria-hidden="true"></i>Diesel</li>

                                <li><i class="fa fa-user" aria-hidden="true"></i>5 seats</li>

                                <li><i class="fa fa-superpowers" aria-hidden="true"></i>143 kW</li>

                            </ul>

                        </div>

                    </div>

                </div>

                <div class="col-list-3">

                    <div class="featured-car-list">

                        <div class="featured-car-img"> <a href="{{asset('/profileproduct')}}"><img src="assets/images/featured-img-03.jpg"
                                    class="img-fluid" alt="Image"></a>

                            <div class="label_icon">Used</div>

                           

                        </div>

                        <div class="featured-car-content">

                            <h6><a href="{{asset('/profileproduct')}}">BMW 535i</a></h6>

                            <div class="price_info">

                                <p class="featured-price">₹90,000</p>

                                <div class="car-location"><span><i class="fa fa-map-marker" aria-hidden="true"></i>
                                        Colorado, USA</span>
                                </div>

                            </div>

                            <ul>

                                <li><i class="fa fa-road" aria-hidden="true"></i>0,000 km</li>

                                <li><i class="fa fa-tachometer" aria-hidden="true"></i>30.000 miles</li>

                                <li><i class="fa fa-calendar" aria-hidden="true"></i>2005 model</li>

                                <li><i class="fa fa-car" aria-hidden="true"></i>Diesel</li>

                                <li><i class="fa fa-user" aria-hidden="true"></i>5 seats</li>

                                <li><i class="fa fa-superpowers" aria-hidden="true"></i>143 kW</li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- /Featured Car-->



    <!--Trending Car-->

    <section class="section-padding gray-bg">

        <div class="container">

            <div class="section-header text-center">

                <h2>Trending <span>Cars of the Year</span></h2>

                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
                    in
                    some form, by injected humour, or randomised words which don't look even slightly believable. If you are
                    going
                    to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the
                    middle of
                    text. </p>

            </div>

            <div class="row">

                <div class="col-lg-12">

                    <div id="trending_slider">

                        <div class="trending-car-m">

                            <div class="trending-car-img"> <img src="assets/images/trending-car-img-1.jpg" alt="Image"
                                    class="img-fluid"> </div>

                            <div class="trending-hover">

                                <h4><a href="{{asset('/profileproduct')}}">Car Name</a></h4>

                            </div>

                        </div>

                        <div class="trending-car-m">

                            <div class="trending-car-img"> <img src="assets/images/trending-car-img-2.jpg" alt="Image"
                                    class="img-fluid"> </div>

                            <div class="trending-hover">

                                <h4><a href="{{asset('/profileproduct')}}">Car Name</a></h4>

                            </div>

                        </div>

                        <div class="trending-car-m">

                            <div class="trending-car-img"> <img src="assets/images/trending-car-img-3.jpg" alt="Image"
                                    class="img-fluid"> </div>

                            <div class="trending-hover">

                                <h4><a href="{{asset('/profileproduct')}}">Car Name</a></h4>

                            </div>

                        </div>

                        <div class="trending-car-m">

                            <div class="trending-car-img"> <img src="assets/images/trending-car-img-1.jpg" alt="Image"
                                    class="img-fluid"> </div>

                            <div class="trending-hover">

                                <h4><a href="{{asset('/profileproduct')}}">Car Name</a></h4>

                            </div>

                        </div>

                        <div class="trending-car-m">

                            <div class="trending-car-img"> <img src="assets/images/trending-car-img-2.jpg" alt="Image"
                                    class="img-fluid"> </div>

                            <div class="trending-hover">

                                <h4><a href="{{asset('/profileproduct')}}">Car Name</a></h4>

                            </div>

                        </div>

                        <div class="trending-car-m">

                            <div class="trending-car-img"> <img src="assets/images/trending-car-img-3.jpg" alt="Image"
                                    class="img-fluid"> </div>

                            <div class="trending-hover">

                                <h4><a href="{{asset('/profileproduct')}}">Car Name</a></h4>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- /Trending Car-->



    <!--Testimonial -->

    <section class="section-padding testimonial-section parallex-bg">

        <div class="container div_zindex">

            <div class="section-header white-text text-center" id="customers">

                <h2>Our Satisfied <span>Customers</span></h2>

                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
                    in
                    some form, by injected humour, or randomised words which don't look even slightly believable. If you are
                    going
                    to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the
                    middle of
                    text. </p>

            </div>

            <div class="row">

                <div id="testimonial-slider">

                    <div class="testimonial-m">

                        <div class="testimonial-img"> <img src="assets/images/testimonial-img-1.jpg" alt="images">
                        </div>

                        <div class="testimonial-content">

                            <div class="testimonial-heading">

                                <h5>Donald Brooks</h5>

                                <span class="client-designation">CEO of xzy company</span>
                            </div>

                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                voluptatum deleniti
                                atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non
                                provident, similique
                                sunt .</p>

                        </div>

                    </div>

                    <div class="testimonial-m">

                        <div class="testimonial-img"> <img src="assets/images/testimonial-img-2.jpg" alt="images">
                        </div>

                        <div class="testimonial-content">

                            <div class="testimonial-heading">

                                <h5>Enzo Giovanotelli</h5>

                                <span class="client-designation">CEO of xzy company</span>
                            </div>

                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                voluptatum deleniti
                                atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non
                                provident, similique
                                sunt .</p>

                        </div>

                    </div>

                    <div class="testimonial-m">

                        <div class="testimonial-img"> <img src="assets/images/testimonial-img-2.jpg" alt="images">
                        </div>

                        <div class="testimonial-content">

                            <div class="testimonial-heading">

                                <h5>Donald Brooks</h5>

                                <span class="client-designation">CEO of xzy company</span>
                            </div>

                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                voluptatum deleniti
                                atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non
                                provident, similique
                                sunt .</p>

                        </div>

                    </div>

                    <div class="testimonial-m">

                        <div class="testimonial-img"> <img src="assets/images/testimonial-img-1.jpg" alt="images">
                        </div>

                        <div class="testimonial-content">

                            <div class="testimonial-heading">

                                <h5>Enzo Giovanotelli</h5>

                                <span class="client-designation">CEO of xzy company</span>
                            </div>

                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                voluptatum deleniti
                                atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non
                                provident, similique
                                sunt .</p>

                        </div>

                    </div>

                    <div class="testimonial-m">

                        <div class="testimonial-img"> <img src="assets/images/testimonial-img-2.jpg" alt="images">
                        </div>

                        <div class="testimonial-content">

                            <div class="testimonial-heading">

                                <h5>Donald Brooks</h5>

                                <span class="client-designation">CEO of xzy company</span>
                            </div>

                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                voluptatum deleniti
                                atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non
                                provident, similique
                                sunt .</p>

                        </div>

                    </div>

                    <div class="testimonial-m">

                        <div class="testimonial-img"> <img src="assets/images/testimonial-img-3.jpg" alt="images">
                        </div>

                        <div class="testimonial-content">

                            <div class="testimonial-heading">

                                <h5>Enzo Giovanotelli</h5>

                                <span class="client-designation">CEO of xzy company</span>
                            </div>

                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                voluptatum deleniti
                                atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non
                                provident, similique
                                sunt .</p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- Dark Overlay-->

        <div class="dark-overlay"></div>

    </section>

    <!-- /Testimonial-->



    <!--Blog -->

    <section class="section-padding">

        <div class="container">

            <div class="section-header text-center">

                <h2>Latest Updates In<span> Automobile Industry</span></h2>

                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
                    in
                    some form, by injected humour, or randomised words which don't look even slightly believable. If you are
                    going
                    to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the
                    middle of
                    text. </p>

            </div>

            <div class="row">

                <div class="col-md-4 col-sm-4">

                    <article class="blog-list">

                        <div class="blog-info-box">

                            <div class="share_article">

                                <p><i class="fa fa-share-alt" aria-hidden="true"></i></p>

                                <ul>

                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>

                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>

                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>

                                </ul>

                            </div>

                            <a href="{{asset('/blogdetail')}}"><img src="assets/images/blog_img1.jpg" class="img-fluid"
                                    alt="image"></a>

                            <ul>

                                <li><a href="{{asset('/classified')}}"><i class="fa fa-tags" aria-hidden="true"></i>Latest Cars</a></li>

                                <li><i class="fa fa-calendar" aria-hidden="true"></i>15 Nov 2016</li>

                            </ul>

                        </div>

                        <div class="blog-content">

                            <h5><a href="{{asset('/blogdetail')}}">But I must explain to you how all this mistaken idea.</a></h5>

                            <p>expound the actual teachings of the great explorer of the truth, the master-builder of human
                                happiness.
                                No one rejects, dislikes, or avoids pleasure itself, because</p>

                            <a href="{{asset('/blogdetail')}}" class="btn-link">Read More <i class="fa fa-long-arrow-right"
                                    aria-hidden="true"></i></a>
                        </div>

                    </article>

                </div>

                <div class="col-md-4 col-sm-4">

                    <article class="blog-list">

                        <div class="blog-info-box">

                            <div class="share_article">

                                <p><i class="fa fa-share-alt" aria-hidden="true"></i></p>

                                <ul>

                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>

                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>

                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>

                                </ul>

                            </div>

                            <a href="{{asset('/blogdetail')}}"><img src="assets/images/blog_img2.jpg" class="img-fluid"
                                    alt="image"></a>

                            <ul>

                                <li><a href="{{asset('/classified')}}"><i class="fa fa-tags" aria-hidden="true"></i>Latest Cars</a></li>

                                <li><i class="fa fa-calendar" aria-hidden="true"></i>10 Nov 2016</li>

                            </ul>

                        </div>

                        <div class="blog-content">

                            <h5><a href="{{asset('/blogdetail')}}">On the other hand, we denounce with righteous indignation.</a></h5>

                            <p>expound the actual teachings of the great explorer of the truth, the master-builder of human
                                happiness.
                                No one rejects, dislikes, or avoids pleasure itself, because</p>

                            <a href="{{asset('/blogdetail')}}" class="btn-link">Read More <i class="fa fa-long-arrow-right"
                                    aria-hidden="true"></i></a>
                        </div>

                    </article>

                </div>

                <div class="col-md-4 col-sm-4">

                    <article class="blog-list">

                        <div class="blog-info-box">

                            <div class="share_article">

                                <p><i class="fa fa-share-alt" aria-hidden="true"></i></p>

                                <ul>

                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>

                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>

                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>

                                </ul>

                            </div>

                            <a href="{{asset('/blogdetail')}}"><img src="assets/images/blog_img3.jpg" class="img-fluid"
                                    alt="image"></a>

                            <ul>

                                <li><a href="{{asset('/classified')}}"><i class="fa fa-tags" aria-hidden="true"></i>Latest Cars</a></li>

                                <li><i class="fa fa-calendar" aria-hidden="true"></i>05 Nov 2016</li>

                            </ul>

                        </div>

                        <div class="blog-content">

                            <h5><a href="{{asset('/blogdetail')}}">Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</a></h5>

                            <p>expound the actual teachings of the great explorer of the truth, the master-builder of human
                                happiness.
                                No one rejects, dislikes, or avoids pleasure itself, because</p>

                            <a href="{{asset('/blogdetail')}}" class="btn-link">Read More <i class="fa fa-long-arrow-right"
                                    aria-hidden="true"></i></a>
                        </div>

                    </article>

                </div>

            </div>

        </div>

    </section>

    <!-- /Blog-->


@endsection
