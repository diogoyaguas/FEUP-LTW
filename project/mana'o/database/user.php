<?php
    function correctLogin ($username, $password) {
        $passwordhashed = hash('sha256', $password);
        global $dbh;
        try {
          $stmt = $dbh->prepare('SELECT * FROM user WHERE Username = ? AND Password = ?');
          $stmt->execute(array($username, $passwordhashed));
          if($stmt->fetch() !== false) {
            return getID($username);
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
            $stmt->bindParam(':Name', $name);
            $stmt->bindParam(':Username', $username);
            $stmt->bindParam(':Password', $passwordhashed);
            $stmt->bindParam(':Email', $email);
          if($stmt->execute()){
            $id = getID($username);
            return $id;
          }
          else
            return -1;
        }catch(PDOException $e) {
          
          return -1;
        }
      }

      function getID($username) {
        global $dbh;
        try {
          $stmt = $dbh->prepare('SELECT ID FROM User WHERE username = ?');
          $stmt->execute(array($username));
          if($row = $stmt->fetch()){
            return $row['ID'];
          }
        
        }catch(PDOException $e) {
          return -1;
        }
      }
?>