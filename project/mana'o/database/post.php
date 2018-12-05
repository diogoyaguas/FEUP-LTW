<?php
    function createPost($User, $Title, $Text, $Date, $Score)
    {
        global $dbh;
		try {
			$stmt = $dbh->prepare('INSERT INTO Post(User_ID, Title, Text, Date) VALUES (:User, :Title, :Text, :Date)');
			$stmt->bindParam(':User', $User);
            $stmt->bindParam(':Title', $Title);
            $stmt->bindParam(':Text', $Text);
            $stmt->bindParam(':Date', $Date);
			if($stmt->execute())
		 		return $dbh->getPostID();
			else
				return -1;
		} catch(PDOException $e) {
			return -1;
		}
    }

    function deletePost($postID) {
		global $dbh;
		try {
			$stmt = $dbh->prepare('DELETE FROM Post WHERE ID = :ID');
			$stmt->bindParam(':ID', $postID);
			if($stmt->execute())
				return true;
			else
				return false;
		
		} catch(PDOException $e) {
			return false;
		}
    }
    
    function changeTitlePost($postD, $newTitle) {
		global $dbh;
		try {
			$stmt = $dbh->prepare('UPDATE Post SET Title = :Title WHERE ID = :ID');
			$stmt->bindParam(':Title', $newTitle);
			$stmt->bindParam(':ID', $postID);
			if($stmt->execute())
				return true;
			else
				return false;
		
		} catch(PDOException $e) {
			return false;
		}
    }
    
    function changeTextPost($postD, $newText) {
		global $dbh;
		try {
			$stmt = $dbh->prepare('UPDATE Post SET Text = :Text WHERE ID = :ID');
			$stmt->bindParam(':Text', $newText);
			$stmt->bindParam(':ID', $postID);
			if($stmt->execute())
				return true;
			else
				return false;
		
		} catch(PDOException $e) {
			return false;
		}
	}

?>