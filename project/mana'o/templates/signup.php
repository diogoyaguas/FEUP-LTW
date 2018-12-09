<?php
    include_once("../includes/init.php");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>MANA'O</title>
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/layout.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">
</head>

<body>
    <header>
        <img src="../images/icon_big.png" alt="Site's icon">
        <h1>m a n a ' o</h1>
        <h3>"how can you be a hero today?"</h3>
    </header>

    <section id="signup">

        <form action="../actions/signupAction.php" method="post">
            <input type="text" name="name" placeholder="Name">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" value="Sign up">
        </form>

    </section>

    <nav id="login">
        <p>Already have an account? <a href="login.php">Login</a> </p>
    </nav>

    <p> <?php echo htmlentities($error) ?> </p>

    <?php
    include_once("footer.php");
    ?>
