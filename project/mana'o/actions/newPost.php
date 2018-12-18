<?php

function console_log( $data ){
	echo '<script>';
	echo 'console.log('. json_encode( $data ) .')';
	echo '</script>';
  }

include_once('../includes/init.php');
include_once('../database/post.php');

	if(createPost($_SESSION['userID'], htmlentities($_POST['Title']), htmlentities($_POST['Post'])) != -1){

		$post_ID = getPostID($_SESSION['userID'], htmlentities($_POST['Title']), htmlentities($_POST['Post']));
		$categories = json_decode($_POST['InsertCategories']);
		foreach($categories as $categorie) {
			addCategorieToPost($categorie, $post_ID);
		}
		header("Location:../templates/home.php"); // redirect the page to homepage
	}

 	else {
  		$_SESSION['ERROR'] = 'ERROR';
  		header("Location:".$_SERVER['HTTP_REFERER']."");
 	}
 ?>