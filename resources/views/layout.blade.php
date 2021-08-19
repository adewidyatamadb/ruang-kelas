<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Administration</title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="{{asset('assets/admin/vendors/ti-icons/css/themify-icons.css')}}">
        <link rel="stylesheet" href="{{asset('assets/admin/vendors/base/vendor.bundle.base.css')}}">
        <!-- endinject -->
        <!-- plugin css for this page -->
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="{{asset('assets/admin/css/style.css')}}">
        <!-- endinject -->
        <link rel="shortcut icon" href="{{asset('assets/admin/images/favicon.png')}}" />
        @yield('css')
        <style>
            .content-wrapper{
                background: white;
            }
            @media screen and (max-width: 991px){
                .navbar .navbar-brand-wrapper button{
                    display:none;
                }
            }
        </style>
    </head>
    <body>
        <div class="container-scroller">
            <!-- partial:partials/_navbar.html -->
            <nav class="flex-row p-0 navbar col-lg-12 col-12 fixed-top d-flex">
                <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                    <button class="navbar-toggler align-self-center" type="button" data-toggle="minimize">
                        <span class="ti-view-list"></span>
                    </button>
                </div>
                <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item nav-profile">
                            <a href="/" class="nav-link">
                            Profile</a>
                        </li>
                        <li class="nav-item nav-profile">
                            <a href="/user/logout" class="nav-link">
                            Logout</a>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                        <span class="ti-view-list"></span>
                    </button>
                </div>
            </nav>
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.dashboard')}}">
                            <i class="ti-shield menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                            <i class="ti-palette menu-icon"></i>
                            <span class="menu-title">Reservation</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="/admin/reservations-new">New Reservation</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/admin/reservations-all">All Reservation</a>
                                </li>
                            </ul>
                        </div>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('administrator.index')}}">
                            <i class="ti-wand menu-icon"></i>
                            <span class="menu-title">Administrator</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-12 grid-margin">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h4 class="mb-0 font-weight-bold">@yield('page-title')</h4>
                                </div>
                                <div>

                                </div>
                            </div>
                        </div>
                    </div>
                <div class="row">
                    @yield('content')
                </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->

        <!-- plugins:js -->
        <script src="{{asset('assets/admin/vendors/base/vendor.bundle.base.js')}}"></script>
        <!-- endinject -->
        <!-- Plugin js for this page-->
        <script src="{{asset('assets/admin/vendors/chart.js/Chart.min.js')}}"></script>
        <!-- End plugin js for this page-->
        <!-- inject:js -->
        <script src="{{asset('assets/admin/js/off-canvas.js')}}"></script>
        <script src="{{asset('assets/admin/js/hoverable-collapse.js')}}"></script>
        <script src="{{asset('assets/admin/js/template.js')}}"></script>
        <script src="{{asset('assets/admin/js/todolist.js')}}"></script>
        <script src="{{asset('assets/admin/js/dashboard.js')}}"></script>
        <!-- endinject -->
        <!-- Custom js for this page-->
        @yield('js')

    <!-- End custom js for this page-->
    </body>

</html>
