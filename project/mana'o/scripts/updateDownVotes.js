let downvotesRequest = new XMLHttpRequest();

downvotesRequest.onreadystatechange = function () {
    if(this.readyState === 4 && this.status === 200) {

        let response = JSON.parse(this.responseText);
        console.log(response);

        document.getElementById('downvote').innerHTML = response.vote;

    }
}

document.getElementById("downvotes").addEventListener("click", function () {

    let vote = document.getElementById('downvote').innerText;

    downvotesRequest.open('POST', '../actions/apiUpdateDownvotes.php', true);
    downvotesRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    downvotesRequest.responseType="text";
    downvotesRequest.send("postID="+postID+"&vote="+vote);

})