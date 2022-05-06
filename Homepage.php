<?php
    include_once 'databaseConnection.php';
?>

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
            <p class="mainheading" > OnlineTopia.com </p>

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

    <div class="container">
        <div class="subforum">
			<?php
            $query = "SELECT * FROM forum_posts WHERE subtopic='potato'ORDER BY `topic_id` DESC LIMIT 3;";
            $result = mysqli_query($conn, $query);
            $resultCheck = mysqli_num_rows($result);

            while($rows[]=mysqli_fetch_array($result));
            $potatoTitle1= $rows[0]['title'];
            $potatoUserID1 = $rows[0]['user_id'];
            $potatoContent1 = $rows[0]['content'];
            $potatoTitle2= $rows[1]['title'];
            $potatoUserID2 = $rows[1]['user_id'];
            $potatoContent2 = $rows[1]['content'];
            $potatoTitle3= $rows[2]['title'];
            $potatoUserID3 = $rows[2]['user_id'];
            $potatoContent3 = $rows[2]['content'];
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

                <div class="subforum-description subforum-column">
                <h1><a href="GenericPost.html"><?php echo $potatoTitle1 ?></a></h1>
                <p><?php echo $potatoContent1 ?> </p>
                </div>

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
                <h1><a href=""><?php echo $potatoContent2?></a></h1>
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
                <h1><a href=""><?php echo $potatoTitle3 ?></a></h1>
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
            $query1 = "SELECT * FROM forum_posts WHERE subtopic='lifestyle' ORDER BY `topic_id` DESC LIMIT 3;";
            $lifestyleResult = mysqli_query($conn, $query1);
            $resultCheck = mysqli_num_rows($lifestyleResult);

            while($rows[]=mysqli_fetch_array($result));
            $lifestyleTitle1= $rows[0]['title'];
            $lifestyleUserID1 = $rows[0]['user_id'];
            $lifestyleContent1 = $rows[0]['content'];
            $lifestyleTitle2= $rows[1]['title'];
            $lifestyleUserID2 = $rows[1]['user_id'];
            $lifestyleContent2 = $rows[1]['content'];
            $lifestyleTitle3= $rows[2]['title'];
            $lifestyleUserID3 = $rows[2]['user_id'];
            $lifestyleContent3 = $rows[2]['content'];
            $lifeStyleGenre = $rows[2]['subtopic'];
            echo $lifeStyleGenre;
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
                <h1><a href=""><?php echo $lifestyleTitle1 ?></a></h1>
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
                <h1> <a href=""><?php echo $lifestyleTitle2 ?></a></h1>
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
                <h1><a href=""><?php echo $lifestyleTitle2 ?></a></h1>
               <?php echo $lifestyleContent2?>
                </div>


            <div class="subforum-statistics subform-column center">
                <span>24 Posts | 15 Topics Available</span>
            </div>

            <div class="subforum-info subforum-column">
              <b> <a href="">Last Post</a> </b> By <a href="">Username XX</a>
                <br>
                On <small>22 Apr 2022</small>
            </div>

            </div>
        </div>
        <!-- GAMING FORUM-->
        <div class="subforum">
            <div class="subforum-title">
                <h1>Recent Gaming Posts</h1>
            </div>

            <div class="subforum-row">
                <div class="subforum-icon subform-column center">
                    <i class="fa fa-car"></i>
                </div>

                <div class="subforum-description subforum-column">
                <h1><a href="">Post Description1</a></h1>
                <p>This is the description of a post
                </p>
                </div>
                <div class="subforum-statistics subform-column center">
                <span>24 Posts | 15 Topics Available</span>
                </div>
                 <div class="subforum-info subforum-column">
              <b> <a href="">Last Post</a> </b> By <a href="">Username XX</a>
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
        <h1><a href="">Post Description2</a></h1>
        <p>This is the description of a post
        </p>
        </div>


    <div class="subforum-statistics subform-column center">
        <span>24 Posts | 15 Topics Available</span>
    </div>

    <div class="subforum-info subforum-column">
      <b> <a href="">Last Post</a> </b> By <a href="">Username XX</a>
        <br>
        On <small>22 Apr 2022</small>
    </div>

    </div>
    <div class="subforum-row">
        <div class="subforum-icon subform-column center">
            <i class="fa fa-car"></i>
        </div>

        <div class="subforum-description subforum-column">
        <h1><a href="">Post Description3</a></h1>
        <p>This is the description of a post
        </p>
        </div>


    <div class="subforum-statistics subform-column center">
        <span>24 Posts | 15 Topics Available</span>
    </div>

    <div class="subforum-info subforum-column">
      <b> <a href="">Last Post</a> </b> By <a href="">Username XX</a>
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
