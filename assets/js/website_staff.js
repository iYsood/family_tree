Dropzone.autoDiscover = false;
$(document).ready( function(){
  const path = window.location.pathname;
  const page_end = path.split("/").pop();
  let page_start = page_end.split(".")[0];
  page_start2 = page_start.substr(8);

  if (page_start2 == 'family_lineage' || page_start2 == 'family_about' || page_start2 == 'family_men'){
    $.get("includes/get_content.php?page="+ page_start2, function(data, status){
      $('#summernote').summernote("code", data);
    });
  }else if(page_start == 'occasion'){
    $('#occasion_photo').change(function() {
      var i = $(this).prev('label').clone();
      var file = $('#occasion_photo')[0].files[0].name;
      $(this).prev('label').text(file);
    });

    $('#occasion_date').datepicker({
        format: 'yyyy-mm-dd',
        startDate: '+0d',
        orientation: 'bottom',
        todayHighlight: true,
        language: 'ar'
    });

  }else if(page_start == 'gallery'){
    $(".dropzone").dropzone({
        maxFiles: 2000,
        url: "includes/upload_photo.php",
        success: function (file, response) {
          $('#photo_name').val(response);
        }
    });
  }
})

// USERS

function updateUser(id){
  $.ajax({
      type: "POST",
      url: 'includes/get_user_info.php',
      data: {id: id},
      success: function(result) {
        result = JSON.parse(result)

        for (let i = 0; i < 15; i++) {
          $('#perm_'+ i).prop('checked', false);
        }
        if(result.permission != null){
          let userPermission = result.permission;
          userPermission = userPermission.split(",")

          for (let i = 0; i < 15; i++) {
            $('#perm_'+ userPermission[i]).prop('checked', true);
          }
        }

        $('#updateUser_mainHead').html(`تحديث بيانات (${result.username})`);
        $('#updateUser_username').val(result.username);
        $('#updateUser_email').val(result.email);
        $('#updateUser_ident').val(result.id);
        $('#updateUser_action').val('update');
        $('#updateUserModal').modal('show');
      }
  });
};

$('.addNewUser').click( function(){
  $('#updateUser_mainHead').html('اضافة مستخدم جديد');
  $('#updateUser_username').val('');
  $('#updateUser_email').val('');
  $('#updateUser_ident').val('');
  $('#updateUser_action').val('add');

  for (let i = 0; i < 15; i++) {
    $('#perm_'+ i).prop('checked', false);
  }

  $('#updateUserModal').modal('show');
})

function removeUser(id){
  alertify.confirm('هل أنت متأكد من حذف المستخدم ؟', function(){
    $.ajax({
        type: 'POST',
        url: 'includes/delete_user.php',
        data: 'id=' + id,
        success: function(result) {
          alertify.set('notifier','position', 'top-center');

          if (result == 'تم حذف المستخدم بنجاح'){
            alertify.success(result);
            setTimeout(function () {
              location.reload();
            }, 1500);
          }else{
            alertify.error(result);
          }
        }
    });
  }).set('labels', {ok:'حذف', cancel:'الغاء'});
};

$('#updateUserForm').submit( function(e) {
  e.preventDefault();
  let form = $(this);

  $.ajax({
    type: "POST",
    url: 'includes/update_user_info.php',
    data: form.serialize(),
    success: function(result){
      $('#updateUserModal').modal('hide');
      alertify.set('notifier','position', 'top-center');
      if (result == 'تمت إضافة المستخدم بنجاح' || result == 'تم تحديث المستخدم بنجاح'){
        alertify.success('تم التحديث بنجاح');
        setTimeout(function () {
          location.reload();
        }, 1500);
      }else{
        alertify.error(result);
      }
    }
  });
});

$('#updateContent').submit( function(e) {
  e.preventDefault();
  let form = $(this);

  $.ajax({
    type: "POST",
    url: 'includes/update_content.php',
    data: form.serialize(),
    success: function(result){
      alertify.set('notifier','position', 'top-center');
      if (result == 'تم التحديث بنجاح'){
        alertify.success(result);
      }else{
        alertify.error(result);
      }
    }
  });
});

$('#updateSettings').submit( function(e) {
  e.preventDefault();
  let form = $(this);

  $.ajax({
    type: "POST",
    url: 'includes/update_settings.php',
    data: form.serialize(),
    success: function(result){
      alertify.set('notifier','position', 'top-center');
      if (result == 'تم التحديث بنجاح'){
        alertify.success(result);
      }else{
        alertify.error(result);
      }
    }
  });
});

// View Tree

