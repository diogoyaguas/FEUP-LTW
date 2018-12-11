<?php
include_once("header.php");
?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8" />
        <title>MANA'O New Post</title>
        <link href="../css/main_layout.css" rel="stylesheet"> 
        <link href="../css/main_style.css" rel="stylesheet"> 
        <link href="../css/posts.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">
    </head>

    <body>
        <section class="add_post">
            <form id="post" action="../actions/newPost.php" autocomplete="off" onSubmit="return false" method="post">
                <div>
                    <input type="text" placeholder="T I T L E   O F   P O S T" name="Title" required>
                </div>
                <div>
                    <input id="categories" type="submitincate" placeholder="Categories" name="Insert Categories">
                    <button id="submit" onclick='addRecord()'  style="display: none;" >Button</button>
                    <label id='values'></label>
                    <script src="../scripts/addCategories.js"></script>
                </div>
                <div>
                    <textarea rows="9" cols="30" placeholder="Insert Text or Image(Optional)" name="Post"></textarea>
                </div>
                <div>
                    <input type="submit" value="Post">
                </div>
            </form>
        </section>
    </body>

    </html>