<?php require '../../includes/config.php';

if (isset($_POST)){
	$website_name = mysqli_real_escape_string($conn, $_POST['website_name']);
	$website_url = mysqli_real_escape_string($conn, $_POST['website_url']);
	$website_state = mysqli_real_escape_string($conn, $_POST['website_state']);

	if (!empty($website_name) && !empty($website_url)){
		$sql = "UPDATE settings SET website_name = '$website_name', website_url = '$website_url', website_state = '$website_state';";

		if ($conn->query($sql)){
			echo "تم التحديث بنجاح";
		}else{
			echo "خطأ: ". $conn->error;
		}
	}else{
		echo "حصل خطأ";
	}
}
