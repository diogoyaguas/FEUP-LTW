<?php

include_once('../includes/init.php');
include_once('../database/post.php');

	if(updateUpvotes($_POST['upvotes'], $_POST['postID']) && updateDownvotes($_POST['downvotes'], $_POST['postID'])){
		header("Location:../templates/home.php"); // redirect the page to homepage
	}
 	else {
  		$_SESSION['ERROR'] = 'ERROR';
  		header("Location:".$_SERVER['HTTP_REFERER']."");
 	}
 ?>