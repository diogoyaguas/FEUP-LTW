var upvotesRequest = new XMLHttpRequest();

upvotesRequest.onreadystatechange = function () {
    if(this.readyState === 4 && this.status === 200) {

        var response = JSON.parse(this.responseText);

        document.getElementById('upvote'+postID).innerHTML = response.vote;
    }
}

document.getElementById("upvotes").addEventListener("click", function () {

    var vote = document.getElementById('upvote'+postID).innerText;

    upvotesRequest.open('POST', '../actions/apiUpdateUpvotes.php', true);
    upvotesRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    upvotesRequest.responseType="text";
    upvotesRequest.send("postID="+postID+"&vote="+vote);

})