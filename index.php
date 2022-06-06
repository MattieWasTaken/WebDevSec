<!doctype html>
<html lang="en">
  <div class="bg-image" style="background-image: url('https://ae01.alicdn.com/kf/HTB1CKe5QNTpK1RjSZFKq6y2wXXaC/LIFE-MAGIC-BOX-Black-Brick-Wall-for-Photo-Background-for-Photo-Sessions-for-Photography-Birthday-Backdrops.jpg_Q90.jpg_.webp'); height: 110vh;">
  <head>
    <title>IMD Forum</title>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>

<?php 
include_once('header.php');
include_once('databaseConnection.php');
?>
  
<body>

<div class="bd-example" style="margin-top:0px">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
    </ol>

    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="container-fluid">
          <div class="row p-3 mb-2 mt-2 bg-secondary text-white rounded">
            <h3 class="text-left">Recent Potato Posts:</h3>
          </div>
        </div>

      <?php 
          $query = "SELECT * FROM forum_posts WHERE subtopic = 'Potato' ORDER BY `topic_id` DESC LIMIT 4;";
          $result = mysqli_query($conn, $query);
          $resultCheck = mysqli_num_rows($result);
          $counter=0;
          $postCounter=1;
          while($rows[]=mysqli_fetch_array($result)){
            $title= $rows[$counter]['title'];
            $topicID = $rows[$counter]['topic_id'];
            $userID = $rows[$counter]['user_id'];
            $content = nl2br($rows[$counter]['content']);
            $subtopic = $rows[$counter]['subtopic'];
            $date = $rows[$counter]['date_submitted'];
            echo "   
              <div class='container-fluid'>
                <div class='row'>
                  <div class='col-sm-1 p-3 mb-2 bg-secondary text-white rounded ml-2 mr-1'>
                    <form method='GET'>
                      <input type='hidden' name='$subtopic' $subtopic>
                      <span>$postCounter.</span><br>
                      <span>Topic:  <a class='text-light' href='subforum.php?subtopic=$subtopic&page=1'>$subtopic</a></span>
                    </form>
                  </div>
                  <div class='col-lg p-3 mb-2 bg-secondary text-white rounded ml-1 mr-1'>
                    <form method='GET'>
                      <input type='hidden' name='$topicID' $topicID> 
                      <a class='text-white' href='Post.php?topic_id=$topicID'><h5 class='text-left'>$title</h3></a>
                      <small class='overflow-hidden'>CONTENT PREVIEW</small>
                    </form>
                  </div>
                  <div class='col-sm-1 p-3 mb-2 bg-secondary text-white rounded ml-1 mr-2'>
                    <form method='GET' name='$userID' value='$userID'>
                      <p class='text-left text-wrap'>Date: $date </p>
                      <a class='text-white' href='user.php?user_id=$userID'> <small>By: $userID</small></a>
                    </form>
                  </div>      
                </div>
              </div>";
            $counter++;
            $postCounter++;
          }
        ?>
      </div>

      <div class="carousel-item">
        <div class="container-fluid">
          <div class="row p-3 mb-2 mt-2 bg-secondary text-white rounded">
            <h3 class="text-left">Recent Gaming Posts:</h3>
          </div>
        </div>

        <?php 
          $query1 = "SELECT * FROM forum_posts WHERE subtopic = 'Gaming' ORDER BY `topic_id` DESC LIMIT 4;";
          $result1 = mysqli_query($conn, $query1);
          $resultCheck1 = mysqli_num_rows($result1);
          $counter1=0;
          $postCounter1=1;
          while($rows1[]=mysqli_fetch_array($result1)){
            $title1= $rows1[$counter1]['title'];
            $topicID1 = $rows1[$counter1]['topic_id'];
            $userID1 = $rows1[$counter1]['user_id'];
            $content1 = nl2br($rows1[$counter1]['content']);
            $subtopic1= $rows1[$counter1]['subtopic'];
            $date1 = $rows1[$counter1]['date_submitted'];
            echo "   
              <div class='container-fluid'>
                <div class='row'>
                  <div class='col-sm-1 p-3 mb-2 bg-secondary text-white rounded ml-2 mr-1'>
                    <form method='GET'>
                      <input type='hidden' name='$subtopic1' $subtopic1>
                      <span>$postCounter1.</span><br>
                      <span>Topic:  <a class='text-light' href='subforum.php?subtopic=$subtopic1&page=1'>$subtopic1</a></span>
                    </form>
                  </div>
                  <div class='col-lg p-3 mb-2 bg-secondary text-white rounded ml-1 mr-1'>
                    <form method='GET'>
                      <input type='hidden' name='$topicID1' $topicID1> 
                      <a class='text-white' href='Post.php?topic_id=$topicID1'><h5 class='text-left'>$title1</h3></a>
                      <small class='overflow-hidden'>CONTENT PREVIEW</small>
                    </form>
                  </div>
                  <div class='col-sm-1 p-3 mb-2 bg-secondary text-white rounded ml-1 mr-2'>
                    <form method='GET' name'$userID1' value='$userID1'>
                      <p class='text-left text-wrap'>Date: $date1 </p>
                      <a class='text-white' href='user.php?user_id=$userID1'> <small>By: $userID1</small></a>
                    </form>
                  </div>      
                </div>
              </div>";
            $counter1++;
            $postCounter1++;
          }
        ?>
      </div>

      <div class="carousel-item">
        <div class="container-fluid">
          <div class="row p-3 mb-2 mt-2 bg-secondary text-white rounded">
            <h3 class="text-left">Recent Lifestyle Posts:</h3>
          </div>
        </div>

        <?php 
          $query2 = "SELECT * FROM forum_posts WHERE subtopic = 'Lifestyle' ORDER BY `topic_id` DESC LIMIT 4;";
          $result2 = mysqli_query($conn, $query2);
          $resultCheck2 = mysqli_num_rows($result2);
          $counter2=0;
          $postCounter2=1;
          while($rows2[]=mysqli_fetch_array($result2)){
            $title2= $rows2[$counter2]['title'];
            $topicID2 = $rows2[$counter2]['topic_id'];
            $userID2 = $rows2[$counter2]['user_id'];
            $content2 = nl2br($rows2[$counter2]['content']);
            $subtopic2 = $rows2[$counter2]['subtopic'];
            $date2 = $rows2[$counter2]['date_submitted'];
            echo "   
              <div class='container-fluid'>
                <div class='row'>
                  <div class='col-sm-1 p-3 mb-2 bg-secondary text-white rounded ml-2 mr-1'>
                    <form method='GET'>
                      <input type='hidden' name='$subtopic2' $subtopic2>
                      <span>$postCounter2.</span><br>
                      <span>Topic:  <a class='text-light' href='subforum.php?subtopic=$subtopic2&page=1'>$subtopic2</a></span>
                    </form>
                  </div>
                  <div class='col-lg p-3 mb-2 bg-secondary text-white rounded ml-1 mr-1'>
                    <form method='GET'>
                      <input type='hidden' name='$topicID2' $topicID2> 
                      <a class='text-white' href='Post.php?topic_id=$topicID2'><h5 class='text-left'>$title2</h3></a>
                      <small class='overflow-hidden'>CONTENT PREVIEW</small>
                    </form>
                  </div>
                  <div class='col-sm-1 p-3 mb-2 bg-secondary text-white rounded ml-1 mr-2'>
                    <form method='GET' name'$userID2' value=$userID2>
                      <p class='text-left text-wrap'>Date: $date2 </p>
                      <a class='text-white' href='user.php?user_id=$userID2'> <small>By: $userID2</small></a>
                    </form>
                  </div>      
                </div>
              </div>";
            $counter2++;
            $postCounter2++;
          }
        ?>
      </div>

      <div class="carousel-item">
        <div class="container-fluid">
          <div class="row p-3 mb-2 mt-2 bg-secondary text-white rounded">
            <h3 class="text-left">Recent Meme Posts:</h3>
          </div>
        </div>

        <?php 
          $query3 = "SELECT * FROM forum_posts WHERE subtopic = 'Meme' ORDER BY `topic_id` DESC LIMIT 4;";
          $result3 = mysqli_query($conn, $query3);
          $resultCheck2 = mysqli_num_rows($result3);
          $counter3=0;
          $postCounter3=1;
          while($rows3[]=mysqli_fetch_array($result3)){
            $title3= $rows3[$counter3]['title'];
            $topicID3 = $rows3[$counter3]['topic_id'];
            $userID3 = $rows3[$counter3]['user_id'];
            $content3 = nl2br($rows2[$counter3]['content']);
            $subtopic3 = $rows3[$counter3]['subtopic'];
            $date3 = $rows3[$counter3]['date_submitted'];
            echo "   
              <div class='container-fluid'>
                <div class='row'>
                  <div class='col-sm-1 p-3 mb-2 bg-secondary text-white rounded ml-2 mr-1'>
                    <form method='GET'>
                      <input type='hidden' name='$subtopic3' $subtopic3>
                      <span>$postCounter3.</span><br>
                      <span>Topic:  <a class='text-light' href='subforum.php?subtopic=$subtopic3&page=1'>$subtopic3</a></span>
                    </form>
                  </div>
                  <div class='col-lg p-3 mb-2 bg-secondary text-white rounded ml-1 mr-1'>
                    <form method='GET'>
                      <input type='hidden' name='$topicID3' $topicID3> 
                      <a class='text-white' href='Post.php?topic_id=$topicID3'><h5 class='text-left'>$title3</h3></a>
                      <small class='overflow-hidden'>CONTENT PREVIEW</small>
                    </form>
                  </div>
                  <div class='col-sm-1 p-3 mb-2 bg-secondary text-white rounded ml-1 mr-2'>
                    <form method='GET' name'$userID3' $userID3>
                      <p class='text-left text-wrap'>Date: $date3 </p>
                      <a class='text-white' href='userprofile.php?user_id=$userID3'> <small>By: $userID3</small></a>
                    </form>
                  </div>      
                </div>
              </div>";
            $counter3++;
            $postCounter3++;
          }
        ?>
      </div>

      <div class="carousel-item">
        <div class="container-fluid">
          <div class="row p-3 mb-2 mt-2 bg-secondary text-white rounded">
            <h3 class="text-left">Recent Sports Posts:</h3>
          </div>
        </div>

        <?php 
          $query4 = "SELECT * FROM forum_posts WHERE subtopic = 'Sports' ORDER BY `topic_id` DESC LIMIT 4;";
          $result4 = mysqli_query($conn, $query4);
          $resultCheck4 = mysqli_num_rows($result4);
          $counter4=0;
          $postCounter4=1;
          while($rows4[]=mysqli_fetch_array($result4)){
            $title4= $rows4[$counter4]['title'];
            $topicID4 = $rows4[$counter4]['topic_id'];
            $userID4 = $rows4[$counter4]['user_id'];
            $content4 = nl2br($rows4[$counter4]['content']);
            $subtopic4 = $rows4[$counter4]['subtopic'];
            $date4 = $rows4[$counter4]['date_submitted'];
            echo "   
              <div class='container-fluid'>
                <div class='row'>
                  <div class='col-sm-1 p-3 mb-2 bg-secondary text-white rounded ml-2 mr-1'>
                    <form method='GET'>
                      <input type='hidden' name='$subtopic4' $subtopic4>
                      <span>$postCounter4.</span><br>
                      <span>Topic:  <a class='text-light' href='subforum.php?subtopic=$subtopic4&page=1'>$subtopic4</a></span>
                    </form>
                  </div>
                  <div class='col-lg p-3 mb-2 bg-secondary text-white rounded ml-1 mr-1'>
                    <form method='GET'>
                      <input type='hidden' name='$topicID4' $topicID4> 
                      <a class='text-white' href='Post.php?topic_id=$topicID4'><h5 class='text-left'>$title4</h3></a>
                      <small class='overflow-hidden'>CONTENT PREVIEW</small>
                    </form>
                  </div>
                  <div class='col-sm-1 p-3 mb-2 bg-secondary text-white rounded ml-1 mr-2'>
                    <form method='GET' name'$userID4' $userID4>
                      <p class='text-left text-wrap'>Date: $date4 </p>
                      <a class='text-white' href='userprofile.php?user_id=$userID4'> <small>By: $userID4</small></a>
                    </form>
                  </div>      
                </div>
              </div>";
            $counter4++;
            $postCounter4++;
          }
        ?>
      </div>
    </div>

    

  </div>
