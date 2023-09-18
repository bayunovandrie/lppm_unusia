<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= BASEURL ?>assets/images/logo-title-lppm.png">
    <title><?php echo $title; ?></title>
    <!-- Custom CSS -->
    <link href="<?= BASEURL ?>assets2/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="<?= BASEURL ?>assets2/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="<?= BASEURL ?>assets2/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="<?= BASEURL ?>assets2/dist/css/style.min.css" rel="stylesheet">
    <link href="<?= BASEURL ?>assets2/dist/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="<?= BASEURL ?>assets/DataTables/dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="<?= BASEURL ?>assets/css/bootstrap.min.css">

    <!-- summernote -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">

    <style>
    .bordered-image {
        border: 2px solid #000;
        display: inline-block;
    }
    </style>

</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper">

        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <div class="navbar-brand">
                        <a href="<?= BASEURL ?>admin/Home" class="logo">
                            <span class="logo-text">
                                <!-- dark Logo text -->
                                <img src="<?= BASEURL ?>assets/images/logo-lppm-unusia.png" class="dark-logo"
                                    width="150">
                            </span>
                        </a>
                    </div>
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ti-more"></i>
                    </a>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav float-left mr-auto">

                        <li class="nav-item search-box">
                            <a class="nav-link waves-effect waves-dark" href="javascript:void(0)">
                                <div class="d-flex align-items-center">
                                    <i class="mdi mdi-magnify font-20 mr-1"></i>
                                    <div class="ml-1 d-none d-sm-block">
                                        <span>Search</span>
                                    </div>
                                </div>
                            </a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter">
                                <a class="srh-btn">
                                    <i class="ti-close"></i>
                                </a>
                            </form>
                        </li>
                    </ul>
                    <ul class="navbar-nav float-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark pro-pic" href=""
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="<?= BASEURL ?>assets2/images/user-logo.png" alt="user" class="rounded-circle"
                                    width="40">
                                <span class="m-l-5 font-medium d-none d-sm-inline-block"><?php echo $username; ?><i
                                        class="mdi mdi-chevron-down"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <span class="with-arrow">
                                    <span class="bg-primary"></span>
                                </span>
                                <div class="d-flex no-block align-items-center p-15 bg-primary text-white m-b-10">
                                    <div class="">
                                        <img src="<?= BASEURL ?>assets2/images/user-logo-removebg.png" alt="user"
                                            class="rounded-circle" width="60">
                                    </div>
                                    <div class="m-l-10">
                                        <h4 class="m-b-0">Admin</h4>
                                    </div>
                                </div>
                                <a class="dropdown-item" href="<?= BASEURL ?>admin/auth/logout">
                                    <i class="fa fa-power-off m-r-5 m-l-5"></i>Logout</a>
                                <div class="dropdown-divider"></div>

                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>