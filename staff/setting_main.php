<?php include 'header.php'; ?>

  <!-- ============================================================== -->
  <!-- Start right Content here -->
  <!-- ============================================================== -->
  <div class="main-content">

      <div class="page-content">
          <div class="container-fluid">

            <?php if (!in_array(11, $user_is_admin_perms)) { die("<div class='alert alert-danger'>لاتوجد لديك صلاحية لعرض هذه الصفحة</div>"); } ?>


              <!-- start page title -->
              <div class="row">
                  <div class="col-12">
                      <div class="page-title-box d-flex align-items-center justify-content-between">
                          <h4 class="mb-0 font-size-18">اعدادات الموقع</h4>

                          <div class="page-title-right">
                              <ol class="breadcrumb m-0">
                                  <li class="breadcrumb-item"><a href="javascript: void(0);"><?php echo $website_settings['website_name']; ?></a></li>
                                  <li class="breadcrumb-item active">اعدادات الموقع</li>
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
                            <form id="updateSettings">
<?php
$users = new MainFunc();
$all_settings = $users->get_all_settings();
$website_name = $all_settings['website_name'];
$website_url = $all_settings['website_url'];
// $website_state = $all_settings['website_state'];

if($all_settings['website_state'] == true){
  $website_state = "
  <div class='custom-control custom-radio custom-control-inline'>
      <input type='radio' id='website_state1' name='website_state' value='1' class='custom-control-input' checked>
      <label class='custom-control-label' for='website_state1'>مفتوح</label>
  </div>
  <div class='custom-control custom-radio custom-control-inline'>
      <input type='radio' id='website_state0' name='website_state' value='0' class='custom-control-input'>
      <label class='custom-control-label' for='website_state0'>مغلق</label>
  </div>
  ";
}else{
  $website_state = "
  <div class='custom-control custom-radio custom-control-inline'>
      <input type='radio' id='website_state1' name='website_state' value='1' class='custom-control-input' >
      <label class='custom-control-label' for='website_state1'>مفتوح</label>
  </div>
  <div class='custom-control custom-radio custom-control-inline'>
      <input type='radio' id='website_state0' name='website_state' value='0' class='custom-control-input' checked>
      <label class='custom-control-label' for='website_state0'>مغلق</label>
  </div>
  ";
}
?>
                              <h4 class="header-title">اعدادات الموقع</h4>
                              <div class="form-group row">
                                <label for="website_name" class="col-md-2 col-form-label">اسم الموقع</label>
                                <div class="col-md-10">
                                  <input class="form-control" type="text" name="website_name" id="website_name" value="<?php echo $website_name; ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="website_url" class="col-md-2 col-form-label">رابط الموقع</label>
                                <div class="col-md-10">
                                  <input class="form-control" type="text" name="website_url" id="website_url" value="<?php echo $website_url; ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="example-email-input" class="col-md-2 col-form-label">حالة الموقع</label>
                                <div class="col-md-10">
                                  <?php echo $website_state; ?>
                                </div>
                              </div>
                              <button type="submit" class="btn btn-success mt-3 float-right" style="width: 30%">تحديث</button>
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
