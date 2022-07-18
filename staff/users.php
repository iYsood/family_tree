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
                          <h4 class="mb-0 font-size-18">المستخدمين</h4>
                          <button type="button" class="btn btn-info btn-sm waves-effect waves-light addNewUser" data-toggle="modal" data-target="#updateUserModal">إضافة مستخدم</button>

                          <div class="page-title-right">
                              <ol class="breadcrumb m-0">
                                  <li class="breadcrumb-item"><a href="javascript: void(0);"><?php echo $website_settings['website_name']; ?></a></li>
                                  <li class="breadcrumb-item active">المستخدمين</li>
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

                              <h4 class="header-title">المستخدمين</h4>
                              <!-- <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;"> -->
                              <table class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                  <thead>
                                  <tr>
                                    <th>#</th>
                                    <th>اسم المستخدم</th>
                                    <th>البريد الالكتروني</th>
                                    <th>خيارات</th>
                                  </tr>
                                  </thead>


                                  <tbody>
<?php
$users = new MainFunc();
$all_users = $users->get_all();
// echo "<pre>"; print_r($all_users);
$b = 0;
for ($i=0; $i < count($all_users); $i++) {
  $b = $b + 1;
  echo "
  <tr>
  <td>". $b ."</td>
  <td>". $all_users[$i]['username'] ."</td>
  <td>". $all_users[$i]['email'] ."</td>
  <td>
    <span onclick='updateUser(". $all_users[$i]['id'] .")'><i class='mdi mdi-account-edit-outline mr-2' title='تحديث البيانات'></i></span>
    <span onclick='removeUser(". $all_users[$i]['id'] .")'><i class='mdi mdi-trash-can-outline' title='حذف المستخدم'></i></span>
  </td>
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

              <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="updateUserModalLAbel" id="updateUserModal" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title mt-0" id="updateUser_mainHead">اضافة مستخدم جديد</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                          <form class="custom-validation" id="updateUserForm">
                            <div class="form-group">
                              <label>اسم المستخدم</label>
                              <input type="text" class="form-control" name="username" id="updateUser_username" autocomplete="off" required placeholder="اكتب اسم المستخدم"/>
                            </div>
                            <div class="form-group">
                              <label>البريد الإلكتروني</label>
                              <input type="text" class="form-control" name="email" id="updateUser_email" autocomplete="off" required placeholder="اكتب البريد الإلكتروني"/>
                            </div>
                            <div class="form-group">
                              <label>كلمة المرور</label>
                              <input type="password" class="form-control" name="password" id="updateUser_password" autocomplete="off" />
                              <small class="text-info">في حال التحديث: اتركه فارغاً لعدم تغييره</small>
                            </div>
                            <div class="form-group">
                              <label>الصلاحيات</label>
                              <div class="mt-2">
                                  <h5 class="font-size-14 mb-3 text-warning">صلاحيات المستخدمين</h5>
                                  <div class="custom-control custom-checkbox custom-control-inline">
                                      <input type="checkbox" class="custom-control-input" name="perm_1" id="perm_1">
                                      <label class="custom-control-label" for="perm_1">إضافة مستخدم</label>
                                  </div>
                                  <div class="custom-control custom-checkbox custom-control-inline">
                                      <input type="checkbox" class="custom-control-input" name="perm_2" id="perm_2">
                                      <label class="custom-control-label" for="perm_2">تحديث بيانات مستخدم</label>
                                  </div>
                                  <div class="custom-control custom-checkbox custom-control-inline">
                                      <input type="checkbox" class="custom-control-input" name="perm_3" id="perm_3">
                                      <label class="custom-control-label" for="perm_3">حذف مستخدم</label>
                                  </div>
                              </div>
                              <div class="mt-4">
                                  <h5 class="font-size-14 mb-3 text-warning">صلاحيات الشجرة</h5>
                                  <div class="custom-control custom-checkbox custom-control-inline">
                                      <input type="checkbox" class="custom-control-input" name="perm_4" id="perm_4">
                                      <label class="custom-control-label" for="perm_4">إضافة جديد</label>
                                  </div>
                                  <div class="custom-control custom-checkbox custom-control-inline">
                                      <input type="checkbox" class="custom-control-input" name="perm_5" id="perm_5">
                                      <label class="custom-control-label" for="perm_5">تحديث بيانات</label>
                                  </div>
                                  <div class="custom-control custom-checkbox custom-control-inline">
                                      <input type="checkbox" class="custom-control-input" name="perm_6" id="perm_6">
                                      <label class="custom-control-label" for="perm_6">حذف اسم</label>
                                  </div>
                              </div>
                              <div class="mt-4">
                                  <h5 class="font-size-14 mb-3 text-warning">صلاحيات الأخبار والمناسبات</h5>
                                  <div class="custom-control custom-checkbox custom-control-inline">
                                      <input type="checkbox" class="custom-control-input" name="perm_7" id="perm_7">
                                      <label class="custom-control-label" for="perm_7">إضافة مناسبة</label>
                                  </div>
                                  <div class="custom-control custom-checkbox custom-control-inline">
                                      <input type="checkbox" class="custom-control-input" name="perm_8" id="perm_8">
                                      <label class="custom-control-label" for="perm_8">حذف مناسبة</label>
                                  </div>
                              </div>
                              <div class="mt-4">
                                  <h5 class="font-size-14 mb-3 text-warning">صلاحيات مكتبة الصور</h5>
                                  <div class="custom-control custom-checkbox custom-control-inline">
                                      <input type="checkbox" class="custom-control-input" name="perm_9" id="perm_9">
                                      <label class="custom-control-label" for="perm_9">إضافة الصور</label>
                                  </div>
                                  <div class="custom-control custom-checkbox custom-control-inline">
                                      <input type="checkbox" class="custom-control-input" name="perm_10" id="perm_10">
                                      <label class="custom-control-label" for="perm_10">حذف الصور</label>
                                  </div>
                              </div>
                              <div class="mt-4">
                                  <h5 class="font-size-14 mb-3 text-warning">صلاحيات إعدادات الموقع</h5>
                                  <div class="custom-control custom-checkbox custom-control-inline">
                                      <input type="checkbox" class="custom-control-input" name="perm_11" id="perm_11">
                                      <label class="custom-control-label" for="perm_11">تحديث الاعدادات</label>
                                  </div>
                                  <div class="custom-control custom-checkbox custom-control-inline">
                                      <input type="checkbox" class="custom-control-input" name="perm_12" id="perm_12">
                                      <label class="custom-control-label" for="perm_12">التحكم بنسب العائلة</label>
                                  </div>
                                  <div class="custom-control custom-checkbox custom-control-inline">
                                      <input type="checkbox" class="custom-control-input" name="perm_13" id="perm_13">
                                      <label class="custom-control-label" for="perm_13">التحكم بحول العائلة</label>
                                  </div>
                                  <div class="custom-control custom-checkbox custom-control-inline">
                                      <input type="checkbox" class="custom-control-input" name="perm_14" id="perm_14">
                                      <label class="custom-control-label" for="perm_14">التحكم برجالات العائلة</label>
                                  </div>
                              </div>
                            </div>

                            <div class="form-group mb-0">
                              <input type="hidden" name="action" id="updateUser_action" value="add">
                              <input type="hidden" name="ident" id="updateUser_ident">
                              <button type="submit" class="btn btn-success waves-effect waves-light mr-1" style="width: 100%;">تنفيذ</button>
                            </div>
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
