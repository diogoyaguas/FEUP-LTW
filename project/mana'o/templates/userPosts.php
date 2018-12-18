<?php
            include_once ("../includes/init.php");
			include_once ("../database/post.php");
            include_once ("../actions/verifyAndConvertText.php"); 
            
            $posts = getUserPosts($_SESSION['userID']);
            foreach($posts as $post) {
                viewPosts($post);
                unset($post);
                }
            

            function viewPosts($post) {
                ?>
            <article id="posts">
                <header>
                    <span class="author">
                        <?php echo getName($post['User_ID']) ?>
                    </span> 
                    <span class="date">|
                        <?= $post['Date'] ?>
                    </span>
                </header>
                <a id="title" href="viewPost.php?id=<?=$post['ID']?>" target="_blank"><?= $post['Title'] ?></a>

            </article>

            <script src="../scripts/updateDownVotes.js"></script>
            <script src="../scripts/updateUpVotes.js"></script>

        <?php }?>