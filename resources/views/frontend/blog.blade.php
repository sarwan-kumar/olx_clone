@extends('frontend.master')
@section('content')

<!--Page Header-->
<section class="page-header blog_page">
    <div class="container">
      <div class="page-header_wrap">
        <div class="page-heading">
          <h1>Our Blog</h1>
        </div>
        <ul class="coustom-breadcrumb">
          <li><a href="{{ asset('/') }}">Home</a></li>
          <li>Our Blog</li>
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
          <article class="article_wrap">
            <div class="article_img"> <a href="{{ asset('/blogdetail') }}"><img src="assets/images/blog_img1.jpg" alt="image"></a>
              <div class="articale_header">
                <h2><a href="{{ asset('/blogdetail') }}">Lorem Ipsum is simply dummy text.</a></h2>
                <div class="article_meta">
                  <ul>
                    <li><i class="fa fa-user-circle-o" aria-hidden="true"></i> <a href="#">Admin</a></li>
                    <li><i class="fa fa-calendar-check-o" aria-hidden="true"></i> 20 Nov 2016</li>
                    <li><i class="fa fa-tags" aria-hidden="true"></i> <a href="#">General</a>, <a href="#">Business</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="article_info">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
              <a href="{{ asset('/blogdetail') }}" class="btn">Read More <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a> </div>
          </article>

          <!--article-2-->
          <article class="article_wrap">
            <div class="article_img"> <a href="{{ asset('/blogdetail') }}"><img src="assets/images/blog_img2.jpg" alt="image"></a>
              <div class="articale_header">
                <h2><a href="{{ asset('/blogdetail') }}">There are many variations of passages.</a></h2>
                <div class="article_meta">
                  <ul>
                    <li><i class="fa fa-user-circle-o" aria-hidden="true"></i> <a href="#">Admin</a></li>
                    <li><i class="fa fa-calendar-check-o" aria-hidden="true"></i> 20 Nov 2016</li>
                    <li><i class="fa fa-tags" aria-hidden="true"></i> <a href="#">General</a>, <a href="#">Business</a></li>

                  </ul>
                </div>
              </div>
            </div>
            <div class="article_info">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
              <a href="{{ asset('/blogdetail') }}" class="btn">Read More <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a> </div>
          </article>

          <!--article-3-->
          <article class="article_wrap">
            <div class="article_img"> <a href="{{ asset('/blogdetail') }}"><img src="assets/images/blog_img3.jpg" alt="image"></a>
              <div class="articale_header">
                <h2><a href="{{ asset('/blogdetail') }}">Mazda CX-5 SX, V6, ABS, Sunroof </a></h2>
                <div class="article_meta">
                  <ul>
                    <li><i class="fa fa-user-circle-o" aria-hidden="true"></i> <a href="#">Admin</a></li>
                    <li><i class="fa fa-calendar-check-o" aria-hidden="true"></i> 20 Nov 2016</li>
                    <li><i class="fa fa-tags" aria-hidden="true"></i> <a href="#">General</a>, <a href="#">Business</a></li>

                  </ul>
                </div>
              </div>
            </div>
            <div class="article_info">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
              <a href="{{ asset('/blogdetail') }}" class="btn">Read More <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a> </div>
          </article>

          <!--article-4-->
          <article class="article_wrap">
            <div class="article_img"> <a href="{{ asset('/blogdetail') }}"><img src="assets/images/blog_img4.jpg" alt="image"></a>
              <div class="articale_header">
                <h2><a href="{{ asset('/blogdetail') }}">The standard chunk of Lorem Ipsum.</a></h2>
                <div class="article_meta">
                  <ul>
                    <li><i class="fa fa-user-circle-o" aria-hidden="true"></i> <a href="#">Admin</a></li>
                    <li><i class="fa fa-calendar-check-o" aria-hidden="true"></i> 20 Nov 2016</li>
                    <li><i class="fa fa-tags" aria-hidden="true"></i> <a href="#">General</a>, <a href="#">Business</a></li>

                  </ul>
                </div>
              </div>
            </div>
            <div class="article_info">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
              <a href="{{ asset('/blogdetail') }}" class="btn">Read More <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a> </div>
          </article>
          <div class="pagination">
            <ul>
              <li class="current">1</li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
            </ul>
          </div>
        </div>

        <!--Side-bar-->
        <aside class="col-lg-3 col-md-4">
          <div class="sidebar_widget">
            <div class="widget_heading">
              <h5>Search Blog</h5>
            </div>
            <div class="blog_search">
              <form action="#" method="get">
                <input class="form-control" name="#" type="text" placeholder="Search...">
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
                  <div class="popular_post_img"> <a href="{{ asset('/blogdetail') }}"><img src="assets/images/post_200x200_3.jpg" alt="image"></a> </div>
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
          <div class="sidebar_widget">
            <div class="widget_heading">
              <h5>Tag Widget</h5>
            </div>
            <div class="tag_list">
              <ul>
                <li><a href="#">Trends</a></li>
                <li><a href="#">The Works</a></li>
                <li><a href="#">Auto Detail</a></li>
                <li><a href="#">Motorbikes</a></li>
                <li><a href="#">Compacts</a></li>
                <li><a href="#">Buy a car</a></li>
                <li><a href="#">Vans & Trucks</a></li>
                <li><a href="#">Car Land</a></li>
                <li><a href="#">Sell your Car</a></li>
                <li><a href="#">Sedans</a></li>
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
