<?php
  include_once('../includes/init.php');
  include_once('../database/post.php');
  include_once('../database/votes.php');

  if((getUserUpVoteOnPost($_SESSION['userID'], $_POST['postID'])) && (!getUserDownVoteOnPost($_SESSION['userID'], $_POST['postID']))) {

        $newVote = $_POST['vote'] - 1;

        deleteUpVoteFromPost($_SESSION['userID'], $_POST['postID']);
        updateUpvotes($newVote, $_POST['postID']);
        echo json_encode(["vote" => $newVote, "postID" => $_POST['postID']]);

  } else if((!getUserUpVoteOnPost($_SESSION['userID'], $_POST['postID'])) && (!getUserDownVoteOnPost($_SESSION['userID'], $_POST['postID']))) {

        $newVote = $_POST['vote'] + 1;

        addUpVoteFromPost($_SESSION['userID'], $_POST['postID']);
        updateUpvotes($newVote, $_POST['postID']);
        echo json_encode(["vote" => $newVote, "postID" => $_POST['postID']]);

  } else {

        echo json_encode(["vote" => $_POST['vote'], "postID" => $_POST['postID']]);
  }
  
?>
