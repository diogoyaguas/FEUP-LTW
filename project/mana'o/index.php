<?php

  include_once('includes/init.php');
  
  if(!isset($_SESSION['username'])){
    header("Location:templates/signup.php");
    exit();
  }
?>