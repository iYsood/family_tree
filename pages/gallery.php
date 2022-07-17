<?php include '../header.php'; ?>

<!--Page Header-->
<section id="main-banner-page" class="position-relative page-header section-nav-smooth">
    <div class="overlay overlay-dark opacity-7"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
              <div class="page-titles whitecolor text-center padding_top padding_bottom">
                    <h2 class="font-xlight">مكتبة الصور</h2>
                    <h2 class="font-bold"><?php echo $website_settings['website_name']; ?></h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Page Header ends -->

<!-- Gallery -->
<section id="gallery" class="bglight padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div id="mosaic-filter" class="cbp-l-filters bottom30 wow fadeIn text-center" data-wow-delay="350ms">
                    <div data-filter="*" class="cbp-filter-item">
                        <span>الكل</span>
                    </div>
                    <div data-filter=".digital" class="cbp-filter-item">
                        <span>Digital</span>
                    </div>
                    <div data-filter=".design" class="cbp-filter-item">
                        <span>Design</span>
                    </div>
                    <div data-filter=".brand" class="cbp-filter-item">
                        <span>Brand</span>
                    </div>
                    <div data-filter=".graphics" class="cbp-filter-item">
                        <span>Graphics</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div id="grid-mosaic" class="cbp cbp-l-grid-mosaic-flat" id="fetch_gallery">
                    <!--Item 1-->
                    <div class="cbp-item brand graphics">
                        <img src="<?php echo $website_settings['website_url']; ?>/assets/images/gallery-1.jpg" alt="">
                        <div class="gallery-hvr whitecolor">
                            <div class="center-box">
                                <a href="<?php echo $website_settings['website_url']; ?>/assets/images/gallery-1.jpg" class="opens" data-fancybox="gallery" title="Zoom In"> <i class="fa fa-search-plus"></i></a>
                                <h4 class="w-100">Rainy Outdoor</h4>
                            </div>
                        </div>
                    </div>
                    <!--Item 2-->
                    <div class="cbp-item digital brand graphics design">
                        <img src="<?php echo $website_settings['website_url']; ?>/assets/images/gallery-2.jpg" alt="">
                        <div class="gallery-hvr whitecolor">
                            <div class="center-box">
                                <a href="<?php echo $website_settings['website_url']; ?>/assets/images/gallery-2.jpg" class="opens" data-fancybox="gallery" title="Zoom In"> <i class="fa fa-search-plus"></i></a>
                                <h4 class="w-100">Classic Interior</h4>
                            </div>
                        </div>
                    </div>
                    <!--Item 3-->
                    <div class="cbp-item design digital graphics">
                        <img src="<?php echo $website_settings['website_url']; ?>/assets/images/gallery-1.jpg" alt="">
                        <div class="gallery-hvr whitecolor">
                            <div class="center-box">
                                <a href="<?php echo $website_settings['website_url']; ?>/assets/images/gallery-1.jpg" class="opens" data-fancybox="gallery" title="Zoom In"> <i class="fa fa-search-plus"></i></a>
                                <h4 class="w-100">Shadow Smoke</h4>
                            </div>
                        </div>
                    </div>
                    <!--Item 4-->
                    <div class="cbp-item brand graphics">
                        <img src="<?php echo $website_settings['website_url']; ?>/assets/images/gallery-2.jpg" alt="">
                        <div class="gallery-hvr whitecolor">
                            <div class="center-box">
                                <a href="<?php echo $website_settings['website_url']; ?>/assets/images/gallery-2.jpg" class="opens" data-fancybox="gallery" title="Zoom In"> <i class="fa fa-search-plus"></i></a>
                                <h4 class="w-100">Eiffel Model</h4>
                            </div>
                        </div>
                    </div>
                    <!--Item 5-->
                    <div class="cbp-item brand graphics design design">
                        <img src="<?php echo $website_settings['website_url']; ?>/assets/images/gallery-1.jpg" alt="">
                        <div class="gallery-hvr whitecolor">
                            <div class="center-box">
                                <a href="<?php echo $website_settings['website_url']; ?>/assets/images/gallery-1.jpg" class="opens" data-fancybox="gallery" title="Zoom In"> <i class="fa fa-search-plus"></i></a>
                                <h4 class="w-100">Clean Bike</h4>
                            </div>
                        </div>
                    </div>
                    <!--Item 6-->
                    <div class="cbp-item brand digital design">
                        <img src="<?php echo $website_settings['website_url']; ?>/assets/images/gallery-2.jpg" alt="">
                        <div class="gallery-hvr whitecolor">
                            <div class="center-box">
                                <a href="<?php echo $website_settings['website_url']; ?>/assets/images/gallery-2.jpg" class="opens" data-fancybox="gallery" title="Zoom In"> <i class="fa fa-search-plus"></i></a>
                                <h4 class="w-100">Game Mode</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Gallery ends -->

<?php include '../footer.php'; ?>
