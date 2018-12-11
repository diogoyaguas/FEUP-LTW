<?php
    include_once("../includes/session.php");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>MANA'O Login</title>
    <link href="../css/forms_style.css" rel="stylesheet"> 
    <link href="../css/forms_layout.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">
</head>

<body>
    <header>
        <img src="../images/dynamic_icon.gif" alt="Dynamic">
        <h1>m a n a' o</h1>
        <h3> 
            <?php
                include_once(__DIR__.'/../database/config.php');
                include_once("../database/quotes.php");
                echo getRandomQuote();
            ?>
        </h3>
    </header>

    <section id="signup">

        <form action="../actions/loginAction.php" method="post">
            <input type="text" name="username" placeholder="Username" required="required">
            <input type="password" name="password" placeholder="Password" required="required">
            <input type="submit" value="Login">
        </form>

    </section>

    <nav id="login">
        <p>Don't have a Mana'o Account? <a href="signup.php">Signup</a> </p>
    </nav>

    <p id="errors">
        <?php if(isset($_SESSION['ERROR'])) echo htmlentities($_SESSION['ERROR']); unset($_SESSION['ERROR'])?>
    </p>

    <?php
    include_once("footer.php");
    ?>
