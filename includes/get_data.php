<?php require 'config.php';

if (isset($_GET) && !empty($_GET['request'])){
  $request = mysqli_real_escape_string($conn, $_GET['request']);

  if ($request == 'lineage' || $request == 'about' || $request == 'family_men'){
    if ($request == 'lineage' || $request == 'about'){
      $request = "family_". $request;
    }

    $sql = $conn->query("SELECT * FROM website_content");
    $row = $sql->fetch_assoc();

    if (is_null($row[$request])){
      echo 'الصفحة تحت الصيانة، عاود الزيارة لاحقاً ⌛';
    }else{
      echo $row[$request];
    }
  }elseif ($request == 'occasion'){
    $return_occasion = array();
    $sql = $conn->query("SELECT * FROM occasion");
    if($sql->num_rows > 0) {
      while ($row = $sql->fetch_assoc()) {
        array_push($return_occasion, $row);
      }
    }

		echo json_encode($return_occasion, true);
  }elseif ($request == 'gallery'){
    $return_gallery = array();
    $sql = $conn->query("SELECT * FROM gallery");
    if($sql->num_rows > 0) {
      while ($row = $sql->fetch_assoc()) {
        array_push($return_gallery, $row);
      }
    }

		echo json_encode($return_gallery, true);
  }
}
