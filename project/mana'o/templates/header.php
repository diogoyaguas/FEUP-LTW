<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link href="../css/main_layout.css" rel="stylesheet"> 
    <link href="../css/main_style.css" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">
</head>

<body>
    <header>
        <label class="homeButton" type="submit_home" value="" onclick="window.location='../templates/home.php';"></label>
        <h3>M A N A ' O</h3>
        <nav id="menu">
            <ol>
                <li><a href="home.php">Home</a></li>
                <li><a href="http://www.pixelthoughts.co/#">Safe Haven</a></li>
                <li><a href="threads.php?filter=Recent&categorie=All">Threads</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contacts.php">Contacts</a></li>
            </ol>
        </nav>
        <div class="dropdown">
                <img id="profile" src="../profilePictures/<?php
                    include_once('../includes/init.php');
                    include_once("../database/user.php");
                    echo getUserPhoto($_SESSION['userID']);
                ?>" alt="Profile picture" onclick="myFunction()" class="dropbtn">
                <div id="myDropdown" class="dropdown-content">
                    <a href="myManao.php">My Mana'o</a>
                    <a href="newPost.php">New Post</a>
                    <a href="../actions/logoutAction.php">Log out</a>
                </div>
            </div>

            <script src="../scripts/dropdown.js"></script>
    </header>