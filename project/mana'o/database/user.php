<?php
    function correctLogin ($username, $password) {
      global $dbh;
      $passwordhashed = hash('sha256', $password);
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

    function createUser($username, $password, $name, $email) {
      global $dbh;

      if(!preg_match('/[0-9a-zA-Z_-]+$/', $username)) return -1;

      if(!preg_match('/(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}/', $password)) return -1;

      if(!preg_match('/[a-zA-Z]+$/', $name)) return -1;

      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) return -1;

      $passwordhashed = hash('sha256', $password);
      $date = date('Y/m');
      try {
        $stmt = $dbh->prepare('INSERT INTO User(Username, Password, Name, Email, ParticipationDate) VALUES (:Username,:Password,:Name,:Email,:ParticipationDate)');
        $stmt->bindParam(':Username', $username);
        $stmt->bindParam(':Password', $passwordhashed);
        $stmt->bindParam(':Name', $name);
        $stmt->bindParam(':Email', $email);
        $stmt->bindParam(':ParticipationDate', $date);
        if($stmt->execute()){
          $id = getID($username);
          return $id;
        }
        else return -1;
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

    function updateUserPassword($userID, $newpassword){
    $passwordhashed = hash('sha256', $newpassword);
    global $dbh;
    try {
      $stmt = $dbh->prepare('UPDATE User SET Password = ? WHERE ID = ?');
      if($stmt->execute(array($passwordhashed, $userID)))
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