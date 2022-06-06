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
    error_reporting(1);
    $author = ($_POST['author']);
    $topicID = $_GET['topic_id'];
    $sql = "SELECT * FROM forum_posts WHERE topic_id= ?;";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "i", $topicID);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);
    $content= $row['content'];

    if($_SESSION['username']== $author){
        echo"
        <form class='bg-secondary rounded ml-1 mr-1 mt-2' action='updatepost.php' method='POST'>
        <div class='form-group mr-2'>
        <input type='hidden' name='topicID' value='$topicID'>
        <label class='text-white ml-2' for='content'>Edit Your Post</label>
        <textarea class='form-control ml-1' id='content' name='content' rows='20'>$content</textarea>
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
    