
<?php
session_start();
date_default_timezone_set('Australia/Sydney');
include_once 'databaseConnection.php';
$user_id = $_SESSION['username'];
$title = $_POST['title'];
$content = $_POST['content'];
$subtopic = $_POST['subtopic'];
$date = date('d-m-Y H:i:s');


echo "$date <br> $subtopic <br> $content <br> $title <br> $user_id";

$stmt = $conn->prepare("INSERT INTO forum_posts (subtopic,user_id, title, content, date_submitted) VALUES (?,?,?,?,?)");
$stmt ->bind_param("sssss",$subtopic, $user_id, $title, $content, $date);

if($title=="" || $content=="" || $subtopic==""){
    header("Location: createpost.php?post=failed");
}else if(strlen($title)>100){
    header("Location: createpost.php?post=failedtooLong");
}else if($user_id==""){
    header("Location: createpost.php?post=failedNoLogin");
}else{
    $stmt->execute();
    header("Location: index.php?post=success");
}


?>