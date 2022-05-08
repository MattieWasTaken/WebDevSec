<?php
    include_once 'databaseConnection.php';
?>

<?php

if(isset($_REQUEST['topic_id'])){
    $topic_id = $_REQUEST['topic_id'];
}

$query = "SELECT * FROM forum_posts WHERE topic_id= $topic_id;";
$result = mysqli_query($conn, $query);
$resultCheck = mysqli_num_rows($result);

if($resultCheck>0){
    while($row = mysqli_fetch_assoc($result)){
        echo "<br>";
        $content = $row['content']. "<br>";
        $content = nl2br($content);
        $title = $row['title'];
        $user_id= $row['user_id'];
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title?></title>
        <link rel="stylesheet" ref="stylesheet" href="style.css"/>
      
        </head>

        <header>

        <div>
	<img src="https://i.ibb.co/894Xm19/278471543-727015038329277-2731362503377802712-n.png" alt="Site Logo" border="0" style="width:75px; height:75px;" img align="left">
    
    <div class="row">
        
        <div class="column left">
        <a href="index.php"> <p class="mainheading" > OnlineTopia.com </p></a>

            <form action="/action_page.php">
                <input type="text" name="q" id="" placeholder="Search...">
                <button type="submit">Submit</button> 
            </form>
        </div>
        
        <div class="column middle">
            <a href="createpost.php"><button>Contact Us</button></a>
            <a href="createpost.php"><button>F.A.Q</button></a>
            <a href="createpost.php"><button>Submit Post</button></a>
            <br>  
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
            <h2><?php echo $title?></h2>
            <div class="post-author">
                <span>By:</span>
               <?php echo $user_id?>
            </div>
        </div>
        <div class="post-content">
            <a>
                <?php echo $content?>
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

       
        <script src="plugin.js"></script>
</body>
<footer>
	<div class="footerarea">
		<a href="ContactUs.php"> <f style = "border:red; border-width:2px; border-style:solid;">Contact US</f></a>
        <a href="FAQ.php"><f  style = "border:red; border-width:2px; border-style:solid;">F.A.Q.</f></a>
        <a href="support.php"><f style = "border:red; border-width:2px; border-style:solid;">Support</f></a>
		<a href="aboutus.php"> <f style = "border:red; border-width:2px; border-style:solid;">About Us</f></a>
        <a href="contentpolicy.php"><f href="#Content Policy" style = "border:red; border-width:2px; border-style:solid;">Content Policy</f></a>
        <div class="copyright">
        <small>&copy; Copyright 2018, IMD Internet Solutions Inc</small>
        </div>
    </div>
	
	
	</footer>
</html>
