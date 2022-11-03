<?php 
include_once 'databaseConnection.php';
include_once 'header.php';
?>

<!doctype html>
<html lang="en">
  <div class="bg-image">
  <head>
    <title>IMD Forum</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>

  <?php 
 if(isset($_REQUEST['topic_id'])){
    $topic_id = $_REQUEST['topic_id'];
}
  #$query = "SELECT * FROM quizresponses where quizID = $topic_id;";
  $query = "SELECT personid.*, quizresponses.* FROM personID, quizresponses WHERE personid.ID = quizresponses.studentID AND quizresponses.quizID = $topic_id;";
  $result = mysqli_query($conn, $query);
  $counter = 0;
    while($row[] = mysqli_fetch_array($result)){
        $a1 = nl2br($row[$counter]['Answer1']);
        $a2 = nl2br($row[$counter]['Answer2']);
        $a3 = nl2br($row[$counter]['Answer3']);
        $a4 = nl2br($row[$counter]['Answer4']);
        $a5 = nl2br($row[$counter]['Answer5']);
        $studentID = $row[$counter]['studentID'];
        $studentFName = $row[$counter]['firstName'];
        $studentLName = $row[$counter]['lastName'];
        echo "<br><br><div class='container-fluid'>
        <div class='row p-1 mt-2 bg-secondary text-white rounded-top'>
            <h3 class='text-left'>$studentFName $studentLName's Test</h3>
            </div>
            </div>
            <div class='container-fluid mt-2'>
            <div class='row'>
            <div class='col-lg p-3 mb-2 bg-secondary text-white rounded ml-1 mr-1'>
            <p class='text-break'>Answer 1:<br> $a1</p>
            </div>
            </div>
            </div>
            <div class='container-fluid mt-2'>
            <div class='row'>
            <div class='col-lg p-3 mb-2 bg-secondary text-white rounded ml-1 mr-1'>
            <p class='text-break'>Answer 2:<br> $a2</p>
            </div>
            </div>
            </div>
            <div class='container-fluid mt-2'>
            <div class='row'>
            <div class='col-lg p-3 mb-2 bg-secondary text-white rounded ml-1 mr-1'>
            <p class='text-break'>Answer 3:<br> $a3</p>
            </div>
            </div>
            </div>
            <div class='container-fluid mt-2'>
            <div class='row'>
            <div class='col-lg p-3 mb-2 bg-secondary text-white rounded ml-1 mr-1'>
            <p class='text-break'>Answer 4:<br> $a4</p>
            </div>
            </div>
            </div>
            <div class='container-fluid mt-2'>
            <div class='row'>
            <div class='col-lg p-3 mb-2 bg-secondary text-white rounded ml-1 mr-1'>
            <p class='text-break'>Answer 5:<br> $a5</p>
            </div>
            </div>
            </div>
            ";
       
        $counter++;
    }


  ?>