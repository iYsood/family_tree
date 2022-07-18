<?php include 'header.php'; ?>

  <!-- ============================================================== -->
  <!-- Start right Content here -->
  <!-- ============================================================== -->
  <div class="main-content">

      <div class="page-content">
          <div class="container-fluid">

            <div class="row justify-content-md-center">
              <div class="col-lg-9">
                <div class="card">
                  <div class="card-body">

                    <h1 class="h1">أخبار ومناسبات <?php echo $website_settings['website_name']; ?></h1>
                    <hr>

                    <ul class="verti-timeline list-unstyled" id="fetch_occasion"></ul>

                  </div>
                </div>
              </div>
            </div>

            <div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="showOccasion" id="showOccasion" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-body">
                          <div id="view_occasion_photo"></div>
                          <div class="card-body">
                              <h3 class="card-title h3 mt-0" id="view_occasion_title"></h3>
                              <p class="card-text" id="view_occasion_content"></p>
                              <p class="card-text"><i class="mdi mdi-calendar-month"></i> <small class="text-muted" id="view_occasion_date"></small></p>
                          </div>
                        </div>
                    </div>
                </div>
            </div>

          </div> <!-- container-fluid -->
      </div>
      <!-- End Page-content -->

<?php include 'get_footer.php'; ?>
  </div>
  <!-- end main content-->

<?php include 'footer.php'; ?>
