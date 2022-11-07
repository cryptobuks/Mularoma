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
        <title> ELSHADAI GOLDEN TRADERS - Password reset</title>

        <!-- Favicon -->
        <link rel="icon" href="{{ asset('assetss/img/brand/favicon.png')}}" type="image/x-icon"/>

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
                <div class="row no-gutter">
                    <!-- The image half -->
                   
                    <!-- The content half -->
                    <div class="col-md-12 col-lg-12 col-xl-12 bg-white">
                        <div class="login d-flex align-items-center py-2">
                            <!-- Demo content-->
                            <div class="container p-0">
                               
                                <div class="row">
                                      
                                    <div class="col-md-10 col-lg-10 col-xl-9 mx-auto">
                                         <img src="https://elshadaigtinvestment.org/log.png" width="200" height="200">
                                        <div class="card-sigin">
                                            <div class="mb-5 d-flex">
                                                <a href="">
                                               
                                                </a>
                                                <!-- <h1 class="main-logo1 ms-1 me-0 my-auto tx-28">{{env('APP_NAME') }}</h1> -->
                                              
                                            </div>
                                            <div class="card-sigin">
                                                
                                                <div class="main-signup-header">
                                                    <h2>Reset password</h2>
                                                    <h5 class="fw-semibold mb-4">Please sign in to continue.</h5>
                                                     @if(Session::has('msgType') && Session::get('msgType') == 'err')                                
                                    <div class="alert alert-danger">
                                        {{Session::get('status')}}
                                    </div>
                                    {{Session::forget('msgType')}}
                                    {{Session::forget('status')}}
                                     
                                @endif
                           
                                @if(Session::has('pwd_rst_suc'))
                                    <div class="alert alert-success">
                                        {{Session::get('status')}}
                                    </div>
                                    {{Session::forget('msgType')}}
                                    {{Session::forget('status')}}
                                    {{Session::forget('pwd_rst_suc')}}
                                    
                                @elseif(Session::has('pwd_reset_err'))
                                    <div class="alert alert-danger">
                                        {{Session::get('pwd_reset_err')}}
                                    </div>
                                    {{Session::forget('pwd_reset_err')}}
                                    <br><br><br>
                                @else
                                    
                                                  <form method="POST" action="/user/update/pwd">
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
                                                            <label for="password" class=" col-form-label text-md-right">{{ __('New Password') }}</label>
                                            <input id="password" type="password" class="regTxtBox @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
    
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                                    
                                                        </div>
                                                        
                                                         <div class="form-group">
                                                            <label for="password-confirm" class=" col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                                            <input id="password-confirm" type="password" class="regTxtBox" name="c_pwd" required autocomplete="new-password">
                                                    
                                                        </div>
                                                        
                                                        
                                                        <button type="submit" class="btn btn-main-primary btn-block">Submit</button>
                                                      
                                                    </form>
                                                    
                                                    
                                                    
                                                    
                                                    @endif
                                                   
                                                </div>
                                            </div>
                                        
                                         <a href="/login">Login</a>
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




