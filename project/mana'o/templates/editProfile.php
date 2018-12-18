<?php
    include_once("header.php");
?>

<!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8" />
        <title>MANA'O Edit Profile</title>
        <link href="../css/main_layout.css" rel="stylesheet">
        <link href="../css/main_style.css" rel="stylesheet">
        <link href="../css/profile.css" rel="stylesheet">
        <link href="../css/others.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">
    </head>

    <body>
    <div class="EditPage">
        <h1>Personal Information</h1>
        <div class="content">
            <div id="account">
                <div id="fields">
                    <form action="../actions/updateUserAction.php" method="post" class="register_form">
                        <label id="Name">Name</label>
                        <input name="name" class="editInput" type="text" placeholder="Name" value="<?php echo htmlentities(getName($_SESSION['userID'])) ?>" required="required">
                        <label id="Username">Username</label>
                        <input name="username" class="editInput" type="text" placeholder="Username" value="<?php echo htmlentities($_SESSION['username']) ?>" required="required">
                        <label id="Email">Email</label>
                        <input name="email" class="editInput" type="email" placeholder="Email" value="<?php echo htmlentities(getEmail($_SESSION['userID'])) ?>" required="required">
                        <label id="Password">Password</label>
                        <input name="currpassword" class="editInput" type="password" placeholder="Password" required="required">
                        <label id="Bio">Bio</label>
                        <textarea name="bio" rows="5" cols="50" placeholder="Insert New Bio" id="newCommentText" name="text" wrap="hard"></textarea>
                        <input name="password" class="editInput" type="password" placeholder="New Password" pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}">
                        <input name="passwordagain" class="editInput" type="password" placeholder="Repeat New Password" pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}">
                        <input type="submit" name="Submit" value="Update">
                    </form>
                    <p id="errors">
                        <?php if(isset($_SESSION['ERROR'])) echo htmlentities($_SESSION['ERROR']); unset($_SESSION['ERROR'])?>
                    </p>

                </div>
                <div id="photo_field">
                    <form id="image_form" action="../actions/apiUploadPhoto.php" method="post" enctype="multipart/form-data">

                        <img id="photo" src="../profilePictures/<?php echo getUserPhoto($_SESSION['userID']);?>" alt="Profile Picture">
                        <input type="file" name="fileToUpload" id="fileToUpload">
                        <input type="submit" name="Submit" value="Upload">
                    </form>
                </div>
            </div>

        </div>
</div>
    </body>
</html>