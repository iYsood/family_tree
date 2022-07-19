<?php require '../../includes/config.php';

if(!empty($_FILES['file']['name'])){
  $target_dir = "../../assets/images/gallery/";
  $temp = explode(".", $_FILES["file"]["name"]);
  $newfilename = uniqid() . '.' . end($temp);
  $target_file = $target_dir . $newfilename;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  $itemUpdatePhoto = true;

  // move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
  copy($_FILES["file"]["tmp_name"], $target_file);
  echo $newfilename;
}
