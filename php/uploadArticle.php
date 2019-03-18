<?php

if(isset($_POST["submit"])) {

  include("DataBaseManager.php");
  $target_dir = "../images/articles/";
  $target_file = $target_dir . basename($_FILES["image"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  $newURL = "../index.html";
  $newFileName;
  $finalPathFile;
  $description;
  $title;


 echo $newFileName = md5encryptName().".".$imageFileType;

 $title = $_POST["title"];
 $description = $_POST["description"];

 echo checkPostInputs($title, $description);

 if(isset($_FILES["image"]["tmp_name"]))
 {
     $check = getimagesize($_FILES["image"]["tmp_name"]);
 } else {
   echo'<script type="text/javascript"> alert("The file is not an image!");
   window.location.href="../index.php";</script>';
   exit();
 }

    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

  // Check if file already exists
  if (file_exists($target_file))
  {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
  }
  // Check file size
  if ($_FILES["image"]["size"] > 500000)
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
      if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
          echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
          $finalPathFile = $target_dir.$newFileName;
          echo addArticle($title, $description, $finalPathFile);
          rename($target_file, $finalPathFile);
          header('Location: '."../index.php");
      } else {
          echo "Sorry, there was an error uploading your file.";
      }
  }
} else{
  header('Location: '."../index.php");
}

function checkPostInputs($title, $description)
{
  $toReturn = "";
  if(strlen($title) < 3 || strlen($title) > 20 || strlen($description) < 3 || strlen($description) > 20)
  {
    $toReturn = "Minimum of 3 chars and Maximum of 20 chars";
  }
  return $toReturn;
}

?>
