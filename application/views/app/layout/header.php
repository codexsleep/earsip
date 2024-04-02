<!DOCTYPE html>
<html lang="en" data-topbar-color="dark">

<head>
    <meta charset="utf-8" />
    <title><?= $title;?> |  E-Arsip</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/images/favicon.ico">

    <!-- Plugins css -->
    <link href="<?= base_url(); ?>assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/libs/selectize/css/selectize.bootstrap3.css" rel="stylesheet"
        type="text/css" />

    <!-- Theme Config Js -->
    <script src="<?= base_url(); ?>assets/js/head.js"></script>

    <!-- Bootstrap css -->
    <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- App css -->
    <link href="<?= base_url(); ?>assets/css/app.min.css" rel="stylesheet" type="text/css" />

    <!-- Icons css -->
    <link href="<?= base_url(); ?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">


        <!-- ========== Menu ========== -->
        <div class="app-menu">

            <!-- Brand Logo -->
            <div class="logo-box" style="background-color:var(--ct-topbar-bg);">
                <!-- Brand Logo Light -->
                <a href="index.html" class="logo-light">
                    <h1 class="logo-lg" style="color:white;margin-bottom:10px">E-Arsip</h1>
                    <h1 class="logo-sm" style="color:white;margin-bottom:10px">E-Arsip</h1>
                </a>

                <!-- Brand Logo Dark -->
                <a href="index.html" class="logo-dark">
                    <h1 class="logo-lg" style="color:white;margin-bottom:25px; font-weight:bold">E-Arsip</h1>
                    <h1 class="logo-sm" style="color:white;margin-bottom:25px; font-weight:bold">E-A</h1>
                </a>
            </div>

            <!-- menu-left -->
            <div class="scrollbar">

                <!-- User box -->
                <div class="user-box text-center">
                    <img src="<?= base_url(); ?>assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme"
                        class="rounded-circle avatar-md">
                    <div class="dropdown">
                        <a href="javascript: void(0);" class="dropdown-toggle h5 mb-1 d-block"
                            data-bs-toggle="dropdown">Geneva Kennedy</a>
                        <div class="dropdown-menu user-pro-dropdown">

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-user me-1"></i>
                                <span>My Account</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-settings me-1"></i>
                                <span>Settings</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-lock me-1"></i>
                                <span>Lock Screen</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-log-out me-1"></i>
                                <span>Logout</span>
                            </a>

                        </div>
                    </div>
                    <p class="text-muted mb-0">Admin Head</p>
                </div>

                <!--- Menu -->
                <ul class="menu">

                    <li class="menu-title">Navigation</li>

                    <li class="menu-item">
                        <a href="<?= base_url();?>app/dashboard" class="menu-link">
                            <span class="menu-icon"><i data-feather="home"></i></span>
                            <span class="menu-text"> Dashboard </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="apps-companies.html" class="menu-link">
                            <span class="menu-icon"><i data-feather="users"></i></span>
                            <span class="menu-text"> Kelola Staf </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="#menuEmail" data-bs-toggle="collapse" class="menu-link">
                            <span class="menu-icon"><i data-feather="layers"></i></span>
                            <span class="menu-text"> Kategori </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuEmail">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a href="email-inbox.html" class="menu-link">
                                        <span class="menu-text">Inbox</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="email-read.html" class="menu-link">
                                        <span class="menu-text">Read Email</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-item">
                        <a href="apps-companies.html" class="menu-link">
                            <span class="menu-icon"><i data-feather="folder"></i></span>
                            <span class="menu-text"> Data Arsip </span>
                        </a>
                    </li>


                    <li class="menu-item">
                        <a href="#menuMaps" data-bs-toggle="collapse" class="menu-link">
                            <span class="menu-icon"><i data-feather="pie-chart"></i></span>
                            <span class="menu-text"> Laporan </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuMaps">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a href="maps-google.html" class="menu-link">
                                        <span class="menu-text">Google Maps</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <!--- End Menu -->
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- ========== Left menu End ========== -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">

            <!-- ========== Topbar Start ========== -->
            <div class="navbar-custom">
                <div class="topbar">
                    <div class="topbar-menu d-flex align-items-center gap-1">

                        <!-- Topbar Brand Logo -->
                        <div class="logo-box">
                            <!-- Brand Logo Light -->
                            <a href="index.html" class="logo-light">
                                <img src="<?= base_url(); ?>assets/images/logo-light.png" alt="logo" class="logo-lg">
                                <img src="<?= base_url(); ?>assets/images/logo-sm.png" alt="small logo" class="logo-sm">
                            </a>

                            <!-- Brand Logo Dark -->
                            <a href="index.html" class="logo-dark">
                                <img src="<?= base_url(); ?>assets/images/logo-dark.png" alt="dark logo"
                                    class="logo-lg">
                                <img src="<?= base_url(); ?>assets/images/logo-sm.png" alt="small logo" class="logo-sm">
                            </a>
                        </div>

                        <!-- Sidebar Menu Toggle Button -->
                        <button class="button-toggle-menu">
                            <i class="mdi mdi-menu"></i>
                        </button>

                    </div>

                    <ul class="topbar-menu d-flex align-items-center">

                        <!-- User Dropdown -->
                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light"
                                data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                aria-expanded="false">
                                <img src="<?= base_url(); ?>assets/images/users/user-1.jpg" alt="user-image"
                                    class="rounded-circle">
                                <span class="ms-1 d-none d-md-inline-block">
                                    Geneva <i class="mdi mdi-chevron-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end profile-dropdown ">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-user"></i>
                                    <span>Profil</span>
                                </a>


                                <div class="dropdown-divider"></div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-log-out"></i>
                                    <span>Logout</span>
                                </a>

                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- ========== Topbar End ========== -->