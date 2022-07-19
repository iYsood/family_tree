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
                          <h4 class="mb-0 font-size-18">مكتبة الصور</h4>
                          <button type="button" class="btn btn-info btn-sm waves-effect waves-light addNewUser font-size-18" data-toggle="modal" data-target="#addPhoto">إضافة صورة</button>

                          <div class="page-title-right">
                              <ol class="breadcrumb m-0">
                                  <li class="breadcrumb-item"><a href="javascript: void(0);"><?php echo $website_settings['website_name']; ?></a></li>
                                  <li class="breadcrumb-item active">مكتبة الصور</li>
                              </ol>
                          </div>

                      </div>
                  </div>
              </div>
              <!-- end page title -->

              <div class="row justify-content-md-center">

<?php
  $gallery = new MainFunc();
  $galleries = $gallery->get_all_galleries();
  if (count($galleries) == 0){
?>
<div class="col-lg-6">
    <div class="card alert border mt-4 mt-lg-0 p-0 mb-0">
        <div class="card-header bg-soft-danger">
            <h5 class="font-size-16 text-danger my-1">مكتبة الصور</h5>
        </div>
        <div class="card-body">
            <div class="text-center">
                <div class="mb-4">
                    <i class="mdi mdi-alert-outline display-4 text-danger"></i>
                </div>
                <h4 class="alert-heading font-18">لاتوجد صور بالمكتبة</h4>
            </div>
        </div>
    </div>
</div>
<?php
  }else{
    for ($i=0; $i < count($galleries); $i++) {
      $this_galleriy = $galleries[$i];
?>
<div class="col-lg-4 col-md-6">
  <div class="gallery-box text-center card p-2">
      <a href="../assets/images/gallery/<?php echo $this_galleriy['photo']; ?>" class="text-dark gallery-popup">
          <div class="position-relative gallery-content">
              <div class="demo-img">
                  <img src="../assets/images/gallery/<?php echo $this_galleriy['photo']; ?>" alt="" class="img-fluid mx-auto d-block rounded">
              </div>
              <div class="gallery-overlay">
                  <div class="gallery-overlay-icon">
                      <i class="ti-zoom-in text-white"></i>
                  </div>
              </div>
              <div class="overlay-content">
                  <h5 class="font-size-14 text-truncate mb-0"><?php echo $this_galleriy['title']; ?></h5>
              </div>
          </div>
      </a>
      <button type="button" class="btn btn-danger mt-2" onclick="removeGalleryPhoto(this, '<?php echo $this_galleriy['id']; ?>')"> <i class="ti-trash"></i> حذف الصورة </button>
  </div>
</div>
<?php
    }
  }
?>

              </div> <!-- end row -->

              <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="addPhotoLAbel" id="addPhoto" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title mt-0">اضافة صورة للمكتبة</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                          <form action="#" class="dropzone" id="addPhotoForm">
                            <div class="form-group">
                              <label>وصف الصورة</label>
                              <input type="text" class="form-control" name="photo_title" id="photo_title" autocomplete="off" placeholder="اكتب وصف الصورة" />
                            </div>
                            <div>

                              <div class="fallback">
                                  <input name="file" type="file" multiple="multiple">
                              </div>
                              <div class="dz-message needsclick">
                                  <div class="mb-3">
                                      <i class="display-4 text-muted mdi mdi-cloud-upload-outline"></i>
                                  </div>

                                  <h4>أسحب وأسقط الصورة أو اضغط هنا للاختيار</h4>
                              </div>

                            </div>


                            <div class="form-group mb-0">
                              <input type="hidden" name="photo_name" id="photo_name" value="" >
                              <button type="submit" class="btn btn-success waves-effect waves-light mr-1" style="width: 100%;">اضافة الصورة</button>
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
