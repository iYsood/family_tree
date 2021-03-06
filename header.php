<!doctype html><?php require 'includes/config.php'; ?>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>موقع <?php echo $website_settings['website_name']; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="موقع <?php echo $website_settings['website_name']; ?> الجرافا حاضرة وبادية هم ابناء محمد بن جريفان بن محمد ينتسبون إلى الإلبينداء من المفضل من آل يحيا من عبدة من قبيلة شمر ." name="description" />
        <meta content="Abdulrhman - iYsood" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.png">
        <!-- Lightbox css -->
        <link href="assets/libs/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" />
        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- leaflet Css -->
        <link href="assets/css/leaflet.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app-rtl.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/extra.css" rel="stylesheet" type="text/css" />
        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/familytree.js"></script>
    </head>

    <body data-sidebar="dark" data-topbar="dark">

        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.php" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-sm-dark.png" alt="" height="49">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-dark.png" alt="" height="85">
                                </span>
                            </a>

                            <a href="index.php" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-sm-light.png" alt="" height="49">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-light.png" alt="" height="85">
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
                                <img class="rounded-circle header-profile-user" src="./assets/images/avatar-1.jpg"
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
                            <span class="menu-title">القائمة الرئيسية</span>

                            <li>
                                <a href="./" class="waves-effect">
                                    <i class="mdi mdi-view-dashboard"></i>
                                    <span>الرئيسية</span>
                                </a>
                            </li>

                            <li>
                                <a href="lineage.php" class=" waves-effect">
                                    <i class="mdi mdi-calendar-month"></i>
                                    <span>النسب</span>
                                </a>
                            </li>

                            <li>
                                <a href="home.php" class=" waves-effect">
                                    <i class="mdi mdi-calendar-month"></i>
                                    <span>الموطن والأملاك</span>
                                </a>
                            </li>

                            <li>
                                <a href="./about.php" class="waves-effect">
                                    <i class="mdi mdi-view-dashboard"></i>
                                    <span>عن العائلة</span>
                                </a>
                            </li>

                            <li>
                                <a href="./family_men.php" class="waves-effect">
                                    <i class="mdi mdi-view-dashboard"></i>
                                    <span>من رجالات العائلة</span>
                                </a>
                            </li>

                            <li>
                                <a href="./occasion.php" class="waves-effect">
                                    <i class="mdi mdi-view-dashboard"></i>
                                    <span>أخبار ومناسبات</span>
                                </a>
                            </li>

                            <li>
                                <a href="./gallery.php" class="waves-effect">
                                    <i class="mdi mdi-view-dashboard"></i>
                                    <span>مكتبة الصور</span>
                                </a>
                            </li>

                            <?php if(isset($_SESSION['user_session'])){ ?>
                              <li>
                                  <a href="./staff" target="_blank" class="waves-effect">
                                      <i class="mdi mdi-view-dashboard"></i>
                                      <span>لوحة التحكم</span>
                                  </a>
                              </li>
                            <?php } ?>

                        </ul>

                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->
