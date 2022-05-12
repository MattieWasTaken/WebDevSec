
<!DOCTYPE html>
<html>

<head>
<title>IMD Forum </title>
<link rel="stylesheet" ref="stylesheet2" href="index.css"/>
<link rel="stylesheet" ref="stylesheet" href="style.css"/>
</head>
<header>

<div>
	<img src="https://i.ibb.co/894Xm19/278471543-727015038329277-2731362503377802712-n.png" alt="Site Logo" border="0" style="width:75px; height:75px;" img align="left">
    
    <div class="row">
        
        <div class="column left">
           <a href="index.php"> <p class="mainheading" > OnlineTopia.com </p></a>

            <form action="underconstruction.php">
                <input type="text" name="q" id="" placeholder="Search...">
                <button type="submit">Submit</button> 
            </form>
        </div>
        
        <div class="column middle">
            <a href="ContactUs.php"><button>Contact Us</button></a>
            <a href="FAQ.php"><button>F.A.Q</button></a>
            <a href="createpost.php"><button>Submit Post</button></a>
            <br>  
        </div>
            
        <div class="column right">
        <a href="underconstruction.php"> <button class="smallbutton" > Create Account </button></a>
        <a href="underconstruction.php"> <button class="smallbutton" > Login </button></a>    
        </div>
        
    </div>

</div>
    
</header> 

