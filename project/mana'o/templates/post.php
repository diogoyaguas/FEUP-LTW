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
            <a id="title" href="viewPost.php?id=<?=$post['ID']?>" target="_blank"><?= $post['Title'] ?></a>
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