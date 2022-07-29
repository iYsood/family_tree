<?php include 'header.php'; ?>

  <!-- ============================================================== -->
  <!-- Start right Content here -->
  <!-- ============================================================== -->
  <div class="main-content">

      <div class="page-content">
          <div class="container-fluid">

            <?php if (!in_array(14, $user_is_admin_perms)) { die("<div class='alert alert-danger'>لاتوجد لديك صلاحية لعرض هذه الصفحة</div>"); } ?>

              <!-- start page title -->
              <div class="row">
                  <div class="col-12">
                      <div class="page-title-box d-flex align-items-center justify-content-between">
                          <h4 class="mb-0 font-size-18">من رجالات العائلة</h4>

                          <div class="page-title-right">
                              <ol class="breadcrumb m-0">
                                  <li class="breadcrumb-item"><a href="javascript: void(0);"><?php echo $website_settings['website_name']; ?></a></li>
                                  <li class="breadcrumb-item active">من رجالات العائلة</li>
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

                              <h4 class="header-title">من رجالات العائلة</h4>
                              <p class="card-title-desc">من هنا يمكنك التحكم بمحتوى صفحة من رجالات العائلة</p>
                              <!-- <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;"> -->
                              <form id="updateContent">
                                <textarea class="form-control summernote" rows="7" type="text" name="content" id="summernote"></textarea>
                                <input type="hidden" name="page" id="page" value="family_men">
                                <button type="submit" class="btn btn-success mt-3 float-right" style="width: 30%">تنفيذ</button>
                              </form>
                          </div>
                      </div>
                  </div> <!-- end col -->
              </div> <!-- end row -->

          </div> <!-- container-fluid -->
      </div>
      <!-- End Page-content -->

<?php include '../get_footer.php'; ?>
  </div>
  <!-- end main content-->

<?php include 'footer.php'; ?>