<body>

    <div class="container">
        <div class="subforum">
			<?php
            include 'databaseConnection.php';
            $query = "SELECT * FROM forum_posts WHERE subtopic='potato'ORDER BY `topic_id` DESC LIMIT 3;";
            $result = mysqli_query($conn, $query);
            $resultCheck = mysqli_num_rows($result);

            while($rows[]=mysqli_fetch_array($result)){
                $potatoTitle1= $rows[0]['title'];
                $potatoTopicID1 = $rows[0]['topic_id'];
                $potatoUserID1 = $rows[0]['user_id'];
                $potatoContent1 = $rows[0]['content'];
                
            }
            $potatoTitle2= $rows[1]['title'];
            $potatoUserID2 = $rows[1]['user_id'];
            $potatoContent2 = $rows[1]['content'];
            $potatoTopicID2 = $rows[1]['topic_id'];
            $potatoTitle3= $rows[2]['title'];
            $potatoUserID3 = $rows[2]['user_id'];
            $potatoContent3 = $rows[2]['content'];
            $potatoTopicID3 = $rows[2]['topic_id'];
            $conn->close();
            ?>
			<br>
			<br>
			<br>
			<br>
            <div class="subforum-title">
                <h1><a href="potato.php">Recent Potato Posts</a></h1>
            </div>

            <div class="subforum-row">
                <div class="subforum-icon subform-column center">
                <div class="forum-picture1">
                        <img src="pictures/potato1.png">
                    </div>
                </div>
                <form method='GET'>
                <div class="subforum-description subforum-column">
                    <input type="hidden" name="<?php echo $potatoTopicID1 ?>"<?php echo $potatoTopicID1?>>
                    <h1><a href="Post.php?topic_id=<?php echo $potatoTopicID1?>"><?php echo $potatoTitle1 ?></a></h1>
                <p>Click to view more! </p>
                </div>
                </form>

            <div class="subforum-statistics subform-column center">
                <span>0 Comments | 0 Users Viewing</span>
            </div>

            <div class="subforum-info subforum-column">
              <b> <a href="">Post</a> </b> By <a href=""><?php echo $potatoUserID1 ?></a>
               
            </div>

            </div>
            <div class="subforum-row">
                <div class="subforum-icon subform-column center">
                <div class="forum-picture2">
                <img src="pictures/potato2.png">
                     </div>

                </div>

                <div class="subforum-description subforum-column">
                <h1><a href="Post.php?topic_id=<?php echo $potatoTopicID2?>"><?php echo $potatoTitle2?></a></h1>
                  <p>Click to view more! </p>
                </div>

            <div class="subforum-statistics subform-column center">
            <span>0 Comments | 0 Users Viewing</span>
            </div>

            <div class="subforum-info subforum-column">
              <b> <a href="">Post</a> </b> By <a href=""><?php echo $potatoUserID2 ?></a>
               
            </div>

            </div>
            <div class="subforum-row">
                <div class="subforum-icon subform-column center">
                <div class="forum-picture3">
                        <img src="pictures/potato3.jpg">
                    </div>
                </div>

                <div class="subforum-description subforum-column">
                <h1><a href="Post.php?topic_id=<?php echo $potatoTopicID3?>"><?php echo $potatoTitle3 ?></a></h1>
                  <p>Click to view more! </p>
                </div>

            <div class="subforum-statistics subform-column center">
            <span>0 Comments | 0 Users Viewing</span>
            </div>

            <div class="subforum-info subforum-column">
              <b> <a href="">Post</a> </b> By <a href=""><?php echo $potatoUserID3 ?></a>
    
            </div>
            </div>
        </div>
        <!-- LIFESTYLE FORUM-->

        <?php
        include 'databaseConnection.php';
    
            $query1 = "SELECT * FROM forum_posts WHERE subtopic='lifestyle' ORDER BY `topic_id` DESC LIMIT 3;";
            $lifestyleResult = mysqli_query($conn, $query1);
            $resultCheck = mysqli_num_rows($lifestyleResult);

            while($lifestyleRows[]=mysqli_fetch_assoc($lifestyleResult));
            $lifestyleTitle1= $lifestyleRows[0]['title'];
            $lifestyleUserID1 = $lifestyleRows[0]['user_id'];
            $lifestyleContent1 = $lifestyleRows[0]['content'];
            $lifestyleTopicID1= $lifestyleRows[0]['topic_id'];
            $lifestyleTitle2= $lifestyleRows[1]['title'];
            $lifestyleUserID2 = $lifestyleRows[1]['user_id'];
            $lifestyleContent2 = $lifestyleRows[1]['content'];
            $lifestyleTopicID2= $lifestyleRows[1]['topic_id'];
            $lifestyleTitle3= $lifestyleRows[2]['title'];
            $lifestyleUserID3 = $lifestyleRows[2]['user_id'];
            $lifestyleContent3 = $lifestyleRows[2]['content'];
            $lifestyleTopicID3= $lifestyleRows[2]['topic_id'];
            $conn->close();
        ?>
            
        <div class="subforum">
            <div class="subforum-title">
            <h1><a href="lifestyle.php">Recent Lifestyle Posts</a></h1>
            </div>

            <div class="subforum-row">
            <div class="subforum-icon subform-column center">
            <div class="forum-picture4">
                        <img src="pictures/lifestyle1.png">
                    </div>
                </div>

                <div class="subforum-description subforum-column">
                <h1><a href="Post.php?topic_id=<?php echo $lifestyleTopicID1?>"><?php echo $lifestyleTitle1 ?></a></h1>
                <p>Click to view more! </p>
                </div>


            <div class="subforum-statistics subform-column center">
            <span>0 Comments | 0 Users Viewing</span>
            </div>

            <div class="subforum-info subforum-column">
              <b> <a href="">Post</a> </b> By <a href=""><?php echo $lifestyleUserID1 ?></a>
              
            </div>

            </div>
            <div class="subforum-row">
                <div class="subforum-icon subform-column center">
                    <div class="forum-picture4">
                <img src="pictures/lifestyle2.png">
                      </div>
                    </div>

                <div class="subforum-description subforum-column">
                <h1><a href="Post.php?topic_id=<?php echo $lifestyleTopicID2?>"><?php echo $lifestyleTitle2 ?></a></h1>
                 <p>Click to view more! </p>
                </div>


            <div class="subforum-statistics subform-column center">
            <span>0 Comments | 0 Users Viewing</span>
            </div>

            <div class="subforum-info subforum-column">
              <b> <a href="">Post</a> </b> By <a href=""><?php echo $lifestyleUserID2 ?></a>
            
            </div>

            </div>
            <div class="subforum-row">
                <div class="subforum-icon subform-column center">
                <div class="forum-picture4">
                        <img src="pictures/lifestyle3.png">
                    </div>
                </div>

                <div class="subforum-description subforum-column">
                <h1><a href="Post.php?topic_id=<?php echo $lifestyleTopicID3?>"><?php echo $lifestyleTitle3 ?></a></h1>
                <p>Click to view more! </p>
                </div>


            <div class="subforum-statistics subform-column center">
            <span>0 Comments | 0 Users Viewing</span>
            </div>

            <div class="subforum-info subforum-column">
              <b> <a href="">Post</a> </b> By <a href=""><?php echo $lifestyleUserID3 ?></a>
            </div>
         </div>
        </div>
        <!-- GAMING FORUM-->

        
         <?php
         include 'databaseConnection.php';
     
             $query2 = "SELECT * FROM forum_posts WHERE subtopic='gaming' ORDER BY `topic_id` DESC LIMIT 3;";
             $gamingResult = mysqli_query($conn, $query2);
             $resultCheck = mysqli_num_rows($gamingResult);
 
             while($gamingRows[]=mysqli_fetch_assoc($gamingResult));
             $gamingTitle1= $gamingRows[0]['title'];
             $gamingUserID1 = $gamingRows[0]['user_id'];
             $gamingContent1 = $gamingRows[0]['content'];
             $gamingTopicID1 = $gamingRows[0]['topic_id'];
             $gamingTitle2= $gamingRows[1]['title'];
             $gamingUserID2 = $gamingRows[1]['user_id'];
             $gamingContent2 = $gamingRows[1]['content'];
             $gamingTopicID2 = $gamingRows[1]['topic_id'];
             $gamingTitle3= $gamingRows[2]['title'];
             $gamingUserID3 = $gamingRows[2]['user_id'];
             $gamingContent3 = $gamingRows[2]['content'];
             $gamingTopicID3 = $gamingRows[2]['topic_id'];
             $conn->close();
         ?>
        
        <div class="subforum">
            <div class="subforum-title">
            <h1><a href="gaming.php">Recent Gaming Posts</a></h1>
            </div>

            <div class="subforum-row">
                <div class="subforum-icon subform-column center">
                    <div class="forum-picture5">
                <img src="pictures/gaming1.png">
                </div>
        </div>

                <div class="subforum-description subforum-column">
                <h1> <a href="Post.php?topic_id=<?php echo $gamingTopicID1?>"><?php echo $gamingTitle1 ?></a></h1>
                  <p>Click to view more! </p>
                </div>

                <div class="subforum-statistics subform-column center">
                <span>0 Comments | 0 Users Viewing</span>
                </div>

                <div class="subforum-info subforum-column">
              <b> <a href="">Post</a> </b> By <a href=""><?php echo $gamingUserID1 ?></a>
               
            </div>
        
        </div>
    </div>
    <div class="subforum-row">
        <div class="subforum-icon subform-column center">
        <div class="forum-picture2">
                <img src="pictures/gaming2.png">
                </div>
        </div>

        <div class="subforum-description subforum-column">
                <h1> <a href="Post.php?topic_id=<?php echo $gamingTopicID2?>"><?php echo $gamingTitle2 ?></a></h1>
                  <p>Click to view more! </p>
                </div>


    <div class="subforum-statistics subform-column center">
    <span>0 Comments | 0 Users Viewing</span>
    </div>

    <div class="subforum-info subforum-column">
              <b> <a href="">Post</a> </b> By <a href=""><?php echo $gamingUserID2 ?></a>
         
            </div>

    </div>
    <div class="subforum-row">
        <div class="subforum-icon subform-column center">
        <div class="forum-picture4">
                <img src="pictures/gaming3.png">
                </div>
        </div>

        <div class="subforum-description subforum-column">
                <h1> <a href="Post.php?topic_id=<?php echo $gamingTopicID3?>"><?php echo $gamingTitle3 ?></a></h1>
                  <p>Click to view more! </p>
                </div>



    <div class="subforum-statistics subform-column center">
    <span>0 Comments | 0 Users Viewing</span>
    </div>

    <div class="subforum-info subforum-column">
              <b> <a href="">Post</a> </b> By <a href=""><?php echo $gamingUserID3 ?></a>
         
            </div>

    </div>


    </div>

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

    <script src="main.js>"> </script>

    </body>






</html>
