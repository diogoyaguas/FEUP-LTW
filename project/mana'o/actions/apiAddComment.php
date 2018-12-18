<?php
  include_once('../includes/init.php');
  include_once('../database/comments.php');

  if(($commentID = createComment($_POST['postID'], $_SESSION['userID'], htmlentities($_POST['text']))) == -1){
		header("Location:".$_SERVER['HTTP_REFERER']."");
  }

  if(($comment = getCommentById($commentID)) != -1) {

    $comment = getCommentById($commentID);
    echo json_encode($comment, JSON_UNESCAPED_UNICODE);

  } else header("Location:".$_SERVER['HTTP_REFERER']."");
  
  
?>
