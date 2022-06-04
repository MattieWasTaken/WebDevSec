
<?php
session_start();
include_once 'databaseConnection.php';
$user_id = $_SESSION['username'];
$content = $_POST['content'];
$date = date("d-m-y");


echo "$content<br> $user_id";

$stmt = $conn->prepare("UPDATE `users` SET `bio` = '$content' WHERE `users`.`user_id` = '$user_id';");
$stmt ->execute();

error_reporting(1);
/*
if($user_id==""){
    header("Location: user.php?user_id=$user_id&display=bio");
}else{
    $stmt->execute();
    header("Location: user.php?post=success");
}

*/
?>