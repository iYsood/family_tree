$(document).ready( function(){
  const path = window.location.pathname;
  const page_end = path.split("/").pop();
  let page_start = page_end.split(".")[0];
  page_start = page_start.substr(8);
  // console.log('page', page_start);

  if (page_start == 'family_lineage' || page_start == 'family_about' || page_start == 'family_men'){
    console.log('page', page_start);
    $.get("includes/get_content.php?page="+ page_start, function(data, status){
      // console.log(data);
      $('#summernote').summernote("code", data);
    });
  }
})


// USERS

function updateUser(id){
  $.ajax({
      type: "POST",
      url: 'includes/get_user_info.php',
      data: {id: id}, // serializes the form's elements.
      success: function(result) {
        result = JSON.parse(result)
        // console.log(result.permission);

        for (let i = 0; i < 15; i++) {
          // console.log(i);
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
        $('#updateUser_username').val(result.username); //$('#updateUser_username').html(result.name);
        $('#updateUser_email').val(result.email); //$('#updateUser_email').html(result.email);
        $('#updateUser_ident').val(result.id); //$('#updateUser_ident').html(result.phone);
        $('#updateUser_action').val('update'); //$('#updateUser_ident').html(result.phone);
        $('#updateUserModal').modal('show');
      }
  });
};

$('.addNewUser').click( function(){
  $('#updateUser_mainHead').html('اضافة مستخدم جديد');
  $('#updateUser_username').val(''); //$('#updateUser_username').html(result.name);
  $('#updateUser_email').val(''); //$('#updateUser_email').html(result.email);
  $('#updateUser_ident').val(''); //$('#updateUser_ident').html(result.phone);
  $('#updateUser_action').val('add'); //$('#updateUser_ident').html(result.phone);

  for (let i = 0; i < 15; i++) {
    // console.log(i);
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
    data: form.serialize(), // serializes the form's elements.
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
  // let page = $('#page').val();
  // let content = $('#summernote').val();

  $.ajax({
    type: "POST",
    url: 'includes/update_content.php',
    data: form.serialize(), // serializes the form's elements.
    success: function(result){
      alertify.set('notifier','position', 'top-center');
      if (result == 'تم التحديث بنجاح'){
        alertify.success(result);
        setTimeout(function () {
          location.reload();
        }, 1500);
      }else{
        alertify.error(result);
      }
      console.log(result);
    }
  });
});
