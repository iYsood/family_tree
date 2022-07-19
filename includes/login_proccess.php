<?php require 'config.php';

if (isset($_POST)){
  if (!empty($_POST['username']) && !empty($_POST['password'])){
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $password = md5($password);

    $sql = $conn->query("SELECT * FROM users WHERE password = '$password' AND username = '$username' OR email = '$username';");
    if ($sql->num_rows > 0){
      $row = $sql->fetch_assoc();
      $_SESSION['user_session'] = $row;
      echo 'true';
    }
  }
}

echo 'false';
