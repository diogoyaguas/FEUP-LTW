function upvote(ID) {
    if(!doneUpvote) {
        var vote = document.getElementById('upvote' + ID);
        var number = parseInt(vote.innerHTML) + 1;
        document.getElementById('upvote' + ID).innerHTML = number;
        if(doneDownvote) {
            var vote = document.getElementById('downvote' + ID);
            var number = parseInt(vote.innerHTML) - 1;
            document.getElementById('downvote' + ID).innerHTML = number;
        }
        doneDownvote = false;
        doneUpvote = true;
    }
  }

  function downvote(ID) {
      if(!doneDownvote) {
        var vote = document.getElementById('downvote' + ID);
        var number = parseInt(vote.innerHTML) + 1;
        document.getElementById('downvote' + ID).innerHTML = number;
        if(doneUpvote) {
            var vote = document.getElementById('upvote' + ID);
            var number = parseInt(vote.innerHTML) - 1;
            document.getElementById('upvote' + ID).innerHTML = number;
        }
        doneDownvote = true;
        doneUpvote = false;
      }
  }
