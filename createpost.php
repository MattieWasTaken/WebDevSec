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
  </head>

<?php 
include_once('header.php');
include_once('databaseConnection.php');
?>
  
<body>
<div class="container-fluid">
    <div class="row p-3 mt-2 bg-secondary text-white rounded-top">
        <h3 class="text-left">Write Your Post!</h3>
    </div>
    <div class="row p-3 mb-2 bg-secondary text-white rounded-bottom">
    <?php 
        if(isset($_REQUEST['post'])){
        if($_GET['post']=='failedtooLong'){
            echo "<h3>Error! Title Must Not Exceed 100 Characters</h3>";
        }else if($_GET['post']=='failed'){
            echo "<h3>Error! You must complete all the fields</h3>";
        }else if($_GET['post']=='failedNoLogin'){
            echo "<h3>Error! You must be logged in to post</h3>";
        }
    } 
        ?>
    </div>
    </div>
    

    <div class="container-fluid ml-2">
    <div class="row p-3 mt-2 bg-secondary text-white rounded-top">
    <div class="col">
    <form class="bg-secondary" action="submitpost.php" method="POST">
    <div class="form-group">
      <label for='title'>Title:</label>
      <input type="text" id="title" name="title" class="form-control" placeholder="Title...">
    </div>
    <div class="form-group">
      <label for="subtopic">Choose a Subtopic</label>
      <select name="subtopic" id="subtopic" class='form-control'>Subtopics
      <?php 
        error_reporting(1);
        $topicQuery = "SELECT * FROM `topic`;";
        echo $topicQuery;
        $queryResult = mysqli_query($conn, $topicQuery);
        echo "Query Submitted";
        $queryCounter = 0;
        while($forums[]=mysqli_fetch_array($queryResult)){
          $title= $forums[$queryCounter]['topic_name'];
          $topicID = $forums[$queryCounter]['topicID'];
          echo $title;
          echo "<option value='$title'>$title</option>";
          $queryCounter++;
        }
        echo "While Loop Completed"
        ?>
        <!--
      <option value="Potato">Potato</option>
      <option value="Gaming">Gaming</option>
      <option value="Lifestyle">Lifestyle</option>
      -->
      </select>
    </div>
    <div class="form-group">
      <label for="content">Post Content</label>
      <textarea class="form-control overflow-auto" id='content' name='content' rows='10'></textarea>
    </div>
     <button type="submit" name="submit">Post</button>
    </form>
    </div>
    </div>
    </div>
</div>
</body>

        <?php include_once("footer.php")?>
