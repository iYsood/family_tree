<?php include 'header.php'; ?>

  <!-- ============================================================== -->
  <!-- Start right Content here -->
  <!-- ============================================================== -->
  <div class="main-content">

      <div class="page-content">
          <div class="container-fluid">

<?php if (!in_array(4, $user_is_admin_perms) && !in_array(5, $user_is_admin_perms) && !in_array(6, $user_is_admin_perms)) { die("<div class='alert alert-danger'>لاتوجد لديك صلاحية لعرض هذه الصفحة</div>"); } ?>

              <!-- start page title -->
              <div class="row">
                  <div class="col-12">
                      <div class="page-title-box d-flex align-items-center justify-content-between">
                          <h4 class="mb-0">ادارة الشجرة</h4>
                          <?php if (in_array(4, $user_is_admin_perms)) { ?>
                            <button type="button" class="btn btn-info btn-sm waves-effect waves-light viewModal font-size-18" data-toggle="modal" data-target="#viewModal">إضافة جديد</button>
                          <?php } ?>

                          <div class="page-title-right">
                              <ol class="breadcrumb m-0">
                                  <li class="breadcrumb-item"><a href="javascript: void(0);"><?php echo $website_settings['website_name']; ?></a></li>
                                  <li class="breadcrumb-item active">ادارة الشجرة</li>
                              </ol>
                          </div>

                      </div>
                  </div>
              </div>
              <!-- end page title -->

              <div class="row justify-content-md-center">
                  <div class="col-12">
                      <div class="card">
                          <div class="card-body">

                              <h3 class="header-title mb-4">ادارة الشجرة</h3>
                              <!-- <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;"> -->
                              <table class="table table-striped table-bordered table-hover dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                  <thead>
                                  <tr>
                                    <th class="col-1 font-size-20">#</th>
                                    <th class="col-3 font-size-20">اسم العرض</th>
                                    <th class="col-7 font-size-20">الاسم كامل</th>
                                    <th class="col-1 font-size-20">خيارات</th>
                                  </tr>
                                  </thead>


                                  <tbody>
<?php
$users = new MainFunc();
$all_users = $users->get_all_tree_names();

