
<?php
include_once 'databaseConnection.php';
$user_id = $_POST['user_id'];
$title = $_POST['title'];
$content = $_POST['content'];
$subtopic = $_POST['subtopic'];




$stmt = $conn->prepare("INSERT INTO forum_posts (subtopic,user_id, title, content) VALUES (?,?,?,?)");
$stmt ->bind_param("ssss",$subtopic, $user_id, $title, $content);

if($title=="" || $user_id=="" || $content=="" || $subtopic==""){
    echo "<h3>You must fill out all boxes...bitch</h3>";
}else{
    $stmt->execute();
}

header("Location: index.php?post=success");
?>