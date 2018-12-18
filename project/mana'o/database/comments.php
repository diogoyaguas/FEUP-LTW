<?php
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

    function createComment($postID, $user, $text)
    {
		global $dbh;
		$date = date('Y/m/d, H:i');
		try {
			$stmt = $dbh->prepare('INSERT INTO Comments(Post_ID, User_ID, Text, Date) VALUES (?, ?, ?, ?)');
			if($stmt->execute(array($postID, $user, $text, $date)))
		 		return getCommentID($user, $text, $date);
			else
				return -1;
		} catch(PDOException $e) {
			return -1;
		}
	}

	function getCommentById($commentID) {
		global $dbh;
		try {
			$stmt = $dbh->prepare('SELECT Name, Text, Date from Comments, User WHERE Comments.ID = ? AND User_ID = User.ID');
			if($stmt->execute(array($commentID)))
				return $stmt->fetchAll();
			else
				return -1;
		
		} catch(PDOException $e) {
			return -1;
		}
	}

?>