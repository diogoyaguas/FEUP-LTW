<?php
  include_once("../includes/init.php");
  include_once("../database/user.php");
  
  $target_dir = "../profilePictures/";
  $originalName = basename($_FILES["fileToUpload"]["name"]); //  Returns trailing name component of path
  $imageFileType = pathinfo($originalName,PATHINFO_EXTENSION);
  $target_file = $target_dir . getUserID() . "." . $imageFileType ;
  $uploadOk = 1;
 

  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
    $_SESSION['ERROR'] = "ERROR: Only JPG, JPEG, PNG and GIF files are allowed.";
    $uploadOk = 0;
  }

  if (file_exists($target_file)) {
    unlink($target_file);
  }

  if ($uploadOk == 0) {
    $_SESSION['ERROR'] =  "Error uploading photo";

  } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) { // Moves an uploaded file to a new location
      if(updateUserPhoto(getUserID(), getUserID() . "." . $imageFileType)==null){
        $_SESSION['ERROR'] = "Error uploading photo";
      }
    } else {
        $_SESSION['ERROR'] =  "Error uploading photo";
    }
  }
  header("Location:".$_SERVER['HTTP_REFERER']."");
?>