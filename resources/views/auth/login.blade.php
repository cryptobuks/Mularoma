<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
        <meta name="Author" content="Spruko Technologies Private Limited">
        <meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4"/>

        <!-- Title -->
        <title> Mularoma - Login</title>

        <!-- Favicon -->
        <link rel="icon" href="{{ asset('images/logo_icon.svg')}}" type="image/x-icon"/>

        <!-- Icons css -->
        <link href="{{ asset('assetss/css/icons.css')}}" rel="stylesheet">

        <!-- Bootstrap css -->
        <link href="{{ asset('assetss/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

        <!--  Right-sidemenu css -->
        <link href="{{ asset('assetss/plugins/sidebar/sidebar.css')}}" rel="stylesheet">

        <!--  Custom Scroll bar-->
        <link href="{{ asset('assetss/plugins/mscrollbar/jquery.mCustomScrollbar.css')}}" rel="stylesheet"/>

        <!--- Style css --->
        <link href="{{ asset('assetss/css/style.css')}}" rel="stylesheet">
        <link href="{{ asset('assetss/css/boxed.css')}}" rel="stylesheet">
        <link href="{{ asset('assetss/css/dark-boxed.css')}}" rel="stylesheet">

        <!--- Dark-mode css --->
        <link href="{{ asset('assetss/css/style-dark.css')}}" rel="stylesheet">

        <!---Skinmodes css-->
        <link href="{{ asset('assetss/css/skin-modes.css')}}" rel="stylesheet" />

        <!--- Animations css-->
        <link href="{{ asset('assetss/css/animate.css')}}" rel="stylesheet">
        
        <style>
            @media screen and (max-width: 480px) {
              .login-image {
                display: none;
              }
            }
        </style>

    </head>
    <body class="error-page1 main-body bg-light text-dark">

        <!-- Loader -->
        <div id="global-loader">
            <img src="{{ asset('assetss/img/loader.svg')}}" class="loader-img" alt="Loader">
        </div>
        <!-- /Loader -->

        <!-- Page -->
        <div class="page">

            <div class="container-fluid">
                <div class="row">
                    <!-- The image half -->
                    <div class="col-md-7 col-lg-7 col-xl-7 login-image" style="background: linear-gradient( rgba(0,0,0,0.4), rgba(0, 0, 0, 0.4) ), url('https://financefeeds.com/wp-content/uploads/2022/08/Forex.jpeg'); background-position: center;">
                        <!--<img src="{{asset('images/login.jpg')}}" alt="Image" style="height:100vh;"/>-->
                    </div>
                    <!-- The content half -->
                    <div class="col-md-5 col-lg-5 col-xl-5 bg-white">
                        <div class="login d-flex align-items-center py-2">
                            <!-- Demo content-->
                            <div class="container p-0">
                               
                                <div class="row">
                                      
                                    <div class="col-md-10 col-lg-10 col-xl-9 mx-auto">
                                        <img src="{{asset('images/logo.svg')}}" width="200" height="200" style="margin-top: -3em;">
                                        <div class="card-sigin">
                                            <div class="mb-5 d-flex">
                                                <a href="">
                                               
                                                </a>
                                                <!-- <h1 class="main-logo1 ms-1 me-0 my-auto tx-28">{{env('APP_NAME') }}</h1> -->
                                              
                                            </div>
                                            <div class="card-sigin" style="margin-top: -3em">
                                                <div class="alert alert-success" >For any assistance please contact the admin via WhatsApp +254101553721 </div>
                                                
                                                <div class="main-signup-header">
                                                    <h2>Welcome back!</h2>
                                                    <h5 class="fw-semibold mb-4">Please sign in to continue.</h5>
                                                    <form method="POST" action="{{ route('session_sa.upload_u2s') }}">
                                                        @csrf
                                                        @if(Session::has('err_msg'))
                                                    <div class="alert alert-danger">
                                                        
                                                        {{Session::get('err_msg')}}
                                                       
                                                            </div>
                                                             {{Session::forget('err_msg')}}
                                                        @endif

                                                        @if(Session::has('regMsg'))
                                                            <div class="alert alert-success" >
                                                                {{Session::get('regMsg')}}
                                                            </div>
                                                             {{Session::forget('regMsg')}}
                                                        @endif                                                
                                                
                                                        <div class="form-group">
                                                            <label>Email</label> <input class="form-control"  type="text" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-Mail Address">

                                                            @error('email')
                                                            <span class="invalid-feedback" role="alert alert-danger" >
                                                                {{ $message }}
                                                            </span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Password</label> <input class="form-control" name="password" required autocomplete="current-password" placeholder="Password" type="password">
                                                            @error('password')
                                                            <span class="invalid-feedback" role="alert alert-danger" >
                                                                {{ $message }}
                                                            </span>
                                                        @enderror
                                                    
                                                        </div><button class="btn btn-main-primary btn-block">Sign In</button>
                                                      
                                                    </form>
                                                    <div class="main-signin-footer d-flex justify-content-between">
                                                       @if (Route::has('password.request'))
                                                            <a class="btn btn-link text-danger" href="{{ route('password.request') }}">
                                                                {{ __('Forgot Your Password?') }}
                                                            </a>
                                                        @endif
                                                        <a class="btn btn-link " href="/register">
                                                            {{ __('Not a Member ?') }}
                                                        </a>
                                                    </div>
                                                    <div class="main-signin-footer">
                                                       
                                                            
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End -->
                        </div>
                    </div><!-- End -->
                </div>
            </div>

        </div>
        <!-- End Page -->

        <!-- JQuery min js -->
        <script src="{{ asset('assetss/plugins/jquery/jquery.min.js')}}"></script>

        <!-- Bootstrap Bundle js -->
        <script src="{{ asset('assetss/plugins/bootstrap/js/popper.min.js')}}"></script>
        <script src="{{ asset('assetss/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

        <!-- Ionicons js -->
        <script src="{{ asset('assetss/plugins/ionicons/ionicons.js')}}"></script>

        <!-- Moment js -->
        <script src="{{ asset('assetss/plugins/moment/moment.js')}}"></script>

        <!-- P-scroll js -->
        <script src="{{ asset('assetss/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>

        <!-- eva-icons js -->
        <script src="{{ asset('assetss/js/eva-icons.min.js')}}"></script>

        <!-- Rating js-->
        <script src="{{ asset('assetss/plugins/rating/jquery.rating-stars.js')}}"></script>
        <script src="{{ asset('assetss/plugins/rating/jquery.barrating.js')}}"></script>

        <!-- Custom Scroll bar Js-->
        <script src="{{ asset('assetss/plugins/mscrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>

        <!-- custom js -->
        <script src="{{ asset('assetss/js/custom.js')}}"></script>

    </body>
</html>

