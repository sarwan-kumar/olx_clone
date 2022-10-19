<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Sell and Buy Today - Classifieds website | Classified ads website for buying and selling used goods/things
    </title>

    <meta name="google-site-verification" content="" />
    <meta name="yandex-verification" content="" />
    <meta name="msvalidate.01" content="" />

    <meta property="og:site_name" content="Sell and Buy Today - Classifieds website">

    <meta property="og:title"
        content="Sell and Buy Today - Classifieds website | Classified ads website for buying and selling used goods/things">

    <link href="{{ asset('') }}assets/img/favicon.png" rel="shortcut icon" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('') }}assets/font/awesome/css/fontawesome.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/bootstrap-grid.css" type="text/css" media="screen">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/bootstrap.css" type="text/css" media="screen">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/main9d34.css?x=5" type="text/css" media="screen">


    <!-- Global site tag (gtag.js) - Google Analytics -->

    <script src="../www.google.com/recaptcha/apif7ec.js?render=6LfhbfgdAAAAACcgiIJ1eGE5845h_nXffBfIZOj3"></script>
    <script src="../www.gstatic.com/firebasejs/8.8.1/firebase-app.js"></script>
    <script src="../www.gstatic.com/firebasejs/8.8.1/firebase-auth.js"></script>
    <script src="../www.gstatic.com/firebasejs/8.8.1/firebase-firestore.js"></script>
    <script src="../www.gstatic.com/firebasejs/8.8.1/firebase-analytics.js"></script>
    <script src="../apis.google.com/js/api_client.js"></script>




</head>

