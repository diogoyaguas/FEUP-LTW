<?php

  include_once(__DIR__.'/session.php'); // the directory of the session file is returned
  include_once(__DIR__.'/../database/config.php');

  if(isset($_SESSION['ERROR'])){
    $error = $_SESSION['ERROR'];
  	unset($_SESSION['ERROR']); // destroys the specified variables
    
  } else {
  	$error = "";
  }

  if((getUsername() === null || getUserID() === null) && basename($_SERVER['PHP_SELF']) != 'signup.php')
    header('Location:../templates/login.php');
?>