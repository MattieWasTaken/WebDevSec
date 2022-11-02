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
<?php
$testID = $_GET['testID'];

$query = "SELECT * FROM classtests WHERE testID = $testID;";
$result = mysqli_query($conn, $query);
$testOutput[] = mysqli_fetch_array($result);
$testTitle = $testOutput[0]['testTitle'];
$q1 = $testOutput[0]['Question1'];
$q2 = $testOutput[0]['Question2'];
$q3 = $testOutput[0]['Question3'];
$q4 = $testOutput[0]['Question4'];
$q5 = $testOutput[0]['Question5'];
$studentID = $_SESSION["ID"];
$courseID = $testOutput[0]['courseID'];
?>

<div class="container-fluid">
    <div class="row p-3 mt-2 bg-secondary text-white rounded-top">
        <h3 class="text-left"><?php echo $testTitle;?></h3>
    </div>
    <div class="row p-3 mb-2 bg-secondary text-white rounded-bottom">
    </div>
    </div>
    

    <div class="container-fluid">
    <div class="row p-3 mt-2 bg-secondary text-white rounded-top">
    <div class="col">
    <form class="bg-secondary" action="submittest.php" method="POST">
        <input type='hidden' name='userID' value="<?php echo $studentID;?>">
    <input type='hidden' name='courseID' value="<?php echo $courseID;?>">
    <input type='hidden' name='quizID' value="<?php echo $testID;?>">
    <div class="form-group">
      <label for='title'>Question 1:</label>
      <p><?php echo $q1?>
    </div>
    <div class="form-group">
      <label for="content">Answer</label>
      <textarea class="form-control overflow-auto" id='a1' name='a1' rows='10'></textarea>
    </div>
    <div class="form-group">
      <label for='title'>Question 2:</label>
      <p><?php echo $q2?>
    </div>
    <div class="form-group">
      <label for="content">Answer</label>
      <textarea class="form-control overflow-auto" id='a2' name='a2' rows='10'></textarea>
    </div>
    <div class="form-group">
      <label for='title'>Question 3:</label>
      <p><?php echo $q3?>
    </div>
    <div class="form-group">
      <label for="content">Answer</label>
      <textarea class="form-control overflow-auto" id='a3' name='a3' rows='10'></textarea>
    </div>
    <div class="form-group">
      <label for='title'>Question 4:</label>
      <p><?php echo $q4?>
    </div>
    <div class="form-group">
      <label for="content">Answer</label>
      <textarea class="form-control overflow-auto" id='a4' name='a4' rows='10'></textarea>
    </div>
    <div class="form-group">
      <label for='title'>Question 5:</label>
      <p><?php echo $q5?>
    </div>
    <div class="form-group">
      <label for="content">Answer</label>
      <textarea class="form-control overflow-auto" id='a5' name='a5' rows='10'></textarea>
    </div>
     <button type="submit" name="submit">Submit Answers</button>
    </form>
    </div>
    </div>
    </div>
    
</div>
</body>



