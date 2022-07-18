<?php require '../../includes/config.php';

if (isset($_POST)){
	if (!empty($_POST['photo_title']) && !empty($_POST['photo_name'])){
		$photo_title = mysqli_real_escape_string($conn, $_POST['photo_title']);
		$photo_name = mysqli_real_escape_string($conn, $_POST['photo_name']);

		$sql = "INSERT INTO `gallery` (`title`, `photo`, `submitted_date`) VALUES ('$photo_title', '$photo_name', now())";

		if ($conn->query($sql)){
			echo "تم إضافة الصورة بنجاح";
		}else{
			echo 'خطأ: '. $conn->error;
		}

	}else{
		echo 'يجب عليك اكمال جميع الحقول';
	}
}
