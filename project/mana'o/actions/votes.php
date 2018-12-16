<?php

include_once('../includes/init.php');
include_once('../database/post.php');

	if(getUserUpVoteOnPost($_SESSION['userID'], $_POST['ID'])) {
		header("Location:".$_SERVER['HTTP_REFERER']."");
    }
    if(getUserDownVoteOnPost($_SESSION['userID'], $_POST['ID'])) {
        header("Location:".$_SERVER['HTTP_REFERER']."");
    }
 	else {
  		$_SESSION['ERROR'] = 'ERROR';
  		header("Location:".$_SERVER['HTTP_REFERER']."");
 	}
 ?>