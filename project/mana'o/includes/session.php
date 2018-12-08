<?php

   session_start(); // creates a session or resumes the current one 
                    // based on a session identifier passed via a GET or POST request, or passed via a cookie.

   function setCurrentUser($userID, $username) {
    	$_SESSION['username'] = $username;
    	$_SESSION['userID'] = $userID;
   }

   function getUsername() {
    if(isset($_SESSION['username'])) {
         return $_SESSION['username'];
    } else {
        return null;
    }

   function getUserID() {
       if(isset($_SESSION['userID'])) {
            return $_SESSION['userID'];
       } else {
           return null;
       }
   }
}

?>