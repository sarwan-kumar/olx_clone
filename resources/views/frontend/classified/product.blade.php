@extends('frontend.master')
@section('content')
    <div class="page">
        <div class="page-main">

            <div class="content my-3 my-md-5">

                <div class="container">



                    <div class="row item-column-main" data-id="15994">

                        <!-- Left section with photos  -->

                        <div id="item-column-content"
                            class="item-column-content col-sm-12 col-md-7 col-lg-7 order-md-2 order-lg-2">

                            <!-- Invite to download app banner -->



                            <!-- Item Stats -->


                            <!-- Item Images -->

                            <div class="card">

                                <div class="item-images">

                                    <div class="item-main-image">
                                        <div class="photo-wrapper d-flex justify-content-center"
                                            style="padding-top: 80%;background-image: url('{{asset($classified->images[0]->path)}}'); background-size: cover; cursor: pointer">


                                            {{-- <div class="loader">
                                                <i class="fa fa-spin fa-spin"></i>
                                            </div> --}}

                                            <a
                                                href="{{ url($classified->images[0]->path) }}">
                                                <div class="profile-photo-img" src="#"
                                                    style="background-image: url('{{asset($classified->images[0]->path)}}'); background-size: cover; cursor: pointer"
                                                   >
                                                </div>
                                            </a>

                                        </div>
                                    </div>

                                    <div class="item-other-images py-0">

                                        <div class="item-images-row row">
                                            @foreach ($classified->images as $item )


                                            <a class="col-4 image-item hidden"
                                                href="{{asset($item->path)}}">
                                                <div class="gallery-item-wrapper image-item">
                                                    <div alt=""
                                                        style="background-image: url('{{asset($item->path)}}');">
                                                    </div>
                                                </div>
                                            </a>
                                            @endforeach

                                        </div>

                                        <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls "
                                            style="display: none;">
                                            <div class="slides" style="width: 6400px;"></div>
                                            <h3 class="title"></h3>
                                            <a class="prev text-light">‹</a>
                                            <a class="next text-light">›</a>
                                            <a class="close text-light"></a>
                                            <a class="play-pause"></a>
                                            <ol class="indicator"></ol>
                                        </div>

                                    </div>

                                </div> <!-- End item-images -->


                                <div class="item-info">

                                    <div class="item-info-block">
                                        <h1 class="mb-2">{{$classified->title}}</h1>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="text-muted item-location noselect"><i
                                                        class="fa fa-map-marker mr-1"></i>{{$classified->city.','.$classified->state}}
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="text-muted item-category noselect"><i
                                                        class="fa fa-folder mr-1"></i>{{$classified->catfull->name}}
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="text-muted item-time noselect"><i class="far fa-clock mr-1"
                                                        title="2h ago" rel="tooltip"></i>{{\Carbon\Carbon::parse($classified->created_at)->format('Y-m-d h:i')}}</div>
                                            </div>

                                            {{-- <div class="col-6">
                                                <div class="text-muted item-created-by noselect"><i
                                                        class="fa fa-mobile-alt mr-1"></i>Posted from Android app</div>
                                            </div> --}}
                                        </div>

                                    </div>

                                    <div class="item-info-block">
                                        <div class="text-content item-content">{{$classified->description}}</div>
                                    </div>

                                    {{-- <div class="item-info-block">
                                        <div class="row">
                                            <div class="col-6 mb-0">
                                                <div class="text-muted mb-2"><i class="fa fa-eye mr-1"></i>Views: 5
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}

                                </div>
                            </div> <!-- End Item Info Section -->

                            @if (count($related)>0)


                            <div class="dashboard-block mb-3 d-none d-md-block">

                                <div class="list-view directory-list-view items-list-view">
                                    <h3>Related classifieds</h3>

                                    <div class="row row-cards row-deck items-grid-view">

                                            @foreach ($related as $item)
                                            <div class="col-6 col-sm-6 col-md-6 col-lg-4 list-view-item grid-item"
                                            data-id="721">
                                            <div class="card" data-id="721">
                                                <a href="ready-cincin-nya-warna-awet-gak-pudar-fc724.html"
                                                    class="item-image">
                                                    <div class="card-img-top-wrapper d-flex justify-content-center">
                                                        <div class="loader"><i class="ic icon-spin icon-spin"></i></div>
                                                        <div class="card-img-top"
                                                            style="background-image: url({{url($item->images[0]->path)}});">
                                                        </div>
                                                    </div>


                                                    <div style="" class="item-images-count">{{count($item->images)}} <i
                                                            class="fa fa-camera pl-1"></i>
                                                    </div>
                                                </a>
                                                <div class="card-body d-flex flex-column">
                                                    <h4 class="d-flex justify-content-start align-items-center">
                                                        <a href="{{url('/product').'/'.$item->id}}"
                                                            class="w-100 grid-title">
                                                            <span class="display-name"
                                                                title="{{$item->title}}">{{$item->title}}</span>
                                                        </a>
                                                    </h4>
                                                    <div class="grid-location">
                                                        <h5><i class="fa fa-map-marker"></i>{{$item->city.','.$item->state}}</h5>
                                                    </div>
                                                    <div class="grid-currency">
                                                        <h4 class="mb-0">₹ {{$item->price}} <span
                                                                class="currency-label">Rupee, INR</span></h4>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                            @endforeach
                                    </div>
                                </div>
                            </div>
                            @endif

                        </div> <!-- End Left section with photos  -->

                        <!-- Right section -->

                        <div id="item-column-info"
                            class="item-column-info col-sm-12 col-md-5 col-lg-5 order-md-3 order-lg-3">
                            <!-- Price Section -->
                            <div class="card card-price-info">
                                <div class="item-info">
                                    <div class="item-info-block border-0">
                                        <div class="d-flex text-center">
                                            <h1 class="w-100 mb-0">
                                                ₹ {{$classified->price}} <span class="currency-label">INR</span> </h1>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- End Price Section -->

                            <!-- Item Author Section -->

                            <div class="card card-profile-info">
                                <div class="item-info">
                                    <div class="item-info-block ">
                                        <div class="d-flex">

                                            <div class="mr-3 ml-0 pl-0" style="border: none">
                                                <a href="../luouis.html"><img class="profile-icon"
                                                        src="{{asset('assets')}}/photo/8313_256_2gc_331f2b89e89410b93cfeb332840f75b681dbed8f.jpg" /></a>
                                            </div>

                                            <div class="item-info-header justify-content-end">
                                                <div class="fullname-line mb-1">
                                                    <h1 class="display-name"><a href="{{asset('/allproduct')}}">{{$classified->user->name}}</a></h1>
                                                    <i class="online-status bg-green" rel="tooltip"
                                                        title="Online"></i>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                    <div class="item-info-block item-info-actions">

                                        <button id="phone-number-button" data-item-id="15994"
                                            data-phone-number="{{$classified->user->mobile}}" class="btn btn-primary mb-2 phone-hidden">
                                            <i class="fa fa-phone mr-1"></i>
                                            <span>XXX-XX<small> Show</small></span>
                                        </button>

                                        <button id="new-message-button" class="btn btn-primary mb-2"
                                            data-toggle="modal" @if(!Auth::user()) data-target="#new-message"  @else data-target="#new-message-login"   @endif>
                                            <i class="fa fa-envelope mr-1"></i>
                                            Message </button>

                                        {{-- <div class="dropdown">
                                            <button type="button" class="btn btn-secondary dropdown-toggle mb-2"
                                                data-toggle="dropdown">
                                                <i class="fa fa-ellipsis-h"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <button class="dropdown-item" data-toggle="modal"
                                                    data-target="#new-report">Report</button>
                                            </div>
                                        </div> --}}
                                    </div>

                                </div>
                            </div>

                            <!-- End Item Author Section -->

                            <!-- Adsense banner -->



                            <!-- Tmp Item Author Section -->
{{--
                            <div class="card" id="map-block">
                                <div class="card-header">
                                    <h3 class="card-title"><i class="fa fa-map-marker mr-1"></i>United States, San
                                        Francisco</h3>
                                </div>
                                <div class="card-body p-2">
                                    <div id="default-map">
                                        <button id="show-map" class="btn btn-secondary btn-lg"><i
                                                class="fa fa-map mr-2"></i>Show on map</button>
                                    </div>
                                    <div id="map" class="hidden" style="height: 250px;"></div>
                                </div>
                            </div> --}}

                            <div class="card " id="safety-block">
                                <div class="card-header">
                                    <h3 class="card-title"><i class="fa fa-shield-alt mr-1"></i>Safety Tips for Buyers
                                    </h3>
                                </div>
                                <div class="card-body p-4">
                                    <h6>1. Do not send money before receiving the goods</h6>
                                    <h6>2. Check the item before you buy</h6>
                                    <h6>3. Payment after receiving and check the goods</h6>
                                    <h6>4. Meet the seller at a safe location</h6>
                                </div>
                            </div>

                            <div class="card " id="disclaimer-block">
                                <div class="card-header">
                                    <h3 class="card-title"><i class="fa fa-info-circle mr-1"></i>Disclaimer</h3>
                                </div>
                                <div class="card-body p-4">
                                    <p>We does not control the content posted by members and therefore assumes no
                                        responsibility any liability for any consequence relating directly or indirectly
                                        to any action or inaction.</p>
                                </div>
                            </div>

                            <!-- End Tmp Item Author Section -->

                        </div> <!-- End Right section -->

                    </div>


                </div> <!-- End container -->
            </div> <!-- End  -->

        </div> <!-- End page main-->

        <div class="modal modal-form fade" id="new-message" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title placeholder-title" id="profile-new-message-title">Sell and Buy Today -
                            Classifieds website</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"></span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="error-summary alert alert-warning">Want to contact <strong>David Bertrand</strong>?
                            Join now!</div>

                    </div>
                    <div class="modal-footer">
                        <a class="btn btn-primary mr-1" href="{{asset('/register')}}">Sign up</a>
                        <a class="btn btn-secondary" href="{{asset('/login')}}">Log in</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal modal-form fade profile-report" id="new-report" tabindex="-1" role="dialog"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form id="new-report-form" action="https://mymarkt.xyz/api/v1/method/items.report"
                        method="post">

                        <input type="hidden" name="accessToken" value="undefined">
                        <input type="hidden" name="accountId" value="0">

                        <input type="hidden" name="itemId" value="15994">

                        <div class="modal-header">
                            <h5 class="modal-title">Report</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <div class="error-summary alert alert-danger" style="display:none">
                                <ul></ul>
                            </div>
                            <div class="pb-3"><strong>Reason for your complaint</strong></div>
                            <div class="form-group field-reason required">
                                <input type="hidden" name="abuseId" value="-1">
                                <div id="reason" aria-required="true">
                                    <label class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="abuseId"
                                            value="0">
                                        <div class="custom-control-label">This is spam.</div>
                                    </label>
                                    <label class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="abuseId"
                                            value="1">
                                        <div class="custom-control-label">Hate Speech or violence.</div>
                                    </label>
                                    <label class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="abuseId"
                                            value="2">
                                        <div class="custom-control-label">Nudity or Pornography.</div>
                                    </label>
                                    <label class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="abuseId"
                                            value="3">
                                        <div class="custom-control-label">Fake profile.</div>
                                    </label>
                                </div>

                                <div class="help-block"></div>
                            </div>

                            <div class="form-group field-description">
                                <label class="form-label" for="description">Description</label>
                                <textarea id="description" class="form-control" name="description"
                                    placeholder="You can describe in detail the reason for the complaint..."></textarea>

                                <div class="help-block"></div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary " data-dismiss="modal">Cancel</button>
                            <button type="submit" disabled="disabled"
                                class="btn btn-primary ajax-send-report">Report</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal modal-form fade" id="new-message-login" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form id="new-message-form" action="/api/v1/method/msg.new" method="post">

                        <input type="hidden" name="accessToken" value="cd68febce7985d449264c9a1d821807d">
                        <input type="hidden" name="accountId" value="8383">

                        <input type="hidden" name="profileId" value="8439">

                        <input type="hidden" name="adItemId" value="16937">
                        <input type="hidden" name="adItemTitle" value="Nintendo Switch OLED">

                        <div class="modal-header">
                            <h5 class="modal-title placeholder-title" id="profile-new-message-title">Message</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"></span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <div class="error-summary alert alert-danger" style="display:none"><ul></ul></div>

                            <div class="form-group field-message required">
                                <textarea id="message" class="form-control" name="messageText" rows="3" placeholder="Enter your message..." aria-required="true"></textarea>
                                <div class="help-block"></div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane mr-1"></i>Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> <!-- End page -->

    @endsection
