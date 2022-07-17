<?php require '../../includes/config.php';

if (isset($_POST)){
	$ident = mysqli_real_escape_string($conn, $_POST['id']);

	$sql = "DELETE FROM `users` WHERE id = '$ident';";
	if ($conn->query($sql)){
		echo 'تم حذف المستخدم بنجاح';
	}else{
		echo 'خطأ: '. $conn->error;
	}

}
