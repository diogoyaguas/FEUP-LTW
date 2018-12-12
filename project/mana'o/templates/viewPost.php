<?php
include_once ("header.php");
?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8" />
        <title>MANA'O Post</title>
        <link href="../css/main_layout.css" rel="stylesheet">
        <link href="../css/main_style.css" rel="stylesheet">
        <link href="../css/posts.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">
    </head>

    <body>
        <?php
            include_once ('../includes/init.php');
            include_once ("../database/post.php");
            $post = getPostByID($_GET['id']);
        ?>
            <section class="viewPost">
                <article>
                    <div>
                        <h1><?=$post['Title'] ?></h1>
                    </div>
                    <div>
                        <p id="text"><?=$post['Text'] ?></p>
                    </div>
                    <footer>
                        <span class="author"><?php echo getName($post['User_ID']) ?></span>
                        <span class="date"><?=$post['Date'] ?></span>
                    </footer>
                </article>

                <p id="errors">
                    <?php if (isset($_SESSION['ERROR'])) echo htmlentities($_SESSION['ERROR']);
                    unset($_SESSION['ERROR']) ?>
                </p>

            </section>
    </body>

    </html>