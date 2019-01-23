<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Travellersofbd Admin Dashboard</title>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <!-- <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" /> -->
    <!-- <meta content="Coderthemes" name="author" /> -->
    <!-- App favicon -->
    <!-- <link rel="shortcut icon" href="assets/images/favicon.ico"> -->

    <!-- third party css -->
    <link href="{!! asset('assets/css/vendor/jquery-jvectormap-1.2.2.css') !!}  " rel="stylesheet" type="text/css" />
    <!-- third party css end -->

    <!-- App css -->
    <link href="{!! asset('assets/css/icons.min.css') !!}  " rel="stylesheet" type="text/css" />
    <link href="{!! asset('assets/css/app.min.css') !!}  " rel="stylesheet" type="text/css" />
    <!-- new -->
    <!-- Summernote css -->
    <!-- new -->
      <link href="{{asset('js/gijgo.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- <script src="https://code.jquery.com/jquery-3.0.0.js"></script> -->
     <script src="{{asset('js/jquery-3.3.1.js')}}"></script>
     <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
     <script src="{{asset('js/gijgo.min.js')}}" type="text/javascript"></script>
    <!-- include summernote css/js -->

      <link href="{{asset('/js/select2.min.css')}}" rel="stylesheet">
     <script src="{{asset('/js/select2.min.js')}}"></script>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

        @yield('css')
</head>

<body>

    <!-- Begin page -->
    <div class="wrapper">

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left-side-menu">

            <div class="slimscroll-menu">

                <!-- LOGO -->
                <a href="{{url('/admin')}}" class="logo text-center">
                    <span class="logo-lg">
                      <img src="{{ asset('') }}/img/logo.png" alt="" height="100">
                    </span>
                    <span class="logo-sm">
                        <img src="{{ asset('') }}/img/logo.png" alt="" height="100">
                    </span>
                </a>

                <!--- Sidemenu -->
                <ul class="metismenu side-nav">

                    <li class="side-nav-title side-nav-item">Navigation</li>

                    <li class="side-nav-item">
                        <a href="{{url('admin')}}" class="side-nav-link">
                            <i class="dripicons-meter"></i>
                            <!-- <span class="badge badge-success float-right">7</span> -->
                            <span> Dashboard </span>
                        </a>
                    </li>


                     <li class="side-nav-item">
                        <a href="javascript: void(0);" class="side-nav-link">
                              <i class="dripicons-briefcase"></i>
                            <span> Trips </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="side-nav-second-level" aria-expanded="false">
                            <li>
                                <a href="{{route('admin.trip.show')}}">All Trips</a>
                            </li>
                            <!-- <li>
                                <a href="{{route('admin.trip.show')}}">Create trip</a>
                            </li>
                            <li>
                                <a href="{{route('admin.trip.show')}}">New trip</a>
                            </li>
                            <li>
                                <a href="{{route('admin.trip.show')}}">New trip</a>
                            </li>
                            <li>
                                <a href="{{route('admin.trip.show')}}">New trip</a> -->
                            </li>
                        </ul>
                    </li>

                      <li class="side-nav-item">
                          <a href="javascript: void(0);" class="side-nav-link">
                              <i class="dripicons-list"></i>
                              <span> Trip Destination </span>
                              <span class="menu-arrow"></span>
                          </a>
                          <ul class="side-nav-second-level" aria-expanded="false">
                              <li>
                                  <a href="{{url('admin/trips/destination/show')}}">Show All</a>
                              </li>
                              <li>
                                  <a href="{{url('admin/trips/destination/create')}}">Add New</a>
                              </li>
                          </ul>
                      </li>
                      <li class="side-nav-item">
                          <a href="javascript: void(0);" class="side-nav-link">
                              <i class="dripicons-list"></i>
                              <span> Blog </span>
                              <span class="menu-arrow"></span>
                          </a>
                          <ul class="side-nav-second-level" aria-expanded="false">
                              <li>
                                  <a href="{{url('admin/blog/show')}}">Show All</a>
                              </li>
                              <li>
                                  <a href="{{url('admin/blog/create')}}">Add New</a>
                              </li>
                          </ul>
                      </li>
                      <li class="side-nav-item">
                          <a href="javascript: void(0);" class="side-nav-link">
                              <i class="dripicons-list"></i>
                              <span> Blog Category </span>
                              <span class="menu-arrow"></span>
                          </a>
                          <ul class="side-nav-second-level" aria-expanded="false">
                              <li>
                                  <a href="{{url('admin/blog/category/show')}}">Show All</a>
                              </li>
                              <li>
                                  <a href="{{url('admin/blog/category/create')}}">Add New</a>
                              </li>
                          </ul>
                      </li>





                </ul>



                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->

        <div class="content-page">
            <div class="content">

                <!-- Topbar Start -->
                <div class="navbar-custom">
                    <ul class="list-unstyled topbar-right-menu float-right mb-0">


                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <span class="account-user-avatar">
                                    <img src="{!! asset('/') !!}//user_file_image/original/default.png" alt="user-image" class="rounded-circle">
                                </span>
                                <span>
                                    <span class="account-user-name">{{Auth::user()->username}}</span>
                                    <span class="account-position">Admin</span>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown ">
                                <!-- item-->
                                <div class=" dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-account-circle"></i>
                                    <span>My Account</span>
                                </a>

                                <!-- item-->
                                <a href="{{ route('admin.logout') }}" onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();"
                                   class="dropdown-item notify-item">
                                    <i class="mdi mdi-logout"></i>
                                    <span>{{ __('Logout') }}</span>
                                </a>
                                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>

                            </div>
                        </li>

                    </ul>
                    <button class="button-menu-mobile open-left disable-btn">
                        <i class="mdi mdi-menu"></i>
                    </button>
                @yield('search')
                </div>
                <!-- end Topbar -->
                @yield('content')
            </div>
            <!-- container -->

        </div>
        <!-- content -->
        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        2018 @ Travelersofbd
                    </div>
                    <div class="col-md-6">
                        <div class="text-md-right footer-links d-none d-md-block">
                            <a href="javascript: void(0);">About</a>
                            <a href="javascript: void(0);">Support</a>
                            <a href="javascript: void(0);">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->

    <script>
        // $('#datepicker').datepicker({
        //     format: 'dd/mm/yyyy'
        //
        // });
        // $('#datepicker1').datepicker({
        //     format: 'dd/mm/yyyy',
        //     minDate: new Date(),
        //
        //
        // });

            // // $('#datepicker').datepicker();

            $('#summernote').summernote({
              placeholder: 'Full Description',

              height: 400,
              // toolbar: [
              //   ['view', ['fullscreen'/*, 'codeview' */]],
              // ]
            });


    </script>

    <!-- bundle -->
    <script src="{!! asset('/assets/js/app.min.js') !!}  "></script>

    <!-- third party js -->
    <script src="{!! asset('/assets/js/vendor/Chart.bundle.min.js') !!} "></script>
    <script src="{!! asset('/assets/js/vendor/jquery-jvectormap-1.2.2.min.js') !!}"></script>
    <script src="{!! asset('/assets/js/vendor/jquery-jvectormap-world-mill-en.js') !!} "></script>
    <!-- third party js ends -->


    <!-- demo app -->
    <script src="{!! asset('/assets/js/pages/demo.dashboard.js') !!} "></script>
    <!-- end demo js-->
</body>

</html>
