<?php
    include_once 'databaseConnection.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Forum Post 1 </title>
        <link rel="stylesheet" ref="stylesheet" href="style.css"/>
      
        </head>

        <header>

<div>
	<img src="https://i.ibb.co/894Xm19/278471543-727015038329277-2731362503377802712-n.png" alt="Site Logo" border="0" style="width:75px; height:75px;" img align="left">
    
    <div class="row">
        
        <div class="column left">
            <p class="mainheading" > OnlineTopia.com </p>

            <form action="/action_page.php">
                <input type="text" name="q" id="" placeholder="Search...">
                <button type="submit">Submit</button> 
            </form>
        </div>
        
        <div class="column middle">
            <button class="active" href="#Contact Us" style = "border:red; border-width:2px; border-style:solid;">Home</button>
            <button href="#F.A.Q." style = "border:red; border-width:2px; border-style:solid;">My Account</button>
            <button href="#Support" style = "border:red; border-width:2px; border-style:solid;">Create Post</button>
            <br></br>
            
            
            
        </div>
            
        <div class="column right">
            <button class="smallbutton" href="#CreateAcc"> Create Account </button>
            <button class="smallbutton" href="#LOGINPAGE"> Log In </button>
        </div>
        
    </div>

</div>
    
</header> 

<body>
    
     <div class="subforum">
        <div class="post-title">
            <h2>My Favourite Types of Potato</h2>
            <div class="post-author">
                By MIDN Castles
            </div>
        </div>
        <div class="post-content">
            <a>
                sdgnsdafjignasdgnadhg bdaklgnadujhgbsdhjbgjhsudfbgdashbfghasdbfghjgasdbgfhadbfgdhju
                <br>
                sfagfd
                <br>
                fadsfaga
            </a>
        </div>

<!-- Visually Better Comment Function in the making
        <div class="comment-section">
            <h2>Leave a Comment</h2>
            <form>
                <textarea id="commentBox" placeholder="Add A Comment"></textarea>
                <div class="commentbutton">
                    <input type="submit" id="addComment" value="Comment">
                    <button id="clear">Cancel</button>
                </div>
            </form>
            <ul id="unordered">
                dfgsdgdsa
            </ul>
        </div>

-->

<input type="text" id="comment-box" placeholder="Enter comment">
<button id="post">Post</button>
<ul id="unordered"> 
</ul>
       
        <script src="plugin.js"></script>
</body>

</html>
