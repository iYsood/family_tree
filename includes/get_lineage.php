<?php require 'config.php';

$sql = $conn->query("SELECT family_lineage FROM website_content");
$row = $sql->fetch_assoc();

if (is_null($row['family_lineage'])){
  echo 'الصفحة تحت الصيانة، عاود الزيارة لاحقاً ⌛';
}else{
  echo $row['family_lineage'];
}