$('.viewModal').click( function(){
  $('#updateUser_mainHead').html('اضافة جديد للشجرة');
  $('#updateUser_username').val('');
  $('#updateUser_email').val('');
  $('#updateUser_ident').val('');
  $('#updateUser_action').val('add');

  for (let i = 0; i < 15; i++) {
    $('#perm_'+ i).prop('checked', false);
  }

  $('#updateUserModal').modal('show');
})

// Occasion
$('#addOccasion').submit( function(e) {
  e.preventDefault();
  let formData = new FormData();

  let title = $('#occasion_title').val()
  let date = $('#occasion_date').val()
  let content = $('#summernote').val()

  if (title == ''){
    $('.title-feedback').html('Required');
    $('.content-feedback').html('');
  }else if (content == ''){
    $('.title-feedback').html('');
    $('.content-feedback').html('Required');
  }else{
    $('.title-feedback').html('');
    $('.content-feedback').html('');

    formData.append('title', title);
    formData.append('date', date);
    formData.append('content', content);
    formData.append('file', $('#occasion_photo')[0].files[0]);

    $.ajax({
      type: "POST",
      url: 'includes/add_occasion.php',
      data: formData,
      cache: false,
      contentType: false,
      processData: false,
      success: function(result){
        alertify.set('notifier','position', 'top-center');
        if (result == 'تم إضافة المناسبة بنجاح'){
          alertify.success(result);
          setTimeout(function () {
            location.reload();
          }, 1500);
        }else{
          alertify.error(result);
        }
      }
    });
  }
});

const removeOccasion = function(el, id){
  alertify.confirm('هل أنت متأكد من حذف المناسبة ؟', function(){
    $.ajax({
        type: 'POST',
        url: 'includes/delete_occasion.php',
        data: 'id=' + id,
        success: function(result) {
          alertify.set('notifier','position', 'top-center');
          let element = el;

          if (result == 'تم حذف المناسبة بنجاح'){
            alertify.success(result);
            element.closest('tr').remove();
          }else{
            alertify.error(result);
          }
        }
    });
  }).set('labels', {ok:'حذف', cancel:'الغاء'});
}

// Gallery
$('#addPhotoForm').submit( function(e) {
  e.preventDefault();
  let form = $(this);
  let photo_name = $('#photo_name').val();
  let photo_title = $('#photo_title').val();

    alertify.set('notifier','position', 'top-center');
  if (photo_title == ''){
    alertify.error('يجب عليك كتابة وصف الصورة');
  }else if (photo_name == ''){
    alertify.error('يجب عليك اختيار صورة لرفعها');
  }else{
    $('#addPhoto').modal('hide');
    $.ajax({
      type: "POST",
      url: 'includes/add_gallery.php',
      data: form.serialize(),
      success: function(result){
        if (result == 'تم إضافة الصورة بنجاح'){
          alertify.success(result);
          setTimeout(function () {
            location.reload();
          }, 1500);
        }else{
          alertify.error(result);
        }
      }
    });
  }
});

const removeGalleryPhoto = function(el, id){
  alertify.confirm('هل أنت متأكد من حذف الصورة ؟', function(){
    $.ajax({
        type: 'POST',
        url: 'includes/delete_gallery_photo.php',
        data: 'id=' + id,
        success: function(result) {
          alertify.set('notifier','position', 'top-center');
          let element = el;

          if (result == 'تم حذف الصورة بنجاح'){
            alertify.success(result);
            element.closest('div').remove();
          }else{
            alertify.error(result);
          }
        }
    });
  }).set('labels', {ok:'حذف', cancel:'الغاء'});
}


// TREEs

const updateTreeUser = function(id){
  $.ajax({
      type: "POST",
      url: 'includes/get_tree_user.php',
      data: {id: id},
      success: function(result) {
        result = JSON.parse(result)

        if (result.photo != null){
          let src = `../assets/images/tree/${result.photo}`
          $("#viewModal_photo_display").html(`
            <img src="${src}" style="width: 128px;" alt="your image" />
            <a href="#" onclick="$(this).parent().html(''); $('#viewModal_old_photo_remove').val(1);" class="ml-3 font-size-16 text-danger">ازالة الصورة؟</a>
          `);
        }

        $('#viewModal_mainHead').html(`تحديث بيانات (${result.name})`);
        $("#viewModal_name").val(result.name)
        // $("#viewModal_fullname").val(result.fullname)
        $("#viewModal_father").val(result.father)
        $("#viewModal_birthday").val(result.birthday)
        $("#viewModal_city").val(result.city)
        $("#viewModal_old_photo").val(result.photo)
        $("#viewModal_old_photo_remove").val(0)
        $("#viewModal_work").val(result.work)
        $("#viewModal_death_city").val(result.death_city)
        $("#viewModal_death_date").val(result.death_date)
        $("#viewModal_daughter_info").val(result.daughter_info)
        $("#viewModal_extra_info").val(result.extra_info)
        $("#viewModal_ident").val(result.id)
        $('#viewModal_action').val('update');
        $('#viewModal').modal('show');
      }
  });
};