</div>

  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
    
<div class="row ml-1 mr-1" style="margin-top:-15px">
  <div class="col-md-2">
    <a href="subforum.php?subtopic=potato&page=1">
      <h4 class="carousel-caption" d-flex flex-column justify-content-center h-100 style="top: 0">View Potato Posts</h4>
      <img src="https://images.theconversation.com/files/401955/original/file-20210520-23-83r6ds.jpg?ixlib=rb-1.1.0&q=45&auto=format&w=1200&h=900.0&fit=crop" class="img-thumbnail" alt="Potato" style="height:300px;width:300px;object-fit: cover;margin-top:60px">
    </a>
  </div>
  <div class="col-md-2">
    <a href="subforum.php?subtopic=gaming&page=1">
      <img src="https://media.istockphoto.com/photos/gamer-work-space-concept-top-view-a-gaming-gear-mouse-keyboard-in-picture-id1170073824?k=20&m=1170073824&s=612x612&w=0&h=lQYUGw9IIqI9bsTrIrS8xCyId2PmmNYPSwB7UNEzssI=" class="img-thumbnail" alt="Gaming" style="height:300px;width:300px;object-fit: cover;margin-top:60px">
      <h4 class="carousel-caption" d-flex flex-column justify-content-center h-100 style="top: 0">View Gaming Posts</h4>
    </a>
  </div>
  <div class="col-md-2">
    <a href="subforum.php?subtopic=lifestyle&page=1">
      <img src="https://headerpop.com/wp-content/uploads/2019/08/lifestyle-scaled.jpg" class="img-thumbnail" alt="Lifestyle" style="height:300px;width:300px;object-fit: cover;margin-top:60px">
      <h4 class="carousel-caption" d-flex flex-column justify-content-center h-100 style="top: 0">View Lifestyle Posts</h4>
    </a>
  </div>
  <div class="col-md-2">
    <a href="subforum.php?subtopic=meme&page=1">
    <img src="https://i.imgflip.com/6ifnib.jpg" class="img-thumbnail" alt="Memes" style="height:300px;width:300px;margin-top:60px">
    <h4 class="carousel-caption" d-flex flex-column justify-content-center h-100 style="top: 0">View Meme Posts</h4>
        </a>
  </div>
  <div class="col-md-2">
  <a href="subforum.php?subtopic=sports&page=1">
    <img src="https://media.wired.com/photos/5a3af5179b5b7950644810b9/master/w_2560%2Cc_limit/football-TA.jpg" class="img-thumbnail" alt="Gaming" style="height:300px;width:300px;object-fit: cover;margin-top:60px">
    <h4 class="carousel-caption" d-flex flex-column justify-content-center h-100 style="top: 0;">View Sports Posts</h4>
        </a>
  </div>
  <div class="col-md-2" style="margin-bottom:50px">
    <a href="createtopic.php">
      <img src="https://cdn.pixabay.com/photo/2016/03/21/05/05/plus-1270001_960_720.png" alt="Add New Topic" style="height:275px;width:275px;object-fit: cover;margin-top:60px">
      <h4 class="carousel-caption" d-flex flex-column justify-content-center h-100 style="top: 0">Add a New Topic!</h4>
    </a>
  </div>
</div>
<!--
    jQuery first, then Popper.js, then Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        -->
  </body>
  <?php include_once('footer.php')?>


</html>
<?php
if(isset($_REQUEST['createAccount'])){
  if($_GET['createAccount']== "success"){
    echo "<script type='text/javascript'>
    alert('Account Created, Please Sign In To Continue') </script>";
  }
}
  if(isset($_REQUEST['Login'])){
    if($_GET['Login']== "success"){
      echo "<script type='text/javascript'>
      alert('Login Successful') </script>";
      
    }
}
if(isset($_REQUEST['logout'])){
  if($_GET['logout']== "SessionTimedOut"){
    echo "<script type='text/javascript'>
    alert('Your Session Expired After 30 Minutes of Inactivity') </script>";
  }
}
?>