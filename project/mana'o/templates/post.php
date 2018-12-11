<?php
    include_once('../includes/init.php');
    include_once("../database/post.php");
            function makePosts() {
                $posts = getFiveMostRecentPosts();
            foreach($posts as $post)
                makePost($post);
                unset($post);
            }

            function makePost($post) {
                ?>
    <div id="posts">
        <article>
            <h3 id="title"><?= $post['Title'] ?></h3>
            <p id="text">
                <?= $post['Text'] ?>
            </p>
            <footer>
                <span class="author">
                    <?php echo getName($post['User_ID']) ?>
                </span> 
                <span class="date">
                    <?= $post['Date'] ?>
                </span>
            </footer>
        </article>
    </div>

    <?php } ?>