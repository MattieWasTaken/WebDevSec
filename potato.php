<!DOCTYPE html>
<html>

<head>
<title>Potato Forum </title>
<link rel="stylesheet" ref="stylesheet2" href="potato.css"/>
<link rel="stylesheet" ref="stylesheet" href="style.css"/>

</head>

<header>
<?php include_once 'header.php'; ?>
</header>


<body>
<div class="subforum-title">
                <h1>Recent Potato Posts</h1>
            </div>
            
<div class="subforum">
    
			<?php
            include 'databaseConnection.php';
            $query = "SELECT * FROM forum_posts WHERE subtopic='potato'ORDER BY `topic_id` DESC LIMIT 10;";
            $result = mysqli_query($conn, $query);
            $resultCheck = mysqli_num_rows($result);
            $counter=0;
            $postCounter=1;
            while($rows[]=mysqli_fetch_array($result)){
                $potatoTitle1= $rows[$counter]['title'];
                $potatoTopicID1 = $rows[$counter]['topic_id'];
                $potatoUserID1 = $rows[$counter]['user_id'];
                $potatoContent1 = nl2br($rows[$counter]['content']);
                echo "
                <div class='subforum-row'>
        <div class='subforum-icon subform-column center'>
                 <h3>$postCounter.</h3>
            </div>
                
                <form method='GET'>
                        <div class='subforum-description subform-column'>
                        <input type='hidden' name='$potatoTopicID1'$potatoTopicID1>
                        <h1> <a href='Post.php?topic_id=$potatoTopicID1'>$potatoTitle1</a></h1>
                        <p>Click To View Post!</p></div></form>
                    
                        <div class='subforum-statistics subform-column center'>
                        <span>0 Comments | 0 Users Viewing</span>
                    </div>
        
                    <div class='subforum-info subforum-column'>
                      <b> <a href=''>Post</a> </b> By <a href=''>$potatoUserID1</a>
                        <br>
                        On <small>22 Apr 2022</small>
                    </div>
                    </div>
                    </div>
                        ";
                $counter++;
                $postCounter++;

                
            }

            ?>
            
            


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