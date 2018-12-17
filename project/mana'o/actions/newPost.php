<?php

include_once('../includes/init.php');
include_once('../database/post.php');

	if(createPost($_SESSION['userID'], htmlentities($_POST['Title']), htmlentities($_POST['Post'])) != -1){
		header("Location:../templates/home.php"); // redirect the page to homepage
	}
 	else {
  		$_SESSION['ERROR'] = 'ERROR';
  		header("Location:".$_SERVER['HTTP_REFERER']."");
 	}
 ?>