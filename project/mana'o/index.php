<?php

  include_once('includes/init.php');
  
  if(!isset($_SESSION['username'])){
    header("Location:templates/login.php");
  } else {
  	header("Location:templates/signup.php");
  }
?>