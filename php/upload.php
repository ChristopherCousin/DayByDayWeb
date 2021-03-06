<?php

if(isset($_POST["submit"])) {

  include("DataBaseManager.php");
  $target_dir = "../uploads/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  $newURL = "../index.html";
  $newFileName;
  $finalPathFile;

  echo $newFileName = md5encryptName().".".$imageFileType;

  if(isset($_FILES["fileToUpload"]["tmp_name"]))
  {
      $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  } else {
    echo'<script type="text/javascript"> alert("The file is not an image!");
    window.location.href="../index.php";</script>';
    exit();
  }


    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {

        $uploadOk = 0;
    }

  if (file_exists($target_file))
  {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
  }
  // Check file size
  if ($_FILES["fileToUpload"]["size"] > 500000)
  {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
  }
  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
  }
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
          echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
          $finalPathFile = $target_dir.$newFileName;
          echo addImageToDB($newFileName, $imageFileType, 1, $finalPathFile);
          rename($target_file, $finalPathFile);
          header('Location: '."../index.php");
      } else {
          echo "Sorry, there was an error uploading your file.";
      }
  }
} else {
  header('Location: '."../index.php");
}

?>
