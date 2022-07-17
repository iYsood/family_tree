<?php include '../header.php'; ?>

<!--Page Header-->
<section id="main-banner-page" class="position-relative page-header section-nav-smooth">
    <div class="overlay overlay-dark opacity-7"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
              <div class="page-titles whitecolor text-center padding_top padding_bottom">
                    <h2 class="font-xlight">أخبار ومناسبات</h2>
                    <h2 class="font-bold"><?php echo $website_settings['website_name']; ?></h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Page Header ends -->

<!--Shopping-->
<section id="our-shop" class="padding">
   <div class="container">
      <div class="row" id="fetch_occasion">

        <div class="col-lg-4 col-md-6 col-sm-6 wow fadeIn" data-wow-delay="500ms">
           <div class="shopping-box bottom30">
              <div class="image">
                 <img src="<?php echo $website_settings['website_url']; ?>/assets/images/shop-4.jpg" alt="shop">
              </div>
              <div class="shop-content text-center">
                <h4 class="darkcolor"><i class="fa fa-calendar-alt fa-xs"></i> 1443-08-22</h4>
                <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.</p>
              </div>
           </div>
        </div>

         <div class="col-lg-12 col-md-12">
            <ul class="pagination justify-content-center top20 wow fadeInUp" data-wow-delay="400ms">
               <li class="page-item"><a class="page-link disabled" href="#."><i class="fa fa-angle-right"></i></a></li>
               <li class="page-item active"><a class="page-link" href="#.">1</a></li>
               <li class="page-item"><a class="page-link" href="#.">2</a></li>
               <li class="page-item"><a class="page-link" href="#.">3</a></li>
               <li class="page-item"><a class="page-link" href="#."><i class="fa fa-angle-left"></i></a></li>
            </ul>
         </div>
      </div>
   </div>
</section>
<!--Shopping ends-->

<?php include '../footer.php'; ?>
