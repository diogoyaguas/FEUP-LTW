let upvotesRequest = new XMLHttpRequest();

upvotesRequest.onreadystatechange = function () {
    if(this.readyState === 4 && this.status === 200) {

        let response = JSON.parse(this.responseText);

        document.getElementById('upvote').innerHTML = response.vote;
    }
}

document.getElementById("upvotes").addEventListener("click", function () {

    let vote = document.getElementById('upvote').innerText;

    upvotesRequest.open('POST', '../actions/apiUpdateUpVotes.php', true);
    upvotesRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    upvotesRequest.responseType="text";
    upvotesRequest.send("postID="+postID+"&vote="+vote);

})