<?php
    function createPost($user, $title, $text, $date)
    {
        global $dbh;
		try {
			$stmt = $dbh->prepare('INSERT INTO Post(User_ID, Title, Text, Date) VALUES (:User, :Title, :Text, :Date)');
			$stmt->bindParam(':User', $user);
            $stmt->bindParam(':Title', $title);
            $stmt->bindParam(':Text', $text);
            $stmt->bindParam(':Date', $date);
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
    
    function changeTitlePost($postID, $newTitle) {
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
    
    function changeTextPost($postID, $newText) {
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

	function getAllPosts() {
		global $dbh;
		try {
			$stmt = $dbh->prepare('SELECT * from Post ORDER BY Date DESC');
			if($stmt->execute())
				return $stmt->fetchAll();
			else
				return -1;
		
		} catch(PDOException $e) {
			return -1;
		}
	}

	function getFiveMostRecentPosts() {
		global $dbh;
		try {
			$stmt = $dbh->prepare('SELECT * from Post ORDER BY Date DESC LIMIT 5');
			if($stmt->execute())
				return $stmt->fetchAll();
			else
				return -1;
		
		} catch(PDOException $e) {
			return -1;
		}
	}

?>