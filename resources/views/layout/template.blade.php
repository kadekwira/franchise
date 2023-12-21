<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>Franchise</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/2f708729c7.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ url('template') }}/css/index.css">
    <link rel="stylesheet" href="{{ url('template') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ url('template') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('template') }}/dist/css/adminlte.min.css">
</head>

<body class=" sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="{{ url('template') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Sistem Franchise</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="d-flex flex-column justify-content-center align-items-center mt-4 gap-2">
                    <img src="{{ url('assets') }}/profile.png" alt="" class="w-25">
                    <p class="text-center text-light">Admin</p>
                </div>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="/" class="{{ Request::is('/') ? 'active' : '' }} nav-link ">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#"
                                class="nav-link {{ Request::is('products') ? 'active' : '' }} {{ Request::is('unaktif-products') ? 'active' : '' }} {{ Request::is('user') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Data Master
                                </p>
                                <i class="right fas fa-angle-left"></i>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/products" class="nav-link">
                                        <i class="left fas fa-angle-right me-2 ms-4"></i>
                                        <p>Data Products</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/unaktif-products" class="nav-link">
                                        <i class="left fas fa-angle-right me-2 ms-4"></i>
                                        <p>Products Tidak Aktif</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/user" class="nav-link">
                                        <i class="left fas fa-angle-right me-2 ms-4"></i>
                                        <p>User</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link {{ Request::is('kasir') ? 'active' : '' }}">
                                <i class=" nav-icon fas fa-computer"></i>
                                <p>
                                    Kasir
                                </p>
                                <i class="right fas fa-angle-left"></i>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/kasir" class="nav-link">
                                        <i class="left fas fa-angle-right me-2 ms-4"></i>
                                        <p>Kasir</p>
                                        
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link {{ Request::is('payrol') ? 'active' : '' }} ">
                                <i class="nav-icon fas fa-credit-card"></i>
                                <p>
                                    Data Gaji
                                </p>
                                <i class="right fas fa-angle-left"></i>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/payrol" class="nav-link">
                                        <i class="left fas fa-angle-right me-2 ms-4"></i>
                                        <p>Gaji</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link {{ Request::is('akun-pegawai') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    Data Akun
                                </p>
                                <i class="right fas fa-angle-left"></i>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/akun-pegawai" class="nav-link">
                                        <i class="left fas fa-angle-right me-2 ms-4"></i>
                                        <p>Akun Pegawai</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#"
                                class="nav-link 
            {{ Request::is('data-absen-bulanan') ? 'active' : '' }}
            {{ Request::is('detail-absen-bulanan') ? 'active' : '' }}
            {{ Request::is('data-laporan-gaji') ? 'active' : '' }}
            ">
                                <i class="nav-icon fas fa-flag"></i>
                                <p>
                                    Laporan
                                </p>
                                <i class="right fas fa-angle-left"></i>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/data-absen-bulanan" class="nav-link">
                                        <i class="left fas fa-angle-right me-2 ms-4"></i>
                                        <p>Data Absen Bulanan</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="/data-laporan-gaji" class="nav-link">
                                        <i class="left fas fa-angle-right me-2 ms-4"></i>
                                        <p>Data Laporan Gaji</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/detail-absen" class="nav-link">
                                        <i class="left fas fa-angle-right me-2 ms-4"></i>
                                        <p>Detail Absen Bulanan</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item ">
                            <form action="/logout" class="nav-link ms-2 text-light" method="POST">
                                @csrf
                                <i class="fa-solid fa-arrow-right-from-bracket me-2"></i>
                                <button class="btn text-light" type="submit">
                                    Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </nav>

                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>


        @yield('content')

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- REQUIRED SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <!-- jQuery -->
    <script src="{{ url('template') }}/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="{{ url('template') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="{{ url('template') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ url('template') }}/dist/js/adminlte.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @yield('swal')
    @yield('rupiah')
    @yield('script')

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="{{ url('template') }}/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="{{ url('template') }}/plugins/raphael/raphael.min.js"></script>
    <script src="{{ url('template') }}/plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="{{ url('template') }}/plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <!-- ChartJS -->
    <script src="{{ url('template') }}/plugins/chart.js/Chart.min.js"></script>
    <!-- FLOT CHARTS -->
    <script src="{{ url('template') }}/plugins/flot/jquery.flot.js"></script>
    <!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
    <script src="{{ url('template') }}/plugins/flot/plugins/jquery.flot.resize.js"></script>
    <!-- FLOT PIE PLUGIN - also used to draw donut charts -->
    <script src="{{ url('template') }}/plugins/flot/plugins/jquery.flot.pie.js"></script>
    <script src="{{ url('template') }}/plugins/uplot/uPlot.iife.min.js"></script>


    <!-- AdminLTE for demo purposes -->
    <script src="{{ url('template') }}/dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ url('template') }}/dist/js/pages/dashboard2.js"></script>
    @yield('chart')
</body>

</html>
