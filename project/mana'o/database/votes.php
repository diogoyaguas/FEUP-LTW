<?php

    function deleteUpVoteFromPost($userID, $postID)
    {
        global $dbh;
        try {
            $stmt = $dbh->prepare('DELETE from UpPost Where User_ID = ? AND Post_ID = ?');
            if($stmt->execute(array($userID, $postID)))
                return true;
            else{
                return false;
                }   
        } catch(PDOException $e) {
            return -1;
        }
    }

    function deleteDownVoteFromPost($userID, $postID)
    {
        global $dbh;
        try {
            $stmt = $dbh->prepare('DELETE from DownPost Where User_ID = ? AND Post_ID = ?');
            if($stmt->execute(array($userID, $postID)))
                return true;
            else{
                return false;
                }   
        } catch(PDOException $e) {
            return -1;
        }
    }

    function addUpVoteFromPost($userID, $postID)
    {
        global $dbh;
        try {
            $stmt = $dbh->prepare('INSERT INTO UpPost (User_ID, Post_ID) VALUES (?, ?)');
            if($stmt->execute(array($userID, $postID)))
                return true;
            else{
                return false;
                }   
        } catch(PDOException $e) {
            return -1;
        }
    }

    function addDownVoteFromPost($userID, $postID)
    {
        global $dbh;
        try {
            $stmt = $dbh->prepare('INSERT INTO DownPost (User_ID, Post_ID) VALUES (?, ?)');
            if($stmt->execute(array($userID, $postID)))
                return true;
            else{
                return false;
                }   
        } catch(PDOException $e) {
            return -1;
        }
    }

?>