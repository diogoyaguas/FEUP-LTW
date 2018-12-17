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
            include_once ('../includes/init.php');
            include_once ("../database/post.php");
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
				<p id="text">
					<?=$post['Text'] ?>
				</p>
			</div>
			<footer>
				<script src="../scripts/votes.js"></script>
				<div id="upvotes" onclick="upvote(
					<?=$post['ID']?>)">
					<p id="upvote
						<?=$post['ID']?>">
						<?=$post['Upvotes']?>
					</p>
					<img src="../images/upvote.png"alt="Upvote">
					</div>
					<div id="downvotes" onclick="downvote(
						<?=$post['ID']?>)">
						<p id="downvote
							<?=$post['ID']?>">
							<?=$post['Downvotes']?>
						</p>
					<img src="../images/downvote.png"alt="Downvote">
						</div>
					</footer>
				</article>
				<p id="errors">
					<?php if (isset($_SESSION['ERROR'])) echo htmlentities($_SESSION['ERROR']);
                    unset($_SESSION['ERROR']) ?>
				</p>
			</div>
			<?php  foreach($comments as $comment){ ?>
			<div id="comments">
				<article>
					<p id="name">
						<?php echo getName($comment['User_ID']) ?>
					</p>
					<div id="commentText">
						<?php
                            // The Regular Expression filter
                            $reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
                            // The Text you want to filter for urls
                            $text = $comment['Text'];
                            // Check if there is a url in the text
                            if (preg_match($reg_exUrl, $text, $url)) {
                                // make the urls hyper links
                                echo preg_replace($reg_exUrl, '
						<a href="' . $url[0] . '" rel="nofollow">' . $url[0] . '</a>', $text);
                            } else {
                                // if no urls in the text just return the text
                                echo $text;
                            }
                            ?>
					</div>
					<p id="commentDate">
						<?=$comment['Date'] ?>
					</p>
				</article>
			</div>
			<?php unset($comment); } ?>
		</section>
	</body>
</html>