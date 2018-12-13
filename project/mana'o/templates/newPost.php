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
                    <input id="categories" type="submitincate" placeholder="Categories" maxlength="15">
                    <input id="array" type="hidden" name="Insert Categories">
                    <button id="add" onclick='addRecord()'  style="display: none;" >Button</button>
                    <label id='values' onclick='clearLabel()'></label>
                    <script src="../scripts/addCategories.js"></script>
                </div>
                <div>
                    <textarea rows="9" cols="30" placeholder="Insert Text or Image(Optional)" name="Post" wrap="hard" required></textarea>
                </div>
                <div>
                    <input type="submit" value="Post" onClick='validateForm()'>
                    <script src="../scripts/validatePost.js"></script>
                </div>
            </form>

            <p id="errors">
        <?php if(isset($_SESSION['ERROR'])) echo htmlentities($_SESSION['ERROR']); unset($_SESSION['ERROR'])?>
    </p>
        </section>
    </body>

    </html>