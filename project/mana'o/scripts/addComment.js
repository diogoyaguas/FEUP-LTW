let request = new XMLHttpRequest();

request.onreadystatechange = function () {
    if(this.readyState === 4 && this.status === 200) {

        let response = JSON.parse(this.responseText);
        
        let article = document.createElement("article");
        article.setAttribute("id", "posted");
        let p1 = document.createElement("p");
        p1.setAttribute("id", "name");
        let name = document.createTextNode(response[0].Name);
        p1.appendChild(name);

        let div = document.createElement("div");
        div.setAttribute("id", "commentText");
        let text = document.createTextNode(decodeURIComponent(response[0].Text));
        div.appendChild(text);

        let p2 = document.createElement("p");
        p2.setAttribute("id", "commentDate");
        let date = document.createTextNode(response[0].Date);
        p2.appendChild(date);

        article.appendChild(p1);
        article.appendChild(div);
        article.appendChild(p2);

        let comments = document.getElementById("comments");
        comments.appendChild(article);
    }
}

document.getElementById("replyButton").addEventListener("click", function () {

    let text = document.getElementById('newCommentText').value;
    document.getElementById('newCommentText').value = "";

    request.open('POST', '../actions/apiAddComment.php', true);
    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    request.send("postID="+postID+"&text="+text);

})