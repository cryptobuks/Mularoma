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
          <title> Mularoma - Signup</title>

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
                <div class="row no-gutter">
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
                                        <img src="{{asset('images/logo.svg')}}" width="200" height="200">
                                        <div class="card-sigin">
                                            <div class="mb-5 d-flex">
                                            
                                                <!--<h1 class="main-logo1 ms-1 me-0 my-auto tx-28"> Signup</h1>-->

                                                <?php
                                                if(request()->username){
                                                    $ref=request()->username;
                                                }else{
                                                    $ref="admin";
                                                }
                                                ?>
                                            </div>
                                            <div class="card-sigin" style="margin-top: -5em">
                                                <div class="main-signup-header">
                                                    <h2>Welcome onboard!</h2>
                                                    <h5 class="fw-semibold mb-4">Please sign up to continue.</h5>
                                                    <form method="POST" action="{{ route('register') }}" id="reg"> 
                                            
                                                <input id="csrf" type="hidden"  name="_token" value="{{ csrf_token() }}" >
                                                <input type="hidden" name="ref" value="<?php echo $ref ?>">
                                                <div class="form-group row">                                                    
                                                    <div class="col-sm-6">
                                                    <label>Enter Firstname: </label>
                                                        <input id="Fname" type="text" class="form-control @error('Fname') is-invalid @enderror regTxtBox" name="Fname" value="{{ old('Fname') }}" required autocomplete="Fname" autofocus placeholder="First Name">

                                                        @error('Fname')
                                                            <span class="invalid-feedback" role="alert alert-danger">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <br><br>
                                                      <div class="col-sm-6">
                                                    <label>Enter LastName: </label>
                                                        <input id="Lname" type="text" class="form-control @error('Lname') is-invalid @enderror regTxtBox" name="Lname" value="{{ old('Lname') }}" required autocomplete="Fname" autofocus placeholder="Last Name">

                                                        @error('Lname')
                                                            <span class="invalid-feedback" role="alert alert-danger">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row"> 
                                                    <div class="col-sm-6">
                                                        <label>Enter Your Email: </label>
                                                          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror regTxtBox" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address">

                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert alert-danger">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    
                                                    <div class="col-sm-6">
                                                       <label>Enter Username: </label>
                                                       <input id="username" type="username" class="form-control @error('username') is-invalid @enderror regTxtBox" name="username" value="{{ old('username') }}" required  placeholder="Usernane">

                                                        @error('username')
                                                            <span class="invalid-feedback" role="alert alert-danger" >
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                
                                                <div class="form-group row">
                                                    <div class="col-sm-6">
                                                       <label>Enter mobile: </label>
                                                       <input id="number" type="number" class="form-control @error('phone') is-invalid @enderror regTxtBox" name="phone" value="{{ old('phone') }}" required autocomplete="phone" placeholder=" 254789326743 ">

                                                        @error('phone')
                                                            <span class="invalid-feedback" role="alert alert-danger" >
                                                                <!--<strong>{{ $message }}</strong>-->
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    
                                                    <div class="col-sm-6">
                                                     <label>Choose your country: </label>
                                                         <select class="form-control" name="country" >
                                                          
                                                           <option value="Afganistan">Afghanistan</option>
                                                           <option value="Albania">Albania</option>
                                                           <option value="Algeria">Algeria</option>
                                                           <option value="American Samoa">American Samoa</option>
                                                           <option value="Andorra">Andorra</option>
                                                           <option value="Angola">Angola</option>
                                                           <option value="Anguilla">Anguilla</option>
                                                           <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                                           <option value="Argentina">Argentina</option>
                                                           <option value="Armenia">Armenia</option>
                                                           <option value="Aruba">Aruba</option>
                                                           <option value="Australia">Australia</option>
                                                           <option value="Austria">Austria</option>
                                                           <option value="Azerbaijan">Azerbaijan</option>
                                                           <option value="Bahamas">Bahamas</option>
                                                           <option value="Bahrain">Bahrain</option>
                                                           <option value="Bangladesh">Bangladesh</option>
                                                           <option value="Barbados">Barbados</option>
                                                           <option value="Belarus">Belarus</option>
                                                           <option value="Belgium">Belgium</option>
                                                           <option value="Belize">Belize</option>
                                                           <option value="Benin">Benin</option>
                                                           <option value="Bermuda">Bermuda</option>
                                                           <option value="Bhutan">Bhutan</option>
                                                           <option value="Bolivia">Bolivia</option>
                                                           <option value="Bonaire">Bonaire</option>
                                                           <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                                           <option value="Botswana">Botswana</option>
                                                           <option value="Brazil">Brazil</option>
                                                           <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                                           <option value="Brunei">Brunei</option>
                                                           <option value="Bulgaria">Bulgaria</option>
                                                           <option value="Burkina Faso">Burkina Faso</option>
                                                           <option value="Burundi">Burundi</option>
                                                           <option value="Cambodia">Cambodia</option>
                                                           <option value="Cameroon">Cameroon</option>
                                                           <option value="Canada">Canada</option>
                                                           <option value="Canary Islands">Canary Islands</option>
                                                           <option value="Cape Verde">Cape Verde</option>
                                                           <option value="Cayman Islands">Cayman Islands</option>
                                                           <option value="Central African Republic">Central African Republic</option>
                                                           <option value="Chad">Chad</option>
                                                           <option value="Channel Islands">Channel Islands</option>
                                                           <option value="Chile">Chile</option>
                                                           <option value="China">China</option>
                                                           <option value="Christmas Island">Christmas Island</option>
                                                           <option value="Cocos Island">Cocos Island</option>
                                                           <option value="Colombia">Colombia</option>
                                                           <option value="Comoros">Comoros</option>
                                                           <option value="Congo">Congo</option>
                                                           <option value="Cook Islands">Cook Islands</option>
                                                           <option value="Costa Rica">Costa Rica</option>
                                                           <option value="Cote DIvoire">Cote DIvoire</option>
                                                           <option value="Croatia">Croatia</option>
                                                           <option value="Cuba">Cuba</option>
                                                           <option value="Curaco">Curacao</option>
                                                           <option value="Cyprus">Cyprus</option>
                                                           <option value="Czech Republic">Czech Republic</option>
                                                           <option value="Denmark">Denmark</option>
                                                           <option value="Djibouti">Djibouti</option>
                                                           <option value="Dominica">Dominica</option>
                                                           <option value="Dominican Republic">Dominican Republic</option>
                                                           <option value="East Timor">East Timor</option>
                                                           <option value="Ecuador">Ecuador</option>
                                                           <option value="Egypt">Egypt</option>
                                                           <option value="El Salvador">El Salvador</option>
                                                           <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                           <option value="Eritrea">Eritrea</option>
                                                           <option value="Estonia">Estonia</option>
                                                           <option value="Ethiopia">Ethiopia</option>
                                                           <option value="Falkland Islands">Falkland Islands</option>
                                                           <option value="Faroe Islands">Faroe Islands</option>
                                                           <option value="Fiji">Fiji</option>
                                                           <option value="Finland">Finland</option>
                                                           <option value="France">France</option>
                                                           <option value="French Guiana">French Guiana</option>
                                                           <option value="French Polynesia">French Polynesia</option>
                                                           <option value="French Southern Ter">French Southern Ter</option>
                                                           <option value="Gabon">Gabon</option>
                                                           <option value="Gambia">Gambia</option>
                                                           <option value="Georgia">Georgia</option>
                                                           <option value="Germany">Germany</option>
                                                           <option value="Ghana">Ghana</option>
                                                           <option value="Gibraltar">Gibraltar</option>
                                                           <option value="Great Britain">Great Britain</option>
                                                           <option value="Greece">Greece</option>
                                                           <option value="Greenland">Greenland</option>
                                                           <option value="Grenada">Grenada</option>
                                                           <option value="Guadeloupe">Guadeloupe</option>
                                                           <option value="Guam">Guam</option>
                                                           <option value="Guatemala">Guatemala</option>
                                                           <option value="Guinea">Guinea</option>
                                                           <option value="Guyana">Guyana</option>
                                                           <option value="Haiti">Haiti</option>
                                                           <option value="Hawaii">Hawaii</option>
                                                           <option value="Honduras">Honduras</option>
                                                           <option value="Hong Kong">Hong Kong</option>
                                                           <option value="Hungary">Hungary</option>
                                                           <option value="Iceland">Iceland</option>
                                                           <option value="Indonesia">Indonesia</option>
                                                           <option value="India">India</option>
                                                           <option value="Iran">Iran</option>
                                                           <option value="Iraq">Iraq</option>
                                                           <option value="Ireland">Ireland</option>
                                                           <option value="Isle of Man">Isle of Man</option>
                                                           <option value="Israel">Israel</option>
                                                           <option value="Italy">Italy</option>
                                                           <option value="Jamaica">Jamaica</option>
                                                           <option value="Japan">Japan</option>
                                                           <option value="Jordan">Jordan</option>
                                                           <option value="Kazakhstan">Kazakhstan</option>
                                                           <option value="KENYA">Kenya</option>
                                                           <option value="Kiribati">Kiribati</option>
                                                           <option value="Korea North">Korea North</option>
                                                           <option value="Korea Sout">Korea South</option>
                                                           <option value="Kuwait">Kuwait</option>
                                                           <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                           <option value="Laos">Laos</option>
                                                           <option value="Latvia">Latvia</option>
                                                           <option value="Lebanon">Lebanon</option>
                                                           <option value="Lesotho">Lesotho</option>
                                                           <option value="Liberia">Liberia</option>
                                                           <option value="Libya">Libya</option>
                                                           <option value="Liechtenstein">Liechtenstein</option>
                                                           <option value="Lithuania">Lithuania</option>
                                                           <option value="Luxembourg">Luxembourg</option>
                                                           <option value="Macau">Macau</option>
                                                           <option value="Macedonia">Macedonia</option>
                                                           <option value="Madagascar">Madagascar</option>
                                                           <option value="Malaysia">Malaysia</option>
                                                           <option value="Malawi">Malawi</option>
                                                           <option value="Maldives">Maldives</option>
                                                           <option value="Mali">Mali</option>
                                                           <option value="Malta">Malta</option>
                                                           <option value="Marshall Islands">Marshall Islands</option>
                                                           <option value="Martinique">Martinique</option>
                                                           <option value="Mauritania">Mauritania</option>
                                                           <option value="Mauritius">Mauritius</option>
                                                           <option value="Mayotte">Mayotte</option>
                                                           <option value="Mexico">Mexico</option>
                                                           <option value="Midway Islands">Midway Islands</option>
                                                           <option value="Moldova">Moldova</option>
                                                           <option value="Monaco">Monaco</option>
                                                           <option value="Mongolia">Mongolia</option>
                                                           <option value="Montserrat">Montserrat</option>
                                                           <option value="Morocco">Morocco</option>
                                                           <option value="Mozambique">Mozambique</option>
                                                           <option value="Myanmar">Myanmar</option>
                                                           <option value="Nambia">Nambia</option>
                                                           <option value="Nauru">Nauru</option>
                                                           <option value="Nepal">Nepal</option>
                                                           <option value="Netherland Antilles">Netherland Antilles</option>
                                                           <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                                           <option value="Nevis">Nevis</option>
                                                           <option value="New Caledonia">New Caledonia</option>
                                                           <option value="New Zealand">New Zealand</option>
                                                           <option value="Nicaragua">Nicaragua</option>
                                                           <option value="Niger">Niger</option>
                                                           <option value="Nigeria">Nigeria</option>
                                                           <option value="Niue">Niue</option>
                                                           <option value="Norfolk Island">Norfolk Island</option>
                                                           <option value="Norway">Norway</option>
                                                           <option value="Oman">Oman</option>
                                                           <option value="Pakistan">Pakistan</option>
                                                           <option value="Palau Island">Palau Island</option>
                                                           <option value="Palestine">Palestine</option>
                                                           <option value="Panama">Panama</option>
                                                           <option value="Papua New Guinea">Papua New Guinea</option>
                                                           <option value="Paraguay">Paraguay</option>
                                                           <option value="Peru">Peru</option>
                                                           <option value="Phillipines">Philippines</option>
                                                           <option value="Pitcairn Island">Pitcairn Island</option>
                                                           <option value="Poland">Poland</option>
                                                           <option value="Portugal">Portugal</option>
                                                           <option value="Puerto Rico">Puerto Rico</option>
                                                           <option value="Qatar">Qatar</option>
                                                           <option value="Republic of Montenegro">Republic of Montenegro</option>
                                                           <option value="Republic of Serbia">Republic of Serbia</option>
                                                           <option value="Reunion">Reunion</option>
                                                           <option value="Romania">Romania</option>
                                                           <option value="Russia">Russia</option>
                                                           <option value="RWANDA">Rwanda</option>
                                                           <option value="St Barthelemy">St Barthelemy</option>
                                                           <option value="St Eustatius">St Eustatius</option>
                                                           <option value="St Helena">St Helena</option>
                                                           <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                                           <option value="St Lucia">St Lucia</option>
                                                           <option value="St Maarten">St Maarten</option>
                                                           <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                                           <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                                           <option value="Saipan">Saipan</option>
                                                           <option value="Samoa">Samoa</option>
                                                           <option value="Samoa American">Samoa American</option>
                                                           <option value="San Marino">San Marino</option>
                                                           <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                                           <option value="Saudi Arabia">Saudi Arabia</option>
                                                           <option value="Senegal">Senegal</option>
                                                           <option value="Seychelles">Seychelles</option>
                                                           <option value="Sierra Leone">Sierra Leone</option>
                                                           <option value="Singapore">Singapore</option>
                                                           <option value="Slovakia">Slovakia</option>
                                                           <option value="Slovenia">Slovenia</option>
                                                           <option value="Solomon Islands">Solomon Islands</option>
                                                           <option value="Somalia">Somalia</option>
                                                           <option value="South Africa">South Africa</option>
                                                           <option value="Spain">Spain</option>
                                                           <option value="Sri Lanka">Sri Lanka</option>
                                                           <option value="Sudan">Sudan</option>
                                                           <option value="Suriname">Suriname</option>
                                                           <option value="Swaziland">Swaziland</option>
                                                           <option value="Sweden">Sweden</option>
                                                           <option value="Switzerland">Switzerland</option>
                                                           <option value="Syria">Syria</option>
                                                           <option value="Tahiti">Tahiti</option>
                                                           <option value="Taiwan">Taiwan</option>
                                                           <option value="Tajikistan">Tajikistan</option>
                                                           <option value="TANZANIA">Tanzania</option>
                                                           <option value="Thailand">Thailand</option>
                                                           <option value="Togo">Togo</option>
                                                           <option value="Tokelau">Tokelau</option>
                                                           <option value="Tonga">Tonga</option>
                                                           <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                                           <option value="Tunisia">Tunisia</option>
                                                           <option value="Turkey">Turkey</option>
                                                           <option value="Turkmenistan">Turkmenistan</option>
                                                           <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                                           <option value="Tuvalu">Tuvalu</option>
                                                           <option value="UGANDA">Uganda</option>
                                                           <option value="United Kingdom">United Kingdom</option>
                                                           <option value="Ukraine">Ukraine</option>
                                                           <option value="United Arab Erimates">United Arab Emirates</option>
                                                           <option value="United States of America">United States of America</option>
                                                           <option value="Uraguay">Uruguay</option>
                                                           <option value="Uzbekistan">Uzbekistan</option>
                                                           <option value="Vanuatu">Vanuatu</option>
                                                           <option value="Vatican City State">Vatican City State</option>
                                                           <option value="Venezuela">Venezuela</option>
                                                           <option value="Vietnam">Vietnam</option>
                                                           <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                                           <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                                           <option value="Wake Island">Wake Island</option>
                                                           <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                                           <option value="Yemen">Yemen</option>
                                                           <option value="Zaire">Zaire</option>
                                                           <option value="Zambia">Zambia</option>
                                                           <option value="Zimbabwe">Zimbabwe</option>
                                                       
                                                        </select>
                                                        <!--<input id="Lname" type="text" class="form-control @error('Lname') is-invalid @enderror regTxtBox" name="Lname" value="{{ old('Lname') }}" required autocomplete="Lname" autofocus placeholder="Last Name">-->

                                                        @error('country')
                                                            <span class="invalid-feedback" role="alert alert-danger">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-6">
                                                    <label>Enter password: </label>
                                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror regTxtBox" name="password" required autocomplete="new-password" placeholder="Password">

                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert alert-danger" >
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-sm-6">
                                                    <label>Repeat Password: </label>
                                                        <input id="password-confirm" type="password" class="form-control regTxtBox" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password" >
                                                    </div>

                                                </div>
                                      
                                            
                                           
                                            
                                            <style>
                                            #g-recaptcha-response {
                                            display: block !important;
                                            position: absolute;
                                            margin: -78px 0 0 0 !important;
                                            width: 302px !important;
                                            height: 76px !important;
                                            z-index: -999999;
                                            opacity: 0;
                                        }
                                            </style>

                                                <?php
                                                    $usn = App\User::where('username', Session::get('ref'))->get();
                                                ?>
                                                <div class="form-group">
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="gridCheck">
                                                      <label class="form-check-label" for="gridCheck">
                                                        Accept Terms and Conditions
                                                      </label>
                                                    </div>
                                                  </div>

                                                <div class="" style="margin-top: -4em">
                                                    <div class="" align="center">
                                                        <br><br>
                                                      
                                                            <button type="submit" class="btn btn-main-primary btn-block" disabled="disabled"  id="btn">
                                                                {{ __('Register') }}
                                                            </button>
                                                      
                                                        <br><br>
                                                    </div>
                                                </div>

                                                <div class="">
                                                    <div class="" align="center">
                                                       <p>
                                                          <strong>Already have an account? <a href="/login">Login</a></strong>
                                                       </p>                            
                                                    </div>
                                                </div>                                      
                                        
                                            </form>
                                                 </form>
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
        
        <script>
            $('#gridCheck').click(function () {
              if ($('#gridCheck:checked').length == 1)
                $('#btn').removeAttr('disabled');
              else
                $('#btn').attr('disabled','disabled');
            });
        </script>

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



