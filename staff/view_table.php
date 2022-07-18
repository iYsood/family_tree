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
                          <h4 class="mb-0 font-size-18">ادارة الشجرة</h4>
                          <button type="button" class="btn btn-info btn-sm waves-effect waves-light viewModal" data-toggle="modal" data-target="#viewModal">إضافة جديد</button>

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

              <div class="row">
                  <div class="col-12">
                      <div class="card">
                          <div class="card-body">

                              <h4 class="header-title">ادارة الشجرة</h4>
                              <!-- <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;"> -->
                              <table class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                  <thead>
                                  <tr>
                                    <th>#</th>
                                    <th>اسم المستخدم</th>
                                    <th>خيارات</th>
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
    echo "
    <tr>
    <td>". $b ."</td>
    <td>". $all_users[$i]['fullname'] ."</td>
    <td>
      <span onclick='updateTreeUser(". $all_users[$i]['id'] .")'><i class='mdi mdi-account-edit-outline mr-2' title='تحديث البيانات'></i></span>
      <span onclick='removeTreeUser(". $all_users[$i]['id'] .")'><i class='mdi mdi-trash-can-outline' title='حذف الاسم'></i></span>
    </td>
    </tr>
    ";
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
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title mt-0" id="viewModal_mainHead">اضافة اسم للشجرة</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                          <form id="treeNameForm" enctype="multipart/form-data" autocomplete="off" novalidate>

                            <div class="row">
                              <div class="col-md-6"><div>
                                <h5 class="font-size-14">الإسم كاملا</h5>
                                <input class="form-control" type="text" name="fullname" id="viewModal_fullname" placeholder="أدخل الاسم كاملا">
                                <div class="fullname-feedback text-danger"></div>
                              </div></div>

                              <div class="col-md-6"><div>
                                <h5 class="font-size-14">الأب</h5>
                                <select class="form-control selectpicker" id="viewModal_father" name="father" data-live-search="true">
                                  <option>أختر الأب...</option>
<?php
if (count($all_users) > 0){
  for ($i=0; $i < count($all_users); $i++) {
    echo "<option value='". $all_users[$i]['id'] ."'>". $all_users[$i]['fullname'] ."</option>";
  }
}
?>
                                </select>

                              </div></div>
                            </div>

                            <div class="row pt-4">
                              <div class="col-md-12"><div>
                                <h5 class="font-size-14">الصورة الشخصية</h5>
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" name="viewModal_photo" id="viewModal_photo">
                                  <label class="custom-file-label" for="viewModal_photo">اختر صورة...</label>
                                </div>

                              </div></div>
                            </div>

                            <div class="row pt-4">
                              <div class="col-md-4"><div>
                                <h5 class="font-size-14">سنة الميلاد</h5>
                                <input class="form-control" type="text" name="birthday" id="viewModal_birthday" placeholder="أدخل سنة الميلاد">
                              </div></div>

                              <div class="col-md-4"><div>
                                <h5 class="font-size-14">المدينة</h5>
                                <input class="form-control" type="text" name="city", id="viewModal_city" placeholder="أدخل المدينة">
                              </div></div>

                              <div class="col-md-4"><div>
                                <h5 class="font-size-14">العمل</h5>
                                <input class="form-control" type="text" name="work" id="viewModal_work" placeholder="أدخل العمل">
                              </div></div>
                            </div>

                            <div class="row pt-4">
                              <div class="col-md-6"><div>
                                <h5 class="font-size-14">مكان الوفاة</h5>
                                <input class="form-control" type="text" name="death_city" id="viewModal_death_city" placeholder="اتركه فارغا إذا كان حي">
                              </div></div>

                              <div class="col-md-6"><div>
                                <h5 class="font-size-14">سنة الوفاة</h5>
                                <input class="form-control" type="text" name="death_date" id="viewModal_death_date" placeholder="اتركه فارغا إذا كان حي">
                              </div></div>
                            </div>

                            <div class="row pt-4">
                              <div class="col-md-12"><div>
                                <h5 class="font-size-14">أسماء البنات وأزواجهن</h5>
                                <textarea class="form-control" rows="4" name="daughter_info" id="viewModal_daughter_info" type="text" placeholder="أسماء البنات وأزواجهن"></textarea>
                              </div></div>
                            </div>

                            <div class="row pt-4">
                              <div class="col-md-12"><div>
                                <h5 class="font-size-14">معلومات إضافية</h5>
                                <textarea class="form-control" rows="4" name="extra_info" id="viewModal_extra_info" type="text" placeholder="معلومات إضافية"></textarea>
                              </div></div>
                            </div>



                            <input type="hidden" name="action" id="viewModal_action" value="add">
                            <input type="hidden" name="ident" id="viewModal_ident">
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
