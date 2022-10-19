@extends('frontend.master')
@section('content')

<!--Page Header-->
<section class="page-header blog_page">
    <div class="container">
      <div class="page-header_wrap">
        <div class="page-heading">
          <h1>Blog Detail</h1>
        </div>
        <ul class="coustom-breadcrumb">
          <li><a href="{{ asset('/') }}">Home</a></li>
          <li>Blog Detail</li>
        </ul>
      </div>
    </div>
    <!-- Dark Overlay-->
    <div class="dark-overlay"></div>
  </section>
  <!-- /Page Header-->

  <!--Our-Blog-->
  <section class="our_blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 col-md-8">
          <!--article-1-->
          <article class="article_wrap article_full_info">
            <div class="articale_header">
              <h2>Lorem Ipsum is simply dummy text.</h2>
              <div class="article_meta">
                <ul>
                  <li><i class="fa fa-user-circle-o" aria-hidden="true"></i> <a href="#">Admin</a></li>
                  <li><i class="fa fa-calendar-check-o" aria-hidden="true"></i> 20 Feb 2020</li>
                  <li><i class="fa fa-tags" aria-hidden="true"></i> <a href="#">General</a>, <a href="#">Business</a></li>

                </ul>
              </div>
            </div>
            <div class="article_img"> <img src="assets/images/blog_img1.jpg" alt="image"> </div>
            <div class="article_info">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
              <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
              <h4>At vero eos et accusamus et iusto odio dignissimos</h4>
              <ul class="list_style_none">
                <li><i class="fa fa-check" aria-hidden="true"></i> Pellentesque lacus urna, feugiat non consectetur</li>
                <li><i class="fa fa-check" aria-hidden="true"></i> Aliquam sem neque, efficitur atero lectus vitae</li>
                <li><i class="fa fa-check" aria-hidden="true"></i> Pellentesque erat libero, eleifend sit amet felis</li>
                <li><i class="fa fa-check" aria-hidden="true"></i> Maecenas eget consectetur quam</li>
              </ul>
              <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
            <div class="article_tag gray-bg">
              <div class="row">
                <div class="col-md-6 col-sm-6">
                  <h6>Tags:</h6>
                  <div class="tag_list">
                    <ul>
                      <li><a href="#">Trends</a></li>
                      <li><a href="#">Triple Foam</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="share_article ">
                    <h6>Share:</h6>
                    <ul>
                      <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </article>


        </div>

        <!--Side-bar-->
        <aside class="col-lg-3 col-md-4">
          <div class="sidebar_widget">
            <div class="blog_search">
              <form action="#" method="get">
                <input class="form-control" name="search" type="text" placeholder="Search...">
                <button type="submit" class="search_btn"><i class="fa fa-search" aria-hidden="true"></i></button>
              </form>
            </div>
          </div>
          <div class="sidebar_widget">
            <div class="widget_heading">
              <h5>Popular Posts</h5>
            </div>
            <div class="popular_post">
              <ul>
                <li>
                  <div class="popular_post_img"> <a href="{{ asset('/blogdetail') }}"><img src="assets/images/post_200x200_1.jpg" alt="image"></a> </div>
                  <div class="popular_post_title"> <a href="{{ asset('/blogdetail') }}">At vero eos et accusamus et iusto odio dignissimos.</a> </div>
                </li>
                <li>
                  <div class="popular_post_img"> <a href="{{ asset('/blogdetail') }}"><img src="assets/images/post_200x200_2.jpg" alt="image"></a> </div>
                  <div class="popular_post_title"> <a href="{{ asset('/blogdetail') }}">On the other hand, we denounce with righteous.</a> </div>
                </li>
                <li>
                  <div class="popular_post_img"> <a href="{{ asset('/blogdetail') }}"><img src="assets/images/post_200x200_2.jpg" alt="image"></a> </div>
                  <div class="popular_post_title"> <a href="{{ asset('/blogdetail') }}">But I must explain to you how all this mistaken idea.</a> </div>
                </li>
                <li>
                  <div class="popular_post_img"> <a href="{{ asset('/blogdetail') }}"><img src="assets/images/post_200x200_4.jpg" alt="image"></a> </div>
                  <div class="popular_post_title"> <a href="{{ asset('/blogdetail') }}">Nor again is there anyone who loves or pursues.</a> </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="sidebar_widget">
            <div class="widget_heading">
              <h5>Categories</h5>
            </div>
            <div class="categories_list">
              <ul>
                <li><a href="#">Trends</a></li>
                <li><a href="#">The Works</a></li>
                <li><a href="#">Hand Wash</a></li>
                <li><a href="#">General</a></li>
                <li><a href="#">Business</a></li>
                <li><a href="#">Auto Detail</a></li>
                <li><a href="#">Motorbikes</a></li>
                <li><a href="#">Compacts</a></li>
                <li><a href="#">Vans & Trucks</a></li>
                <li><a href="#">Buy a car</a></li>
                <li><a href="#">Sell your Car</a></li>
                <li><a href="#">Car Land</a></li>
                <li><a href="#">Car Showrooms</a></li>
              </ul>
            </div>
          </div>
        </aside>
        <!--/Side-bar-->

      </div>
    </div>
  </section>
  <!-- /Our-Blog-->


@endsection
