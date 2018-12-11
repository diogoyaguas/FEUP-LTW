<?php

include_once('../includes/init.php');
include_once('../database/user.php');

	if(usernameAlreadyExists($_POST['username'])){
		$_SESSION['ERROR'] = 'Username already in use';
		header("Location:".$_SERVER['HTTP_REFERER'].""); // redirect the page to the page it came from.
	}
	else if(emailAlreadyExists($_POST['email'])){
		$_SESSION['ERROR'] = 'Exists a Manao account associated with this email address';
		header("Location:".$_SERVER['HTTP_REFERER'].""); // redirect the page to the page it came from.
	}
 	else if (($userID = createUser($_POST['username'], $_POST['password'], $_POST['name'], $_POST['email'])) != -1) {
  		echo 'User Registered successfully';
 		setCurrentUser($userID, $_POST['username']);
 		header("Location:../index.php"); // redirect the page to the page index
 	}
 	else {
  		$_SESSION['ERROR'] = 'ERROR';
  		header("Location:".$_SERVER['HTTP_REFERER']."");
 	}
 ?>