<body class="body-directory-index">



    <div class="page">
        <div class="page-main">

            <div class="header py-2">
                <div class="container">
                    <div class="d-flex">

                        <a class="header-brand" href="{{ url('/') }}">
                            <img class="header-brand-img" src="{{ asset('assets') }}/img/topbar_logo.png"
                                alt="Home Page" title="Sell and Buy Today - Classifieds website">
                        </a>



                        <div class="d-flex align-items-center order-lg-2 ml-auto">


                            <a class="btn btn-outline-primary" href="{{ url('/signup') }}">Sign up</a>


                            <div class="nav-item">
                                <a href="{{url('/login')}}" class="btn btn-add-item"
                                    title="Add classified" rel="tooltip">
                                    <i class="fa fa-plus"></i>
                                    <span class="d-none d-sm-inline-block">Add classified</span>
                                </a>
                            </div>

                        </div>

                    </div>
                </div>
            </div>



            <!-- End topbar -->

            <div class="content my-3 my-md-5">
                <div class="container">

                    <div class="col-auth mx-auto">

                        <form class="card" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="card-body">

                                <div class="card-title">Login</div>

                                <div class="error-summary alert alert-danger" style="display: none">
                                    <ul>
                                    </ul>
                                </div>

                                <div class="form-group field-login-form-username required">
                                    <label class="form-label" for="user_username">Username or Email</label>
                                    <input maxlength="24" type="email" id="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" autofocus="autofocus" tabindex="1"
                                        placeholder="Enter your login or email" value="{{ old('email') }}">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <div class="help-block"></div>

                                </div>

                                <div class="form-group field-login-form-password required">
                                    <label class="form-label" for="user_password">Password</label>
                                    <input maxlength="20" type="password" id="password" class="form-control @error('password') is-invalid @enderror"
                                        name="password" tabindex="2" placeholder="Enter your password"
                                        value="">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <div class="help-block">
                                    </div>
                                </div>

                                <div class="form-group field-login-form-rememberme">
                                    <label class="custom-control custom-checkbox">
                                        <input checked type="checkbox" id="remember" class="custom-control-input"
                                            name="remember"  tabindex="3" {{ old('remember') ? 'checked' : '' }}>
                                        <span class="custom-control-label">Remember me</span>
                                    </label>
                                </div>

                                <button type="submit" class="btn btn-primary btn-block" tabindex="4">Log
                                    in</button>
{{--

                                <div id="social-buttons-block">
                                    <div class="text-center mt-2">or</div>
                                    <div class="auth-clients">
                                        <a class="btn btn-icon btn-facebook auth-link d-block mt-2"
                                            href="https://www.facebook.com/v2.2/dialog/oauth?client_id=3097944460494700&amp;redirect_uri=https%3A%2F%2Fmymarkt.xyz%2Ffacebook%2Fauth&amp;state=ba72f1aa7324605b3bd8fc2095312a32&amp;sdk=php-sdk-4.0.15&amp;scope="
                                            title="Facebook"><i class="fab fa-facebook-f"></i> Login with Facebook</a>
                                        </li>
                                    </div>
                                </div>


                                <div id="gSignInWrapper" class="mt-2">
                                    <div id="g_custom_btn" class="customGPlusSignIn">
                                        <span class="icon"></span>
                                        <span class="buttonText">Login with Google</span>
                                    </div>
                                </div>
 --}}

                            </div>

                        </form>

                        <p class="text-center"><a href="{{ route('password.request') }}" tabindex="5">Forgot password?</a></p>
                        <p class="text-center"><a href="{{ url('/register') }}" tabindex="6"><strong>Not registered? Join
                                    now!</strong></a></p>

                    </div>

                </div> <!-- End container -->
            </div> <!-- End  -->

        </div> <!-- End page main-->






    </div> <!-- End page -->


    {{-- footer start --}}

    <footer class="footer" xmlns="http://www.w3.org/1999/html">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-auto m-auto ml-md-auto">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <ul class="list-inline list-inline-dots mb-2 text-center">
                                <li class="list-inline-item"><a href="{{ url('/about') }}">About</a></li>
                                <li class="list-inline-item"><a href="{{ url('/terms') }}">Terms of Use</a></li>
                                <li class="list-inline-item"><a href="{{ url('/gdpr') }}">GDPR</a></li>
                                <li class="list-inline-item"><a href="{{ url('/privacy') }}">Privacy policy</a>
                                </li>
                                <li class="list-inline-item"><a href="{{ url('/cookie') }}">Use of cookies</a>
                                </li>
                                <li class="list-inline-item"><a href="{{ url('/support') }}">Support</a></li>
                            </ul>

                            <ul class="list-inline text-center">
                                <li class="list-inline-item">
                                    <a href="https://www.facebook.com" target="_blank">
                                        <i class="pr-1 fab fa-facebook-square"></i>Facebook</a>
                                </li>
                                <li class="list-inline-item">mymarkt.xyz © 2022</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>




    {{-- footer end --}}

    <script type="text/javascript" src="{{ asset('assets') }}/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="{{ asset('assets') }}/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="{{ asset('assets') }}/js/jquery.cookie.js"></script>
    <script type="text/javascript" src="{{ asset('assets') }}/js/js.cookie-2.2.0.min.js"></script>

    <script type="text/javascript" src="{{ asset('assets') }}/js/appff33.js?x=45"></script>
    <script type="text/javascript" src="{{ asset('assets') }}/js/common.js"></script>

    <script type="text/javascript">
        App.setLanguage = function(language) {

            $.cookie("lang", language, {
                expires: 7,
                path: '/'
            });
            $('#lang-box').modal('hide');
            location.reload();
        };
    </script>

    <script type="text/javascript">
        App.api_version = 'v1';
        App.api_path = '/api/' + App.api_version + "/method/";

        var options = {

            pageId: "main",
            api_version: "v1"
        };

        var constants = {
            GOOGLE_CLIENT_ID: "892039351146-ib7k7440sfrf2cp15nilef8gmvam7act.apps.googleusercontent.com"
        };

        var account = {

            id: "0",
            username: "undefined",
            fullname: "undefined",
            photoUrl: "https://mymarkt.xyz/img/profile_default_photo.png",
            accessToken: "undefined",
            lastNotifyView: "0"
        };
    </script>
    </div> <!-- End page -->

    <script src="{{ asset('assets') }}/js/blueimp-gallery.min.js"></script>
    <script src="{{ asset('assets') }}/js/geo.js"></script>

    <script type="text/javascript">
        var latitude = 37.773972;
        var longitude = -122.431297;

        var locationType = 0;

        var filters_visible = 0;

        var map_initialized = false;

        var strings = {

            szLocationError: "Location not specified or incorrect location selection"
        };

        // Initialize and add the map

        function initializeMap() {

            if (locationType != 0 && filters_visible == 1) {

                map_initialized = true;

                initMap();
            }
        }
    </script>

    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsrjTEwduP26fgAKZ-wmNSFhoZxsa68d0&amp;language=en&amp;callback=initializeMap">
    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsrjTEwduP26fgAKZ-wmNSFhoZxsa68d0&amp;language=en"></script>


    <script type="text/javascript">
        var $distanceSelect = $('select#distance');
        var $mapView = $('div.map-view');
        var $form = $("#search-form");

        $(document).on('click', '.loading-more-button', function() {

            var $this = $(this);

            if ($this.hasClass('disabled')) {

                return;
            }

            $this.addClass('disabled');
            $this.find('div.btn-loader').removeClass('hidden');
            $this.find('i.loading-more-button-icon').addClass('hidden');

            $.ajax({
                type: 'POST',
                url: $form.attr('action'),
                data: $form.serialize(),
                dataType: 'json',
                timeout: 30000,
                success: function(response) {

                    if (response.hasOwnProperty('html')) {

                        $("div.items-grid-view").append(response.html);
                    }

                    if (response.hasOwnProperty('items_count')) {

                        if (response.items_count < 20) {

                            $('div.loading-more-container').addClass('hidden');

                        } else {

                            var pageId = $form.find("input[name=pageId]").val();

                            pageId++;

                            $form.find("input[name=pageId]").val(pageId);
                        }
                    }

                    $this.removeClass('disabled');
                    $this.find('div.btn-loader').addClass('hidden');
                    $this.find('i.loading-more-button-icon').removeClass('hidden');
                },
                error: function(xhr, status, error) {

                    $this.removeClass('disabled');
                    $this.find('div.btn-loader').addClass('hidden');
                    $this.find('i.loading-more-button-icon').removeClass('hidden');
                }
            });
        });

        $('select#locationType').on('change', function() {

            switch (this.value) {

                case "0": {

                    locationType = 0;

                    $mapView.hide();
                    $distanceSelect.attr("disabled", true);

                    break;
                }

                case "1": {

                    locationType = 1;

                    if (!map_initialized) {

                        map_initialized = true;

                        initMap();
                    }

                    $mapView.removeClass("hidden");
                    $mapView.show();
                    $distanceSelect.attr("disabled", false);

                    break;
                }

                default: {

                    return;
                }
            }
        });

        $(document).on('click', '.btn-toggle-search-filters', function() {

            var $filtersBlock = $('div#search-filters');

            if ($filtersBlock.hasClass('hidden')) {

                $filtersBlock.removeClass('hidden');

                $.cookie("search-filters-visible", "yes", {
                    expires: 7,
                    path: '/'
                });

                if (locationType != 0 && !map_initialized) {

                    map_initialized = true;

                    initMap();
                }

            } else {

                $filtersBlock.addClass('hidden');

                $.removeCookie('search-filters-visible', {
                    path: '/'
                })
            }
        });
    </script>

    {{-- script of after product click --}}


    <script type="text/javascript">
        var strings = {

            szFavoritesAddTooltip: "Add to favorites",
            szFavoritesRemoveTooltip: "Remove from favorites",
            szItemRemoved: "Your classified has been successfully removed"
        };

        var options = {};

        $(document).off('click.gallery', 'div.item-other-images a').on('click.gallery', 'div.item-other-images a',
            function() {

                var links = $(this).parent().find('a.image-item');
                options.index = $(this)[0];
                blueimp.Gallery(links, options);

                return false;
            });

        $(document).on("click", "button#item-activate-button", function() {

            var $this = $(this);

            var itemId = $this.attr('data-id');

            $this.addClass('disabled');

            $.ajax({
                type: "POST",
                url: App.api_path + "items.activate",
                data: "accountId=" + account.id + "&accessToken=" + account.accessToken + "&itemId=" +
                    itemId,
                dataType: 'json',
                success: function(response) {

                    window.location.reload();
                },
                error: function(xhr, status, error) {

                    $this.removeClass('disabled');
                }
            });
        });

        $("form#inactivate-item-form").submit(function(e) {

            var $button = $('button#item-inactivate-button');
            var form = $('form#inactivate-item-form');

            $button.addClass('disabled');

            $.ajax({
                type: "POST",
                url: form.attr('action'),
                data: form.serialize(),
                dataType: 'json',
                success: function(response) {

                    $('#inactivate-item').modal('hide');

                    $button.removeClass('disabled');

                    window.location.reload();
                },
                error: function(xhr, status, error) {

                    $button.removeClass('disabled');
                }
            });

            return false;
        });

        $(document).on("click", "button.delete-forever-item-button", function() {

            $('div.my-message').find('div.alert-warning').text(strings.szItemRemoved);
            $("form#delete-item-form").find("input[name=inactivate]").val("0").submit();
        });

        $(document).on("click", "button#phone-number-button", function() {

            var $this = $(this);

            $this.find('span').text($(this).attr('data-phone-number'));

            var itemId = $(this).attr('data-item-id');

            if ($this.hasClass("phone-hidden")) {

                $this.removeClass("phone-hidden");

                $.ajax({
                    type: "POST",
                    url: App.api_path + "items.phone",
                    data: "accountId=" + account.id + "&accessToken=" + account.accessToken + "&itemId=" +
                        itemId,
                    dataType: 'json',
                    success: function(response) {

                        // silent
                    },
                    error: function(xhr, status, error) {

                        // silent
                    }
                });
            }
        });

        $(document).on("click", "input[name=abuseId]", function() {

            var form = $('#new-report-form');

            form.find("button[type=submit]").removeAttr('disabled');
        });

        // Show Map

        $(document).on("click", "#show-map", function() {

            $('#default-map').addClass('hidden');

            initMap();
        });

        // Initialize and add the map

        function initMap() {

            var lat = 37.000000;
            var lng = -122.000000;

            var loc = {
                lat: 0.000000,
                lng: 0.000000
            };

            loc.lat = lat;
            loc.lng = lng;

            // The map, centered at location
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 9,
                center: loc,
                draggable: true,
                scrollwheel: false,
                disableDoubleClickZoom: false,
                zoomControl: false,
                scaleControl: false,
                mapTypeControl: false,
                streetViewControl: false,
                fullscreenControl: false
            });

            var marker = new google.maps.Marker({
                position: loc,
                map: map,
                draggable: false
            });

            $('#map').removeClass('hidden');
        }
    </script>


    {{-- login script start --}}

    <script type="text/javascript" src="{{ asset('') }}assets/js/firebase/config.js"></script>
    <script type="text/javascript" src="{{ asset('') }}assets/js/firebase/google.js"></script>

    <script>
        $('#login-form').submit(function(event) {

            event.preventDefault();

            grecaptcha.ready(function() {
                grecaptcha.execute('6LfhbfgdAAAAACcgiIJ1eGE5845h_nXffBfIZOj3', {
                    action: 'submit'
                }).then(function(token) {

                    $('#login-form').prepend('<input type="hidden" name="recaptcha_token" value="' +
                        token + '">');
                    $('#login-form').unbind('submit').submit();
                });
            });
        });
    </script>

    <script type="text/javascript">
        var strings = {

            szEmptyError: "This field must not be empty"
        };

        var error = false;

        // Get form and elements (fields)

        var $form = $('form#login-form');
        var $username_field = $form.find('.field-login-form-username');
        var $password_field = $form.find('.field-login-form-password');

        $form.submit(function(e) {

            // Clear all errors

            error = false;

            $username_field.removeClass('has-error').find('.help-block').text('');
            $password_field.removeClass('has-error').find('.help-block').text('');

            // Check username

            var usernamePattern = /^([a-zA-Z]{4,24})?([a-zA-Z][a-zA-Z0-9_]{4,24})$/i;

            if ($.trim($username_field.find('input').val()).length == 0) {

                $username_field.addClass('has-error');
                $username_field.find('.help-block').text(strings.szEmptyError);

                error = true;
            }

            // Check password

            if ($.trim($password_field.find('input').val()).length == 0) {

                $password_field.addClass('has-error');
                $password_field.find('.help-block').text(strings.szEmptyError);

                error = true;
            }

            // Submit form only if no error (error=false)

            if (error) return false;
        });

        $username_field.find('input[name=user_username]').keyup(function() {

            // Clear error when text change

            $username_field.removeClass('has-error').find('.help-block').text('');
        });

        $password_field.find('input[name=user_password]').keyup(function() {

            // Clear error when text change

            $password_field.removeClass('has-error').find('.help-block').text('');
        });
    </script>

    {{-- login script end --}}


</body>

</html>
