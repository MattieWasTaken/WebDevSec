
<?php
session_start();
include_once 'databaseConnection.php';
$user_id = $_SESSION['username'];
$content = $_POST['content'];
$date = date("d-m-y");


$stmt = $conn->prepare("UPDATE `users` SET `bio` = ? WHERE `users`.`username` = '$user_id';");
$stmt-> bind_param('s', $content);
if($stmt ->execute()){
    header("Location: user.php?user_id=$user_id&display=bio");
}else{
    header('Location: user.php?user_id=$user_id&display=bio&error=UnknownError');
}


?>