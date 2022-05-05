
<?php
include_once 'databaseConnection.php';
$user_id = $_POST['user_id'];
$title = $_POST['title'];
$content = $_POST['content'];


$stmt = $conn->prepare("INSERT INTO forum_posts (user_id, title, content) VALUES (?,?,?)");
$stmt ->bind_param("iss", $user_id, $title, $content);
$stmt->execute();

header("Location: index.php?signup=success");
?>