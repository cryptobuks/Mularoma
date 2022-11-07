<!DOCTYPE html>
<html lang="en">

<!-- index.html  Tue, 07 Jan 2020 03:35:33 GMT -->
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
<title>Fexup traders</title>

<!-- General CSS Files -->

<!-- our new rec links -->
<!-- core/public/assets/enock/ -->
<!-- {{url('core/public/assets/plugins/bootstrap/js/popper.min.js')}} -->
<link rel="stylesheet" href="{{url('core/public/assets/enock/modules/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{url('core/public/assets/enock/modules/fontawesome/css/all.min.css') }}">

<!-- CSS Libraries -->
<link rel="stylesheet" href="{{url('core/public/assets/enock/modules/jqvmap/dist/jqvmap.min.css') }}">

<link rel="stylesheet" href="{{url('core/public/assets/enock/modules/summernote/summernote-bs4.css') }}">
<link rel="stylesheet" href="{{url('core/public/assets/enock/modules/owlcarousel2/dist/((rudisha ikue asse))/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{url('core/public/assets/enock/modules/owlcarousel2/dist/((rudisha _asse))/owl.theme.default.min.css') }}">

<!-- Template CSS -->
<link rel="stylesheet" href=" {{url('core/public/assets/enock/css/style.min.css') }}">
<link rel="stylesheet" href=" {{url('core/public/assets/enock/css/components.min.css') }}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
</head>
<body class="layout-4">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <span class="loader"><span class="loader-inner"></span></span>
</div>

<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>

         <!--Start app top navbar -->
        <nav class="navbar navbar-expand-lg main-navbar">
            <form class="form-inline mr-auto">
                <ul class="navbar-nav mr-3">
                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                    <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none">Welcome Back {{Auth::user()->username}}</a></li>
                </ul>
              
            </form>
            
        </nav>

        <!-- Start main left sidebar menu -->
        <div class="main-sidebar sidebar-style-3">
            <aside id="sidebar-wrapper">
                <div class="sidebar-brand">
                    <a href="index-2.html">Fexupfx traders</a>
                </div>
                <div class="sidebar-brand sidebar-brand-sm">
                    <a href="index-2.html">CP</a>
                </div>



                <ul class="sidebar-menu">
                    <li class="menu-header">UserPanel</li>
                    <li><a class="nav-link" href="#"><i class="fas fa-home"></i> <span>Home</span></a></li>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user"></i> <span>Profile</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="#">View Profile</a></li>

                           
                            <li><a class="nav-link" href="#">Change password</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-database"></i> <span>Orders</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="#">Manage Orders</a></li>

                            <li><a class="nav-link" href="#">Place Order</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="fa fa-university"></i> <span>Billing & Payments</span></a>
                        <ul class="dropdown-menu">
                         
                              <li><a class="nav-link"href="#">Wallet</a></li>
                           
                        </ul>
                    </li>
                 
                  
                
                    
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="fa fa-paper-plane"></i> <span>Whatsapp</span></a>
                        <ul class="dropdown-menu">
                   
                            <li><a class="nav-link" href="https://chat.whatsapp.com/D14lL8OcmGm7Ikcry3bTyt">Whatsapp</a></li>
                            <!--<li><a href="#">Telegram</a></li>-->
                        </ul>
                    </li>
                    <!--<li><a class="nav-link" href="credits.html"><i class="fa fa-mortar-board"></i> <span>Support Team</span></a></li>-->
                </ul>
                <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-primary btn-lg btn-block btn-icon-split"><i class="fa fa-sign-out"></i>Logout</button>
                    </form>
                </div>
            </aside>
        </div>

        <!-- -----------------------------------------------------------------------------------------------------------------Start app main Content -->
        <!--call the content-->
         @yield('content')
        <!-- Start app Footer part -->
        
        
        <footer class="main-footer">
            <div class="footer-left">
                 <div class="bullet"></div> Developed By <a href="{{env('APP_URL')}}">WEBTECH</a>
            </div>
            <div class="footer-right">

            </div>
        </footer>
    </div>
</div>

<!-- General JS Scripts -->
<script src="{{url('core/public/assets/enock/bundles/lib.vendor.bundle.js') }}"></script>
<script src=" {{url('js/CodiePie.js') }}"></script>

<!-- JS Libraies -->
<script src="core/public/assets/enock/modules/jquery.sparkline.min.js {{url('js/page/modules-sparkline.js') }}"></script>
<script src=" {{url('core/public/assets/enock/modules/chart.min.js') }}"></script>
<script src=" {{url('core/public/assets/enock/modules/owlcarousel2/dist/owl.carousel.min.js') }}"></script>
<script src="{{url('core/public/assets/enock/modules/summernote/summernote-bs4.js') }}"></script>
<script src="{{url('core/public/assets/enock/modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

<!-- Page Specific JS File -->
<script src="{{url('js/page/index.js') }}"></script>
<script src="https://use.fontawesome.com/312e90a705.js"></script>
<!-- Template JS File -->
<script src="{{url('js/scripts.js') }}"></script>
<script src="{{url('js/custom.js') }}"></script>
</body>

<!-- index.html  Tue, 07 Jan 2020 03:35:33 GMT -->
</html>
