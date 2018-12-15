<?php
    include_once("header.php");
?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8" />
        <title>MANA'O Home</title>
        <link href="../css/main_layout.css" rel="stylesheet"> 
        <link href="../css/main_style.css" rel="stylesheet"> 
        <link href="../css/others.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">
    </head>

    <body>
        <section class="home">
            <img id="logo" src="../images/icon_big.png" alt="Site's icon">
            <h2>M a n a ' o</h2>
            <img id="profilepicture" src="../profilePictures/<?php
                include_once('../includes/init.php');
                include_once("../database/user.php");
                echo getUserPhoto($_SESSION['userID']);
            ?>" alt="Profile picture">
            <h3>RECENT POSTS</h3>
            <h4><?=$_SESSION['username']?></h4>
            <div id="friendsPosts" >
                <?php 
                    include_once('post.php');
                    makePosts();
                ?>
            </div>
        </section>
    </body>

    </html> 