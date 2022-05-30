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
        <link rel="stylesheet" ref="stylesheet2" href="index.css"/>
        <link rel="stylesheet" ref="stylesheet" href="style.css"/>
      
        </head>


        <header>
<?php include_once 'header.php'; ?>
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
