<?php
    function correctLogin ($username, $password) {
      global $dbh;
      try {
        $stmt = $dbh->prepare('SELECT * FROM user WHERE Username = ? AND Password = ?');
        $stmt->execute(array($username, $password));
        if($stmt->fetch() !== false) {
          return getID($username);
        }
        else return -1;
      } catch(PDOException $e) {
        return -1;
      }
    }

    function createUser($username, $password, $name, $email) {
      global $dbh;
      try {
        $stmt = $dbh->prepare('INSERT INTO User(Username, Password, Name, Email) VALUES (:Username,:Password,:Name,:Email)');
        $stmt->bindParam(':Username', $username);
        $stmt->bindParam(':Password', $password);
        $stmt->bindParam(':Name', $name);
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
          $stmt = $dbh->prepare('SELECT ID FROM User WHERE Username = ?');
          $stmt->execute(array($username));
          if($row = $stmt->fetch()){
            return $row['ID'];
          }
        
        }catch(PDOException $e) {
          return -1;
        }
      }

      function getName($userID) {
        global $dbh;
        try {
          $stmt = $dbh->prepare('SELECT Name FROM User WHERE ID = ?');
          $stmt->execute(array($userID));
          if($row = $stmt->fetch()){
            return $row['Name'];
          }
        
        }catch(PDOException $e) {
          return -1;
        }
      }

      function getUsernameByID($userID) {
        global $dbh;
        try {
          $stmt = $dbh->prepare('SELECT Username FROM User WHERE ID = ?');
          $stmt->execute(array($userID));
          if($row = $stmt->fetch()){
            return $row['Username'];
          }
        
        }catch(PDOException $e) {
          return -1;
        }
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

    function getUserPhoto($userID) {
      global $dbh;
      try {
        $stmt = $dbh->prepare('SELECT Profile_Pic FROM User WHERE ID = ?');
        
        if($stmt->execute(array($userID))) {
          $row = $stmt->fetch();
          return $row['Profile_Pic'];
        }
      
      }catch(PDOException $e) {
        return null;
      }
    }

    function getBio($userID) {
      global $dbh;
      try {
        $stmt = $dbh->prepare('SELECT Bio FROM User WHERE ID = ?');
        $stmt->execute(array($userID));
        if($row = $stmt->fetch()){
          return $row['Bio'];
        } else return null;
      
      }catch(PDOException $e) {
        return -1;
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

    function updateUserInfo($userID, $name, $username, $email, $bio){
      global $dbh;
      try {
        $stmt = $dbh->prepare('UPDATE User SET Name = ?, Username = ?, Email = ? , Bio = ? WHERE ID = ?');
        if($stmt->execute(array($name, $username, $email, $bio, $userID)))
            return true;
        else{
          return false;
        }   
      }catch(PDOException $e) {
        return false;
      }
    }

    function updateUserPhoto($userID, $photoPath) {
      global $dbh;
      try {
        $stmt = $dbh->prepare('UPDATE User SET Photo = ? WHERE ID = ?');
        if($stmt->execute(array($photoPath, $userID)))
            return true;
        else
            return false;
      }catch(PDOException $e) {
        return false;
      }
    }

    function usernameAlreadyExists($username) {
      global $dbh;
      try {
        $stmt = $dbh->prepare('SELECT ID FROM User WHERE username = ?');
        $stmt->execute(array($username));
        return $stmt->fetch()  !== false;
      
      }catch(PDOException $e) {
        return true;
      }
    }
    function emailAlreadyExists($email) {
      global $dbh;
      try {
        $stmt = $dbh->prepare('SELECT ID FROM User WHERE email = ?');
        $stmt->execute(array($email));
        return $stmt->fetch()  !== false;
      
      }catch(PDOException $e) {
        return true;
      }
    }
?>