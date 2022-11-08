
 <?php

    $status=Auth::user()->status;

    if($status==1){


     
       header("Location: /activate");
        die();

    }elseif($status==3){
        header("Location: /banned");
        die();
    }else{
       
    }
    

    ?>




<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4"/>

   <!-- Title -->
    <title>{{env('APP_NAME')}} Dashboard</title>

 
    <!-- Favicon -->
    <link rel="icon" href="{{asset('images/logo_icon.svg')}}" type="image/x-icon"/>

    <!-- Icons css -->
    <link href="{{ asset('assetss/css/icons.css')}}" rel="stylesheet">

    <!-- Bootstrap css -->
    <link href="{{ asset('assetss/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!--  Owl-carousel css-->
    <link href="{{ asset('assetss/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet" />

    <!-- P-scroll bar css-->
    <link href="{{ asset('assetss/plugins/perfect-scrollbar/p-scrollbar.css')}}" rel="stylesheet" />

    <!--  Right-sidemenu css -->
    <link href="{{ asset('assetss/plugins/sidebar/sidebar.css')}}" rel="stylesheet">

    <!-- Sidemenu css -->
    <link rel="stylesheet" href="{{ asset('assetss/css/sidemenu.css')}}">

    <!-- Maps css -->
    <link href="{{ asset('assetss/plugins/jqvmap/jqvmap.min.css')}}" rel="stylesheet">

    <!-- style css -->
    <link href="{{ asset('assetss/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('assetss/css/style-dark.css')}}" rel="stylesheet">
    <link href="{{ asset('assetss/css/boxed.css')}}" rel="stylesheet">
    <link href="{{ asset('assetss/css/dark-boxed.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/fontawesome.min.css" integrity="sha512-8Vtie9oRR62i7vkmVUISvuwOeipGv8Jd+Sur/ORKDD5JiLgTGeBSkI3ISOhc730VGvA5VVQPwKIKlmi+zMZ71w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @toastr_css

    <!---Skinmodes css-->
    <link href="{{ asset('assetss/css/skin-modes.css')}}" rel="stylesheet" />
    
    <style>
        @media screen and (min-width: 480px){
            .app-sidebar__toggle{
                display: none;
            }
        }
    </style>

  </head>

  <body class="main-body app sidebar-mini">

    <!-- Loader -->
   <!-- Loader -->
    <div id="global-loader">
      <img src="{{ asset('assetss/img/loader.svg')}}" class="loader-img" alt="Loader">
    </div>
    <!-- /Loader -->
    <!-- /Loader -->

    <!-- Page -->
    <div class="page">

      <!-- main-sidebar -->
      <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <aside class="app-sidebar sidebar-scroll">
        <!-- removed main-sidebar-header css class from below div cause wtf-->
        <div class="active d-flex justify-content-center align-items-center">
          <!--<h3 class="desktop-logo logo-light active">MULAROMA</h3>-->
          
          <a href="/{{Auth::user()->username}}/dashboard"><img src="{{asset('images/logo.svg')}}" style="width: 50px; height: 50px;"/></a>
          
        </div>
        <div class="main-sidemenu">
          <!--<div class="app-sidebar__user clearfix">-->
          <!--  <div class="dropdown user-pro-body">-->
          <!--    <div class="">-->
               <!--  <img alt="user-img" class="avatar avatar-xl brround" src="{{ asset('assetss/img/faces/6.jpg')}}"><span class="avatar-status profile-status bg-green"></span> -->
          <!--       @if(Auth::user()->img !=null)-->
          <!--              <img class="avatar avatar-xl brround" alt="" src="{{asset('img/profile/')}}/{{Auth::user()->img}}"><span class="avatar-status profile-status bg-green"></span>-->

          <!--              @else-->
          <!--              <img class="avatar avatar-xl brround" alt="" src="/assetss/img/faces/6.jpg"><span class="avatar-status profile-status bg-green"></span>-->

          <!--            @endif-->
          <!--    </div>-->
          <!--    <div class="user-info">-->
          <!--      <h4 class="fw-semibold mt-3 mb-0">{{Auth::user()->username}}</h4>-->
          <!--      <span class="mb-0 text-muted">Member</span>-->
          <!--    </div>-->
          <!--  </div>-->
          <!--</div>-->
          <ul class="side-menu">
            <li class="side-item side-item-category">Main</li>
            <li class="slide">
              <a class="side-menu__item" href="/{{Auth::user()->username}}/dashboard"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/><path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/></svg><span class="side-menu__label">Dashboard</span></a>
            </li>

            <li class="side-item side-item-category">Pay for client</li>
            <li class="slide">
              <a class="side-menu__item" href="/pay-for-client"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"  viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 4c-4.42 0-8 3.58-8 8s3.58 8 8 8 8-3.58 8-8-3.58-8-8-8zm3.5 4c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5zm-7 0c.83 0 1.5.67 1.5 1.5S9.33 11 8.5 11 7 10.33 7 9.5 7.67 8 8.5 8zm3.5 9.5c-2.33 0-4.32-1.45-5.12-3.5h1.67c.7 1.19 1.97 2 3.45 2s2.76-.81 3.45-2h1.67c-.8 2.05-2.79 3.5-5.12 3.5z" opacity=".3"/><circle cx="15.5" cy="9.5" r="1.5"/><circle cx="8.5" cy="9.5" r="1.5"/><path d="M12 16c-1.48 0-2.75-.81-3.45-2H6.88c.8 2.05 2.79 3.5 5.12 3.5s4.32-1.45 5.12-3.5h-1.67c-.69 1.19-1.97 2-3.45 2zm-.01-14C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"/></svg><span class="side-menu__label">Initiate</span><span class="badge bg-danger text-light" id="bg-side-text"></span></a>
            </li>

            <!--<li class="side-item side-item-category">My Affiliates Team</li>-->
           
            <!--<li class="slide">-->
            <!--  <a class="side-menu__item" href="/{{Auth::user()->username}}/affiliates"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M6.26 9L12 13.47 17.74 9 12 4.53z" opacity=".3"/><path d="M19.37 12.8l-7.38 5.74-7.37-5.73L3 14.07l9 7 9-7zM12 2L3 9l1.63 1.27L12 16l7.36-5.73L21 9l-9-7zm0 11.47L6.26 9 12 4.53 17.74 9 12 13.47z"/></svg></span> <span lass="side-menu__label"> Referals</span></a>-->
            <!--</li>-->

            
            <!-- <li class="slide">-->
            <!--  <a class="side-menu__item" href="/{{Auth::user()->username}}/affiliates"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M6.26 9L12 13.47 17.74 9 12 4.53z" opacity=".3"/><path d="M19.37 12.8l-7.38 5.74-7.37-5.73L3 14.07l9 7 9-7zM12 2L3 9l1.63 1.27L12 16l7.36-5.73L21 9l-9-7zm0 11.47L6.26 9 12 4.53 17.74 9 12 13.47z"/></svg></span> <span lass="side-menu__label"> Level 4</span></a>-->
            <!--</li>-->
            
            
            <!--<li class="side-item side-item-category">Cashier</li>-->
            <!--<li class="slide">-->
            <!--  <a class="side-menu__item" href="{{url('deposit')}}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"  viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 4c-4.42 0-8 3.58-8 8s3.58 8 8 8 8-3.58 8-8-3.58-8-8-8zm3.5 4c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5zm-7 0c.83 0 1.5.67 1.5 1.5S9.33 11 8.5 11 7 10.33 7 9.5 7.67 8 8.5 8zm3.5 9.5c-2.33 0-4.32-1.45-5.12-3.5h1.67c.7 1.19 1.97 2 3.45 2s2.76-.81 3.45-2h1.67c-.8 2.05-2.79 3.5-5.12 3.5z" opacity=".3"/><circle cx="15.5" cy="9.5" r="1.5"/><circle cx="8.5" cy="9.5" r="1.5"/><path d="M12 16c-1.48 0-2.75-.81-3.45-2H6.88c.8 2.05 2.79 3.5 5.12 3.5s4.32-1.45 5.12-3.5h-1.67c-.69 1.19-1.97 2-3.45 2zm-.01-14C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"/></svg><span class="side-menu__label">Deposit</span><span class="badge bg-danger text-light" id="bg-side-text">New</span></a>-->
            <!--</li>-->
            <!--<li class="slide">-->
            <!--  <a class="side-menu__item" data-bs-toggle="slide" href="{{url('withdraw')}}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5H5v14h14V5zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" opacity=".3"/><path d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2zm2 0h14v14H5V5zm2 5h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z"/></svg><span class="side-menu__label">Withdraw</span><i class="angle fe fe-chevron-down"></i></a>-->
           
            <!--</li>-->
          
            <!--<li class="side-item side-item-category">Invest</li>-->
            <!--<li class="slide">-->
            <!--  <a class="side-menu__item" data-bs-toggle="slide" href="/packages"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M4 12c0 4.08 3.06 7.44 7 7.93V4.07C7.05 4.56 4 7.92 4 12z" opacity=".3"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.94-.49-7-3.85-7-7.93s3.05-7.44 7-7.93v15.86zm2-15.86c1.03.13 2 .45 2.87.93H13v-.93zM13 7h5.24c.25.31.48.65.68 1H13V7zm0 3h6.74c.08.33.15.66.19 1H13v-1zm0 9.93V19h2.87c-.87.48-1.84.8-2.87.93zM18.24 17H13v-1h5.92c-.2.35-.43.69-.68 1zm1.5-3H13v-1h6.93c-.04.34-.11.67-.19 1z"/></svg><span class="side-menu__label">Start investment</span><i class="angle fe fe-chevron-down"></i></a>-->
             
            <!--</li>-->
            
            <li class="side-item side-item-category">Forex</li>
            <li class="slide">
              <a class="side-menu__item" data-bs-toggle="slide" href="https://chat.whatsapp.com/FOVqufIuotiCpfjHmMTbmU" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M4 12c0 4.08 3.06 7.44 7 7.93V4.07C7.05 4.56 4 7.92 4 12z" opacity=".3"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.94-.49-7-3.85-7-7.93s3.05-7.44 7-7.93v15.86zm2-15.86c1.03.13 2 .45 2.87.93H13v-.93zM13 7h5.24c.25.31.48.65.68 1H13V7zm0 3h6.74c.08.33.15.66.19 1H13v-1zm0 9.93V19h2.87c-.87.48-1.84.8-2.87.93zM18.24 17H13v-1h5.92c-.2.35-.43.69-.68 1zm1.5-3H13v-1h6.93c-.04.34-.11.67-.19 1z"/></svg><span class="side-menu__label">LEARN FOREX</span><i class="angle fe fe-chevron-down"></i></a>
             
            </li>
            
            <!-- <li class="slide">-->
            <!--  <a class="side-menu__item" data-bs-toggle="slide" href="/forex-package/2"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M4 12c0 4.08 3.06 7.44 7 7.93V4.07C7.05 4.56 4 7.92 4 12z" opacity=".3"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.94-.49-7-3.85-7-7.93s3.05-7.44 7-7.93v15.86zm2-15.86c1.03.13 2 .45 2.87.93H13v-.93zM13 7h5.24c.25.31.48.65.68 1H13V7zm0 3h6.74c.08.33.15.66.19 1H13v-1zm0 9.93V19h2.87c-.87.48-1.84.8-2.87.93zM18.24 17H13v-1h5.92c-.2.35-.43.69-.68 1zm1.5-3H13v-1h6.93c-.04.34-.11.67-.19 1z"/></svg><span class="side-menu__label">FOREX FULL COURSE</span><i class="angle fe fe-chevron-down"></i></a>-->
             
            <!--</li>-->
            
            <li class="side-item side-item-category">Soft Loans</li>
            <li class="slide">
              <a class="side-menu__item" data-bs-toggle="slide" href="/loan"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M4 12c0 4.08 3.06 7.44 7 7.93V4.07C7.05 4.56 4 7.92 4 12z" opacity=".3"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.94-.49-7-3.85-7-7.93s3.05-7.44 7-7.93v15.86zm2-15.86c1.03.13 2 .45 2.87.93H13v-.93zM13 7h5.24c.25.31.48.65.68 1H13V7zm0 3h6.74c.08.33.15.66.19 1H13v-1zm0 9.93V19h2.87c-.87.48-1.84.8-2.87.93zM18.24 17H13v-1h5.92c-.2.35-.43.69-.68 1zm1.5-3H13v-1h6.93c-.04.34-.11.67-.19 1z"/></svg><span class="side-menu__label">Apply</span><i class="angle fe fe-chevron-down"></i></a>
            </li>
            <li class="side-item side-item-category">Discounted airtime</li>
            <li class="slide">
              <a class="side-menu__item" data-bs-toggle="slide" href="/airtime"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M4 12c0 4.08 3.06 7.44 7 7.93V4.07C7.05 4.56 4 7.92 4 12z" opacity=".3"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.94-.49-7-3.85-7-7.93s3.05-7.44 7-7.93v15.86zm2-15.86c1.03.13 2 .45 2.87.93H13v-.93zM13 7h5.24c.25.31.48.65.68 1H13V7zm0 3h6.74c.08.33.15.66.19 1H13v-1zm0 9.93V19h2.87c-.87.48-1.84.8-2.87.93zM18.24 17H13v-1h5.92c-.2.35-.43.69-.68 1zm1.5-3H13v-1h6.93c-.04.34-.11.67-.19 1z"/></svg><span class="side-menu__label">Purchase</span><i class="angle fe fe-chevron-down"></i></a>
            </li>
            
            <li class="side-item side-item-category">Blogs</li>
            <li class="slide">
              <a class="side-menu__item" data-bs-toggle="slide" href="/blog"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M4 12c0 4.08 3.06 7.44 7 7.93V4.07C7.05 4.56 4 7.92 4 12z" opacity=".3"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.94-.49-7-3.85-7-7.93s3.05-7.44 7-7.93v15.86zm2-15.86c1.03.13 2 .45 2.87.93H13v-.93zM13 7h5.24c.25.31.48.65.68 1H13V7zm0 3h6.74c.08.33.15.66.19 1H13v-1zm0 9.93V19h2.87c-.87.48-1.84.8-2.87.93zM18.24 17H13v-1h5.92c-.2.35-.43.69-.68 1zm1.5-3H13v-1h6.93c-.04.34-.11.67-.19 1z"/></svg><span class="side-menu__label">Submit</span><i class="angle fe fe-chevron-down"></i></a>
            </li>
            <li class="side-item side-item-category">E-books</li>
            <li class="slide">
              <a class="side-menu__item" data-bs-toggle="slide" href="/a-hunger-for-god-en.pdf"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M4 12c0 4.08 3.06 7.44 7 7.93V4.07C7.05 4.56 4 7.92 4 12z" opacity=".3"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.94-.49-7-3.85-7-7.93s3.05-7.44 7-7.93v15.86zm2-15.86c1.03.13 2 .45 2.87.93H13v-.93zM13 7h5.24c.25.31.48.65.68 1H13V7zm0 3h6.74c.08.33.15.66.19 1H13v-1zm0 9.93V19h2.87c-.87.48-1.84.8-2.87.93zM18.24 17H13v-1h5.92c-.2.35-.43.69-.68 1zm1.5-3H13v-1h6.93c-.04.34-.11.67-.19 1z"/></svg><span class="side-menu__label" download>Christian</span><i class="angle fe fe-chevron-down"></i></a>
            </li>
            <li class="slide">
              <a class="side-menu__item" data-bs-toggle="slide" href="https://2012books.lardbucket.org/pdfs/an-introduction-to-business-v1.0.pdf" download><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M4 12c0 4.08 3.06 7.44 7 7.93V4.07C7.05 4.56 4 7.92 4 12z" opacity=".3"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.94-.49-7-3.85-7-7.93s3.05-7.44 7-7.93v15.86zm2-15.86c1.03.13 2 .45 2.87.93H13v-.93zM13 7h5.24c.25.31.48.65.68 1H13V7zm0 3h6.74c.08.33.15.66.19 1H13v-1zm0 9.93V19h2.87c-.87.48-1.84.8-2.87.93zM18.24 17H13v-1h5.92c-.2.35-.43.69-.68 1zm1.5-3H13v-1h6.93c-.04.34-.11.67-.19 1z"/></svg><span class="side-menu__label">Business & Entrepreneurship</span><i class="angle fe fe-chevron-down"></i></a>
            </li>
            <li class="slide">
              <a class="side-menu__item" data-bs-toggle="slide" href="/Easy_recipes.pdf" download><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M4 12c0 4.08 3.06 7.44 7 7.93V4.07C7.05 4.56 4 7.92 4 12z" opacity=".3"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.94-.49-7-3.85-7-7.93s3.05-7.44 7-7.93v15.86zm2-15.86c1.03.13 2 .45 2.87.93H13v-.93zM13 7h5.24c.25.31.48.65.68 1H13V7zm0 3h6.74c.08.33.15.66.19 1H13v-1zm0 9.93V19h2.87c-.87.48-1.84.8-2.87.93zM18.24 17H13v-1h5.92c-.2.35-.43.69-.68 1zm1.5-3H13v-1h6.93c-.04.34-.11.67-.19 1z"/></svg><span class="side-menu__label">Recipes</span><i class="angle fe fe-chevron-down"></i></a>
            </li>
            <li class="side-item side-item-category">Random Assessment </li>
            <li class="slide">
              <a class="side-menu__item" data-bs-toggle="slide" href="https://test.elshadaigtinvestment.org/" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M4 12c0 4.08 3.06 7.44 7 7.93V4.07C7.05 4.56 4 7.92 4 12z" opacity=".3"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.94-.49-7-3.85-7-7.93s3.05-7.44 7-7.93v15.86zm2-15.86c1.03.13 2 .45 2.87.93H13v-.93zM13 7h5.24c.25.31.48.65.68 1H13V7zm0 3h6.74c.08.33.15.66.19 1H13v-1zm0 9.93V19h2.87c-.87.48-1.84.8-2.87.93zM18.24 17H13v-1h5.92c-.2.35-.43.69-.68 1zm1.5-3H13v-1h6.93c-.04.34-.11.67-.19 1z"/></svg><span class="side-menu__label">Start</span><i class="angle fe fe-chevron-down"></i></a>
            </li>
            
             <li class="side-item side-item-category">Timed Riddles </li>
            <li class="slide">
              <a class="side-menu__item" data-bs-toggle="slide" href="/packages"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M4 12c0 4.08 3.06 7.44 7 7.93V4.07C7.05 4.56 4 7.92 4 12z" opacity=".3"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.94-.49-7-3.85-7-7.93s3.05-7.44 7-7.93v15.86zm2-15.86c1.03.13 2 .45 2.87.93H13v-.93zM13 7h5.24c.25.31.48.65.68 1H13V7zm0 3h6.74c.08.33.15.66.19 1H13v-1zm0 9.93V19h2.87c-.87.48-1.84.8-2.87.93zM18.24 17H13v-1h5.92c-.2.35-.43.69-.68 1zm1.5-3H13v-1h6.93c-.04.34-.11.67-.19 1z"/></svg><span class="side-menu__label">Start</span><i class="angle fe fe-chevron-down"></i></a>
            </li>
            
            <li class="side-item side-item-category">Weekly Champion</li>
            <li class="slide">
              <a class="side-menu__item" data-bs-toggle="slide" href="/packages"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M4 12c0 4.08 3.06 7.44 7 7.93V4.07C7.05 4.56 4 7.92 4 12z" opacity=".3"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.94-.49-7-3.85-7-7.93s3.05-7.44 7-7.93v15.86zm2-15.86c1.03.13 2 .45 2.87.93H13v-.93zM13 7h5.24c.25.31.48.65.68 1H13V7zm0 3h6.74c.08.33.15.66.19 1H13v-1zm0 9.93V19h2.87c-.87.48-1.84.8-2.87.93zM18.24 17H13v-1h5.92c-.2.35-.43.69-.68 1zm1.5-3H13v-1h6.93c-.04.34-.11.67-.19 1z"/></svg><span class="side-menu__label">
                  
                  <?php
                //   $newestCliente = App\User::orderBy('ref_bal', 'desc')
                //   ->whereBetween('updated_at', [Carbon\Carbon::now()->startOfWeek(), Carbon\Carbon::now()->endOfWeek()])
                //   ->first(); // gets the whole row
                //     $maxValue = $newestCliente->username;
                    
                //     echo $maxValue;
                  
                  ?>
                  
              </span><i class="angle fe fe-chevron-down"></i></a>
            </li>
            
            
            
  
          
        
          </ul>
        </div>
      </aside>
      <!-- main-sidebar -->

      <!-- main-content -->
      <div class="main-content app-content">

      <!-- main-header -->
      <div class="main-header sticky side-header nav nav-item">
        <div class="container-fluid">
          <div class="main-header-left ">
         <!--    <div class="responsive-logo">
              <a href=""><img src="https://elshadaigtinvestment.org/logo.png" height="120" width="100" class="logo-1"
                  alt="logo"></a>
              <a href=""><img src="https://elshadaigtinvestment.org/logo.png" height="120" width="100" class="dark-logo-1"
                  alt="logo"></a>
              <a href=""><img src="https://elshadaigtinvestment.org/logo.png" height="120" width="100" class="logo-2"
                  alt="logo"></a>
              <a href=""><img src="https://elshadaigtinvestment.org/logo.png" height="120" width="100" class="dark-logo-2"
                  alt="logo"></a>
            </div> -->
            <div class="app-sidebar__toggle" data-bs-toggle="sidebar">
              <a class="open-toggle" href="#"><i class="header-icon fe fe-align-left"></i></a>
              <a class="close-toggle" href="#"><i class="header-icons fe fe-x"></i></a>
            </div>
            <!--<div class="main-header-center ms-3 d-sm-none d-md-none d-lg-block">-->
            <!--  <input class="form-control" placeholder="Search for anything..." type="search"> <button-->
            <!--    class="btn"><i class="fas fa-search d-none d-md-block"></i></button>-->
            <!--</div>-->
          </div>
          <div class="main-header-right">
            <ul class="nav nav-item  navbar-nav-right ms-auto">
              <!--<li class="nav">-->
              <!--    <div class="dropdown nav-itemd-none d-md-flex">-->
              <!--      <a href="#" class="d-flex  nav-item country-flag1"-->
              <!--        data-bs-toggle="dropdown" aria-expanded="false">-->
              <!--        <span class="avatar country-Flag me-0 align-self-center bg-transparent"><img-->
              <!--            src="{{asset('assetss/img/flags/us_flag.jpg')}}" alt="img"></span>-->
              <!--        <div class="my-auto">-->
              <!--          <strong class="me-2 ms-2 my-auto">English</strong>-->
              <!--        </div>-->
              <!--      </a>-->
              <!--      <div class="dropdown-menu dropdown-menu-left dropdown-menu-arrow"-->
              <!--        x-placement="bottom-end">-->
              <!--        <a href="#" class="dropdown-item d-flex ">-->
              <!--          <span class="avatar  me-3 align-self-center bg-transparent"><img-->
              <!--              src="{{asset('assetss/img/flags/french_flag.jpg')}}" alt="img"></span>-->
              <!--          <div class="d-flex">-->
              <!--            <span class="mt-2">French</span>-->
              <!--          </div>-->
              <!--        </a>-->
              <!--        <a href="#" class="dropdown-item d-flex">-->
              <!--          <span class="avatar  me-3 align-self-center bg-transparent"><img-->
              <!--              src="{{asset('assetss/img/flags/germany_flag.jpg')}}" alt="img"></span>-->
              <!--          <div class="d-flex">-->
              <!--            <span class="mt-2">Germany</span>-->
              <!--          </div>-->
              <!--        </a>-->
              <!--        <a href="#" class="dropdown-item d-flex">-->
              <!--          <span class="avatar me-3 align-self-center bg-transparent"><img-->
              <!--              src="{{asset('assetss/img/flags/italy_flag.jpg')}}" alt="img"></span>-->
              <!--          <div class="d-flex">-->
              <!--            <span class="mt-2">Italy</span>-->
              <!--          </div>-->
              <!--        </a>-->
              <!--        <a href="#" class="dropdown-item d-flex">-->
              <!--          <span class="avatar me-3 align-self-center bg-transparent"><img-->
              <!--              src="{{asset('assetss/img/flags/russia_flag.jpg')}}" alt="img"></span>-->
              <!--          <div class="d-flex">-->
              <!--            <span class="mt-2">Russia</span>-->
              <!--          </div>-->
              <!--        </a>-->
              <!--        <a href="#" class="dropdown-item d-flex">-->
              <!--          <span class="avatar  me-3 align-self-center bg-transparent"><img-->
              <!--              src="{{asset('assetss/img/flags/spain_flag.jpg')}}" alt="img"></span>-->
              <!--          <div class="d-flex">-->
              <!--            <span class="mt-2">spain</span>-->
              <!--          </div>-->
              <!--        </a>-->
              <!--      </div>-->
              <!--    </div>-->
              <!--</li>-->

              <li class="nav-link" id="bs-example-navbar-collapse-1">
                <form class="navbar-form" role="search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-btn">
                      <button type="reset" class="btn btn-default">
                        <i class="fas fa-times"></i>
                      </button>
                      <button type="submit" class="btn btn-default nav-link resp-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs"
                          viewBox="0 0 24 24" fill="none" stroke="currentColor"
                          stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                          class="feather feather-search">
                          <circle cx="11" cy="11" r="8"></circle>
                          <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        </svg>
                      </button>
                    </span>
                  </div>
                </form>
              </li>

              <li class="dropdown nav-item main-header-message ">
                <a class="new nav-link" href="#"><svg xmlns="http://www.w3.org/2000/svg"
                    class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-mail">
                    <path
                      d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                    </path>
                    <polyline points="22,6 12,13 2,6"></polyline>
                  </svg><span class=" pulse-danger"></span></a>
                <div class="dropdown-menu">
                  <div class="menu-header-content bg-primary text-start">
                    <div class="d-flex">
                      <h6 class="dropdown-title mb-1 tx-15 text-white fw-semibold">Messages</h6>
                      <span class="badge rounded-pill bg-warning ms-auto my-auto float-end">Mark
                        All Read</span>
                    </div>
                    <p class="dropdown-title-text subtext mb-0 text-white op-6 pb-0 tx-12 ">You have
                      1 unread message(s)</p>
                  </div>
                  <div class="main-message-list chat-scroll">
                    <a href="#" class="p-3 d-flex border-bottom">
                      <div class="  drop-img  cover-image  "
                        data-bs-image-src="{{ asset('assetss/img/faces/6.jpg')}}">
                        <span class="avatar-status bg-teal"></span>
                      </div>
                      <div class="wd-90p">
                        <div class="d-flex">
                          <h5 class="mb-1 name">Platform Admin </h5>
                        </div>
                        <p class="mb-0 desc">Welcome to Elshadai G.T INVESTMENTS</p>
                        <p class="time mb-0 text-start float-start ms-2 mt-2">Mar 15 3:55 PM</p>
                      </div>
                    </a>
                  
                  </div>
                 
                </div>
              </li>

              <li class="dropdown nav-item main-header-notification">
                <a class="new nav-link" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="feather feather-bell">
                    <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                    <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                  </svg><span class=" pulse"></span></a>
                <div class="dropdown-menu">
                  <div class="menu-header-content bg-primary text-start">
                    <div class="d-flex">
                      <h6 class="dropdown-title mb-1 tx-15 text-white fw-semibold">Notifications
                      </h6>
                      <span class="badge rounded-pill bg-warning ms-auto my-auto float-end">Mark
                        All Read</span>
                    </div>
                    <p class="dropdown-title-text subtext mb-0 text-white op-6 pb-0 tx-12 ">You have
                      1 unread Notification(s)</p>
                  </div>
                  <div class="main-notification-list Notification-scroll">
                    <a class="d-flex p-3 border-bottom" href="#">
                      <div class="notifyimg bg-pink">
                        <i class="la la-file-alt text-white"></i>
                      </div>
                      <div class="ms-3">
                        <h5 class="notification-label mb-1">Account Created</h5>
                        <div class="notification-subtext">{{Auth::user()->created_at}}</div>
                      </div>
                      <div class="ms-auto">
                        <i class="las la-angle-right text-end text-muted"></i>
                      </div>
                    </a>
                    
                    
                  </div>
                  <div class="dropdown-footer">
                    <a href="">VIEW ALL</a>
                  </div>
                </div>
              </li>

              <li class="nav-item full-screen fullscreen-button">
                <a class="new nav-link full-screen-link" href="#"><svg
                    xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="feather feather-maximize">
                    <path
                      d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3">
                    </path>
                  </svg></a>
              </li>

              <li class="dropdown main-profile-menu nav nav-item nav-link">
                <a class="profile-user d-flex" href="">
                   @if(Auth::user()->img != null)
                        <img alt="" src="{{asset('img/profile/')}}/{{Auth::user()->img}}">

                        @else
                        <img alt="" src="{{asset('/images/user.png')}}" style="border: 2px gray solid;">

                      @endif

                  </a>
                <div class="dropdown-menu">
                  <div class="main-header-profile bg-primary p-3">
                    <div class="d-flex wd-100p">
                      <div class="main-img-user">

                        @if(Auth::user()->img != null)
                        <img alt="" src="{{asset('img/profile/')}}/{{Auth::user()->img}}">

                        @else
                        <img alt="" src="{{asset('/images/user.png')}}">

                      @endif

                        </div>
                      <div class="ms-3 my-auto">
                        <h6>{{Auth::user()->username}}</h6><span>Member</span>
                      </div>
                    </div>
                  </div>
                  <a class="dropdown-item" href="/profile"><i class="bx bx-user-circle"></i>Profile</a>
                  <a class="dropdown-item" href="/profile"><i class="bx bx-cog"></i> Edit Profile</a>
                  <a class="dropdown-item" href=""><i class="bx bxs-inbox"></i>Inbox</a>
                  <a class="dropdown-item" href=""><i class="bx bx-envelope"></i>Messages</a>
                  <a class="dropdown-item" href=""><i class="bx bx-slider-alt"></i> Account
                    Settings</a>
                  <a class="dropdown-item" href="/logout"><i class="bx bx-log-out"></i> Sign
                    Out</a>
                </div>
              </li>
              
              <!--<li class="dropdown main-header-message right-toggle">-->
              <!--  <a class="nav-link pe-0" data-bs-toggle="sidebar-right" data-bs-target=".sidebar-right">-->
              <!--    <svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24"-->
              <!--      fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"-->
              <!--      stroke-linejoin="round" class="feather feather-menu">-->
              <!--      <line x1="3" y1="12" x2="21" y2="12"></line>-->
              <!--      <line x1="3" y1="6" x2="21" y2="6"></line>-->
              <!--      <line x1="3" y1="18" x2="21" y2="18"></line>-->
              <!--    </svg>-->
              <!--  </a>-->
              <!--</li>-->
            </ul>
          </div>
        </div>
      </div>
      <!-- /main-header -->

        <!-- container -->
        @yield('content')
      </div>
      <!-- /main-content -->

      <!-- Sidebar-right-->
      <div class="sidebar sidebar-right sidebar-animate">
        <div class="panel panel-primary card mb-0 box-shadow">
          <div class="tab-menu-heading border-0 p-3">
            <div class="card-title mb-0">Notifications</div>
            <div class="card-options ms-auto">
              <a href="#" class="sidebar-remove"><i class="fe fe-x"></i></a>
            </div>
          </div>
          <div class="panel-body tabs-menu-body latest-tasks p-0 border-0">
            <div class="tabs-menu ">
              <!-- Tabs -->
              <ul class="nav panel-tabs">
                <li class=""><a href="#side1" class="active" data-bs-toggle="tab"><i class="ion ion-md-chatboxes tx-18 me-2"></i> Chat</a></li>
                <li><a href="#side2" data-bs-toggle="tab"><i class="ion ion-md-notifications tx-18  me-2"></i> Notifications</a></li>
                <li><a href="#side3" data-bs-toggle="tab"><i class="ion ion-md-contacts tx-18 me-2"></i> Friends</a></li>
              </ul>
            </div>
            <div class="tab-content">
              <div class="tab-pane active " id="side1">
                <div class="list d-flex align-items-center border-bottom p-3">
                  <div class="">
                    <span class="avatar bg-primary brround avatar-md">CH</span>
                  </div>
                  <a class="wrapper w-100 ms-3" href="#" >
                    <p class="mb-0 d-flex ">
                      <b>New Websites is Created</b>
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="d-flex align-items-center">
                        <i class="mdi mdi-clock text-muted me-1"></i>
                        <small class="text-muted ms-auto">30 mins ago</small>
                        <p class="mb-0"></p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="list d-flex align-items-center border-bottom p-3">
                  <div class="">
                    <span class="avatar bg-danger brround avatar-md">N</span>
                  </div>
                  <a class="wrapper w-100 ms-3" href="#" >
                    <p class="mb-0 d-flex ">
                      <b>Prepare For the Next Project</b>
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="d-flex align-items-center">
                        <i class="mdi mdi-clock text-muted me-1"></i>
                        <small class="text-muted ms-auto">2 hours ago</small>
                        <p class="mb-0"></p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="list d-flex align-items-center border-bottom p-3">
                  <div class="">
                    <span class="avatar bg-info brround avatar-md">S</span>
                  </div>
                  <a class="wrapper w-100 ms-3" href="#" >
                    <p class="mb-0 d-flex ">
                      <b>Decide the live Discussion</b>
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="d-flex align-items-center">
                        <i class="mdi mdi-clock text-muted me-1"></i>
                        <small class="text-muted ms-auto">3 hours ago</small>
                        <p class="mb-0"></p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="list d-flex align-items-center border-bottom p-3">
                  <div class="">
                    <span class="avatar bg-warning brround avatar-md">K</span>
                  </div>
                  <a class="wrapper w-100 ms-3" href="#" >
                    <p class="mb-0 d-flex ">
                      <b>Meeting at 3:00 pm</b>
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="d-flex align-items-center">
                        <i class="mdi mdi-clock text-muted me-1"></i>
                        <small class="text-muted ms-auto">4 hours ago</small>
                        <p class="mb-0"></p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="list d-flex align-items-center border-bottom p-3">
                  <div class="">
                    <span class="avatar bg-success brround avatar-md">R</span>
                  </div>
                  <a class="wrapper w-100 ms-3" href="#" >
                    <p class="mb-0 d-flex ">
                      <b>Prepare for Presentation</b>
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="d-flex align-items-center">
                        <i class="mdi mdi-clock text-muted me-1"></i>
                        <small class="text-muted ms-auto">1 day ago</small>
                        <p class="mb-0"></p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="list d-flex align-items-center border-bottom p-3">
                  <div class="">
                    <span class="avatar bg-pink brround avatar-md">MS</span>
                  </div>
                  <a class="wrapper w-100 ms-3" href="#" >
                    <p class="mb-0 d-flex ">
                      <b>Prepare for Presentation</b>
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="d-flex align-items-center">
                        <i class="mdi mdi-clock text-muted me-1"></i>
                        <small class="text-muted ms-auto">1 day ago</small>
                        <p class="mb-0"></p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="list d-flex align-items-center border-bottom p-3">
                  <div class="">
                    <span class="avatar bg-purple brround avatar-md">L</span>
                  </div>
                  <a class="wrapper w-100 ms-3" href="#" >
                    <p class="mb-0 d-flex ">
                      <b>Prepare for Presentation</b>
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="d-flex align-items-center">
                        <i class="mdi mdi-clock text-muted me-1"></i>
                        <small class="text-muted ms-auto">45 minutes ago</small>
                        <p class="mb-0"></p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="list d-flex align-items-center p-3">
                  <div class="">
                    <span class="avatar bg-blue brround avatar-md">U</span>
                  </div>
                  <a class="wrapper w-100 ms-3" href="#" >
                    <p class="mb-0 d-flex ">
                      <b>Prepare for Presentation</b>
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="d-flex align-items-center">
                        <i class="mdi mdi-clock text-muted me-1"></i>
                        <small class="text-muted ms-auto">2 days ago</small>
                        <p class="mb-0"></p>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="tab-pane  " id="side2">
                <div class="list-group list-group-flush ">
                  <div class="list-group-item d-flex  align-items-center">
                    <div>
                      <span class="avatar avatar-lg brround cover-image" data-bs-image-src="../../assets/img/faces/12.jpg"><span class="avatar-status bg-success"></span></span>
                    </div>
                    <div class="ms-3">
                      <strong>Madeleine</strong> Hey! there I' am available....
                      <div class="small text-muted">
                        3 hours ago
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item d-flex  align-items-center">
                    <div>
                      <span class="avatar avatar-lg brround cover-image" data-bs-image-src="../../assets/img/faces/1.jpg"></span>
                    </div>
                    <div class="ms-3">
                      <strong>Anthony</strong> New product Launching...
                      <div class="small text-muted">
                        5 hour ago
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item d-flex  align-items-center">
                    <div>
                      <span class="avatar avatar-lg brround cover-image" data-bs-image-src="../../assets/img/faces/2.jpg"><span class="avatar-status bg-success"></span></span>
                    </div>
                    <div class="ms-3">
                      <strong>Olivia</strong> New Schedule Realease......
                      <div class="small text-muted">
                        45 minutes ago
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item d-flex  align-items-center">
                    <div>
                      <span class="avatar avatar-lg brround cover-image" data-bs-image-src="../../assets/img/faces/8.jpg"><span class="avatar-status bg-success"></span></span>
                    </div>
                    <div class="ms-3">
                      <strong>Madeleine</strong> Hey! there I' am available....
                      <div class="small text-muted">
                        3 hours ago
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item d-flex  align-items-center">
                    <div>
                      <span class="avatar avatar-lg brround cover-image" data-bs-image-src="../../assets/img/faces/11.jpg"></span>
                    </div>
                    <div class="ms-3">
                      <strong>Anthony</strong> New product Launching...
                      <div class="small text-muted">
                        5 hour ago
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item d-flex  align-items-center">
                    <div>
                      <span class="avatar avatar-lg brround cover-image" data-bs-image-src="../../assets/img/faces/6.jpg"><span class="avatar-status bg-success"></span></span>
                    </div>
                    <div class="ms-3">
                      <strong>Olivia</strong> New Schedule Realease......
                      <div class="small text-muted">
                        45 minutes ago
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item d-flex  align-items-center">
                    <div>
                      <span class="avatar avatar-lg brround cover-image" data-bs-image-src="../../assets/img/faces/9.jpg"><span class="avatar-status bg-success"></span></span>
                    </div>
                    <div class="ms-3">
                      <strong>Olivia</strong> Hey! there I' am available....
                      <div class="small text-muted">
                        12 minutes ago
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane  " id="side3">
                <div class="list-group list-group-flush ">
                  <div class="list-group-item d-flex  align-items-center">
                    <div>
                      <span class="avatar avatar-md brround cover-image" data-bs-image-src="../../assets/img/faces/9.jpg"><span class="avatar-status bg-success"></span></span>
                    </div>
                    <div class="ms-2">
                      <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Mozelle Belt</div>
                    </div>
                    <div class="ms-auto">
                      <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                    </div>
                  </div>
                  <div class="list-group-item d-flex  align-items-center">
                    <div>
                      <span class="avatar avatar-md brround cover-image" data-bs-image-src="../../assets/img/faces/11.jpg"></span>
                    </div>
                    <div class="ms-2">
                      <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Florinda Carasco</div>
                    </div>
                    <div class="ms-auto">
                      <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel" ><i class="fab fa-facebook-messenger"></i></a>
                    </div>
                  </div>
                  <div class="list-group-item d-flex  align-items-center">
                    <div>
                      <span class="avatar avatar-md brround cover-image" data-bs-image-src="../../assets/img/faces/10.jpg"><span class="avatar-status bg-success"></span></span>
                    </div>
                    <div class="ms-2">
                      <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Alina Bernier</div>
                    </div>
                    <div class="ms-auto">
                      <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                    </div>
                  </div>
                  <div class="list-group-item d-flex  align-items-center">
                    <div>
                      <span class="avatar avatar-md brround cover-image" data-bs-image-src="../../assets/img/faces/2.jpg"><span class="avatar-status bg-success"></span></span>
                    </div>
                    <div class="ms-2">
                      <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Zula Mclaughin</div>
                    </div>
                    <div class="ms-auto">
                      <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                    </div>
                  </div>
                  <div class="list-group-item d-flex  align-items-center">
                    <div>
                      <span class="avatar avatar-md brround cover-image" data-bs-image-src="../../assets/img/faces/13.jpg"></span>
                    </div>
                    <div class="ms-2">
                      <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Isidro Heide</div>
                    </div>
                    <div class="ms-auto">
                      <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                    </div>
                  </div>
                  <div class="list-group-item d-flex  align-items-center">
                    <div>
                      <span class="avatar avatar-md brround cover-image" data-bs-image-src="../../assets/img/faces/12.jpg"><span class="avatar-status bg-success"></span></span>
                    </div>
                    <div class="ms-2">
                      <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Mozelle Belt</div>
                    </div>
                    <div class="ms-auto">
                      <a href="#" class="btn btn-sm btn-light" ><i class="fab fa-facebook-messenger"></i></a>
                    </div>
                  </div>
                  <div class="list-group-item d-flex  align-items-center">
                    <div>
                      <span class="avatar avatar-md brround cover-image" data-bs-image-src="../../assets/img/faces/4.jpg"></span>
                    </div>
                    <div class="ms-2">
                      <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Florinda Carasco</div>
                    </div>
                    <div class="ms-auto">
                      <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                    </div>
                  </div>
                  <div class="list-group-item d-flex  align-items-center">
                    <div>
                      <span class="avatar avatar-md brround cover-image" data-bs-image-src="../../assets/img/faces/7.jpg"></span>
                    </div>
                    <div class="ms-2">
                      <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Alina Bernier</div>
                    </div>
                    <div class="ms-auto">
                      <a href="#" class="btn btn-sm btn-light" ><i class="fab fa-facebook-messenger"></i></a>
                    </div>
                  </div>
                  <div class="list-group-item d-flex  align-items-center">
                    <div>
                      <span class="avatar avatar-md brround cover-image" data-bs-image-src="../../assets/img/faces/2.jpg"></span>
                    </div>
                    <div class="ms-2">
                      <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Zula Mclaughin</div>
                    </div>
                    <div class="ms-auto">
                      <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel" ><i class="fab fa-facebook-messenger"></i></a>
                    </div>
                  </div>
                  <div class="list-group-item d-flex  align-items-center">
                    <div>
                      <span class="avatar avatar-md brround cover-image" data-bs-image-src="../../assets/img/faces/14.jpg"><span class="avatar-status bg-success"></span></span>
                    </div>
                    <div class="ms-2">
                      <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Isidro Heide</div>
                    </div>
                    <div class="ms-auto">
                      <a href="#" class="btn btn-sm btn-light" ><i class="fab fa-facebook-messenger"></i></a>
                    </div>
                  </div>
                  <div class="list-group-item d-flex  align-items-center">
                    <div>
                      <span class="avatar avatar-md brround cover-image" data-bs-image-src="../../assets/img/faces/11.jpg"></span>
                    </div>
                    <div class="ms-2">
                      <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Florinda Carasco</div>
                    </div>
                    <div class="ms-auto">
                      <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                    </div>
                  </div>
                  <div class="list-group-item d-flex  align-items-center">
                    <div>
                      <span class="avatar avatar-md brround cover-image" data-bs-image-src="../../assets/img/faces/9.jpg"></span>
                    </div>
                    <div class="ms-2">
                      <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Alina Bernier</div>
                    </div>
                    <div class="ms-auto">
                      <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                    </div>
                  </div>
                  <div class="list-group-item d-flex  align-items-center">
                    <div>
                      <span class="avatar avatar-md brround cover-image" data-bs-image-src="../../assets/img/faces/15.jpg"><span class="avatar-status bg-success"></span></span>
                    </div>
                    <div class="ms-2">
                      <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Zula Mclaughin</div>
                    </div>
                    <div class="ms-auto">
                      <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                    </div>
                  </div>
                  <div class="list-group-item d-flex  align-items-center">
                    <div>
                      <span class="avatar avatar-md brround cover-image" data-bs-image-src="../../assets/img/faces/4.jpg"></span>
                    </div>
                    <div class="ms-2">
                      <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Isidro Heide</div>
                    </div>
                    <div class="ms-auto">
                      <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/Sidebar-right-->

      <!-- Message Modal -->
      <div class="modal fade" id="chatmodel" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-dialog-right chatbox" role="document">
          <div class="modal-content chat border-0">
            <div class="card overflow-hidden mb-0 border-0">
              <!-- action-header -->
              <div class="action-header clearfix">
                <div class="float-start hidden-xs d-flex ms-2">
                  <div class="img_cont me-3">
                    <img src="../../assets/img/faces/6.jpg" class="rounded-circle user_img" alt="img">
                  </div>
                  <div class="align-items-center mt-2">
                    <h4 class="text-white mb-0 fw-semibold">Daneil Scott</h4>
                    <span class="dot-label bg-success"></span><span class="me-3 text-white">online</span>
                  </div>
                </div>
                <ul class="ah-actions actions align-items-center">
                  <li class="call-icon">
                    <a href="" class="d-done d-md-block phone-button" data-bs-toggle="modal" data-bs-target="#audiomodal">
                      <i class="si si-phone"></i>
                    </a>
                  </li>
                  <li class="video-icon">
                    <a href="" class="d-done d-md-block phone-button" data-bs-toggle="modal" data-bs-target="#videomodal">
                      <i class="si si-camrecorder"></i>
                    </a>
                  </li>
                  <li class="dropdown">
                    <a href="" data-bs-toggle="dropdown" aria-expanded="true">
                      <i class="si si-options-vertical"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li><i class="fa fa-user-circle"></i> View profile</li>
                      <li><i class="fa fa-users"></i>Add friends</li>
                      <li><i class="fa fa-plus"></i> Add to group</li>
                      <li><i class="fa fa-ban"></i> Block</li>
                    </ul>
                  </li>
                  <li>
                    <a href=""  class="" data-bs-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true"><i class="si si-close text-white"></i></span>
                    </a>
                  </li>
                </ul>
              </div>
              <!-- action-header end -->

              <!-- msg_card_body -->
              <div class="card-body msg_card_body">
                <div class="chat-box-single-line">
                  <abbr class="timestamp">February 1st, 2019</abbr>
                </div>
                <div class="d-flex justify-content-start">
                  <div class="img_cont_msg">
                    <img src="../../assets/img/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
                  </div>
                  <div class="msg_cotainer">
                    Hi, how are you Jenna Side?
                    <span class="msg_time">8:40 AM, Today</span>
                  </div>
                </div>
                <div class="d-flex justify-content-end ">
                  <div class="msg_cotainer_send">
                    Hi Connor Paige i am good tnx how about you?
                    <span class="msg_time_send">8:55 AM, Today</span>
                  </div>
                  <div class="img_cont_msg">
                    <img src="../../assets/img/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
                  </div>
                </div>
                <div class="d-flex justify-content-start ">
                  <div class="img_cont_msg">
                    <img src="../../assets/img/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
                  </div>
                  <div class="msg_cotainer">
                    I am good too, thank you for your chat template
                    <span class="msg_time">9:00 AM, Today</span>
                  </div>
                </div>
                <div class="d-flex justify-content-end ">
                  <div class="msg_cotainer_send">
                    You welcome Connor Paige
                    <span class="msg_time_send">9:05 AM, Today</span>
                  </div>
                  <div class="img_cont_msg">
                    <img src="../../assets/img/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
                  </div>
                </div>
                <div class="d-flex justify-content-start ">
                  <div class="img_cont_msg">
                    <img src="../../assets/img/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
                  </div>
                  <div class="msg_cotainer">
                    Yo, Can you update Views?
                    <span class="msg_time">9:07 AM, Today</span>
                  </div>
                </div>
                <div class="d-flex justify-content-end mb-4">
                  <div class="msg_cotainer_send">
                    But I must explain to you how all this mistaken  born and I will give
                    <span class="msg_time_send">9:10 AM, Today</span>
                  </div>
                  <div class="img_cont_msg">
                    <img src="../../assets/img/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
                  </div>
                </div>
                <div class="d-flex justify-content-start ">
                  <div class="img_cont_msg">
                    <img src="../../assets/img/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
                  </div>
                  <div class="msg_cotainer">
                    Yo, Can you update Views?
                    <span class="msg_time">9:07 AM, Today</span>
                  </div>
                </div>
                <div class="d-flex justify-content-end mb-4">
                  <div class="msg_cotainer_send">
                    But I must explain to you how all this mistaken  born and I will give
                    <span class="msg_time_send">9:10 AM, Today</span>
                  </div>
                  <div class="img_cont_msg">
                    <img src="../../assets/img/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
                  </div>
                </div>
                <div class="d-flex justify-content-start ">
                  <div class="img_cont_msg">
                    <img src="../../assets/img/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
                  </div>
                  <div class="msg_cotainer">
                    Yo, Can you update Views?
                    <span class="msg_time">9:07 AM, Today</span>
                  </div>
                </div>
                <div class="d-flex justify-content-end mb-4">
                  <div class="msg_cotainer_send">
                    But I must explain to you how all this mistaken  born and I will give
                    <span class="msg_time_send">9:10 AM, Today</span>
                  </div>
                  <div class="img_cont_msg">
                    <img src="../../assets/img/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
                  </div>
                </div>
                <div class="d-flex justify-content-start">
                  <div class="img_cont_msg">
                    <img src="../../assets/img/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
                  </div>
                  <div class="msg_cotainer">
                    Okay Bye, text you later..
                    <span class="msg_time">9:12 AM, Today</span>
                  </div>
                </div>
              </div>
              <!-- msg_card_body end -->
              <!-- card-footer -->
              <div class="card-footer">
                <div class="msb-reply d-flex">
                  <div class="input-group">
                    <input type="text" class="form-control " placeholder="Typing....">
                    <div class="input-group-text ">
                      <button type="button" class="btn btn-primary ">
                        <i class="far fa-paper-plane" aria-hidden="true"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div><!-- card-footer end -->
            </div>
          </div>
        </div>
      </div>

      <!--Video Modal -->
      <div id="videomodal" class="modal fade">
        <div class="modal-dialog" role="document">
          <div class="modal-content bg-dark border-0 text-white">
            <div class="modal-body mx-auto text-center p-7">
              <h5>Valex Video call</h5>
              <img src="../../assets/img/faces/6.jpg" class="rounded-circle user-img-circle h-8 w-8 mt-4 mb-3" alt="img">
              <h4 class="mb-1 fw-semibold">Daneil Scott</h4>
              <h6>Calling...</h6>
              <div class="mt-5">
                <div class="row">
                  <div class="col-4">
                    <a class="icon icon-shape rounded-circle mb-0 me-3" href="#">
                      <i class="fas fa-video-slash"></i>
                    </a>
                  </div>
                  <div class="col-4">
                    <a class="icon icon-shape rounded-circle text-white mb-0 me-3" href="#" data-bs-dismiss="modal" aria-label="Close">
                      <i class="fas fa-phone bg-danger text-white"></i>
                    </a>
                  </div>
                  <div class="col-4">
                    <a class="icon icon-shape rounded-circle mb-0 me-3" href="#">
                      <i class="fas fa-microphone-slash"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div><!-- modal-body -->
          </div>
        </div><!-- modal-dialog -->
      </div><!-- modal -->

      <!-- Audio Modal -->
      <div id="audiomodal" class="modal fade">
        <div class="modal-dialog" role="document">
          <div class="modal-content border-0">
            <div class="modal-body mx-auto text-center p-7">
              <h5>Valex Voice call</h5>
              <img src="../../assets/img/faces/6.jpg" class="rounded-circle user-img-circle h-8 w-8 mt-4 mb-3" alt="img">
              <h4 class="mb-1  fw-semibold">Daneil Scott</h4>
              <h6>Calling...</h6>
              <div class="mt-5">
                <div class="row">
                  <div class="col-4">
                    <a class="icon icon-shape rounded-circle mb-0 me-3" href="#">
                      <i class="fas fa-volume-up bg-light text-dark"></i>
                    </a>
                  </div>
                  <div class="col-4">
                    <a class="icon icon-shape rounded-circle text-white mb-0 me-3" href="#" data-bs-dismiss="modal" aria-label="Close">
                      <i class="fas fa-phone text-white bg-success"></i>
                    </a>
                  </div>
                  <div class="col-4">
                    <a class="icon icon-shape  rounded-circle mb-0 me-3" href="#">
                      <i class="fas fa-microphone-slash bg-light text-dark"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div><!-- modal-body -->
          </div>
        </div><!-- modal-dialog -->
      </div><!-- modal -->

      <!-- Footer opened -->
          <!-- Footer opened -->
      <!--<div class="main-footer ht-40">-->
      <!--  <div class="container-fluid pd-t-0-f ht-100p">-->
      <!--    <span>Copyright © 2021 <a href="#">Mularoma</a>. All rights reserved.</span>-->
      <!--  </div>-->
      <!--</div>-->
      <!-- Footer closed -->
      <!-- Footer closed -->

    </div>
    <!-- End Page -->

    <!-- Back-to-top -->
    <a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

  <!-- End Page -->


    <!-- Back-to-top -->
    <a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

    <!-- JQuery min js -->
    <script src="{{ asset('assetss/plugins/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Bundle js -->
    <script src="{{ asset('assetss/plugins/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{ asset('assetss/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Ionicons js -->
    <script src="{{ asset('assetss/plugins/ionicons/ionicons.js')}}"></script>

    <!-- Moment js -->
    <script src="{{ asset('assetss/plugins/moment/moment.js')}}"></script>

    <!--Internal Sparkline js -->
    <script src="{{ asset('assetss/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

    <!-- Moment js -->
    <script src="{{ asset('assetss/plugins/raphael/raphael.min.js')}}"></script>

    <!-- Internal Piety js -->
    <script src="{{ asset('assetss/plugins/peity/jquery.peity.min.js')}}"></script>

    <!-- Rating js-->
    <script src="{{ asset('assetss/plugins/rating/jquery.rating-stars.js')}}"></script>
    <script src="{{ asset('assetss/plugins/rating/jquery.barrating.js')}}"></script>

    <!-- P-scroll js -->
    <script src="{{ asset('assetss/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{ asset('assetss/plugins/perfect-scrollbar/p-scroll.js')}}"></script>

    <!-- Sidemenu js-->
    <script src="{{ asset('assetss/plugins/sidebar/sidebar.js')}}"></script>
    <script src="{{ asset('assetss/plugins/sidebar/sidebar-custom.js')}}"></script>


    <!-- Left-menu js-->
    <script src="{{ asset('assetss/plugins/side-menu/sidemenu.js')}}"></script>

    <!-- Eva-icons js -->
    <script src="{{ asset('assetss/js/eva-icons.min.js')}}"></script>

    <!--Internal Apexchart js-->
    <!-- <script src="{{ asset('assetss/js/apexcharts.js')}}"></script> -->

    <!-- Horizontalmenu js-->
    <script src="{{ asset('assetss/plugins/horizontal-menu/horizontal-menu-2/horizontal-menu.js')}}"></script>

    <!-- Sticky js -->
    <script src="{{ asset('assetss/js/sticky.js')}}"></script>

    <!-- Internal Map -->
    <script src="{{ asset('assetss/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
    <script src="{{ asset('assetss/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>

    <!-- Internal Chart js -->
    <script src="{{ asset('assetss/plugins/chart.js/Chart.bundle.min.js')}}"></script>

    <!--Internal  index js -->
    <script src="{{ asset('assetss/js/index.js')}}"></script>
    <script src="{{ asset('assetss/js/jquery.vmap.sampledata.js')}}"></script>

    <!-- custom js -->
    <script src="{{ asset('assetss/js/custom.js')}}"></script>
    <script src="{{ asset('assetss/js/jquery.vmap.sampledata.js')}}"></script>
    
     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                  <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                      <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                          <span aria-hidden="true">&times;</span>
                                                        </button>
                                                      </div>
                                                      <div class="modal-body">
                                                        ...
                                                      </div>
                                                      <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>


    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    @toastr_js

  </body>
</html>