if (count($all_users) > 0){
  $b = 0;
  for ($i=0; $i < count($all_users); $i++) {
    $b = $b + 1;
    ?>
    <tr>
    <td class='font-size-18'><?php echo $b; ?></td>
    <td class='font-size-18'><?php echo $all_users[$i]['name']; ?></td>
    <td class='font-size-18'><?php echo $all_users[$i]['fullname']; ?></td>
    <td class='text-center'>
      <?php if (in_array(5, $user_is_admin_perms)) { ?>
        <span onclick='updateTreeUser(<?php echo $all_users[$i]['id']; ?>)'><i class='mdi mdi-account-edit-outline mr-2' title='تحديث البيانات'></i></span>
      <?php } ?>
      <?php if (in_array(6, $user_is_admin_perms)) { ?>
        <span onclick='removeTreeUser(this, <?php echo $all_users[$i]['id']; ?>)'><i class='mdi mdi-trash-can-outline' title='حذف الاسم'></i></span>
      <?php } ?>
    </td>
    </tr>
    <?php
  }
}else{
  echo "
  <tr>
  <td colspan='3' class='text-warning text-center'>لاتوجد أسماء مضافة بالشجرة</td>
  </tr>
  ";
}
?>


                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div> <!-- end col -->
              </div> <!-- end row -->

              <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="viewModalLAbel" id="viewModal" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title mt-0 font-size-20" id="viewModal_mainHead">اضافة اسم للشجرة</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                          <form id="treeNameForm" enctype="multipart/form-data" autocomplete="off" novalidate>

                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link font-size-18 active" data-toggle="tab" href="#home" role="tab">
                                        <i class="dripicons-home mr-1 align-middle text-warning"></i> <span class="d-none d-md-inline-block">البيانات الأساسية</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link font-size-18" data-toggle="tab" href="#profile" role="tab">
                                        <i class="dripicons-user mr-1 align-middle text-warning"></i> <span class="d-none d-md-inline-block">البيانات الإضافية</span>
                                    </a>
                                </li>
                            </ul>

                            <div class="tab-content p-3">
                                <div class="tab-pane active" id="home" role="tabpanel">
                                  <div class="row">
                                    <div class="col-md-4"><div>
                                      <h5 class="font-size-16">اسم العرض</h5>
                                      <input class="form-control" type="text" name="name" id="viewModal_name" placeholder="أدخل اسم العرض">
                                      <div class="name-feedback text-danger"></div>
                                    </div></div>

                                    <!-- <div class="col-md-5"><div>
                                      <h5 class="font-size-16">الإسم كاملا</h5>
                                      <input class="form-control" type="text" name="fullname" id="viewModal_fullname" placeholder="أدخل الاسم كاملا">
                                      <div class="fullname-feedback text-danger"></div>
                                    </div></div> -->

                                    <div class="col-md-8"><div>
                                      <h5 class="font-size-16">الأب</h5>
                                      <select class="form-control selectpicker" id="viewModal_father" name="father" data-live-search="true">
                                        <option>أختر الأب...</option>
                                  <?php
                                  if (count($all_users) > 0){
                                    for ($i=0; $i < count($all_users); $i++) {
                                    if (is_null($all_users[$i]['fullname'])){ $fullname = $all_users[$i]['name']; }else{ $fullname = $all_users[$i]['fullname']; }
                                      echo "<option value='". $all_users[$i]['id'] ."'>". $fullname ."</option>";
                                    }
                                  }
                                  ?>
                                      </select>

                                    </div></div>
                                  </div>

                                  <div class="row pt-4">
                                    <div class="col-md-9"><div>
                                      <h5 class="font-size-16">الصورة الشخصية</h5>
                                      <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="viewModal_photo" id="viewModal_photo" onchange="readURL(this);">
                                        <label class="custom-file-label" for="viewModal_photo">اختر صورة...</label>
                                      </div>

                                    </div></div>
                                    <div class="col-md-3" id="viewModal_photo_display">
                                      <!-- <img id="viewModal_photo_display" src="../assets/images/users/avatar-1.jpg" style="width: 128px;" alt="your image" />
                                      <div class="custom-control custom-checkbox mt-2">
                                          <input type="checkbox" class="custom-control-input" name="removePhoto" id="viewModal_removePhoto">
                                          <label class="custom-control-label" for="viewModal_removePhoto">ازالة الصورة</label>
                                      </div> -->
                                    </div>
                                  </div>

                                  <div class="row pt-4">
                                    <div class="col-md-4"><div>
                                      <h5 class="font-size-16">سنة الميلاد</h5>
                                      <input class="form-control" type="text" name="birthday" id="viewModal_birthday" placeholder="أدخل سنة الميلاد">
                                    </div></div>

                                    <div class="col-md-4"><div>
                                      <h5 class="font-size-16">المدينة</h5>
                                      <input class="form-control" type="text" name="city", id="viewModal_city" placeholder="أدخل المدينة">
                                    </div></div>

                                    <div class="col-md-4"><div>
                                      <h5 class="font-size-16">العمل</h5>
                                      <input class="form-control" type="text" name="work" id="viewModal_work" placeholder="أدخل العمل">
                                    </div></div>
                                  </div>

                                  <div class="row pt-4">
                                    <div class="col-md-6"><div>
                                      <h5 class="font-size-16">مكان الوفاة</h5>
                                      <input class="form-control" type="text" name="death_city" id="viewModal_death_city" placeholder="اتركه فارغا إذا كان حي">
                                    </div></div>

                                    <div class="col-md-6"><div>
                                      <h5 class="font-size-16">سنة الوفاة</h5>
                                      <input class="form-control" type="text" name="death_date" id="viewModal_death_date" placeholder="اتركه فارغا إذا كان حي">
                                    </div></div>
                                  </div>
                                </div>
                                <div class="tab-pane" id="profile" role="tabpanel">
                                  <div class="row pt-4">
                                    <div class="col-md-12"><div>
                                      <h5 class="font-size-16">أسماء البنات وأزواجهن</h5>
                                      <textarea class="form-control" rows="6" name="daughter_info" id="viewModal_daughter_info" type="text" placeholder="أسماء البنات وأزواجهن"></textarea>
                                    </div></div>
                                  </div>

                                  <div class="row pt-4">
                                    <div class="col-md-12"><div>
                                      <h5 class="font-size-16">معلومات إضافية</h5>
                                      <textarea class="form-control" rows="6" name="extra_info" id="viewModal_extra_info" type="text" placeholder="معلومات إضافية"></textarea>
                                    </div></div>
                                  </div>
                                </div>
                            </div>

                            <input type="hidden" name="action" id="viewModal_action" value="add">
                            <input type="hidden" name="ident" id="viewModal_ident">
                            <input type="hidden" name="old_photo" id="viewModal_old_photo">
                            <input type="hidden" name="old_photo_remove" id="viewModal_old_photo_remove" value="0">
                            <button type="submit" class="btn btn-success waves-effect waves-light mr-1 mt-3" style="width: 100%;">تنفيذ</button>

                          </form>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
              </div><!-- /.modal -->

          </div> <!-- container-fluid -->
      </div>
      <!-- End Page-content -->

<?php include '../get_footer.php'; ?>
  </div>
  <!-- end main content-->

<?php include 'footer.php'; ?>
