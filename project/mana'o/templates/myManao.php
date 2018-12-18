<?php
    include_once("header.php");
?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8" />
        <title>MANA'O Profile</title>
        <link href="../css/main_layout.css" rel="stylesheet">
        <link href="../css/main_style.css" rel="stylesheet">
        <link href="../css/others.css" rel="stylesheet">
        <link href="../css/profile.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">
    </head>

    <body>
        <section class="profile">
            <div id="information">
                <img id="pic" src="../profilePictures/<?php
                include_once('../includes/init.php');
                include_once('../database/user.php');
                echo getUserPhoto($_SESSION['userID']);
                ?>" alt="Profile picture">
                <p id="bio">
                    <?php
                    echo getBio($_SESSION['userID']);
                ?>
                </p>
                <h1 id="name">
                <?php
                    echo getName($_SESSION['userID']);
                ?>
            </h1>
                <h3 id="username">
                <?php
                    echo getUsernameByID($_SESSION['userID']);
                ?>
            </h3>
            <div id="statistics">
                <h3 id=title>
                    User Statistics
                </h3>
                <p id="posts"><?php echo getNumberofPostOfUser($_SESSION['userID']) ?> posts</p>
                <p id="comments"><?php echo getNumberofCommentsOfUser($_SESSION['userID'])?> comments</p>
                <p id="pontuation"><?php echo getPontuationOfUser($_SESSION['userID'])?> points</p>
            </div>
            <div id="userPosts">
                <?php include("userPosts.php"); ?>
            </div>
            <form action="editProfile.php">
                <input type="submit" value="Edit profile">
            </form>
            </div>
        </section>
    </body>

    </html>