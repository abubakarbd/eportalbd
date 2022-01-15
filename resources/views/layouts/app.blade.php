<!doctype html>
<html lang="en" class="fixed left-sidebar-top">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Dashboard</title>
    <link rel="icon" type="{{asset('/')}}assets/admin/image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <!--load progress bar-->
    <script src="{{asset('/')}}assets/admin/vendor/pace/pace.min.js"></script>
    <link href="{{asset('/')}}assets/admin/vendor/pace/pace-theme-minimal.css" rel="stylesheet" />

    <!--BASIC css-->
    <!-- ========================================================= -->
    <link rel="stylesheet" href="{{asset('/')}}assets/admin/vendor/bootstrap/css/bootstrap.css">
    <link href="{{asset('/')}}assets/admin/stylesheets/bootstrap-toggle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/')}}assets/admin/vendor/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/admin/vendor/animate.css/animate.css">
    <!--SECTION css-->
    <!-- ========================================================= -->
    <!--Select with searching & tagging-->
    <link rel="stylesheet" href="{{asset('/')}}assets/admin/vendor/select2/css/select2.min.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/admin/vendor/select2/css/select2-bootstrap.min.css">
    <!--Notification msj-->
    <link rel="stylesheet" href="{{asset('/')}}assets/admin/vendor/toastr/toastr.min.css">
    <!--Magnific popup-->
    <link rel="stylesheet" href="{{asset('/')}}assets/admin/vendor/magnific-popup/magnific-popup.css">
    <!--dataTable-->
    <link rel="stylesheet" href="{{asset('/')}}assets/admin/vendor/data-table/media/css/dataTables.bootstrap.min.css">
    <!--TEMPLATE css-->
    <!-- ========================================================= -->
    <link rel="stylesheet" href="{{asset('/')}}assets/admin/stylesheets/css/style.css">


</head>

