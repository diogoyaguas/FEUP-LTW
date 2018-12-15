var doneUpvote = false;
var doneDownvote = false;

function upvote(ID) {
    if(!doneUpvote) {
        var vote = document.getElementById('upvote' + ID);
        var upnumber = parseInt(vote.innerHTML) + 1;
        document.getElementById('upvote' + ID).innerHTML = upnumber;
        if(doneDownvote) {
            var vote = document.getElementById('downvote' + ID);
            var downnumber = parseInt(vote.innerHTML) - 1;
            document.getElementById('downvote' + ID).innerHTML = downnumber;
        }
        doneDownvote = false;
        doneUpvote = true;
        updateVotes(ID);
    }
  }

  function downvote(ID) {
      if(!doneDownvote) {
        var vote = document.getElementById('downvote' + ID);
        var downnumber = parseInt(vote.innerHTML) + 1;
        document.getElementById('downvote' + ID).innerHTML = downnumber;
        if(doneUpvote) {
            var vote = document.getElementById('upvote' + ID);
            var upnumber = parseInt(vote.innerHTML) - 1;
            document.getElementById('upvote' + ID).innerHTML = upnumber;
        }
        doneDownvote = true;
        doneUpvote = false;
        updateVotes(ID);
      }
  }

function updateVotes(ID) {

    vote.ajax({
        url: "../actions/updateVotes.php",
        type: "POST",
        data: { 'postID': ID, 'upvotes': document.getElementById('upvote' + ID).innerHTML , 'downvotes': document.getElementById('downvote' + ID).innerHTML }
    });
}