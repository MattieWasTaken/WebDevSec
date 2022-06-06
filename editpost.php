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
    include_once 'databaseConnection.php';
    include_once 'header.php';
    ?>

    <body>
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