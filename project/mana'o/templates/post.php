<?php
    include_once('../includes/init.php');
    include_once("../database/post.php");
            function viewAllPosts() {
                $posts = getFiveMostRecentPosts();
            foreach($posts as $post) {
                viewPosts($post);
                unset($post);
                }
            }

            function viewPosts($post) {
                ?>
        <article id="posts">
            <header>
                <span class="author">
                    <?php echo getName($post['User_ID']) ?>
                </span> 
                <span class="date">
                    <?= $post['Date'] ?>
                </span>
            </header>
            <a id="title" href="viewPost.php?id=<?=$post['ID']?>" target="_blank"><?= $post['Title'] ?></a>
            <p id="text_wrote">
                <?= $post['Text'] ?>
            </p>
            <footer id="votes">
                <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
                <script src="../scripts/votes.js"></script>
                <div id="upvotes" onclick="upvote(<?=$post['ID']?>)">
                    <p id="upvote<?=$post['ID']?>"><?=$post['Upvotes']?></p>
					<img src="../images/upvote.png"alt="Upvote">
                </div>
                <div id="downvotes" onclick="downvote(<?=$post['ID']?>)">
                    <p id="downvote<?=$post['ID']?>"><?=$post['Downvotes']?></p>
					<img src="../images/downvote.png"alt="Downvote">
                </div>
            </footer>
        </article>
       <?php }?>