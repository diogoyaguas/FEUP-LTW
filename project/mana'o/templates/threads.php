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

    <div class="search-container">
      <input id="searchID" type="text" placeholder="Search.." name="search">
      <button type="submit" onclick="searchCategorie()">Go!</button>
    </div>

        <div class="sorting">
            <button onclick="dropFilters()" class="filterButton">Filters</button>
            <div id="filters" class="dropdown-filters">
                    <a href="?filter=Recent&categorie=<?=$_GET['categorie']?>">Most Recent</a>
                    <a href="?filter=Oldest&categorie=<?=$_GET['categorie']?>">Least Recent</a>
                    <a href="?filter=VotedUp&categorie=<?=$_GET['categorie']?>">Most Voted Up</a>
                    <a href="?filter=VoteDown&categorie=<?=$_GET['categorie']?>">Most Voted Down</a>
            </div>
        </div>

        <script src="../scripts/threadsSearchAndFilter.js"></script>

        <style>
            .filterButton {
            font-family: 'Roboto', sans-serif;
            background-color: #D35763;
            color: white;
            padding: 16px;
            font-size: 16px;
            cursor: pointer;
            margin-left: 5em;
            border-radius: 1em;
            border-width: .1em;
            }

            .sorting {
            position: relative;
            display: inline-block;
            }

            .dropdown-filters {
            font-family: 'Roboto', sans-serif;
            margin-left: 3em;
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

            .sorting a:hover {background-color: #DF7175; color: white;}

            .show {display: block;}
        </style>

        <section id="threadposts">
        <?php
            include_once ("../includes/init.php");
			include_once ("../database/post.php");
            include_once ("../actions/verifyAndConvertText.php"); 

            $filter = $_GET['filter'];
            $categorie = $_GET['categorie'];

            if($categorie == "All") {

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

            } else {

                switch($filter) {

                    case "Recent": 
                        $posts = getRecentPostsByCategorie($categorie);
                        break;
                    case "Oldest":
                        $posts = getOldestPostsByCategorie($categorie);
                        break;
                    case "VotedUp":
                        $posts = getVotedUpPostsByCategorie($categorie);
                        break;
                    case "VoteDown":
                        $posts = getVotedDownPostsByCategorie($categorie);
                        break;
                }
            }

            if($posts == -1) {
                ?>
                    <h1>Sorry! We could not find posts within this category</h1>
                <?php
            } else {
            
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
                <p id="text_wrote"><?php convertText($post['Text']) ?></p>
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
        </section>


    </body>

    </html>