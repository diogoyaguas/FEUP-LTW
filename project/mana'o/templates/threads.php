<?php
    include_once("header.php");
?>

<!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8" />
        <title>MANA'O Threads</title>
        <link href="../css/main_layout.css" rel="stylesheet">
        <link href="../css/main_style.css" rel="stylesheet">
        <link href="../css/posts.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">
    </head>

    <body>

        <div class="sorting">
            <button onclick="dropFilters()" class="filterButton">Filters</button>
            <div id="filters" class="dropdown-filters">
                    <a href="?filter=Recent">Most Recent</a>
                    <a href="?filter=Oldest">Least Recent</a>
                    <a href="?filter=VotedUp">Most Voted Up</a>
                    <a href="?filter=VoteDown">Most Voted Down</a>
            </div>
        </div>

        <script src="../scripts/filterDropdown.js"></script>

        <style>
            .filterButton {
            background-color: #D35763;
            color: black;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            }

            .sorting {
            position: relative;
            display: inline-block;
            }

            .dropdown-filters {
            display: none;
            position: absolute;
            background-color: #F5EBED;
            min-width: 160px;
            overflow: auto;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            }

            .dropdown-filters a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            }

            .sorting a:hover {background-color: #DF7175;}

            .show {display: block;}
        </style>



        <?php
            include_once ("../includes/init.php");
			include_once ("../database/post.php");
            include_once ("../actions/verifyAndConvertText.php"); 

            $filter = $_GET['filter'];

            switch($filter) {

                case "Recent": 
                    $posts = getRecentPosts();
                    break;
                case "Oldest":
                    $posts = getOldestPosts();
                    break;
                case "VotedUp":
                    $posts = getVotedUpPosts();
                    break;
                case "VoteDown":
                    $posts = getVotedDownPosts();
                    break;
            }
            
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
                    <span class="date">
                        <?= $post['Date'] ?>
                    </span>
                </header>
                <a id="title" href="viewPost.php?id=<?=$post['ID']?>" target="_blank"><?= $post['Title'] ?></a>
                <pre id="text_wrote"><?php convertText($post['Text']) ?></pre>
                <footer id="votes">
                    <div id="upvotes" onclick="updateUpvotes(<?=$post['ID']?>)">
                        <p id="upvote<?=$post['ID']?>"><?=$post['Upvotes']?></p>
                        <img src="../images/upvote.png"alt="Upvote">
                    </div>
                    <div id="downvotes" onclick="updateDownvotes(<?=$post['ID']?>)">
                        <p id="downvote<?=$post['ID']?>"><?=$post['Downvotes']?></p>
                        <img src="../images/downvote.png"alt="Downvote">
                    </div>
            </article>

            <script src="../scripts/updateDownVotes.js"></script>
            <script src="../scripts/updateUpVotes.js"></script>

        <?php }?>

    </body>

    </html>