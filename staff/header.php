<!doctype html><?php require 'includes/function.php'; if(!isset($_SESSION['user_session'])){ die("<script> window.location.href = '../';</script>"); } ?>
<html lang="en">

<!-- <?php echo in_array(5, $user_is_admin_perms); ?> -->

    <head>
        <meta charset="utf-8" />
        <title>لوحة التحكم - <?php echo $website_settings['website_name']; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="../assets/images/favicon.ico">

        <!-- slick css -->
        <link href="../assets/libs/slick-slider/slick/slick.css" rel="stylesheet" type="text/css" />
        <link href="../assets/libs/slick-slider/slick/slick-theme.css" rel="stylesheet" type="text/css" />
        <!-- DataTables -->
        <link href="../assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="../assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- alertifyjs Css -->
        <link href="../assets/libs/alertifyjs/build/css/alertify.rtl.min.css" rel="stylesheet" type="text/css" />
        <!-- alertifyjs default themes  Css -->
        <link href="../assets/libs/alertifyjs/build/css/themes/default.rtl.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
        <link href="../assets/libs/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
        <link href="../assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
        <!-- Summernote css -->
        <link href="../assets/libs/summernote/summernote-bs4.min.css" rel="stylesheet" type="text/css" />
        <!-- Plugins css -->
        <link href="../assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />
        <!-- Lightbox css -->
        <link href="../assets/libs/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/libs/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="../assets/css/app-rtl.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/extra.css" rel="stylesheet" type="text/css" />
        <!-- JAVASCRIPT -->
        <script src="../assets/libs/jquery/jquery.min.js"></script>
        <script src="../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
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
                                    <img src="../assets/images/logo-sm-dark.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="../assets/images/logo-dark.png" alt="" height="20">
                                </span>
                            </a>

                            <a href="index.php" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="../assets/images/logo-sm-light.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="../assets/images/logo-light.png" alt="" height="20">
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
                                <img class="rounded-circle header-profile-user" src="./../assets/images/users/avatar-1.jpg"
                                    alt="Header Avatar">
                                    <span class="d-none d-sm-inline-block ml-1"><?php if(isset($_SESSION['user_session'])){ echo $_SESSION['user_session']['username']; }else{ echo "تسجيل الدخول"; } ?></span>
                                <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                              <?php if(isset($_SESSION['user_session'])){
                                echo '<a class="dropdown-item" href="?action=logout"><i class="mdi mdi-logout font-size-16 align-middle mr-1"></i> تسجيل الخروج</a>';
                              }else{
                                echo '<a class="dropdown-item" href="./login.php"><i class="mdi mdi-login font-size-16 align-middle mr-1"></i> تسجيل الدخول</a>';
                              } ?>
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

                            <?php if (in_array(1, $user_is_admin_perms) || in_array(2, $user_is_admin_perms) || in_array(3, $user_is_admin_perms)) { ?>
                            <li>
                                <a href="users.php" class=" waves-effect">
                                    <i class="mdi mdi-calendar-month"></i>
                                    <span>المستخدمين</span>
                                </a>
                            </li>
                            <?php } ?>

                            <?php if (in_array(4, $user_is_admin_perms) || in_array(5, $user_is_admin_perms) || in_array(6, $user_is_admin_perms)) { ?>
                            <li>
                                <a href="./view_tree.php" class="waves-effect">
                                    <i class="mdi mdi-view-dashboard"></i>
                                    <span>إدارة الشجرة</span>
                                </a>
                            </li>
                            <?php } ?>

                            <?php if (in_array(7, $user_is_admin_perms) || in_array(8, $user_is_admin_perms)) { ?>
                            <li>
                                <a href="./occasion.php" class="waves-effect">
                                    <i class="mdi mdi-view-dashboard"></i>
                                    <span>المناسبات العائلية</span>
                                </a>
                            </li>
                            <?php } ?>

                            <?php if (in_array(9, $user_is_admin_perms) || in_array(10, $user_is_admin_perms)) { ?>
                            <li>
                                <a href="./gallery.php" class="waves-effect">
                                    <i class="mdi mdi-view-dashboard"></i>
                                    <span>مكتبة الصور</span>
                                </a>
                            </li>
                            <?php } ?>

                            <?php if (in_array(11, $user_is_admin_perms) || in_array(12, $user_is_admin_perms) || in_array(13, $user_is_admin_perms) || in_array(14, $user_is_admin_perms)) { ?>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi mdi-email-multiple-outline"></i>
                                    <span>الإعدادات</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <?php if (in_array(11, $user_is_admin_perms)) { ?>
                                      <li><a href="setting_main.php">اعدادات الموقع</a></li>
                                    <?php } ?>
                                    <?php if (in_array(12, $user_is_admin_perms)) { ?>
                                      <li><a href="setting_family_lineage.php">نسب العائلة</a></li>
                                    <?php } ?>
                                    <?php if (in_array(13, $user_is_admin_perms)) { ?>
                                      <li><a href="setting_family_about.php">عن العائلة</a></li>
                                    <?php } ?>
                                    <?php if (in_array(14, $user_is_admin_perms)) { ?>
                                      <li><a href="setting_family_men.php">من رجالات العائلة</a></li>
                                    <?php } ?>
                                </ul>
                            </li>
                            <?php } ?>

                            <li></li>

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