<body>
    <div class="wrap">
        <!-- page HEADER -->
        <!-- ========================================================= -->
        <div class="page-header">
            <!-- LEFTSIDE header -->
            <div class="leftside-header">
               <!--  <div class="logo">
                    <a href="{{route('dashboard')}}" class="on-click">
                        <img alt="logo" src="{{asset('/')}}assets/admin/images/header-logo.png" />
                    </a>
                </div> -->
                <div id="menu-toggle" class="visible-xs toggle-left-sidebar" data-toggle-class="left-sidebar-open" data-target="html">
                    <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                </div>
            </div>
            <!-- RIGHTSIDE header -->
            <div class="rightside-header">
                <div class="header-middle"></div>
                <!--SEARCH HEADERBOX-->
             <!--    <div class="header-section" id="search-headerbox">
                    <input type="text" name="search" id="search" placeholder="Search...">
                    <i class="fa fa-search search" id="search-icon" aria-hidden="true"></i>
                    <div class="header-separator"></div>
                </div> -->
                <!--NOCITE HEADERBOX-->
         <!--         <div class="header-section hidden-xs" id="notice-headerbox">

                   <!--messages--
                   <div class="notice" id="messages-notice">
                        <i class="fa fa-comments-o" aria-hidden="true"><span class="badge badge-xs badge-top-right x-danger"><i class="fa fa-exclamation"></i></span>
                        </i>
                        <div class="dropdown-box basic">
                            <div class="drop-header ">
                                <h3><i class="fa fa-comments" aria-hidden="true"></i> Messages</h3>
                                <span class="badge x-danger b-rounded">120</span>
                            </div>
                            <div class="drop-content">
                                <div class="widget-list list-left-element">
                                    <ul>


                                        <li>
                                            <a href="#">
                                                <div class="left-element"><img alt="profile photo" src="images/avatar/avatar_5.jpg" /></div>
                                                <div class="text">
                                                    <span class="title">Sonia Valera</span>
                                                    <span class="subtitle">hello world</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="drop-footer">
                                <a>See all messages</a>
                            </div>
                        </div>
                    </div>

                    <div class="header-separator"></div>
                </div>-->


                <!--USER HEADERBOX -->
                <div class="header-section" id="user-headerbox">
                    <div class="user-header-wrap">
                        <div class="user-photo">
                            <img alt="profile photo" src="{{asset('/')}}assets/admin/images/avatar/avatar_user.jpg" />
                        </div>
                        <div class="user-info">
                            <span class="user-name"></span>
                            <span class="user-profile">{{Auth::user()->name}}</span>
                        </div>
                        <i class="fa fa-plus icon-open" aria-hidden="true"></i>
                        <i class="fa fa-minus icon-close" aria-hidden="true"></i>
                    </div>
                    <div class="user-options dropdown-box">
                        <div class="drop-content basic">
                            <ul>
                                <!-- <li> <a href="#"><i class="fa fa-user" aria-hidden="true"></i> Profile</a></li> -->
                                <li><a href="{{route('password')}}"><i class="fa fa-cog" aria-hidden="true"></i>Change Password</a></li>
                                <li><a href="{{route('setting')}}"><i class="fa fa-cog" aria-hidden="true"></i>Setting</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="header-separator"></div>
                <!--Log out -->
                <div class="header-section">
                    <a
                        href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();"
                     data-toggle="tooltip" data-placement="left" title="Logout"><i class="fa fa-sign-out log-out" aria-hidden="true"></i></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
        <!-- page BODY -->
        <!-- ========================================================= -->
        <div class="page-body">
            <!-- LEFT SIDEBAR -->
            <!-- ========================================================= -->
            <div class="left-sidebar">
                <!-- left sidebar HEADER -->
                <div class="left-sidebar-header">
                    <div class="left-sidebar-title">Navigation</div>
                    <div class="left-sidebar-toggle c-hamburger c-hamburger--htla hidden-xs" data-toggle-class="left-sidebar-collapsed" data-target="html">
                        <span></span>
                    </div>
                </div>
                <!-- NAVIGATION -->
                <!-- ========================================================= -->
                <div id="left-nav" class="nano">
                    <div class="nano-content">
                        <nav>
                            <ul class="nav nav-left-lines" id="main-nav">
                                <!--HOME-->
                                <li class="{{request()->is('dashboard') ? 'active-item' : ''}}"><a href="{{route('dashboard')}}"><i class="fa fa-home" aria-hidden="true"></i><span>Dashboard</span></a></li>

                                 <!--CLIENT-->
                                <li class="has-child-item close-item {{request()->is('client/*') ? 'open-item' : ''}}">
                                    <a><i class="fa fa-users" aria-hidden="true"></i><span>Client</span> </a>
                                    <ul class="nav child-nav level-1">
                                        <li class="{{request()->is('client/manage-client') ? 'active-item' : ''}}"><a href="{{route('manage-client')}}">Manage Client</a></li>
                                    </ul>
                                </li>
                                 <!--Work-->
                                <li class="has-child-item close-item {{request()->is('work/*') ? 'open-item' : ''}}">
                                    <a><i class="fa fa-users" aria-hidden="true"></i><span>Work</span> </a>
                                    <ul class="nav child-nav level-1">
                                        <li class="{{request()->is('work/list') ? 'active-item' : ''}}"><a href="{{route('list-work')}}">Manage Work</a></li>
                                    </ul>
                                </li>

                               <!--Slider-->
                                <li class="has-child-item close-item {{request()->is('slider/*') ? 'open-item' : ''}}">
                                    <a><i class="fa fa-exchange" aria-hidden="true"></i><span>Slider</span> </a>
                                    <ul class="nav child-nav level-1">
                                        <li class="{{request()->is('slider/add-slider','slider/edit/*') ? 'active-item' : ''}}"><a href="{{route('add-slider')}}">Add Slider</a></li>
                                        <li class="{{request()->is('slider/manage-slider') ? 'active-item' : ''}}"><a href="{{route('manage-slider')}}">Manage Slider</a></li>
                                    </ul>
                                </li>

                                 <!--E-Service-->
                                <li class="has-child-item close-item {{request()->is('service/*') ? 'open-item' : ''}}">
                                    <a><i class="fa fa-server" aria-hidden="true"></i><span>Service</span> </a>
                                    <ul class="nav child-nav level-1">
                                        <li class="{{request()->is('service/manage-service','service/add-service','service/edit/*') ? 'active-item' : ''}}"><a href="{{route('manage-service')}}">Manage Service</a></li>
                                        <li class="{{request()->is('service/manage-sub-service','service/add-sub-service','service/sub-edit/*') ? 'active-item' : ''}}"><a href="{{route('sub-service')}}">Manage Sub Service</a></li>
                                    </ul>
                                </li>

                                <!--Notice-->
                                <li class="has-child-item close-item {{request()->is('notice/*') ? 'open-item' : ''}}">
                                    <a><i class="fa fa-thumb-tack" aria-hidden="true"></i><span>Notice</span> </a>
                                    <ul class="nav child-nav level-1">
                                        <li class="{{request()->is('notice/add-notice','notice/edit/*') ? 'active-item' : ''}}"><a href="{{route('add-notice')}}">Add Notice</a></li>
                                        <li class="{{request()->is('notice/manage-notice') ? 'active-item' : ''}}"><a href="{{route('manage-notice')}}">Manage Notice</a></li>
                                    </ul>
                                </li>

                                      <!--Product-->
                                <li class="has-child-item close-item {{request()->is('admin/*') ? 'open-item' : ''}}">
                                    <a><i class="fa fa-diamond" aria-hidden="true"></i><span>Product</span> </a>
                                    <ul class="nav child-nav level-1">
                                        <li class="{{request()->is('admin/add-product','admin/product/edit/*') ? 'active-item' : ''}}"><a href="{{route('add-product')}}">Add Product</a></li>
                                        <li class="{{request()->is('admin/manage-product') ? 'active-item' : ''}}"><a href="{{route('manage-product')}}">Manage Product</a></li>
                                    </ul>
                                </li>

                                <!--BRAND-->
                                <li class="has-child-item close-item {{request()->is('brand/*') ? 'open-item' : ''}}">
                                    <a><i class="fa fa-list" aria-hidden="true"></i><span>Brand</span> </a>
                                    <ul class="nav child-nav level-1">
                                        <li class="{{request()->is('brand/add-brand','brand/edit/*') ? 'active-item' : ''}}"><a href="{{route('add-brand')}}">Add Brand</a></li>
                                        <li class="{{request()->is('brand/manage-brand') ? 'active-item' : ''}}"><a href="{{route('manage-brand')}}">Manage Brand</a></li>
                                    </ul>
                                </li>



                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- CONTENT -->
            <!-- ========================================================= -->
            <div class="content">
                <!-- content HEADER -->
                <!-- ========================================================= -->
                @yield('content')

            </div>

            <!--scroll to top-->
            <a href="#" class="scroll-to-top"><i class="fa fa-angle-double-up"></i></a>
        </div>
    </div>
    <!--BASIC scripts-->
    <!-- ========================================================= -->
    <script src="{{asset('/')}}assets/admin/javascripts/examples/jquery-3.5.1.min.js"></script>
    <script src="{{asset('/')}}assets/admin/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{asset('/')}}assets/admin/bootstrap.bundle.min.js"></script>
    <script src="{{asset('/')}}assets/admin/javascripts/bootstrap-toggle.min.js"></script>
    <script src="{{asset('/')}}assets/admin/vendor/nano-scroller/nano-scroller.js"></script>
    <!--TEMPLATE scripts-->
    <!-- ========================================================= -->
    <script src="{{asset('/')}}assets/admin/javascripts/template-script.min.js"></script>
    <script src="{{asset('/')}}assets/admin/javascripts/template-init.min.js"></script>
    <!-- SECTION script and examples-->
    <!-- ========================================================= -->
    <!--Notification msj-->
    <script src="{{asset('/')}}assets/admin/vendor/toastr/toastr.min.js"></script>
    <!--morris chart-->
    <script src="{{asset('/')}}assets/admin/vendor/chart-js/chart.min.js"></script>
    <!--Gallery with Magnific popup-->
    <script src="{{asset('/')}}assets/admin/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!--dataTable-->
    <script src="{{asset('/')}}assets/admin/vendor/data-table/media/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('/')}}assets/admin/vendor/data-table/media/js/dataTables.bootstrap.min.js"></script>
    <!--Select with searching & tagging-->
<script src="{{asset('/')}}assets/admin/vendor/select2/js/select2.min.js"></script>
    <!--Examples-->
    <script src="{{asset('/')}}assets/admin/javascripts/examples/tables/data-tables.js"></script>
        <!--Examples-->
    <!-- <script src="{{asset('/')}}assets/admin/javascripts/script.js"></script> -->
</body>

</html>
