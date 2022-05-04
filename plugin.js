var post= document.getElementById("addComment")

comment = function(){
    var commentBoxValue = document.getElementById("commentBox").value;
    var li = document.createElement("li");
    var text = document.createTextNode(commentBoxValue);
    li.appendChild(text);
    document.getElementById("unordered").appendChild(li);
}

post.addEventListener("click", comment);