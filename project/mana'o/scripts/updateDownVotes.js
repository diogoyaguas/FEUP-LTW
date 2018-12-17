var downvotesRequest = new XMLHttpRequest();

downvotesRequest.onreadystatechange = function () {
    if(this.readyState === 4 && this.status === 200) {

        var response = JSON.parse(this.responseText);

        document.getElementById('downvote'+postID).innerHTML = response.vote;

    }
}

document.getElementById("downvotes").addEventListener("click", function () {

    var vote = document.getElementById('downvote'+postID).innerText;

    downvotesRequest.open('POST', '../actions/apiUpdateDownvotes.php', true);
    downvotesRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    downvotesRequest.responseType="text";
    downvotesRequest.send("postID="+postID+"&vote="+vote);

})