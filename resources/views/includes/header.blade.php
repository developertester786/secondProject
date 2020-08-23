<?php
use Illuminate\Support\Facades\Auth;
Use App\User;
?>
<!--
=========================================================
Material Dashboard PRO - v2.1.2
=========================================================

Product Page: https://www.creative-tim.com/product/material-dashboard-pro
Copyright 2020 Creative Tim (https://www.creative-tim.com)
Coded by Creative Tim

=========================================================
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{ URL::asset('public/assets/img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ URL::asset('public/assets/img/favicon.png') }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
      <?php
      if($title !=''){
          echo $title;
          
      }
      ?>
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="{{ URL::asset('public/assets/admin/css/material-dashboard.css?v=2.1.2') }}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{ URL::asset('public/assets/admin/demo/demo.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ URL::asset('public/assets/admin/css/style.css') }}">

   <!--<link href="{{ URL::asset('public/css/admin.css') }}" rel="stylesheet" media="all">-->
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="rose" data-background-color="black" data-image="{{ URL::asset('public/assets/admin/img/sidebar-1.jpg') }}">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <!--  <a href="http://www.creative-tim.com" class="simple-text logo-mini">-->
        <!--</a>-->
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          MollyLivesForever
        </a></div>
      <div class="sidebar-wrapper">
        <div class="user">
         <div class="photo">
              <?php if(Auth::user()->profile !=''){ ?>
            <img src="{{ URL::asset('public/assets/admin/media/'.Auth::user()->profile) }}" />
           <?php } else{?>
            <img src="//placehold.it/100" />
           
           <?php } ?>
          </div>
        
          <div class="user-info">
            <a data-toggle="collapse" href="#collapseExample" class="username">
              <span>
                  <?php echo Auth::user()->name; ?>
                <b class="caret"></b>
              </span>
            </a>
            <div class="collapse" id="collapseExample">
              <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link" href="/dashboard">
                    <span class="sidebar-mini"> MP </span>
                    <span class="sidebar-normal"> My Profile </span>
                  </a>
                </li>
               
           
              </ul>
            </div>
          </div>
        </div>
        <ul class="nav">
          <li class="nav-item active ">
            <a class="nav-link" href="/dashboard">
              <i class="material-icons">dashboard</i>
              <p> Dashboard </p>
            </a>
          </li>
      
        </ul>
         <ul class="nav">
       
       
       <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#pagesExamples">
              <i class="material-icons">image</i>
              <p> Listings
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="pagesExamples">
              <ul class="nav">
                   <li class="nav-item ">
                  <a class="nav-link" href="/listings">
                    <span class="sidebar-mini">  </span>
                    <span class="sidebar-normal"> All Listings </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="/new-listing">
                    <span class="sidebar-mini">  </span>
                    <span class="sidebar-normal"> Add New Listing </span>
                  </a>
                </li>
        
             </ul>
     
                
            </div>
          </li>
        
       
              
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-minimize">
              <button id="minimizeSidebar" class="btn btn-just-icon btn-white btn-fab btn-round">
                <i class="material-icons text_align-center visible-on-sidebar-regular">more_vert</i>
                <i class="material-icons design_bullet-list-67 visible-on-sidebar-mini">view_list</i>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <!--<form class="navbar-form">-->
            <!--  <div class="input-group no-border">-->
            <!--    <input type="text" value="" class="form-control" placeholder="Search...">-->
            <!--    <button type="submit" class="btn btn-white btn-round btn-just-icon">-->
            <!--      <i class="material-icons">search</i>-->
            <!--      <div class="ripple-container"></div>-->
            <!--    </button>-->
            <!--  </div>-->
            <!--</form>-->
            <ul class="navbar-nav">
              <!--<li class="nav-item">-->
              <!--  <a class="nav-link" href="javascript:;">-->
              <!--    <i class="material-icons">dashboard</i>-->
              <!--    <p class="d-lg-none d-md-block">-->
              <!--      Stats-->
              <!--    </p>-->
              <!--  </a>-->
              <!--</li>-->
              <!--<li class="nav-item dropdown">-->
              <!--  <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
              <!--    <i class="material-icons">notifications</i>-->
              <!--    <span class="notification">5</span>-->
              <!--    <p class="d-lg-none d-md-block">-->
              <!--      Some Actions-->
              <!--    </p>-->
              <!--  </a>-->
              <!--  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">-->
              <!--    <a class="dropdown-item" href="#">Mike John responded to your email</a>-->
              <!--    <a class="dropdown-item" href="#">You have 5 new tasks</a>-->
              <!--    <a class="dropdown-item" href="#">You're now friend with Andrew</a>-->
              <!--    <a class="dropdown-item" href="#">Another Notification</a>-->
              <!--    <a class="dropdown-item" href="#">Another One</a>-->
              <!--  </div>-->
              <!--</li>-->
              <li class="nav-item dropdown">
                  <a class="dropdown-item" href="http://mollylivesforever.com/"> 
                  Visit Site
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="dropdown-item" href="#"> 
                  <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <button type="submit">Logout</button>
                </form>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->