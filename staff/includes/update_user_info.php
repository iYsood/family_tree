<?php require '../../includes/config.php';

if (isset($_POST)){
	$action = mysqli_real_escape_string($conn, $_POST['action']);

	$admin_perms = '';
	for ($i=1; $i < 15; $i++) {
		if (isset($_POST['perm_'. $i])){
			$admin_perms = $admin_perms .",". $i;
		}
	}
	$admin_perms = substr($admin_perms, 1);

	if ($action == 'add'){
		$username = mysqli_real_escape_string($conn, $_POST['username']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);
		$password = md5($password);

		$sql = "INSERT INTO `users` (username, password, email, permission) VALUES ('$username', '$email', '$password', '$admin_perms')";
		if ($conn->query($sql)){
			echo 'تمت إضافة المستخدم بنجاح';
		}else{
			echo 'خطأ: '. $conn->error;
		}
	}elseif ($action = 'update'){
		$ident = mysqli_real_escape_string($conn, $_POST['ident']);

		$username = mysqli_real_escape_string($conn, $_POST['username']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);

		//
		// $sql = $conn->query("SELECT * FROM users WHERE id = '$ident';");
		// echo json_encode($sql->fetch_assoc(), true);

		// echo $_POST['password'];

		if (empty($_POST['password'])){
			$sql = "UPDATE users SET username = '$username', email = '$email', permission = '$admin_perms' WHERE id = '$ident';";
			if ($conn->query($sql)){
				echo 'تم تحديث المستخدم بنجاح';
			}else{
				echo 'خطأ: '. $conn->error;
			}
		}else{
			$password = mysqli_real_escape_string($conn, $_POST['password']);
			$password = md5($password);

			$sql = "UPDATE users SET username = '$username', email = '$email', password = '$password', permission = '$admin_perms' WHERE id = '$ident';";
			if ($conn->query($sql)){
				echo 'success';
			}else{
				echo 'خطأ: '. $conn->error;
			}
		}
	}

}
