@extends('frontend.master')
@section('content')

<div class="page">
    <div class="page-main">
        <div class="content my-3 my-md-5">
            <div class="container">

                <div class="col-auth signup mx-auto" style="background: white;">

                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                       @csrf
                        <div class="card-body">

                            <div class="card-title">create account</div>

                            <div class="error-summary alert alert-danger" style="display: none">
                                <ul>
                                </ul>
                            </div>


                            <div class="form-group field-signup-form-username required noselect">
                                <label class="form-label" for="username">Username <i class="far fa-question-circle"
                                        title="This is your login. Used for authorization and as name for your profile page. Only English letters and numbers. At least 5 characters"
                                        rel="tooltip"></i></label>
                                <input placeholder="Your login" maxlength="24" type="text" required id="username"
                                    class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" aria-required="true">
                                    @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="help-block"></div>
                            </div>

                            <div class="form-group field-signup-form-fullname required noselect">
                                <label class="form-label" for="fullname">Full name <i class="far fa-question-circle"
                                        title="Your real name and surname. For example: displayed on your profile page and in messages. At least 2 characters"
                                        rel="tooltip"></i></label>
                                <input placeholder="What is your name?"  type="text" required
                                    id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" aria-required="true">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                <div class="help-block"></div>
                            </div>
                            <div class="form-group field-signup-form-fullname required noselect">
                                <label class="form-label" for="fullname">Referal Code <small>(Optional)</small> <i class="far fa-question-circle"
                                        title="Enter referal code if yo have any"
                                        rel="tooltip"></i></label>
                                <input placeholder="Do you have a referal code ?"  type="text"
                                    id="referalcode" class="form-control @error('referalcode') is-invalid @enderror" name="referalcode" value="{{ old('referalcode') }}" aria-required="true">
                                    @error('referalcode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                <div class="help-block"></div>
                            </div>
                            <div class="form-group field-signup-form-fullname required noselect">
                                <label class="form-label" for="fullname">Mobile <i class="far fa-question-circle"
                                        title="Your real name and surname. For example: displayed on your profile page and in messages. At least 2 characters"
                                        rel="tooltip"></i></label>
                                <input placeholder="What is your mobile?"  type="text" required
                                    id="mobile" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile' ) }}" aria-required="true">
                                    @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                <div class="help-block"></div>
                            </div>
                            <div class="form-group field-signup-form-email required noselect">
                                <label class="form-label" for="email">Email <i class="far fa-question-circle"
                                        title="Your valid email. Used to recover your password and contact you (if necessary). We do not send promotional emails and spam!"
                                        rel="tooltip"></i></label>
                                <input placeholder="E-mail address"  type="email" required id="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" aria-required="true">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="help-block"></div>
                            </div>
                            <script>
                                function setToggle(type)
                                {
                                    $('.carbajar').toggle('display');
                                    if(type=='Normal')
                                    $('.carbajarinput').removeAttr('required');
                                    else
                                    $('.carbajarinput').attr('required','true');

                                }
                            </script>
                            <div class="form-group field-signup-form-email required noselect">
                                <label class="form-label" for="id_card">Registration Type <i class="far fa-question-circle"
                                        title="Are you a carbajar user or a normal user"
                                        rel="tooltip"></i></label>
                                <select   required
                                    class="form-control @error('type') is-invalid @enderror" onchange="setToggle(this.value)" name="type"  aria-required="true">
                                    <option value="Normal">Normal User</option>
                                    <option value="Carbajar">Carbajar User</option>
                                </select>
                                    @error('type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="help-block"></div>
                            </div>
                            <div class="form-group field-signup-form-email  noselect carbajar" style="display: {{old('type')&&old('type')=='Carbajar'?'block':'none'}}">
                                <label class="form-label" for="id_card">Upload Id Card <i class="far fa-question-circle"
                                        title="Your valid ID proof"
                                        rel="tooltip"></i></label>
                                <input   type="file"  id="file"
                                    class="form-control carbajarinput @error('id_card') is-invalid @enderror" name="id_card" value="{{ old('id_card') }}" aria-required="true">
                                    @error('id_card')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="help-block"></div>
                            </div>
                            <div class="form-group field-signup-form-email  noselect carbajar" style="display: {{old('type')&&old('type')=='Carbajar'?'block':'none'}}">
                                <label class="form-label" for="id_card">Upload Registration Certificate <i class="far fa-question-circle"
                                        title="Your registration proof"
                                        rel="tooltip"></i></label>
                                <input   type="file"  id="file"
                                    class="form-control  carbajarinput @error('registration') is-invalid @enderror" name="registration" value="{{ old('registration') }}" aria-required="true">
                                    @error('registration')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="help-block"></div>
                            </div>

                            <div class="form-group field-signup-form-password required noselect">
                                <label class="form-label" for="password">Password <i class="far fa-question-circle"
                                        title="Password for your account. At least 6 characters"
                                        rel="tooltip"></i></label>
                                <input placeholder="Enter your password" maxlength="20" type="password" required
                                    id="password" class="form-control @error('password') is-invalid @enderror" name="password" value="" aria-required="true">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="help-block"></div>
                            </div>
                            <div class="form-group field-signup-form-password required noselect">
                                <label class="form-label" for="password">Confirm Password <i class="far fa-question-circle"
                                        title="Password for your account. At least 6 characters"
                                        rel="tooltip"></i></label>
                                <input placeholder="Enter your password" maxlength="20" type="password" required
                                    id="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" value="" aria-required="true">
                                    @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="help-block"></div>
                            </div>




                            <div class="row mb-2">

                                <div class="col-12 col-md-6 col-lg-6">
                                    <div class="form-group field-signup-form-username required noselect">
                                        <label class="form-label">Sex  <i
                                                class="far fa-question-circle"
                                                title="Specify your gender. This will make your profile more complete and informative."
                                                rel="tooltip"></i></label>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-lg-6 text-right pr-0">
                                    <div class="select-group select-group-pills">

                                        <label class="select-group-item">
                                            <input type="radio" name="sex" value="Other" class="select-group-input">
                                            <span class="select-group-button select-group-button-icon" rel="tooltip"
                                                title="Other">
                                                <i class="fa fa-user-secret"></i>
                                            </span>
                                        </label>

                                        <label class="select-group-item">
                                            <input type="radio" checked name="sex" value="Male" class="select-group-input">
                                            <span class="select-group-button select-group-button-icon" rel="tooltip"
                                                title="Male">
                                                <i class="fa fa-male" aria-hidden="true"></i>
                                            </span>
                                        </label>

                                        <label class="select-group-item">
                                            <input type="radio" name="sex" value="Female" class="select-group-input">
                                            <span class="select-group-button select-group-button-icon" rel="tooltip"
                                                title="Female">
                                                <i class="fa fa-female"></i>
                                            </span>
                                        </label>

                                    </div>
                                </div>

                            </div>

                            <div class="terms text-muted pb-3 text-center">By clicking Sign up button, you confirm that
                                you have read our <a href="terms.html">Terms of Use</a>, <a href="privacy.html">Privacy
                                    policy</a> and <a href="cookie.html">Use of cookies</a></div>

                            <button type="submit" class="btn btn-primary btn-block">Sign up</button>
{{--

                            <div id="social-buttons-block">
                                <div class="text-center mt-2 noselect">or</div>
                                <div class="auth-clients">
                                    <a class="btn btn-icon btn-facebook auth-link d-block mt-2"
                                        href="https://www.facebook.com/v2.2/dialog/oauth?client_id=3097944460494700&amp;redirect_uri=https%3A%2F%2Fmymarkt.xyz%2Ffacebook%2Fauth&amp;state=68abc1e5142c4402a93b29fa1160d9fd&amp;sdk=php-sdk-4.0.15&amp;scope="
                                        title="Facebook"><i class="fab fa-facebook-f"></i> Sign up with Facebook</a>
                                    </li>
                                </div>
                            </div>


                            <div id="gSignInWrapper" class="mt-2">
                                <div id="g_custom_btn" class="customGPlusSignIn">
                                    <span class="icon"></span>
                                    <span class="buttonText">Login with Google</span>
                                </div>
                            </div> --}}


                        </div>
                    </form>

                    <p class="text-center"><a href="{{ url('/login') }}">Do you have an account? Log in</a></p>
                </div>


            </div> <!-- End container -->
        </div> <!-- End  -->

    </div> <!-- End page main-->



</div> <!-- End page -->

@endsection
