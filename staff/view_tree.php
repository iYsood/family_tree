<?php include 'header.php'; ?>

  <!-- ============================================================== -->
  <!-- Start right Content here -->
  <!-- ============================================================== -->
  <div class="main-content">

      <div class="page-content">
          <div class="container-fluid">

              <!-- start page title -->
              <div class="row">
                  <div class="col-12">
                      <div class="page-title-box d-flex align-items-center justify-content-between">
                          <h4 class="mb-0 font-size-18">ادارة الشجرة - عرض شجري</h4>
                          <button type="button" class="btn btn-info btn-sm waves-effect waves-light viewModal" data-toggle="modal" data-target="#viewModal">إضافة جديد</button>

                          <div class="page-title-right">
                              <ol class="breadcrumb m-0">
                                  <li class="breadcrumb-item"><a href="javascript: void(0);"><?php echo $website_settings['website_name']; ?></a></li>
                                  <li class="breadcrumb-item active">ادارة الشجرة - عرض شجري</li>
                              </ol>
                          </div>

                      </div>
                  </div>
              </div>
              <!-- end page title -->

              <div class="row">
                  <div class="col-12">
                      <div class="card">
                          <div class="card-body">

                              <h4 class="header-title">ادارة الشجرة - عرض شجري</h4>
                              <!-- <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;"> -->

<?php
  $namesTree = new MainFunc();
  $all_names = $namesTree->get_all_tree_names();
?>

                              <div class="custom-dd dd" id="nestable_list_2">
                                  <ol class="dd-list" id="tree_fetch_names">

                                      <li class="dd-item fetch_0" data-id="0">
                                          <div class="dd-handle">
                                              محمد
                                          </div>
                                      </li>
                                      <li class="dd-item fetch_1" data-id="1">
                                          <div class="dd-handle">
                                              جريفان
                                          </div>
                                      </li>
                                      <li class="dd-item fetch_2" data-id="2">
                                          <div class="dd-handle">
                                              محمد
                                          </div>
                                      </li>
                                      <!-- <li class="dd-item" data-id="14">
                                          <div class="dd-handle">
                                              Item 14
                                          </div>
                                      </li>
                                      <li class="dd-item" data-id="15">
                                          <div class="dd-handle">
                                              Item 15
                                          </div>
                                          <ol class="dd-list">
                                              <li class="dd-item" data-id="16">
                                                  <div class="dd-handle">
                                                      Item 16
                                                  </div>
                                              </li>
                                              <li class="dd-item" data-id="17">
                                                  <div class="dd-handle">
                                                      Item 17
                                                  </div>
                                              </li>
                                              <li class="dd-item" data-id="18">
                                                  <div class="dd-handle">
                                                      Item 18
                                                  </div>
                                              </li>
                                          </ol>
                                      </li> -->
                                  </ol>
                              </div>

                          </div>
                      </div>
                  </div> <!-- end col -->
              </div> <!-- end row -->



          </div> <!-- container-fluid -->
      </div>
      <!-- End Page-content -->

<?php include 'get_footer.php'; ?>
  </div>
  <!-- end main content-->

<?php include 'footer.php'; ?>
