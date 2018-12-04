<?php
    function getPost($idPost)
    {
        global $dbh;
        $stmt = $db->prepare('SELECT * FROM Post WHERE ID = ? ');
        $stmt->execute([$idPost]);
        while ($row = $stmt->fetch()) {
            
        }
        return true;
    }

?>