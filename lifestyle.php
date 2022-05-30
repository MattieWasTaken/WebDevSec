<!DOCTYPE html>
<html>

<head>
<title>Lifestyle Forum </title>
<link rel="stylesheet" ref="stylesheet2" href="lifestyle.css"/>
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
            $query = "SELECT * FROM forum_posts WHERE subtopic='lifestyle'ORDER BY `topic_id` DESC LIMIT 10;";
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
<?php include_once 'footer.php';?>

</html>