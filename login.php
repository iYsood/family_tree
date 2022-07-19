<!doctype html><?php require 'includes/config.php'; if(isset($_SESSION['user_session'])){ die("<script> window.location.href = './';</script>"); } ?>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>موقع <?php echo $website_settings['website_name']; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
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

    <body class="bg-primary bg-pattern">
        <div class="home-btn d-none d-sm-block">
            <a href="./"><i class="mdi mdi-home-variant h2 text-white"></i></a>
        </div>

        <div class="account-pages my-5 pt-5">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="p-2">
                                    <h3 class="font-size-24 mb-3 text-center">تسجيل الدخول - <?php echo $website_settings['website_name']; ?></h3>
                                    <div id="login-failed" style="display: none">
                                      <div class="alert alert-danger mb-3" role="alert">
                                          اسم المستخدم أو كلمة المرور خاطئة
                                      </div>
                                    </div>
                                    <form class="form-horizontal needs-validation" novalidate id="loginForm">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group mb-4">
                                                    <label class="font-size-18" for="username">اسم المستخدم</label>
                                                    <input type="text" class="form-control" name="username" id="username" placeholder="أدخل اسم المستخدم" required>
                                                    <div class="invalid-feedback font-size-14">اسم المستخدم مطلوب</div>
                                                </div>
                                                <div class="form-group mb-4">
                                                    <label class="font-size-18" for="userpassword">كلمة المرور</label>
                                                    <input type="password" class="form-control" name="password" id="password" placeholder="أدخل كلمة المرور" required>
                                                    <div class="invalid-feedback font-size-14">كلمة المرور مطلوبة</div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customControlInline">
                                                            <label class="custom-control-label font-size-18" for="customControlInline">تذكرني</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-4">
                                                    <button class="btn btn-success btn-block waves-effect waves-light font-size-18 btn-submit" type="submit">تسجيل دخول</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>
        <!-- end Account pages -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <!-- Magnific Popup-->
        <script src="assets/libs/magnific-popup/jquery.magnific-popup.min.js"></script>
        <!-- parsleyjs -->
        <script src="assets/libs/parsleyjs/parsley.min.js"></script>
        <!-- validation init -->
        <script src="assets/js/pages/form-validation.init.js"></script>
        <!-- Tour init js-->
        <script src="assets/js/pages/gallery.init.js"></script>
        <script src="assets/js/dashboard.init.js"></script>
        <!-- template js -->
        <script src="assets/js/app.js"></script>
        <!-- leaflet js -->
        <script src="assets/js/leaflet.js"></script>
        <script src="assets/js/website_main.js"></script>

    </body>
</html>
