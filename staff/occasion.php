<?php include 'header.php'; ?>

  <!-- ============================================================== -->
  <!-- Start right Content here -->
  <!-- ============================================================== -->
  <div class="main-content">

      <div class="page-content">
          <div class="container-fluid">

            <?php if (!in_array(7, $user_is_admin_perms) && !in_array(8, $user_is_admin_perms)) { die("<div class='alert alert-danger'>لاتوجد لديك صلاحية لعرض هذه الصفحة</div>"); } ?>

              <!-- start page title -->
              <div class="row">
                  <div class="col-12">
                      <div class="page-title-box d-flex align-items-center justify-content-between">
                          <h4 class="mb-0 font-size-18">المناسبات العائلية</h4>

                          <div class="page-title-right">
                              <ol class="breadcrumb m-0">
                                  <li class="breadcrumb-item"><a href="javascript: void(0);"><?php echo $website_settings['website_name']; ?></a></li>
                                  <li class="breadcrumb-item active">المناسبات العائلية</li>
                              </ol>
                          </div>

                      </div>
                  </div>
              </div>
              <!-- end page title -->

              <div class="row">
                  <div class="col-4">
                      <div class="card">
                          <div class="card-body">
                            <h4 class="mb-3 font-size-20">المناسبات العائلية</h4>

                            <table class="table table-striped table-hover">
                              <thead>
                                <tr class="text-center">
                                  <th class="font-size-20"> المناسبة </th>
                                  <th class="font-size-20"> خيارات </th>
                                </tr>
                              </thead>
                              <tbody>

<?php
  $occasion = new MainFunc();
  $all_occasion = $occasion->get_all_occasion();
  if (count($all_occasion) == 0){
    echo "<tr class='text-center text-warning'><td colspan='2' class='font-size-18'>لاتوجد مناسبات مضافة</td>";
  }else{

    for ($i=0; $i < count($all_occasion); $i++) {
      $this_occasion = $all_occasion[$i];
?>
<tr class="text-center">
  <td class="font-size-18"><?php echo $this_occasion['title']; ?></td>
  <?php if (in_array(8, $user_is_admin_perms)) { ?>
    <td class="font-size-18"><i class="mdi mdi-trash-can" title="Remove this" onclick="removeOccasion(this, <?php echo $this_occasion['id']; ?>)"></i></td>
  <?php } ?>
</tr>
<?php
    }
  }
?>

                              </tbody>
                            </table>
                          </div>
                      </div>
                  </div> <!-- end col -->

                  <div class="col-8">
                      <div class="card">
                          <div class="card-body">
                            <h4 class="mb-3 font-size-20">اضافة مناسبة جديدة</h4>

                            <?php if (in_array(7, $user_is_admin_perms)) { ?>
                            <form id="addOccasion" autocomplete="off" enctype="multipart/form-data">
                              <div class="form-group">
                                <label class="font-size-18" for="occasion_title">عنوان المناسبة</label>
                                <input type="text" class="form-control" name="title" id="occasion_title" placeholder="عنوان المناسبة" />
                                <div class="title-feedback text-danger"></div>
                              </div>
                              <div class="form-group mb-4">
                                <label class="font-size-18" for="occasion_date">تاريخ المناسبة</label>
                                  <div class="input-group">
                                      <input type="text" class="form-control" name="date" id="occasion_date" placeholder="yyyy-mm-dd" data-provide="datepicker" data-date-autoclose="true">
                                      <div class="input-group-append">
                                          <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                      </div>
                                  </div><!-- input-group -->
                              </div>
                              <div class="form-group">
                                <label class="font-size-18" for="occasion_date">صورة المناسبة (في حال توفرها)</label>
                                <div class="custom-file">
                                    <label class="custom-file-label" for="occasion_photo">اختر صورة...</label>
                                    <input type="file" class="custom-file-input" name="occasion_photo" id="occasion_photo">
                                    <div class="invalid-feedback"></div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="font-size-18">محتوى المناسبة</label>
                                <div class="content-feedback text-danger"></div>
                                <textarea class="form-control summernote" rows="15" name="content" id="summernote"></textarea>
                              </div>

                              <div class="form-group mb-0">
                                <input type="hidden" name="action" id="updateUser_action" value="add">
                                <input type="hidden" name="ident" id="updateUser_ident">
                                <button type="submit" class="btn btn-success waves-effect waves-light mr-1 font-size-18" style="width: 100%;">تنفيذ</button>
                              </div>
                            </form>
                            <?php }else{?>
                              <div class="alert alert-warning">لاتوجد معك صلاحية إضافة المناسبات</div>
                            <?php } ?>

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
