<?php require '../../includes/config.php';

if (isset($_POST)){
	$ident = mysqli_real_escape_string($conn, $_POST['id']);

	$sql1 = $conn->query("SELECT photo FROM gallery WHERE id = '$ident';");
	$row1 = $sql1->fetch_assoc();

	if (file_exists("../../assets/images/gallery/". $row1['photo'])){
		unlink("../../assets/images/gallery/". $row1['photo']);
	}

	$sql = "DELETE FROM `gallery` WHERE id = '$ident';";
	if ($conn->query($sql)){
		echo 'تم حذف الصورة بنجاح';
	}else{
		echo 'خطأ: '. $conn->error;
	}

}
