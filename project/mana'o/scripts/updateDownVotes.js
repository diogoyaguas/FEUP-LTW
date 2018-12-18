var downvotesRequest = new XMLHttpRequest();

downvotesRequest.onreadystatechange = function () {
    if (this.readyState === 4 && this.status === 200) {

        var response = JSON.parse(this.responseText);

        document.getElementById('downvote' + response.postID).innerHTML = response.vote;

    }
}

function updateDownvotes(ID) {

    var vote = document.getElementById('downvote' + ID).innerText;

    downvotesRequest.open('POST', '../actions/apiUpdateDownvotes.php', true);
    downvotesRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    downvotesRequest.responseType = "text";
    downvotesRequest.send("postID=" + ID + "&vote=" + vote);
}