const removeTreeUser = function(el, id){
  alertify.confirm('هل أنت متأكد من حذف الاسم؟', function(){
    $.ajax({
        type: 'POST',
        url: 'includes/tree_action.php',
        data: 'action=delete&ident=' + id,
        success: function(result) {
          alertify.set('notifier','position', 'top-center');

          if (result == 'تم الحذف بنجاح'){
            alertify.success(result);
            let element = el;
            element.closest('tr').remove();
          }else{
            alertify.error(result);
          }
        }
    });
  }).set('labels', {ok:'حذف', cancel:'الغاء'});
};

function readURL(input) {
  if (input.files && input.files[0]) {
    const reader = new FileReader();

    reader.onload = function (e) {
      $("#viewModal_photo_display").html('');
      $("#viewModal_photo_display").html(`
        <img src="${e.target.result}" style="width: 128px;" alt="your image" />
        <a href="#" onclick="$(this).parent().html(''); $('#viewModal_old_photo_remove').val(1);" class="ml-3 font-size-16 text-danger">ازالة الصورة؟</a>
      `);
    };

    reader.readAsDataURL(input.files[0]);
  }
}

$('#treeNameForm').submit( function(e) {
  e.preventDefault();
  let formData = new FormData();
  alertify.set('notifier','position', 'top-center');

  let name = $("#viewModal_name").val();
  // let fullname = $("#viewModal_fullname").val();
  let father = $("#viewModal_father").val();
  let birthday = $("#viewModal_birthday").val();
  let city = $("#viewModal_city").val();
  let old_photo = $("#viewModal_old_photo").val();
  let old_photo_remove = $("#viewModal_old_photo_remove").val();
  let work = $("#viewModal_work").val();
  let death_city = $("#viewModal_death_city").val();
  let death_date = $("#viewModal_death_date").val();
  let daughter_info = $("#viewModal_daughter_info").val();
  let extra_info = $("#viewModal_extra_info").val();
  let action = $("#viewModal_action").val();
  let ident = $("#viewModal_ident").val();

  console.log(father);

  if (father != 'أختر الأب...'){
    fullname = name +' بن '+ $("#viewModal_father option:selected").text();
  }else{
    fullname = name;
  }

  if (name == ''){
    $('.name-feedback').html('الحقل مطلوب');
  }else if (father == ident){
    alertify.error('<h4 class="text-white">لايمكن أن يكون الأب هو الشخص نفسه!<h4>');
  }else{
    $('.name-feedback').html('');
    formData.append('name', name);
    formData.append('fullname', fullname);
    formData.append('father', father);
    formData.append('birthday', birthday);
    formData.append('file', $('#viewModal_photo')[0].files[0]);
    formData.append('city', city);
    formData.append('old_photo', old_photo);
    formData.append('old_photo_remove', old_photo_remove);
    formData.append('work', work);
    formData.append('death_city', death_city);
    formData.append('death_date', death_date);
    formData.append('daughter_info', daughter_info);
    formData.append('extra_info', extra_info);
    formData.append('action', action);
    formData.append('ident', ident);

    $.ajax({
      type: "POST",
      url: 'includes/tree_action.php',
      data: formData,
      cache: false,
      contentType: false,
      processData: false,
      success: function(result){

        if (result == 'تمت الإضافة بنجاح' || result == 'تم التحديث بنجاح'){
          $('#viewModal').modal('hide');
          alertify.success(result);
          setTimeout(function () {
            location.reload();
          }, 1500);
        }else{
          alertify.error(result);
        }
      }
    });
  }

});

$('#viewModal').on('hidden.bs.modal', function () {
  $('#viewModal_mainHead').html('اضافة اسم للشجرة');
  $("#viewModal_name").val('');
  $("#viewModal_fullname").val('');
  $("#viewModal_father").val('');
  $("#viewModal_photo_display").html('');
  $("#viewModal_birthday").val('');
  $("#viewModal_city").val('');
  $("#viewModal_old_photo").val('');
  $("#viewModal_old_photo_remove").val(0);
  $("#viewModal_work").val('');
  $("#viewModal_death_city").val('');
  $("#viewModal_death_date").val('');
  $("#viewModal_daughter_info").val('');
  $("#viewModal_extra_info").val('');
  $("#viewModal_action").val('add');
  $("#viewModal_ident").val('');
});
