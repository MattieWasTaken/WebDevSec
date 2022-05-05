var post= document.getElementById("post");
post.addEventListener("click", addComment);

function addComment(){
    var commentBoxValue= document.getElementById("comment-box").value;
    var li = document.createElement("li");
    var text = document.createTextNode(commentBoxValue);
    li.appendChild(text);
    document.getElementById("unordered").appendChild(li);
    document.getElementById("comment-box").value='';
}
