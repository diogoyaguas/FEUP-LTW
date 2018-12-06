<?php
    function correctLogin ($username, $password) {
        $passwordhashed = hash('sha256', $password);
        global $dbh;
        try {
          $stmt = $dbh->prepare('SELECT * FROM User WHERE Username = ? AND Password = ?');
          $stmt->execute(array($username, $passwordhashed));
          if($stmt->fetch() !== false) {
            return getUserID($username);
          }
          else return -1;
        } catch(PDOException $e) {
          return -1;
        }
    }

    function createUser($username, $password, $name, $email, $profilePhoto) {
      $passwordhashed = hash('sha256', $password);
      global $dbh;
      try {
        $stmt = $dbh->prepare('INSERT INTO User(Username, Password, Name, Email) VALUES (:Username,:Password,:Name,:Email)');
        $stmt->bindParam(':Username', $username);
        $stmt->bindParam(':Password', $passwordhashed);
        $stmt->bindParam(':Name', $name);
        $stmt->bindParam(':Email', $email);
        if($stmt->execute()){
          $id = getUserID($username);
          return $id;
        }
        else
          return -1;
      }catch(PDOException $e) {
        
        return -1;
      }
    }

      function getUserID($username) {
        global $dbh;
        try {
          $stmt = $dbh->prepare('SELECT ID FROM User WHERE Username = ?');
          $stmt->execute(array($username));
          if($row = $stmt->fetch()){
            return $row['ID'];
          }
        
        }catch(PDOException $e) {
          return -1;
        }
      }

      function usernameAlreadyExists($username){
        global $dbh;
        $stmt = $dbh->prepare('SELECT * FROM User WHERE Username = ?');
        $stmt->execute(array($username]));
        return $stmt->fetch();
    }

    function getUser($username) {
      global $dbh;
      try {
        $stmt = $dbh->prepare('SELECT Name, Username, Email , Profile_Pic FROM User WHERE Username = ?');
        $stmt->execute(array($username));
        return $stmt->fetch();
      
      }catch(PDOException $e) {
        return null;
      }
    }

    function deleteUser($userID) {
      global $dbh;
      try {
        $stmt = $dbh->prepare('DELETE FROM User WHERE ID = ?');
        $stmt->execute(array($userID));
        return true;
      }
      catch(PDOException $e) {
        return false;
      }
    }
?>