
<?php
session_start();
include_once 'databaseConnection.php';
$user_id = $_SESSION['username'];
$content = $_POST['content'];
$topicID = $_POST['topicID'];



$stmt = $conn->prepare("UPDATE `forum_posts` SET `content` = ? WHERE `forum_posts`.`topic_id` = ?;");
$stmt-> bind_param('si', $content, $topicID);
if($stmt ->execute()){
    header("Location: Post.php?topic_id=$topicID");
}else{
    header("Location: Post.php?topic_id=$topicID&update=failed");
}


?>