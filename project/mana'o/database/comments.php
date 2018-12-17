<?php
    function createComment($postID, $user, $text)
    {
		global $dbh;
		$date = date('Y/m/d, H:i');
		try {
			$stmt = $dbh->prepare('INSERT INTO Comments(Post_ID, User_ID, Text, Date) VALUES (?, ?, ?, ?)');
			if($stmt->execute(array($postID, $user, $text, $date)))
		 		return $dbh->getCommentID($user, $text, $date);
			else
				return -1;
		} catch(PDOException $e) {
			return -1;
		}
	}
	
	function getCommentID($user, $text, $date)
	{
		global $dbh;
		try {
			$stmt = $dbh->prepare('SELECT ID from Comments WHERE USER_ID = ? AND Text = ? AND Date = ?');
			if($stmt->execute(array($user, $text, $date))) {
				if($row = $stmt->fetch()){
					return $row['ID'];
			  }
			}
		} catch(PDOException $e) {
			return -1;
		}
	}

    function deleteComment($commentID) {
		global $dbh;
		try {
			$stmt = $dbh->prepare('DELETE FROM Comments WHERE ID = ?');
			if($stmt->execute(array($commentID)))
				return true;
			else
				return false;
		
		} catch(PDOException $e) {
			return false;
		}
    }
    
    function changeComment($commentID, $newText) {
		global $dbh;
		try {
			$stmt = $dbh->prepare('UPDATE Comments SET Text = ? WHERE ID = ?');
			if($stmt->execute(array($newText, $commentID))
				return true;
			else
				return false;
		
		} catch(PDOException $e) {
			return false;
		}
	}

?>