<?php
    function createPost($user, $title, $text)
    {
		global $dbh;
		$date = date('Y/m/d, H:i');
		try {
			$stmt = $dbh->prepare('INSERT INTO Post(User_ID, Title, Text, Date) VALUES (?, ?, ?, ?)');
			if($stmt->execute(array($user, $title, $text, $date)))
				return getPostID($user, $title, $text);
			else
				return -1;
		} catch(PDOException $e) {
			return -1;
		}
	}

	function getPostID($user, $title, $text) 
	{
        global $dbh;
        try {
          $stmt = $dbh->prepare('SELECT ID FROM Post WHERE User_ID = ? and Title = ? and Text = ?');
          $stmt->execute(array($user, $title, $text));
          if($row = $stmt->fetch()){
            return $row['ID'];
          }

        }catch(PDOException $e) {
          return -1;
        }
      }

	function deletePost($postID) 
	{
		global $dbh;
		try {
			$stmt = $dbh->prepare('DELETE FROM Post WHERE ID = ?');
			if($stmt->execute(array($postID)))
				return true;
			else
				return false;

		} catch(PDOException $e) {
			return false;
		}
    }

	function changeTitlePost($postID, $newTitle) 
	{
		global $dbh;
		try {
			$stmt = $dbh->prepare('UPDATE Post SET Title = ? WHERE ID = ?');
			if($stmt->execute(array($newTitle, $postID)))
				return true;
			else
				return false;

		} catch(PDOException $e) {
			return false;
		}
    }

	function changeTextPost($postID, $newText) 
	{
		global $dbh;
		try {
			$stmt = $dbh->prepare('UPDATE Post SET Text = ? WHERE ID = ?');
			if($stmt->execute(array($newText, $postID)))
				return true;
			else
				return false;

		} catch(PDOException $e) {
			return false;
		}
	}

	function getPostByID($postID) 
	{
		global $dbh;
		try {
			$stmt = $dbh->prepare('SELECT * from Post WHERE ID = ?');
			if($stmt->execute(array($postID)))
				return $stmt->fetch();
			else
				return -1;

		} catch(PDOException $e) {
			return -1;
		}
	}

	function getRecentPosts() 
	{
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

	function getOldestPosts() 
	{
		global $dbh;
		try {
			$stmt = $dbh->prepare('SELECT * from Post ORDER BY Date ASC');
			if($stmt->execute())
				return $stmt->fetchAll();
			else
				return -1;

		} catch(PDOException $e) {
			return -1;
		}
	}

	function getVotedUpPosts() 
	{
		global $dbh;
		try {
			$stmt = $dbh->prepare('SELECT * from Post ORDER BY Upvotes DESC');
			if($stmt->execute())
				return $stmt->fetchAll();
			else
				return -1;

		} catch(PDOException $e) {
			return -1;
		}
	}

	function getVotedDownPosts() 
	{
		global $dbh;
		try {
			$stmt = $dbh->prepare('SELECT * from Post ORDER BY Downvotes DESC');
			if($stmt->execute())
				return $stmt->fetchAll();
			else
				return -1;

		} catch(PDOException $e) {
			return -1;
		}
	}

	function getFiveMostRecentPosts() 
	{
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

	function getUserPosts($userID)
	{
		global $dbh;
		try {
			$stmt = $dbh->prepare('SELECT * from Post WHERE User_ID = ? ORDER BY Date DESC LIMIT 5');
			if($stmt->execute(array($userID)))
				return $stmt->fetchAll();
			else
				return -1;

		} catch(PDOException $e) {
			return -1;
		}
	}

	function getPostComments($postID) 
	{
		global $dbh;
		try {
			$stmt = $dbh->prepare('SELECT * from Comments WHERE Post_ID = ?');
			if($stmt->execute(array($postID)))
				return $stmt->fetchAll();
			else
				return -1;

		} catch(PDOException $e) {
			return -1;
		}
	}

	function updateUpvotes($votes, $postID)
	{
		global $dbh;
		try {
			$stmt = $dbh->prepare('UPDATE Post SET Upvotes = ? WHERE ID = ?');
			if($stmt->execute(array($votes, $postID)))
            	return true;
        	else{
          		return false;
       	 	}   
		} catch(PDOException $e) {
			return -1;
		}
	}

	function updateDownvotes($votes, $postID)
	{
		global $dbh;
		try {
			$stmt = $dbh->prepare('UPDATE Post SET Downvotes = ? WHERE ID = ?');
			if($stmt->execute(array($votes, $postID)))
            	return true;
        	else{
          		return false;
       	 	}   
		} catch(PDOException $e) {
			return -1;
		}
	}

	function getUserUpVoteOnPost($userID, $postID) 
	{
		global $dbh;
		try {
			$stmt = $dbh->prepare('SELECT * from UpPost WHERE User_ID = ? AND Post_ID = ?');
			$stmt->execute(array($userID, $postID));
			if($stmt->fetch())
            	return true;
        	else{
          		return false;
       	 	}   
		} catch(PDOException $e) {
			return -1;
		}
	}

	function getUserDownVoteOnPost($userID, $postID) 
	{
		global $dbh;
		try {
			$stmt = $dbh->prepare('SELECT * from DownPost WHERE User_ID = ? AND Post_ID = ?');
			$stmt->execute(array($userID, $postID));
			if($stmt->fetch())
            	return true;
        	else{
          		return false;
       	 	}   
		} catch(PDOException $e) {
			return -1;
		}
	}

	function addCategorieToPost($categorie, $postID)
    {
        global $dbh;
        try {
            $stmt = $dbh->prepare('INSERT INTO Categories (Categorie, Post_ID) VALUES (?, ?)');
            if($stmt->execute(array($categorie, $postID)))
                return true;
            else{
                return false;
                }   
        } catch(PDOException $e) {
            return -1;
        }
    }

?>