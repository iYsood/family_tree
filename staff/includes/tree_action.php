<?php require '../../includes/config.php';

if (isset($_POST)){
	// echo "<pre>"; print_r($_POST); print_r($_FILES);
	$action = mysqli_real_escape_string($conn, $_POST['action']);

	if (($action == 'add' || $action == "update" && !empty($_POST['fullname'])) || $action == 'delete'){

		if ($action == 'add' || $action == "update"){
			if(!empty($_FILES['file']['name'])){
				$target_dir = "../../assets/images/tree/";
				$temp = explode(".", $_FILES["file"]["name"]);
				$newfilename = uniqid() . '.' . end($temp);
				$target_file = $target_dir . $newfilename;
				$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
				$itemUpdatePhoto = true;

				move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
			}
			$newfilename = !empty($newfilename) ? "'$newfilename'" : "NULL";

			$fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
			$father = mysqli_real_escape_string($conn, $_POST['father']); $father = !empty($father) ? "'$father'" : "NULL";
			$birthday = mysqli_real_escape_string($conn, $_POST['birthday']); $birthday = !empty($birthday) ? "'$birthday'" : "NULL";
			$city = mysqli_real_escape_string($conn, $_POST['city']); $city = !empty($city) ? "'$city'" : "NULL";
			$work = mysqli_real_escape_string($conn, $_POST['work']); $work = !empty($work) ? "'$work'" : "NULL";
			$death_city = mysqli_real_escape_string($conn, $_POST['death_city']); $death_city = !empty($death_city) ? "'$death_city'" : "NULL";
			$death_date = mysqli_real_escape_string($conn, $_POST['death_date']); $death_date = !empty($death_date) ? "'$death_date'" : "NULL";
			$daughter_info = mysqli_real_escape_string($conn, $_POST['daughter_info']); $daughter_info = !empty($daughter_info) ? "'$daughter_info'" : "NULL";
			$extra_info = mysqli_real_escape_string($conn, $_POST['extra_info']); $extra_info = !empty($extra_info) ? "'$extra_info'" : "NULL";


			if ($action == "add"){
				$sql = "INSERT INTO `tree_names` (`fullname`, `father`, `photo`, `dateofbirth`, `city`, `work`, `death_city`, `death_date`, `daughter_info`, `extra_info`) VALUES
				('$fullname', $father, $newfilename, $birthday, $city, $work, $death_city, $death_date, $daughter_info, $extra_info)";
				if ($conn->query($sql)){
					echo 'تمت الإضافة بنجاح';
				}else{
					echo 'خطأ: '. $conn->error;
				}
			}else{
				$ident = mysqli_real_escape_string($conn, $_POST['ident']);

				$sql = "UPDATE `tree_names` SET `fullname` = '$fullname', `father` = $father, `photo` = $newfilename, `dateofbirth` = $birthday, `city` = $city, `work` = $work, `death_city` = $death_city, `death_date` = $death_date, `daughter_info` = $daughter_info, `extra_info` = $extra_info WHERE id = '$ident';";
				if ($conn->query($sql)){
					echo 'تم التحديث بنجاح';
				}else{
					echo 'خطأ: '. $conn->error;
				}
			}
		}elseif ($action == "delete"){
			$ident = mysqli_real_escape_string($conn, $_POST['ident']);

			$sql1 = $conn->query("SELECT photo FROM tree_names WHERE id = '$ident';");
			$row1 = $sql1->fetch_assoc();

			if (file_exists("../../assets/images/tree/". $row1['photo'])){
				unlink("../../assets/images/tree/". $row1['photo']);
			}

			$sql = "DELETE FROM tree_names WHERE id = '$ident';";
			if ($conn->query($sql)){
				echo 'تم الحذف بنجاح';
			}else{
				echo 'خطأ: '. $conn->error;
			}
		}

	}else{
		echo "يجب عليك تعبئة الحقول المطلوبة";
	}
}
