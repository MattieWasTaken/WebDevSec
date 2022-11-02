<?php 
echo "Sup";
error_reporting(1);
include_once 'databaseConnection.php';
if(isset($_POST['submit'])){
    $answer1 = $_POST['a1'];
    $answer2 = $_POST['a2'];
    $answer3 = $_POST['a3'];
    $answer4 = $_POST['a4'];
    $answer5 = $_POST['a5'];
    $studentID = $_POST['userID'];
    $courseID = $_POST['courseID'];
    $testID = $_POST['quizID'];
    echo $studentID;
    echo $courseID;
    echo $testID;
    echo "<br> $answer1";
    echo "<br> $answer2";
    echo "<br> $answer3";
    echo "<br> $answer4";
    echo "<br> $answer5";

    $stmt = $conn->prepare("INSERT INTO quizresponses (studentID, quizID, Answer1, Answer2, Answer3, Answer4, Answer5) VALUES (?,?,?,?,?,?,?);");
    $stmt -> bind_param("iisssss",$studentID, $testID, $answer1, $answer2, $answer3, $answer4, $answer5);
    $stmt -> execute();
    header("Location: user.php?TestSubmitted=success");
}

?>