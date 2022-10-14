<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <title>ATD Admin</title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="{{ asset('admin/vendors/feather/feather.css') }}" />
        <link rel="stylesheet" href="{{ asset('admin/vendors/ti-icons/css/themify-icons.css') }}" />
        <link rel="stylesheet" href="{{ asset('admin/vendors/css/vendor.bundle.base.css') }}" />
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <link
            rel="stylesheet"
            href="{{ asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}"
        />
        <link rel="stylesheet" href="{{ asset('admin/vendors/ti-icons/css/themify-icons.css') }}" />
        <link
            rel="stylesheet"
            type="text/css"
            href="{{ asset('admin/js/select.dataTables.min.css') }}"
        />
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="{{ asset('admin/css/vertical-layout-light/style.css') }}" />
        <!-- endinject -->
        <link rel="shortcut icon" href="{{ asset('admin//images/fav-icon/icon.png') }}" />
    </head>
    <body>
        <div class="container-scroller">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
                <div
                    class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center"
                >
                    <a class="navbar-brand brand-logo mr-5" href="/admin/home"
                        ><img src="/images/logo/atd.png" class="mr-2" alt="logo"
                    /></a>
                    <a class="navbar-brand brand-logo-mini" href="/admin/home"
                        ><img src="/images/logo/atd-small.png" alt="logo"
                    /></a>
                </div>
                <div
                    class="navbar-menu-wrapper d-flex align-items-center justify-content-end"
                >
                    <button
                        class="navbar-toggler navbar-toggler align-self-center"
                        type="button"
                        data-toggle="minimize"
                    >
                        <span class="icon-menu"></span>
                    </button>
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item nav-profile dropdown">
                            <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                data-toggle="dropdown"
                                id="profileDropdown"
                            >
                                <img
                                    src="{{ asset(Auth::user()->photo) }}"
                                    alt="profile"
                                />
                            </a>
                            <div
                                class="dropdown-menu dropdown-menu-right navbar-dropdown"
                                aria-labelledby="profileDropdown"
                            >   
                                <a class="dropdown-item">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</a>
                                <!-- <a class="dropdown-item">
                                    <i class="ti-settings text-primary"></i>
                                    Settings
                                </a> -->
                                <a class="dropdown-item" href="{{ route('logout') }}" 
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="ti-power-off text-primary"></i>
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                    <button
                        class="navbar-toggler navbar-toggler-right d-lg-none align-self-center"
                        type="button"
                        data-toggle="offcanvas"
                    >
                        <span class="icon-menu"></span>
                    </button>
                </div>
            </nav>
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
                <!-- partial:partials/_sidebar.html -->
                @yield('menu')
                <!-- partial -->
                <div class="main-panel">
                    <div class="content-wrapper">
                            <!-- content !-->
                            @yield('content')
                    </div>
                    <!-- content-wrapper ends -->
                    <!-- partial:partials/_footer.html -->
                    <footer class="footer">
                        <div
                            class="d-sm-flex justify-content-center justify-content-sm-between"
                        >
                            <span
                                class="text-muted text-center text-sm-left d-block d-sm-inline-block"
                                >Copyright © 2022 ATD
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
        <script src="{{ asset('admin/vendors/js/vendor.bundle.base.js') }}"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="{{ asset('admin/vendors/chart.js/Chart.min.js') }}"></script>
        <script src="{{ asset('admin/vendors/datatables.net/jquery.dataTables.js') }}"></script>
        <script src="{{ asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
        <script src="{{ asset('admin/js/dataTables.select.min.js') }}"></script>

        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="{{ asset('admin/js/off-canvas.js') }}"></script>
        <script src="{{ asset('admin/js/hoverable-collapse.js') }}"></script>
        <script src="{{ asset('admin/js/template.js') }}"></script>
        <script src="{{ asset('admin/js/settings.js') }}"></script>
        <script src="{{ asset('admin/js/todolist.js') }}"></script>
        <!-- endinject -->
        <!-- Custom js for this page-->
        <script src="{{ asset('admin/js/dashboard.js') }}"></script>
        <script src="{{ asset('admin/js/Chart.roundedBarCharts.js') }}"></script>
        <!-- End custom js for this page-->
    </body>
</html>
