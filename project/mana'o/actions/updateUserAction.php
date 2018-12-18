<?php
    include_once('../includes/init.php');
    include_once("../database/user.php");

    $name = $_POST['name'];
    $username= $_POST['username'];
    $email = $_POST['email'];
    $bio = $_POST['bio'];
    $currpassword = $_POST['currpassword'];
    $newpassword = $_POST['password'];

    if((correctLogin($_SESSION['username'], $currpassword)) != -1) {

        if($name !== null && $username !== null && $email!==null) {
            if(updateUserInfo (getUserID(), $name, $username, $email)){
                setCurrentUser(getUserID(), $username);
                if($newpassword != null){
                    if(!updateUserPassword(getUserID(), $newpassword))
                        $_SESSION['ERROR']= "Error: updating password";                    
                }
                if($bio != null){
                    if(!updateBio(getUserID(), $bio))
                        $_SESSION['ERROR']= "Error: updating bio";
                }
            } else $_SESSION['ERROR'] = "Error: updating data base";      
        } else $_SESSION['ERROR'] = "Error: name, username, email and password cannot be null";
    } else $_SESSION['ERROR'] = "Error: password is not correct";
    header("Location:".$_SERVER['HTTP_REFERER']."");
        
?>