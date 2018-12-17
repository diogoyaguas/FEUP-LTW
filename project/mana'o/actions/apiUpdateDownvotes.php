<?php
  include_once('../includes/init.php');
  include_once('../database/post.php');
  include_once('../database/comments.php');

  if(!getUserUpVoteOnPost($_SESSION['userID'], $_POST['postID']) && getUserDownVoteOnPost($_SESSION['userID'], $_POST['postID'])) {

        $newVote = $_POST['vote'] - 1;

        deleteDownVoteFromPost($_SESSION['userID'], $_POST['postID']);
        updateDownvotes($newVote, $_SESSION['userID']);
        echo json_encode(["vote" => $newVote]);

  } else if(!getUserUpVoteOnPost($_SESSION['userID'], $_POST['postID']) && !getUserDownVoteOnPost($_SESSION['userID'], $_POST['postID'])) {

        $newVote = $_POST['vote'] + 1;

        addDownVoteFromPost($_SESSION['userID'], $_POST['postID']);
        updateDownvotes($newVote, $_SESSION['userID']);
        echo json_encode(["vote" => $newVote]);

  } else {

        echo json_encode(["vote" => $_POST['vote']]);
  }
  
?>
