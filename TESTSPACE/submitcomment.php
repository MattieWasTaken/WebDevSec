
<?php
session_start();
include_once 'databaseConnection.php';
$user_id = $_POST['username'];
$date = $_POST['date'];
$comment = $_POST['comment'];
$threadID = $_POST['threadID'];




$stmt = $conn->prepare("INSERT INTO comment_section (username, content, parent_thread, date) VALUES (?,?,?,?)");
$stmt ->bind_param("ssis",$user_id, $comment, $threadID, $date);

if($comment==""){
    header("Location: Post.php?topic_id=$threadID&comment=failed");
}else{
    $stmt->execute();
    header("Location: Post.php?topic_id=$threadID");
}


?>