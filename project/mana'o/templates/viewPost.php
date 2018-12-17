<?php
include_once ("header.php");
?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8" />
        <title>MANA'O Post</title>
        <link href="../css/main_layout.css" rel="stylesheet">
        <link href="../css/main_style.css" rel="stylesheet">
        <link href="../css/posts.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">
    </head>

    <body>
        <?php
            include_once ("../includes/init.php");
			include_once ("../database/post.php");
			include_once ("../actions/verifyAndConvertText.php"); 
            $post = getPostByID($_GET['id']);
            $comments = getPostComments($_GET['id']);
        ?>
            <section class="viewPost">
				<div id="post">
					<article>
						<header>
							<span class="author">
								<?php echo getName($post['User_ID']) ?>
							</span>
							<span class="date">
								<?=$post['Date'] ?>
							</span>
						</header>
						<div>
							<h1>
								<?=$post['Title'] ?>
							</h1>
						</div>
						<div>
							<pre id="text"><?php convertText($post['Text']); ?></pre>
						</div>
					</article>
					<footer>
						<div id="upvotes">
							<p id="upvote">
								<?=$post['Upvotes']?>
							</p>
							<img src="../images/upvote.png"alt="Upvote">
						</div>
						<div id="downvotes">
							<p id="downvote">
								<?=$post['Downvotes']?>
							</p>
							<img src="../images/downvote.png"alt="Downvote">
						</div>
					</footer>
					
				</div>
				<div id="comments">
				<?php  foreach($comments as $comment){ ?>
					
						<article>
							<p id="name">
								<?php echo getName($comment['User_ID']) ?>
							</p>
							<div id="commentText">
							<?php
								convertText($comment['Text']);
                            ?>
							</div>
							<p id="commentDate">
								<?=$comment['Date'] ?>
							</p>
						</article>
				<?php unset($comment); } ?>
				</div>
					<label>
						<?=$_SESSION['username']?>
					</label>
					<label>Comment
						<textarea id="newCommentText" name="text" wrap="hard"></textarea>
					</label>
					<input id="replyButton" type="submit" value="Reply">
			</section>
			<p id="errors">
				<?php if (isset($_SESSION['ERROR'])) echo htmlentities($_SESSION['ERROR']); unset($_SESSION['ERROR']) ?>
			</p>

			<script type="text/javascript">let postID = "<?php echo $_GET['id'] ?>"; </script>
			<script src="../scripts/addComment.js"></script>
			<script src="../scripts/updateDownVotes.js"></script>
			<script src="../scripts/updateUpVotes.js"></script>
	</body>
</html>