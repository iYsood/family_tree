<!doctype html><?php require 'includes/config.php'; ?>
<html lang="ar" dir="rtl">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $website_settings['website_name']; ?></title>
    <link href="<?php echo $website_settings['website_url']; ?>/assets/images/favicon.ico" rel="icon">
    <link rel="stylesheet" href="<?php echo $website_settings['website_url']; ?>/assets/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="<?php echo $website_settings['website_url']; ?>/assets/css/all.min.css">
    <link rel="stylesheet" href="<?php echo $website_settings['website_url']; ?>/assets/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo $website_settings['website_url']; ?>/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo $website_settings['website_url']; ?>/assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?php echo $website_settings['website_url']; ?>/assets/css/tooltipster.min.css">
    <link rel="stylesheet" href="<?php echo $website_settings['website_url']; ?>/assets/css/cubeportfolio.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin="" />
    <link rel="stylesheet" href="<?php echo $website_settings['website_url']; ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo $website_settings['website_url']; ?>/assets/css/custom.css">
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo $website_settings['website_url']; ?>/assets/js/jquery-3.6.0.min.js"></script>

</head>
<body>
<!--PreLoader-->
<div class="loader">
    <div class="loader-inner">
        <div class="cssload-loader"></div>
    </div>
</div>
<!--PreLoader Ends-->

<!-- header -->
<header class="site-header">
    <nav class="navbar navbar-expand-lg transparent-bg dark-gradient padding-nav static-nav">
        <div class="container">
            <a class="navbar-brand" href="<?php echo $website_settings['website_url']; ?>">
                <!-- <img src="<?php echo $website_settings['website_url']; ?>/assets/images/logo.png" alt="logo"> -->
                <?php echo $website_settings['website_name']; ?>
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto me-auto">
                  <li class="nav-item"> <a class="nav-link active" href="<?php echo $website_settings['website_url']; ?>">الرئيسية</a> </li>
                  <li class="nav-item"> <a class="nav-link" href="<?php echo $website_settings['website_url']; ?>/pages/lineage.php">النسب</a> </li>
                  <li class="nav-item"> <a class="nav-link" href="<?php echo $website_settings['website_url']; ?>/pages/home.php">الموطن والأملاك القديمة</a> </li>
                  <li class="nav-item"> <a class="nav-link" href="<?php echo $website_settings['website_url']; ?>/pages/about.php">عن العائلة</a> </li>
                  <li class="nav-item"> <a class="nav-link" href="<?php echo $website_settings['website_url']; ?>/pages/family_men.php">من رجالات العائلة</a> </li>
                  <li class="nav-item"> <a class="nav-link" href="<?php echo $website_settings['website_url']; ?>/pages/occasion.php">أخبار ومناسبات</a> </li>
                  <li class="nav-item"> <a class="nav-link" href="<?php echo $website_settings['website_url']; ?>/pages/gallery.php">مكتبة الصور</a> </li>
                </ul>
            </div>
        </div>
        <!--side menu open button-->
        <a href="javascript:void(0)" class="d-inline-block sidemenu_btn" id="sidemenu_toggle">
            <span class="gradient-bg"></span> <span class="gradient-bg"></span> <span class="gradient-bg"></span>
        </a>
    </nav>
    <!-- side menu -->
    <div class="side-menu opacity-0 gradient-bg">
        <div class="overlay"></div>
        <div class="inner-wrapper">
            <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
            <nav class="side-nav w-100">
                <ul class="navbar-nav">
                  <li class="nav-item"> <a class="nav-link active" href="<?php echo $website_settings['website_url']; ?>">الرئيسية</a> </li>
                  <li class="nav-item"> <a class="nav-link" href="<?php echo $website_settings['website_url']; ?>/pages/lineage.php">النسب</a> </li>
                  <li class="nav-item"> <a class="nav-link" href="<?php echo $website_settings['website_url']; ?>/pages/home.php">الموطن والأملاك القديمة</a> </li>
                  <li class="nav-item"> <a class="nav-link" href="<?php echo $website_settings['website_url']; ?>/pages/about.php">عن العائلة</a> </li>
                  <li class="nav-item"> <a class="nav-link" href="<?php echo $website_settings['website_url']; ?>/pages/family_men.php">من رجالات العائلة</a> </li>
                  <li class="nav-item"> <a class="nav-link" href="<?php echo $website_settings['website_url']; ?>/pages/occasion.php">أخبار ومناسبات</a> </li>
                  <li class="nav-item"> <a class="nav-link" href="<?php echo $website_settings['website_url']; ?>/pages/gallery.php">مكتبة الصور</a> </li>
                </ul>
            </nav>
        </div>
    </div>
    <div id="close_side_menu" class="tooltip"></div>
    <!-- End side menu -->
</header>
<!-- header -->
