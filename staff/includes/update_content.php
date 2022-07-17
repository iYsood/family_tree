<?php require '../../includes/config.php';

if (isset($_POST)){
	$page = mysqli_real_escape_string($conn, $_POST['page']);
	$content = mysqli_real_escape_string($conn, $_POST['content']); $content = !empty($content) ? "'$content'" : "NULL";

	if (!empty($page) && !empty($content)){
		$sql = "UPDATE website_content SET ". $page ." = $content;";

		if ($conn->query($sql)){
			echo "تم التحديث بنجاح";
		}else{
			echo "خطأ: ". $conn->error;
		}
	}else{
		echo "حصل خطأ";
	}
}
