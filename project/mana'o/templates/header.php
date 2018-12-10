<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>MANA'O Thread Posting</title>
    <link href="../css/main_layout.css" rel="stylesheet">
    <link href="../css/main_style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">
</head>

<body>
    <header>
        <input class="homeButton" type="submit_home" value="" onclick="window.location='home.php';">
        <h3>M A N A ' O</h3>
        <nav id="menu">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="#safahavenpage">Safe Haven</a></li>
                <li><a href="#threads">Threads</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contacts.php">Contacts</a></li>
            </ul>
            <div class="dropdown">
                <img id="profile" src="../profilePictures/<?php
                    include_once('../includes/init.php');
                    include_once("../database/user.php");
                    echo getUserPhoto($_SESSION['userID']);
                ?>" alt="Profile picture" onclick="myFunction()" class="dropbtn">
                <div id="myDropdown" class="dropdown-content">
                    <a href="#">My Mana'o</a>
                    <a href="#">My Friends</a>
                    <a href="#">Channels</a>
                    <a href="../actions/logoutAction.php">Log out</a>
                </div>
            </div>

            <script src="../js/dropdown.js"></script>
        </nav>
    </header>