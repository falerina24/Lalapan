<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lalapan</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/dist/css/adminlte.min.css">
    <!-- Custom CSS for enhancement -->
    <style>
        /* Preloader styling */
        .preloader {
            background-color: #ffffff;
        }

        /* Navbar customization */
        .navbar-dark {
            background-color: #2C3E50;
        }

        .navbar-nav .nav-link {
            color: #ECF0F1;
        }

        .navbar-nav .nav-link:hover {
            background-color: #34495E;
            border-radius: 5px;
        }

        /* Sidebar customization */
        .main-sidebar {
            background-color: #2C3E50;
        }

        .nav-sidebar .nav-item .nav-link {
            color: #BDC3C7;
        }

        .nav-sidebar .nav-item .nav-link.active {
            background-color: #2980B9;
            color: white;
        }

        .nav-sidebar .nav-item .nav-link:hover {
            background-color: #34495E;
        }

        .nav-icon {
            font-size: 1.2rem;
        }

        /* Table customization */
        table.table {
            margin-top: 20px;
            border-radius: 10px;
            overflow: hidden;
        }

        table thead {
            background-color: #2980B9;
            color: white;
        }

        /* Button enhancements */
        .btn {
            border-radius: 25px;
        }

        .btn-primary {
            background-color: #2980B9;
            border-color: #2980B9;
        }

        .btn-primary:hover {
            background-color: #3498DB;
            border-color: #3498DB;
        }

        /* Footer styling */
        footer {
            background-color: #F8F9FA;
            padding: 20px;
        }

        /* General layout adjustments */
        body {
            font-family: 'Source Sans Pro', sans-serif;
        }

        .sidebar .nav-link,
        .sidebar .brand-text,
        .sidebar .d-block {
            color: white;
            /* Mengubah warna teks menjadi hitam */
            font-weight: bold;
            /* Membuat teks menjadi tebal */
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="/dist/img/55.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav style="background-color: #ffd1dc;">

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
            </ul>
        </nav>

        <!-- Sidebar -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link" style="background-color: fuchsia;">
                <img src="/dist/img/LALAPAN77.png" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-bold">Lalapan</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar" style="background-color: #ffd1dc;"> <!-- Warna soft pink -->
                <!-- Sidebar user panel -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="/dist/img/88.png" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block" style="color: black; font-weight: bold;">Admin</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Dashboard -->
                        <li class="nav-item">
                            <a href="/dashboard" class="nav-link">
                                <i class="nav-icon fas fa-store" style="color: black;"></i>
                                <p style="color: black; font-weight: bold;">Dashboard</p>
                            </a>
                        </li>

                        <!-- Master Data -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-bars" style="color: black;"></i>
                                <p style="color: black; font-weight: bold;">
                                    Master Data
                                    <i class="right fas fa-angle-down" style="color: black;"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/pelanggan" class="nav-link">
                                        <i class="fas fa-users" style="color: black;"></i>
                                        <p style="color: black; font-weight: bold;">Pelanggan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/produk" class="nav-link">
                                        <i class="nav-icon fas fa-book" style="color: black;"></i>
                                        <p style="color: black; font-weight: bold;">Menu</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/kategori" class="nav-link">
                                        <i class="nav-icon fas fa-clipboard" style="color: black;"></i>
                                        <p style="color: black; font-weight: bold;">Kategori</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Pemesanan -->
                        <li class="nav-item">
                            <a href="/pesanan" class="nav-link">
                                <i class="nav-icon fas fa-shopping-cart" style="color: black;"></i>
                                <p style="color: black; font-weight: bold;">Pemesanan</p>
                            </a>
                        </li>

                        <!-- Meja -->
                        <li class="nav-item">
                            <a href="/meja" class="nav-link">
                                <i class="nav-icon fas fa-table" style="color: black;"></i>
                                <p style="color: black; font-weight: bold;">Meja</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/pembayaran" class="nav-link">
                                <i class="nav-icon fas fa-dollar-sign" style="color: black;"></i>
                                <p style="color: black; font-weight: bold;">Pembayaran</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>



        <!-- Content Wrapper -->
        <div class="content-wrapper" style="min-height: 693.2px;">
            <?= $this->renderSection('content') ?>
        </div>

        <!-- Footer -->
        <footer class="main-footer">
            <strong>&copy; 2024 BYEFALERINA. All rights reserved.</strong>
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 2.3.2
            </div>
        </footer>
    </div>

    <!-- Scripts -->
    <!-- jQuery -->
    <script src="/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/dist/js/adminlte.min.js"></script>
</body>

</html>