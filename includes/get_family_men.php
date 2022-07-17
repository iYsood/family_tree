<?php require 'config.php';

$sql = $conn->query("SELECT family_men FROM website_content");
$row = $sql->fetch_assoc();

if (is_null($row['family_men'])){
  echo 'الصفحة تحت الصيانة، عاود الزيارة لاحقاً ⌛';
}else{
  echo $row['family_men'];
}
