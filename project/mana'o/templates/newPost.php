<?php
include_once("../templates/header.php");
?>

<!DOCTYPE html>
<html>

<!--TODO:
     -Como inserir categorias???-->
    <section class = "add_post">
        <form action="new_post.php" method="post">
            <div><input type="text" placeholder="T I T L E   O F   P O S T" name="Title" required></div>
            <div><input type="submitincate" placeholder="Categories" name="Insert Categories" required></div>
            <div><textarea rows="9" cols="30" placeholder="Insert Text or Image(Optional)" name="Post"></textarea></div>
            <div><input type="submit" value="Post"></div>
        </form>
    </section>
</body>

</html>