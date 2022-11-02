<!doctype html>
<html lang="en">
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
$ID = $_SESSION['ID'];
$type = $_SESSION['type'];
$email = $_SESSION['email'];
$fName = $_SESSION['fname'];
$userID = $_GET['user_id'];
$courseID = $_SESSION['classID'];
?>
</header>

<body>
<div class="container-fluid bg-dark text-white pt-3">
<div class="container-fluid">
    <?php 
     if($_GET['display']=='courses'){
     echo "<div class='row p-3 mb-2 mt-2 bg-secondary text-white rounded'>
     <h3 class='text-left'>$fName's Courses</h3>
    </div>";
    }else if($_GET['display']=='students'){
        echo "<div class='row p-3 mb-2 mt-2 bg-secondary text-white rounded'>
        <h3 class='text-left'>$fName's Students</h3>
       </div>";
       }
       else if($_GET['display']=='attendance'){
        echo "<div class='row p-3 mb-2 mt-2 bg-secondary text-white rounded'>
        <h3 class='text-left'>$fName's Attendance Records</h3>
       </div>";
       }
    ?>
    <div class="container-fluid">
    <div class="row p-3 mb-2 mt-2 bg-secondary text-white rounded">
        
    <?php 
        if($_GET['display']=='courses'){
            echo "<nav>
            <div class='nav nav-tabs ml-2' id='nav-tab' role='tablist'>
            <a class='nav-item nav-link active text-black' id='nav-home-tab' data-toggle='tab' href='user.php?user_id=$ID&display=courses' role='tab' aria-controls='nav-home' aria-selected='true'>Courses</a>
            <a class='nav-item nav-link text-white' id='nav-profile-tab' data-toggle='tab' href='user.php?user_id=$ID&display=students' role='tab' aria-controls='nav-profile' aria-selected='false'>Students</a>
            <a class='nav-item nav-link text-white' id='nav-contact-tab' data-toggle='tab' href='user.php?user_id=$ID&display=attendance' role='tab' aria-controls='nav-contact' aria-selected='false'>Attendance</a>
            </div>
        </nav>";
        }else if($_GET['display']=='students'){
            echo "<nav>
            <div class='nav nav-tabs ml-2' id='nav-tab' role='tablist'>
            <a class='nav-item nav-link text-white' id='nav-home-tab' data-toggle='tab' href='user.php?user_id=$ID&display=courses' role='tab' aria-controls='nav-home' aria-selected='true'>Courses</a>
            <a class='nav-item nav-link active text-black' id='nav-profile-tab' data-toggle='tab' href='user.php?user_id=$ID&display=students' role='tab' aria-controls='nav-profile' aria-selected='false'>Students</a>
            <a class='nav-item nav-link text-white' id='nav-contact-tab' data-toggle='tab' href='user.php?user_id=$ID&display=attendance' role='attendance' aria-controls='nav-contact' aria-selected='false'>Attendance</a>
            </div>
        </nav>";
        }else if($_GET['display']=='attendance'){
            echo "<nav>
            <div class='nav nav-tabs ml-2' id='nav-tab' role='tablist'>
            <a class='nav-item nav-link text-white' id='nav-home-tab' data-toggle='tab' href='user.php?user_id=$ID&display=courses' role='tab' aria-controls='nav-home' aria-selected='true'>Courses</a>
            <a class='nav-item nav-link text-white' id='nav-profile-tab' data-toggle='tab' href='user.php?user_id=$ID&display=students' role='tab' aria-controls='nav-profile' aria-selected='false'>Students</a>
            <a class='nav-item nav-link active text-black' id='nav-contact-tab' data-toggle='tab' href='user.php?user_id=$ID&display=attendance' role='tab' aria-controls='nav-contact' aria-selected='false'>Attendance</a>
            </div>
        </nav>";
        }else{
            header("Location: user.php?user_id=$fName&display=courses");
        }
    ?>

    </div>
    </div>
    <?php 

    if($_GET['display']=="courses"){
        $query = "SELECT * FROM `courses` WHERE courseID = $courseID;";
        $result = mysqli_query($conn, $query);
        $resultCheck = mysqli_num_rows($result);
        $counter=0;
        $postCounter=1;
        while($rows[]=mysqli_fetch_array($result)){
            $courseName= $rows[$counter]['courseName'];
            $courseID = $rows[$counter]['courseID'];
            echo "   
            <div class='container-fluid'>
            <div class='row'>
            <div class='col-sm-1 p-3 mb-2 bg-secondary text-center text-white rounded ml-2 mr-1'>
            <span>$postCounter.</span>
            </div>
            <div class='col-lg p-3 mb-2 bg-secondary text-white rounded ml-1 mr-1'>
            <form method='GET'>
            <input type='hidden' name='$courseID' $courseID> 
            <a class='text-white' href='Post.php?topic_id=$courseID'><h5 class='text-left'>$courseName</h3></a>
            </form>
            </div>
            <div class='col-sm-1 p-3 mb-2 bg-secondary text-white rounded ml-1 mr-2'>
            <form method='GET' name'$courseID' $courseID>
            </form>
            </div>      
            </div>
            </div>
            ";
        $counter++;
        $postCounter++;
    }
    
    
    }
    if($_GET['display']=="students"){
        $query2 = "SELECT * FROM `personid` WHERE classID ='$courseID';";
        $result2 = mysqli_query($conn, $query2);
        $resultCheck2 = mysqli_num_rows($result2);
        $counter2=0;
        $postCounter2=1;
        while($rows2[]=mysqli_fetch_array($result2)){
            $topicID2 = $rows2[$counter2]['ID'];
            $content2 = $rows2[$counter2]['firstName'];
            $content22 = $rows2[$counter2]['lastName'];
            echo "   
            <div class='container-fluid'>
            <div class='row'>
            <div class='col-sm-1 p-3 mb-2 bg-secondary text-center text-white rounded ml-2 mr-1'>
            <span>$postCounter2.</span>
            </div>
            <div class='col-lg p-3 mb-2 bg-secondary text-white rounded ml-1 mr-1'>
            <form method='GET'>
            <input type='hidden' name='$topicID2' $topicID2> 
            <a class='text-white' href='Post.php?topic_id=$topicID2'><p class='text-left text-break'>$content2 $content22</p></a>
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
