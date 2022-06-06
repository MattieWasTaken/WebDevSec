
<?php
session_start();
include_once 'databaseConnection.php';

$topicName = $_POST['title'];
$topicDescription = $_POST['content'];
$user_id = $_SESSION['username'];

echo "$topicName <br> $topicDescription";

$stmt = $conn->prepare("INSERT INTO topic (topic_name, topic_description) VALUES (?,?)");
$stmt ->bind_param("ss", $topicName, $topicDescription);

if($topicName=="" || $topicDescription==""){
    header("Location: createtopic.php?post=failed");
}else if(strlen($topicName)>100){
    header("Location: createtopic.php?post=failedtooLong");
}else if($user_id==""){
    header("Location: createtopic.php?post=failedNoLogin");
}else{
    $stmt->execute();
    header("Location: index.php?subforum=created");
}

?>