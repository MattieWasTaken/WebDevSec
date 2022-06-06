
<?php
session_start();
include_once 'databaseConnection.php';

$topicArea = $_POST['title'];
$topicName = $_POST['content'];

echo "$topicArea <br> $topicName";

$stmt = $conn->prepare("INSERT INTO topics VALUES (?,?)");
$stmt ->bind_param("ss", $topicArea, $topicName);

if($topicArea=="" || $topicName==""){
    header("Location: createtopic.php?topic=failed");
}else if(strlen($topicArea)>100){
    header("Location: createtopic.php?topic=failedtooLong");
}else{
    $stmt->execute();
    header("Location: index.php?post=success");
}

?>