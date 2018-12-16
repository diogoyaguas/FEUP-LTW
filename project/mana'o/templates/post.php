<?php
    include_once('../includes/init.php');
    include_once("../database/post.php");
            function viewAllPosts() {
                $posts = getFiveMostRecentPosts();
            foreach($posts as $post) {
                viewPosts($post);
                $comments = getPostComments($post['ID']);
                foreach($comments as $comment){
                    viewComments($comment);
                    unset($comment);
                }
                makeComment();
                unset($comments);
                unset($post);
                }
            }

            function viewPosts($post) {
                ?>
    <div id="posts">
        <article>
            <header>
                <span class="author">
                    <?php echo getName($post['User_ID']) ?>
                </span> 
                <span class="date">
                    <?= $post['Date'] ?>
                </span>
            </header>
            <a id="title" href="viewPost.php?id=<?=$post['ID']?>" target="_blank"><?= $post['Title'] ?></a>
            <p id="text">
                <?= $post['Text'] ?>
            </p>
            <footer id="votes">
                <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
                <script src="../scripts/votes.js"></script>
                <div id="upvotes" onclick="upvote(<?=$post['ID']?>)">
                    <p id="upvote<?=$post['ID']?>"><?=$post['Upvotes']?></p>
                    <img src="" alt="Downvote">
                </div>
                <div id="downvotes" onclick="downvote(<?=$post['ID']?>)">
                    <p id="downvote<?=$post['ID']?>"><?=$post['Downvotes']?></p>
                    <img src="" alt="Downvote">
                </div>
            </footer>
        </article>
    </div>

    <?php }
        function viewComments($comment) {
    ?>
    <div id="comments">
        <article>
        <p id="name"> <?php echo getName($comment['User_ID']) ?> </p>
        <div id="commentText">
                            <?php
                            // The Regular Expression filter
                            $reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
                            // The Text you want to filter for urls
                            $text = $comment['Text'];
                            // Check if there is a url in the text
                            if (preg_match($reg_exUrl, $text, $url)) {
                                // make the urls hyper links
                                echo preg_replace($reg_exUrl, '<a href="' . $url[0] . '" rel="nofollow">' . $url[0] . '</a>', $text);
                            } else {
                                // if no urls in the text just return the text
                                echo $text;
                            }
                            ?>
                            </div>
        <p id="commentDate"> <?=$comment['Date'] ?> </p>
        </article>
        <?php }
        
        function makeComment() {
            ?>
    <form>
        <h2>Add your voice...</h2>
        <label>Username
            <?=$_SESSION['username']?>
        </label>
        <label>Comment
            <textarea name="text"></textarea>
        </label>
            <input type="submit" value="Reply">
    </form>
    </div>

       <?php }?>