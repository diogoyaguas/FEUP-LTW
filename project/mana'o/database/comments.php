<?php
    function createComment($postID, $user, $text, $date)
    {
        global $dbh;
		try {
			$stmt = $dbh->prepare('INSERT INTO Comments(Post_ID, User_ID, Text, Date) VALUES (:Post, :User, :Text, :Date)');
            $stmt->bindParam(':Post', $postID);
            $stmt->bindParam(':User', $user);
            $stmt->bindParam(':Text', $text);
            $stmt->bindParam(':Date', $date);
			if($stmt->execute())
		 		return $dbh->getCommentID();
			else
				return -1;
		} catch(PDOException $e) {
			return -1;
		}
    }

    function deleteComment($commentID) {
		global $dbh;
		try {
			$stmt = $dbh->prepare('DELETE FROM Comments WHERE ID = :ID');
			$stmt->bindParam(':ID', $commentID);
			if($stmt->execute())
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
			$stmt = $dbh->prepare('UPDATE Comments SET Text = :Text WHERE ID = :ID');
			$stmt->bindParam(':Text', $newText);
			$stmt->bindParam(':ID', $commentID);
			if($stmt->execute())
				return true;
			else
				return false;
		
		} catch(PDOException $e) {
			return false;
		}
	}

?>