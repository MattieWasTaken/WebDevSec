
<!DOCTYPE html>
<html>

<head>
<title>Potato Forum </title>
<link rel="stylesheet" ref="stylesheet" href="style.css"/>
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
            <a href="aboutus.php"><button>Contact Us</button></a>
            <a href="FAQ.php"><button>F.A.Q</button></a>
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
                <h1>Recent Potato Posts</h1>
            </div>

            <div class="subforum-row">
                <div class="subforum-icon subform-column center">
                    <p>upvote counters</p>
                </div>
                <form method='GET'>
                <div class="subforum-description subforum-column">
                    <input type="hidden" name="<?php echo $potatoTopicID1 ?>"<?php echo $potatoTopicID1?>":>
                    <h1><a href="Post.php?topic_id=<?php echo $potatoTopicID1?>"><?php echo $potatoTitle1 ?></a></h1>
                <p><?php echo $potatoContent1 ?> </p>
                </div>
                </form>

            <div class="subforum-statistics subform-column center">
                <span>24 Comments | 3 Users Viewing</span>
            </div>

            <div class="subforum-info subforum-column">
              <b> <a href="">Last Post</a> </b> By <a href=""><?php echo $potatoUserID1 ?></a>
                <br>
                On <small>22 Apr 2022</small>
            </div>

            </div>
            <div class="subforum-row">
                <div class="subforum-icon subform-column center">
                    <i class="fa fa-car"></i>

                </div>

                <div class="subforum-description subforum-column">
                <h1><a href="Post.php?topic_id=<?php echo $potatoTopicID2?>"><?php echo $potatoTitle2?></a></h1>
                <?php echo $potatoContent2 ?>
                </div>

            <div class="subforum-statistics subform-column center">
                <span>24 Posts | 15 Topics Available</span>
            </div>

            <div class="subforum-info subforum-column">
              <b> <a href="">Last Post</a> </b> By <a href=""><?php echo $potatoUserID2 ?></a>
                <br>
                On <small>22 Apr 2022</small>
            </div>

            </div>
            <div class="subforum-row">
                <div class="subforum-icon subform-column center">
                    <i class="fa fa-car"></i>
                </div>

                <div class="subforum-description subforum-column">
                <h1><a href="Post.php?topic_id=<?php echo $potatoTopicID3?>"><?php echo $potatoTitle3 ?></a></h1>
                <?php echo $potatoContent3 ?>
                </div>

            <div class="subforum-statistics subform-column center">
                <span>24 Posts | 15 Topics Available</span>
            </div>

            <div class="subforum-info subforum-column">
              <b> <a href="">Last Post</a> </b> By <a href=""><?php echo $potatoUserID3 ?></a>
                <br>
                On <small>22 Apr 2022</small>
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
                <h1>Recent Lifestyle Posts</h1>
            </div>

            <div class="subforum-row">
            <div class="subforum-icon subform-column center">
                    <p>upvote counters</p>
                </div>

                <div class="subforum-description subforum-column">
                <h1><a href="Post.php?topic_id=<?php echo $lifestyleTopicID1?>"><?php echo $lifestyleTitle1 ?></a></h1>
               <?php echo $lifestyleContent1?>
                </div>


            <div class="subforum-statistics subform-column center">
                <span>24 Posts | 15 Topics Available</span>
            </div>

            <div class="subforum-info subforum-column">
              <b> <a href="">Last Post</a> </b> By <a href=""><?php echo $lifestyleUserID1 ?></a>
                <br>
                On <small>22 Apr 2022</small>
            </div>

            </div>
            <div class="subforum-row">
                <div class="subforum-icon subform-column center">
                    <i class="fa fa-car"></i>
                </div>

                <div class="subforum-description subforum-column">
                <h1><a href="Post.php?topic_id=<?php echo $lifestyleTopicID2?>"><?php echo $lifestyleTitle2 ?></a></h1>
                <?php echo $lifestyleContent2?>
                </div>


            <div class="subforum-statistics subform-column center">
                <span>24 Posts | 15 Topics Available</span>
            </div>

            <div class="subforum-info subforum-column">
              <b> <a href="">Last Post</a> </b> By <a href=""><?php echo $lifestyleUserID2 ?></a>
                <br>
                On <small>22 Apr 2022</small>
            </div>

            </div>
            <div class="subforum-row">
                <div class="subforum-icon subform-column center">
                    <i class="fa fa-car"></i>
                </div>

                <div class="subforum-description subforum-column">
                <h1><a href="Post.php?topic_id=<?php echo $lifestyleTopicID3?>"><?php echo $lifestyleTitle3 ?></a></h1>
               <?php echo $lifestyleContent3?>
                </div>


            <div class="subforum-statistics subform-column center">
                <span>24 Posts | 15 Topics Available</span>
            </div>

            <div class="subforum-info subforum-column">
              <b> <a href="">Last Post</a> </b> By <a href=""><?php echo $lifestyleUserID3 ?></a>
                <br>
                On <small>22 Apr 2022</small>
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
                <h1>Recent Gaming Posts</h1>
            </div>

            <div class="subforum-row">
                <div class="subforum-icon subform-column center">
                    <i class="fa fa-car"></i>
                </div>

                <div class="subforum-description subforum-column">
                <h1> <a href="Post.php?topic_id=<?php echo $gamingTopicID1?>"><?php echo $gamingTitle1 ?></a></h1>
                <?php echo $gamingContent1?>
                </div>

                <div class="subforum-statistics subform-column center">
                <span>24 Posts | 15 Topics Available</span>
                </div>

                <div class="subforum-info subforum-column">
              <b> <a href="">Last Post</a> </b> By <a href=""><?php echo $gamingUserID1 ?></a>
                <br>
                On <small>22 Apr 2022</small>
            </div>
        
        </div>
    </div>
    <div class="subforum-row">
        <div class="subforum-icon subform-column center">
            <i class="fa fa-car"></i>
        </div>

        <div class="subforum-description subforum-column">
                <h1> <a href="Post.php?topic_id=<?php echo $gamingTopicID2?>"><?php echo $gamingTitle2 ?></a></h1>
                <?php echo $gamingContent2?>
                </div>


    <div class="subforum-statistics subform-column center">
        <span>24 Posts | 15 Topics Available</span>
    </div>

    <div class="subforum-info subforum-column">
              <b> <a href="">Last Post</a> </b> By <a href=""><?php echo $gamingUserID2 ?></a>
                <br>
                On <small>22 Apr 2022</small>
            </div>

    </div>
    <div class="subforum-row">
        <div class="subforum-icon subform-column center">
            <i class="fa fa-car"></i>
        </div>

        <div class="subforum-description subforum-column">
                <h1> <a href="Post.php?topic_id=<?php echo $gamingTopicID3?>"><?php echo $gamingTitle3 ?></a></h1>
                <?php echo $gamingContent3?>
                </div>



    <div class="subforum-statistics subform-column center">
        <span>24 Posts | 15 Topics Available</span>
    </div>

    <div class="subforum-info subforum-column">
              <b> <a href="">Last Post</a> </b> By <a href=""><?php echo $gamingUserID3 ?></a>
                <br>
                On <small>22 Apr 2022</small>
            </div>

    </div>


    </div>

	<footer>
	<div class="footerarea">
		<f class="active" href="#Contact Us" style = "border:red; border-width:2px; border-style:solid;">Contact US</f>
        <f href="#F.A.Q." style = "border:red; border-width:2px; border-style:solid;">F.A.Q.</f>
        <f href="#Support" style = "border:red; border-width:2px; border-style:solid;">Support</f>
		<f href="#About Us" style = "border:red; border-width:2px; border-style:solid;">About Us</f>
        <f href="#Content Policy" style = "border:red; border-width:2px; border-style:solid;">Content Policy</f>
	</div>
	
	
	</footer>

    <script src="main.js>"> </script>

    </body>






</html>
