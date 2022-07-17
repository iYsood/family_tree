<!doctype html><?php require 'includes/function.php'; ?>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>لوحة التحكم - <?php echo $website_settings['website_name']; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- slick css -->
        <link href="assets/libs/slick-slider/slick/slick.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/slick-slider/slick/slick-theme.css" rel="stylesheet" type="text/css" />

        <!-- jvectormap -->
        <link href="assets/libs/jqvmap/jqvmap.min.css" rel="stylesheet" />
        <!-- DataTables -->
        <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- alertifyjs Css -->
        <link href="assets/libs/alertifyjs/build/css/alertify.rtl.min.css" rel="stylesheet" type="text/css" />
        <!-- alertifyjs default themes  Css -->
        <link href="assets/libs/alertifyjs/build/css/themes/default.rtl.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
        <link href="assets/libs/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
        <link href="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
        <!-- Summernote css -->
        <link href="assets/libs/summernote/summernote-bs4.min.css" rel="stylesheet" type="text/css" />

        <!-- nestable2 css -->
        <link rel="stylesheet" href="assets/libs/nestable2/jquery.nestable.min.css">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app-rtl.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/extra.css" rel="stylesheet" type="text/css" />
        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- flot plugins -->
        <script src="assets/libs/flot-charts/jquery.flot.js"></script>
        <script src="assets/libs/flot-charts/jquery.flot.time.js"></script>
        <script src="assets/libs/jquery.flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
        <script src="assets/libs/flot-charts/jquery.flot.resize.js"></script>
        <script src="assets/libs/flot-charts/jquery.flot.pie.js"></script>
        <script src="assets/libs/flot-charts/jquery.flot.selection.js"></script>
        <script src="assets/libs/flot-charts/jquery.flot.stack.js"></script>
        <script src="assets/libs/flot-spline/js/jquery.flot.spline.min.js"></script>
        <script src="assets/libs/flot-charts/jquery.flot.crosshair.js"></script>
        <!-- flot init -->
        <script src="assets/js/flot.init.js"></script>
    </head>

    <body data-sidebar="dark">

        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.php" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-sm-dark.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-dark.png" alt="" height="20">
                                </span>
                            </a>

                            <a href="index.php" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-sm-light.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-light.png" alt="" height="20">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                            <i class="mdi mdi-backburger"></i>
                        </button>

                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="./assets/images/users/avatar-1.jpg"
                                    alt="Header Avatar">
                                <span class="d-none d-sm-inline-block ml-1">ssssss</span>
                                <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="?action=logout"><i class="mdi mdi-logout font-size-16 align-middle mr-1"></i> تسجيل الخروج</a>
                            </div>
                        </div>

                    </div>
                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">القائمة الرئيسية</li>

                            <li>
                                <a href="./" class="waves-effect">
                                    <i class="mdi mdi-view-dashboard"></i>
                                    <span>الرئيسية</span>
                                </a>
                            </li>

                            <li>
                                <a href="users.php" class=" waves-effect">
                                    <i class="mdi mdi-calendar-month"></i>
                                    <span>المستخدمين</span>
                                </a>
                            </li>

                            <li>
                                <a href="./rules.php" class="waves-effect">
                                    <i class="mdi mdi-view-dashboard"></i>
                                    <span>الأخبار والمناسبات</span>
                                </a>
                            </li>

                            <li>
                                <a href="./rules.php" class="waves-effect">
                                    <i class="mdi mdi-view-dashboard"></i>
                                    <span>مكتبة الصور</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi mdi-email-multiple-outline"></i>
                                    <span>الإعدادات</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="setting_main.php">اعدادات الموقع</a></li>
                                    <li><a href="setting_about.php">نسب العائلة</a></li>
                                    <li><a href="setting_main.php">عن العائلة</a></li>
                                    <li><a href="setting_main.php">من رجالات العائلة</a></li>
                                </ul>
                            </li>

                            <li>
                                <hr>
                            </li>

                            <li>
                                <a href="../" target="_blank" class=" waves-effect">
                                    <i class="mdi mdi-calendar-month"></i>
                                    <span>زيارة الصفحة الرئيسية</span>
                                </a>
                            </li>

                        </ul>

                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->
