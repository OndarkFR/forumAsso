<?php
    include 'conn.php';

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["igm"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST["btnreply"])) {
      $check = getimagesize($_FILES["img"]["tmp_name"]);
      if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        echo "File is not an image.";
        $uploadOk = 0;
      }
    }
?>