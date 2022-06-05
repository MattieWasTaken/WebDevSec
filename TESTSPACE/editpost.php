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
    ?>

    <body>
    <div class="container-fluid p-4 bg-dark text-white">
    <div class="container-fluid">
    <?php 
    $author = ($_POST['author']);
    $topicID = $_GET['topic_id'];
    $content = nl2br($_POST['post']);
    $printingContent = preg_replace("/<br\W*?\/>/", "", $content);
    if($_SESSION['username']== $author){
        echo"
        <form class='bg-secondary rounded ml-1 mr-1 mt-2' action='updatepost.php' method='POST'>
        <div class='form-group mr-2'>
        <input type='hidden' name='topicID' value='$topicID'>
        <label class='text-white ml-2' for='content'>Edit Your Post</label>
        <textarea class='form-control ml-1' id='content' name='content' rows='20'>$printingContent</textarea>
        </div>
        <a type='hidden' name='username' id='username' $username>
        <button class='rounded ml-1'type='submit' name='submit'>Submit Changes</button>
        </form>";
    }else{
        header("Location: Post.php?topic_id=$topicID");
    }
   
    ?>
</div>
    </body>

    <?php 
    include_once('footer.php')
    ?>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>