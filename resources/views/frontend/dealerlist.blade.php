@extends('frontend.master')
@section('content')


<!--Page Header-->
<section class="page-header profile_page">
    <div class="container">
      <div class="page-header_wrap">
        <div class="page-heading">
          <h1>Dealers List</h1>
        </div>
        <ul class="coustom-breadcrumb">
          <li><a href="{{asset('/')}}">Home</a></li>
          <li>Dealers List</li>
        </ul>
      </div>
    </div>
    <!-- Dark Overlay-->
    <div class="dark-overlay"></div>
  </section>
  <!-- /Page Header--> 
  
  <!--Dealers-list-->
  <section class="inner_pages">
    <div class="container">
      <div class="result-sorting-wrapper">
        <div class="sorting-count">
          <p>1 - 6 <span>of 50 Results for your search.</span></p>
        </div>
        <div class="result-sorting-by">
          <p>Sort by:</p>
          <form action="#" method="post">
            <div class="form-group select sorting-select">
              <select class="form-control ">
                <option>Best Sellers</option>
                <option>Newest Sellers</option>
              </select>
            </div>
          </form>
        </div>
      </div>
      <div class="dealers_list_wrap">
        <div class="dealers_listing">
          <div class="row">
            <div class="col-sm-3 col-xs-4">
              <div class="dealer_logo"> <a href="#"><img src="assets/images/dealer-logo.jpg" alt="image"></a> </div>
            </div>
            <div class="col-sm-6 col-xs-8">
              <div class="dealer_info">
                <h5><a href="{{asset('/dealerdetail')}}">Autospot Used Cars Center </a></h5>
                <p>P.1225 N Broadway Ave<br>
                  Oklahoma City, OK  1234-5678-090</p>
              </div>
            </div>
            <div class="col-sm-3 col-xs-12">
              <div class="view_profile"> <a href="{{asset('/dealerdetail')}}" class="btn btn-xs outline">View Profile</a>
                <p>(25 Cars)</p>
              </div>
            </div>
          </div>
        </div>
        <div class="dealers_listing">
          <div class="row">
            <div class="col-sm-3 col-xs-4">
              <div class="dealer_logo"> <a href="{{asset('/dealerdetail')}}"><img src="assets/images/dealer-logo.jpg" alt="image"></a> </div>
            </div>
            <div class="col-sm-6 col-xs-8">
              <div class="dealer_info">
                <h5><a href="{{asset('/dealerdetail')}}">Autospot Used Cars Center </a></h5>
                <p>P.1225 N Broadway Ave<br>
                  Oklahoma City, OK  1234-5678-090</p>
              </div>
            </div>
            <div class="col-sm-3 col-xs-12">
              <div class="view_profile"> <a href="{{asset('/dealerdetail')}}" class="btn btn-xs outline">View Profile</a>
                <p>(25 Cars)</p>
              </div>
            </div>
          </div>
        </div>
        <div class="dealers_listing">
          <div class="row">
            <div class="col-sm-3 col-xs-4">
              <div class="dealer_logo"> <a href="{{asset('/dealerdetail')}}"><img src="assets/images/dealer-logo.jpg" alt="image"></a> </div>
            </div>
            <div class="col-sm-6 col-xs-8">
              <div class="dealer_info">
                <h5><a href="{{asset('/dealerdetail')}}">Autospot Used Cars Center </a></h5>
                <p>P.1225 N Broadway Ave<br>
                  Oklahoma City, OK  1234-5678-090</p>
              </div>
            </div>
            <div class="col-sm-3 col-xs-12">
              <div class="view_profile"> <a href="{{asset('/dealerdetail')}}" class="btn btn-xs outline">View Profile</a>
                <p>(25 Cars)</p>
              </div>
            </div>
          </div>
        </div>
        <div class="dealers_listing">
          <div class="row">
            <div class="col-sm-3 col-xs-4">
              <div class="dealer_logo"> <a href="{{asset('/dealerdetail')}}"><img src="assets/images/dealer-logo.jpg" alt="image"></a> </div>
            </div>
            <div class="col-sm-6 col-xs-8">
              <div class="dealer_info">
                <h5><a href="{{asset('/dealerdetail')}}">Autospot Used Cars Center </a></h5>
                <p>P.1225 N Broadway Ave<br>
                  Oklahoma City, OK  1234-5678-090</p>
              </div>
            </div>
            <div class="col-sm-3 col-xs-12">
              <div class="view_profile"> <a href="{{asset('/dealerdetail')}}" class="btn btn-xs outline">View Profile</a>
                <p>(25 Cars)</p>
              </div>
            </div>
          </div>
        </div>
        <div class="dealers_listing">
          <div class="row">
            <div class="col-sm-3 col-xs-4">
              <div class="dealer_logo"> <a href="{{asset('/dealerdetail')}}"><img src="assets/images/dealer-logo.jpg" alt="image"></a> </div>
            </div>
            <div class="col-sm-6 col-xs-8">
              <div class="dealer_info">
                <h5><a href="{{asset('/dealerdetail')}}">Autospot Used Cars Center </a></h5>
                <p>P.1225 N Broadway Ave<br>
                  Oklahoma City, OK  1234-5678-090</p>
              </div>
            </div>
            <div class="col-sm-3 col-xs-12">
              <div class="view_profile"> <a href="#" class="btn btn-xs outline">View Profile</a>
                <p>(25 Cars)</p>
              </div>
            </div>
          </div>
        </div>
        <div class="dealers_listing">
          <div class="row">
            <div class="col-sm-3 col-xs-4">
              <div class="dealer_logo"> <a href="{{asset('/dealerdetail')}}"><img src="assets/images/dealer-logo.jpg" alt="image"></a> </div>
            </div>
            <div class="col-sm-6 col-xs-8">
              <div class="dealer_info">
                <h5><a href="{{asset('/dealerdetail')}}">Autospot Used Cars Center </a></h5>
                <p>P.1225 N Broadway Ave<br>
                  Oklahoma City, OK  1234-5678-090</p>
              </div>
            </div>
            <div class="col-sm-3 col-xs-12">
              <div class="view_profile"> <a href="{{asset('/dealerdetail')}}" class="btn btn-xs outline">View Profile</a>
                <p>(25 Cars)</p>
              </div>
            </div>
          </div>
        </div>
      </div>
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
  </section>
  <!--/Dealers-list--> 
  
    
@endsection