<?php require '../../includes/config.php';

if (isset($_POST)){
	$ident = mysqli_real_escape_string($conn, $_POST['id']);

	$sql = $conn->query("SELECT * FROM users WHERE id = '$ident';");
	$row = $sql->fetch_assoc();
	echo json_encode($row);
}
