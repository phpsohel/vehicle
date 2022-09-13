<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="images/favicon_1.ico">

        <title> @yield('title')</title>
        <!-- Base Css Files -->
        <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet" />

        <!-- Font Icons -->
        <link href="{{ asset('assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
        <link href="{{ asset('assets/ionicon/css/ionicons.min.css')}}" rel="stylesheet" />
        <link href="{{ asset('css/material-design-iconic-font.min.css')}}" rel="stylesheet">

        <!-- animate css -->
        <link href="{{ asset('css/animate.css')}}" rel="stylesheet" />

        <!-- Waves-effect -->
        <link href="{{ asset('css/waves-effect.css')}}" rel="stylesheet">

        <!-- DataTables -->
        <link href="{{ asset('assets/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- Custom Files -->
        <link href="{{ asset('css/helper.css')}}" rel="stylesheet'" type="text/css" />
        <link href="{{ asset('css/style.css')}}" rel="stylesheet" type="text/css" />

        <script src="{{ asset('js/modernizr.min.js')}}"></script>

    </head>
    <body class="fixed-left">
        <!-- Begin page -->
        <div id="wrapper">
            <!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="{{route('admin.vehicle.all-report')}}" class="logo"> <span>Vehicle Route Tracking System  </span></a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>
                            <form class="navbar-form pull-left" role="search">
                                <div class="form-group"> </div>
                                <button type="submit" class="btn btn-search"><i class="fa fa-search"></i>Welcome</button>
                            </form>

                            <ul class="nav navbar-nav navbar-right pull-right">
                                <li class="dropdown hidden-xs">
                                    <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                        <i class="md md-notifications"></i> <span class="badge badge-xs badge-danger">3</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-lg">
                                        <li class="text-center notifi-title">Notification</li>
                                        <li class="list-group">
                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left">
                                                    <em class=""></em>
                                                 </div>
                                                 <div class="media-body clearfix">
                                                    <div class="media-heading">Vehicle user registered</div>
                                                    <p class="m-0">
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>

                                        </li>
                                    </ul>
                                </li>
                                <li class="hidden-xs">
                                    <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="md md-crop-free"></i></a>
                                </li>
                                <li class="hidden-xs"></li>
                                <li class="dropdown">
                                    <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="{{ asset('images/avatar-1.jpg')}}" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <div class="nav-item">
                                                    <a class="md md-settings-power "style="padding: 6px 20px!important;" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                this.closest('form').submit(); " role="button">
                                                        <i class="fas fa-sign-out-alt"></i>

                                                        {{ __('Log Out') }}
                                                    </a>
                                                </div>
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->
