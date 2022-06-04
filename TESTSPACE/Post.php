<!doctype html>
<html lang="en">
  <head>
    <title>IMD Forum</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <?php
    include_once 'databaseConnection.php';
    include_once 'header.php';

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
        $subtopic = $row['subtopic'];
        $date = $row['date_submitted'];
    }
}
?>

<body>
<div class="container-fluid p-4 bg-dark text-white">
<div class="container-fluid">
    <div class="row p-1 mt-2 bg-secondary text-white rounded-top">
        <h3 class="text-left"><?php echo $title?></h3>
        </div>
        <div class="row bg-secondary text-white p-1">
        <span><a class="text-white" href="user.php?user_id=<?php echo $user_id?>&display=posts">By: <?php echo $user_id?></a></span>
        </div>
        <div class="row bg-secondary p-1 mb-3 rounded-bottom text-white">
        <span class='text-left'>Posted On: <?php echo $date ?></span>
        </div>
</div>
    
    <div class='container-fluid'>
    <div class='row'>
    <div class='col-lg p-3 mb-2 bg-secondary text-white rounded ml-1 mr-1'>
    <p class="text-break"><?php echo $content?></p>
    </div>
    </div>      
    </div>
    <div class='container-fluid'>
    <div class='row p-3 mb-2 bg-secondary text-white rounded ml-1 mr-1'>
    <h4 class="text-center">Comments</h4>  
</div>
    <div class='row p-3 mb-2 bg-secondary text-white rounded ml-1 mr-1'>
    <form method='post' action='submitcomment.php'>
      <input type='hidden' name='username' value='<?php echo $_SESSION['username']?>'>
      <input type='hidden' name='date' value='<?php echo date('d-m-Y H:i:s')?>'>
      <input type='hidden' name='threadID' value='<?php echo $_GET['topic_id']?>'>
      <span>Leave a Comment</span>
      <div class='row'>
      <textarea name='comment'></textarea>
      </div>
      <div class='row'>
      <button name='submit' type='submit'>Comment</button>
      </div>
      <div class='row'>
     <?php if(isset($_REQUEST['comment'])){
     if($_REQUEST['comment']=="failed"){
       echo "Your comment failed, please try again";
     }
  }?>
      </div>
    </form>
    </div>
    
    
  
    </div>

    <?php 
    
    $query1 = "SELECT * FROM comment_section WHERE parent_thread= $topic_id;";
    $result1 = mysqli_query($conn, $query1);
    $resultCheck1 = mysqli_num_rows($result1);
    if($resultCheck1>0){
    while($row1 = mysqli_fetch_assoc($result1)){
        echo "<br>";
        $content1 = $row1['content']. "<br>";
        $content1 = nl2br($content1);
        $user_id1 = $row1['username'];
        $date1 = $row1['date'];

        echo "<div class='row p-3 bg-secondary text-white rounded-top ml-1 mr-1'>
        <span class='align-top'>By: $user_id1</span>
        </div>
        <div class='row bg-secondary rounded-bottom text-white ml-1 mr-1'>
          <p class='ml-3'>$content1</p>
        </div>
      ";
    
    
      }
}
    
    ?>
         
    </div>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>

  <?php include_once('footer.php')?>
</html>