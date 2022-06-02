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
include_once('header.php');
include_once('databaseConnection.php');
?>
  
<body>
<div class="container-fluid p-1 bg-dark">
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
    <div class="row p-3 mt-2 bg-secondary text-white rounded">
    <div class="col">
    <form class="bg-secondary" action="submitpost.php" method="POST">
      <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" class="form-control" id="title" placeholder="Post Title...">
      </div>
      <div class="form-group">
        <label for="postcontent">Example textarea</label>
        <textarea class="form-control" id="postcontent" rows='10'></textarea>
        <button type="submit" name="submit" class="mt-3">Post</button>
      </div>
      </div>
      <div class="col text-center">
        <h1>Subforum Posting Rules</h1>
        <ul class="list-group">
        <li class="list-group-item bg-transparent">sdjfbhsajdbghsbdg</li>
        <li class="list-group-item bg-transparent">sdjfbhsfhsdfhfsdsajdsdfhghsbdg</li>
      </ul>
      </div>
      </div>
      <div class="row p-3 mb-2 bg-secondary text-white rounded">

      </div>
    </form>
</div>
</div>


        <?php include_once("footer.php")?>