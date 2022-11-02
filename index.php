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