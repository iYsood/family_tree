<?php require '../../includes/config.php';

if (isset($_POST)){
	// echo "<pre>"; print_r($_FILES);

	if (!empty($_POST['title']) && !empty($_POST['content'])){
		$title = mysqli_real_escape_string($conn, $_POST['title']);
		$content = mysqli_real_escape_string($conn, $_POST['content']);
		$post_date = mysqli_real_escape_string($conn, $_POST['date']); $post_date = !empty($post_date) ? "'$post_date'" : "NULL";

		if(!empty($_FILES['file']['name'])){
			$target_dir = "../../assets/images/uploads/";
			$temp = explode(".", $_FILES["file"]["name"]);
			$newfilename = uniqid() . '.' . end($temp);
			$target_file = $target_dir . $newfilename;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			$itemUpdatePhoto = true;

			// move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
			copy($_FILES["file"]["tmp_name"], $target_file);
		}
		$newfilename = !empty($newfilename) ? "'$newfilename'" : "NULL";

		$sql = "INSERT INTO `occasion` (`title`, `date`, `photo`, `content`) VALUES ('$title', $post_date, $newfilename, '$content')";

		if ($conn->query($sql)){
			echo "تم إضافة المناسبة بنجاح";
		}else{
			echo 'خطأ: '. $conn->error;
		}

	}else{
		echo 'يجب عليك تعبئة الحقول المطلوبة';
	}
}
