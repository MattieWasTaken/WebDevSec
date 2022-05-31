
<?php
session_start();
include_once 'databaseConnection.php';
$user_id = $_SESSION['username'];
$title = $_POST['title'];
$content = $_POST['content'];
$subtopic = $_POST['subtopic'];




$stmt = $conn->prepare("INSERT INTO forum_posts (subtopic,user_id, title, content) VALUES (?,?,?,?)");
$stmt ->bind_param("ssss",$subtopic, $user_id, $title, $content);

if($title=="" || $user_id=="" || $content=="" || $subtopic==""){
    header("Location: createpost.php?post=failed");
}else if(strlen($title)>100){
    header("Location: createpost.php?post=failedtooLong");
}else{
    $stmt->execute();
    header("Location: index.php?post=success");
}


?>