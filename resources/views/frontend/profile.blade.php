@extends('frontend.master')
@section('content')


<!--Page Header-->
<section class="page-header profile_page">
    <div class="container">
      <div class="page-header_wrap">
        <div class="page-heading">
          <h1>Your Profile</h1>
        </div>
        <ul class="coustom-breadcrumb">
          <li><a href="{{asset('/')}}">Home</a></li>
          <li>Profile</li>
        </ul>
      </div>
    </div>
    <!-- Dark Overlay-->
    <div class="dark-overlay"></div>
  </section>
  <!-- /Page Header-->

  <!--Profile-setting-->
  <section class="user_profile inner_pages">
    <div class="container">
      <div class="user_profile_info gray-bg padding_4x4_40">
        <div class="upload_user_logo"> <img src="assets/images/dealer-logo.jpg" alt="image">
          <div class="upload_newlogo">
            <input name="upload" type="file">
          </div>
        </div>
        <div class="dealer_info">
          <h5>Autospot Used Cars Center </h5>
          <p>P.1225 N Broadway Ave <br>
            Oklahoma City, OK  1234-5678-090</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 col-sm-3">
          <div class="profile_nav">
            <ul>
              <li class="active"><a href="{{asset('/profile')}}">Profile Settings</a></li>
              <li><a href="{{asset('/myvehicle')}}">My Vehicles</a></li>
              <li><a href="{{asset('/postvehicle')}}">Post a Vehicles</a></li>
              <li><a href="#">Sign Out</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-sm-8">
          <div class="profile_wrap">
            <h5 class="uppercase underline">General Settings</h5>
            <form action="#" method="get">
              <div class="form-group">
                <label class="control-label">Full Name</label>
                <input class="form-control white_bg" id="fullname" type="text">
              </div>
              <div class="form-group">
                <label class="control-label">Email Address</label>
                <input class="form-control white_bg" id="email" type="email">
              </div>
              <div class="form-group">
                <label class="control-label">Phone Number</label>
                <input class="form-control white_bg" id="phone-number" type="text">
              </div>
              <div class="form-group">
                <label class="control-label">Date of Birth</label>
                <input class="form-control white_bg" id="birth-date" type="text">
              </div>
              <div class="form-group">
                <label class="control-label">Your Address</label>
                <textarea class="form-control white_bg" rows="4"></textarea>
              </div>
              <div class="form-group">
                <label class="control-label">Country</label>
                <input class="form-control white_bg" id="country" type="text">
              </div>
              <div class="form-group">
                <label class="control-label">City</label>
                <input class="form-control white_bg" id="city" type="text">
              </div>
              <div class="gray-bg field-title">
                <h6>Update password</h6>
              </div>
              <div class="form-group">
                <label class="control-label">Password</label>
                <input class="form-control white_bg" id="password" type="password">
              </div>
              <div class="form-group">
                <label class="control-label">Confirm Password</label>
                <input class="form-control white_bg" id="c-password" type="password">
              </div>
              <div class="gray-bg field-title">
                <h6>Social Links</h6>
              </div>
              <div class="form-group">
                <label class="control-label">Facebook ID</label>
                <input class="form-control white_bg" id="facebook" type="text">
              </div>
              <div class="form-group">
                <label class="control-label">Twitter ID</label>
                <input class="form-control white_bg" id="twitter" type="text">
              </div>
              <div class="form-group">
                <label class="control-label">Linkedin ID</label>
                <input class="form-control white_bg" id="linkedin" type="text">
              </div>
              <div class="form-group">
                <label class="control-label">Google+ ID</label>
                <input class="form-control white_bg" id="google" type="text">
              </div>
              <div class="form-group">
                <button type="submit" class="btn">Save Changes <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/Profile-setting-->

@endsection
