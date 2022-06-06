<!doctype html>
<html lang="en">
<div class="bg-image" style="background-image: url('https://ae01.alicdn.com/kf/HTB1CKe5QNTpK1RjSZFKq6y2wXXaC/LIFE-MAGIC-BOX-Black-Brick-Wall-for-Photo-Background-for-Photo-Sessions-for-Photography-Birthday-Backdrops.jpg_Q90.jpg_.webp'); height: 100vh;">
  <head>
    <title>IMD Forum</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<header>
<?php 
include_once('header.php');
include_once('databaseConnection.php');
$username = $_GET['user_id'];
$userID = $_GET['user_id'];

?>
</header>

<body>
<div class="bg-image" style="background-image: url('https://ae01.alicdn.com/kf/HTB1CKe5QNTpK1RjSZFKq6y2wXXaC/LIFE-MAGIC-BOX-Black-Brick-Wall-for-Photo-Background-for-Photo-Sessions-for-Photography-Birthday-Backdrops.jpg_Q90.jpg_.webp'); height: 100vh;">
<div class="container-fluid">
    <?php 
     if($_GET['display']=='posts'){
     echo "<div class='row p-3 mb-2 mt-2 bg-secondary text-white rounded'>
     <h3 class='text-left'>$username's Posts</h3>
    </div>";
    }else if($_GET['display']=='comments'){
        echo "<div class='row p-3 mb-2 mt-2 bg-secondary text-white rounded'>
        <h3 class='text-left'>$username's Comments</h3>
       </div>";
       }
       else if($_GET['display']=='bio'){
        echo "<div class='row p-3 mb-2 mt-2 bg-secondary text-white rounded'>
        <h3 class='text-left'>$username's Bio</h3>
       </div>";
       }
    ?>

    <div class="row p-3 mb-2 mt-2 bg-secondary text-white rounded-top">
        
    <?php 
        if($_GET['display']=='posts'){
            echo "<nav>
            <div class='nav nav-tabs ml-2' id='nav-tab' role='tablist'>
            <a class='nav-item nav-link active text-black' id='nav-home-tab' data-toggle='tab' href='user.php?user_id=$userID&display=posts' role='tab' aria-controls='nav-home' aria-selected='true'>Posts</a>
            <a class='nav-item nav-link text-white' id='nav-profile-tab' data-toggle='tab' href='user.php?user_id=$userID&display=comments' role='tab' aria-controls='nav-profile' aria-selected='false'>Comments</a>
            <a class='nav-item nav-link text-white' id='nav-contact-tab' data-toggle='tab' href='user.php?user_id=$userID&display=bio' role='tab' aria-controls='nav-contact' aria-selected='false'>Bio</a>
            </div>
        </nav>";
        }else if($_GET['display']=='comments'){
            echo "<nav>
            <div class='nav nav-tabs ml-2' id='nav-tab' role='tablist'>
            <a class='nav-item nav-link text-white' id='nav-home-tab' data-toggle='tab' href='user.php?user_id=$userID&display=posts' role='tab' aria-controls='nav-home' aria-selected='true'>Posts</a>
            <a class='nav-item nav-link active text-black' id='nav-profile-tab' data-toggle='tab' href='user.php?user_id=$userID&display=comments' role='tab' aria-controls='nav-profile' aria-selected='false'>Comments</a>
            <a class='nav-item nav-link text-white' id='nav-contact-tab' data-toggle='tab' href='user.php?user_id=$userID&display=bio' role='tab' aria-controls='nav-contact' aria-selected='false'>Bio</a>
            </div>
        </nav>";
        }else if($_GET['display']=='bio'){
            echo "<nav>
            <div class='nav nav-tabs ml-2' id='nav-tab' role='tablist'>
            <a class='nav-item nav-link text-white' id='nav-home-tab' data-toggle='tab' href='user.php?user_id=$userID&display=posts' role='tab' aria-controls='nav-home' aria-selected='true'>Posts</a>
            <a class='nav-item nav-link text-white' id='nav-profile-tab' data-toggle='tab' href='user.php?user_id=$userID&display=comments' role='tab' aria-controls='nav-profile' aria-selected='false'>Comments</a>
            <a class='nav-item nav-link active text-black' id='nav-contact-tab' data-toggle='tab' href='user.php?user_id=$userID&display=bio' role='tab' aria-controls='nav-contact' aria-selected='false'>Bio</a>
            </div>
        </nav>";
        }else{
            header("Location: user.php?uid=$userID&display=posts");
        }
    ?>

    </div>
    <?php 

    if($_GET['display']=="posts"){
        $query = "SELECT * FROM `forum_posts` WHERE user_id='$username';";
        $result = mysqli_query($conn, $query);
        $resultCheck = mysqli_num_rows($result);
        $counter=0;
        $postCounter=1;
        while($rows[]=mysqli_fetch_array($result)){
            $title= $rows[$counter]['title'];
            $topicID = $rows[$counter]['topic_id'];
            $userID = $rows[$counter]['user_id'];
            $subtopic = $rows[$counter]['subtopic'];
            $date = $rows[$counter]['date_submitted'];
            echo "   
            <div class='container-fluid'>
            <div class='row'>
            <div class='col-sm-1 p-3 mb-2 bg-secondary text-center text-white rounded ml-2 mr-1'>
            <span>$postCounter.</span>
            </div>
            <div class='col-lg p-3 mb-2 bg-secondary text-white rounded ml-1 mr-1'>
            <form method='GET'>
            <input type='hidden' name='$topicID' $topicID> 
            <a class='text-white' href='Post.php?topic_id=$topicID&subtopic=$subtopic'><h5 class='text-left'>$title</h3></a>
            </form>
            </div>
            <div class='col-sm-1 p-3 mb-2 bg-secondary text-white rounded ml-1 mr-2'>
            <form method='GET' name'$userID' $userID>
            <p class='text-left'>Date: $date</p>
            <a class='text-white' href='user.php?user_id=$userID&display=posts'> <small>By: $userID</small></a>
            </form>
            </div>      
            </div>
        </div>";
        $counter++;
        $postCounter++;
    }

    
    }
    if($_GET['display']=="comments"){
        $query2 = "SELECT * FROM `comment_section` WHERE username='$username';";
        $result2 = mysqli_query($conn, $query2);
        $resultCheck2 = mysqli_num_rows($result2);
        $counter2=0;
        $postCounter2=1;
        while($rows2[]=mysqli_fetch_array($result2)){
            $topicID2 = $rows2[$counter2]['parent_thread'];
            $userID2 = $rows2[$counter2]['username'];
            $content2 = $rows2[$counter2]['content'];
            $date2 = $rows2[$counter2]['date'];
            echo "   
            <div class='container-fluid'>
            <div class='row'>
            <div class='col-sm-1 p-3 mb-2 bg-secondary text-center text-white rounded ml-2 mr-1'>
            <span>$postCounter2.</span>
            </div>
            <div class='col-lg p-3 mb-2 bg-secondary text-white rounded ml-1 mr-1'>
            <form method='GET'>
            <input type='hidden' name='$topicID2' $topicID2> 
            <a class='text-white' href='Post.php?topic_id=$topicID2'><p class='text-left text-break'>$content2</p></a>
            </form>
            </div>
            <div class='col-sm-1 p-3 mb-2 bg-secondary text-white rounded ml-1 mr-2'>
            <form method='GET' name'$userID2' $userID2>
            <p class='text-left'>Date: $date2</p>
            <a class='text-white' href='user.php?user_id=$userID2&display=posts'> <small>By: $userID2</small></a>
            </form>
            </div>      
            </div>
        </div>";
        $counter2++;
        $postCounter2++;
    }
}
    if($_GET['display']=="bio"){
        $query1 = "SELECT bio FROM `users` WHERE `username`='$username';";
        $result1 = mysqli_query($conn, $query1);
        $resultCheck1 = mysqli_num_rows($result1);
            $rows1 = mysqli_fetch_array($result1);
            $bioInfo = nl2br($rows1[0]);
            $bioInfoForPrinting = preg_replace("/<br\W*?\/>/", "", $bioInfo);
            if($bioInfo==""){
                echo "
                <div class='container-fluid'>
                <div class='row'>
                <div class='col-lg p-3 mb-2 bg-secondary text-white rounded ml-1 mr-1'>
                This User has not created a bio.
                </div>
                </div>
                </div>";
                if($username==$_SESSION['username']){
                    echo"
                    <form class='bg-secondary rounded ml-1 mr-1' action='submitbio.php' method='POST'>
                    <div class='form-group'>
                    <label class='text-white ml-3' for='content'>Update Your Bio Now</label>
                    <textarea class='form-control ml-1' id='content' name='content' rows='10'></textarea>
                    </div>
                    <a type='hidden' name='username' id='username' $username>
                    <button class='rounded ml-1'type='submit' name='submit'>Create Bio</button>
                    </form>";
                }
            }else if($bioInfo!=""){
                echo "
                <div class='container-fluid'>
                <div class='row'>
                <div class='col-lg p-3 mb-2 bg-secondary text-white rounded ml-1 mr-1'>
                <input type='hidden' name='$topicID' $topicID> 
               <p class='text-left'>$bioInfo</p>
                </div>
                </div>
            </div>";
            if($username==$_SESSION['username']){
                echo"
                <form class='bg-secondary rounded ml-1 mr-1' action='submitbio.php' method='POST'>
                <div class='form-group'>
                <label class='text-white ml-3' for='content'>Edit Your Bio</label>
                <textarea class='form-control ml-1' id='content' name='content' rows='10'>$bioInfoForPrinting</textarea>
                </div>
                <a type='hidden' name='username' id='username' $username>
                <button class='rounded ml-1'type='submit' name='submit'>Edit Bio</button>
                </form>";
            }
            }
            }
      
    

    

    ?>
 

</div>
    </div>


</body>

<?php include 'footer.php'?>
