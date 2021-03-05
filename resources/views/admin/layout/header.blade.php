<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- DataTables -->
  <link rel="stylesheet" href="{{url('assets/back/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{url('assets/back/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{url('assets/back/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
    <!-- summernote -->
  <link rel="stylesheet" href="{{url('assets/back/plugins/summernote/summernote-bs4.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('assets/back/dist/css/adminlte.css')}}">

  <!-- jQuery -->
  <script src="{{url('assets/back/plugins/jquery/jquery.min.js')}}"></script>

  <!-- SWEET ALERT -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->

    <nav class="main-header navbar navbar-expand navbar-white navbar-light @yield('style')">

      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>

        <li class="nav-item d-none d-sm-inline-block" style="margin-top: 4px;">
          <h3 style="padding: 2px;">@yield('nav-title')</h3>

          @yield('tabs')

        </li>
      </ul>



      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto ac">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown notif">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-danger navbar-badge">0</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="{{url('assets/back/dist/img/profile/user2-160x160.jpg')}}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Brad Diesel
                  </h3>
                  <p class="text-sm">Call me whenever you can...</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>

          </div>
        </li>

        <li class="nav-item dropdown prof">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <img src="{{url('assets/back/dist/img/profile/user2-160x160.jpg')}}" width="25" style="border-radius: 20px;"> &nbsp;
            <span><b>Fahmi</b></span> &nbsp;
            <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-lg " style="min-width: 154px !important;">
            <a href="{{url('/profile')}}" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <div class="media-body">
                  <i class="fa fa-user-o" aria-hidden="true"></i>
                  <span>Profile</span>
                </div>
              </div>

              <!-- Message End -->
            </a>
            <a href="#" class="dropdown-item">
              <div class="media">
                <div class="media-body">
                  <i class="fa fa-sign-out" aria-hidden="true"></i>
                  <span>Log Out</span>
                </div>
              </div>
            </a>

          </div>
        </li>
        <!-- Notifications Dropdown Menu -->

      </ul>

    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="{{url('assets/back/dist/img/brand/logo.png')}}" alt="AdminLTE Logo" width="200">
      </a>

      <!-- Sidebar -->
      <div class="sidebar">

        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->

           <li class="nav-item">
            <a href="{{url('/dashboard')}}" class="nav-link active" style="background-color: #fff !important;  color: #D32F2F; font-weight: bold;">
              <i class="nav-icon fa fa-bar-chart" aria-hidden="true"></i>
              <p>
                Dashboard

              </p>
            </a>
          </li>

          <li class="nav-item ">
            <a href="#" class="nav-link active" style="background-color: #fff !important; color: #D32F2F; font-weight: bold;">
              <i class="nav-icon fa fa-pencil" aria-hidden="true"></i>
              <p>
                Posts
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/post')}}" class="nav-link active" style="color: #D32F2F;">
                  <i class="fa fa-list nav-icon"></i>
                  <p>All Post</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{url('/add')}}" class="nav-link active" style="color: #D32F2F;">
                  <img src="https://img.icons8.com/material/64/fa314a/add-file--v1.png" width="21"> 
                  <p>Add Post</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="{{url('/profile')}}" class="nav-link active" style="background-color: #fff !important; color:#D32F2F; font-weight: bold;">
              <i class="nav-icon fa fa-user-circle-o"></i>
              <p>
                Profile

              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>