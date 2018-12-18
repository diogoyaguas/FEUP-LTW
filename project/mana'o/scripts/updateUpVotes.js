var upvotesRequest = new XMLHttpRequest();

upvotesRequest.onreadystatechange = function () {
    if (this.readyState === 4 && this.status === 200) {
        
        var response = JSON.parse(this.responseText);

        document.getElementById('upvote' + response.postID).innerHTML = response.vote;
    }
}

function updateUpvotes(ID) {

    var vote = document.getElementById('upvote' + ID).innerText;

    upvotesRequest.open('POST', '../actions/apiUpdateUpvotes.php', true);
    upvotesRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    upvotesRequest.responseType = "text";
    upvotesRequest.send("postID=" + ID + "&vote=" + vote);
}