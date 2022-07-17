<?php require '../../includes/config.php';

if (isset($_GET)){
	$page = mysqli_real_escape_string($conn, $_GET['page']);

	$sql = $conn->query("SELECT * FROM website_content;");
	$row = $sql->fetch_assoc();
	echo $row[$page];
}
