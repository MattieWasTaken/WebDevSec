
<?php
session_start();
include_once 'databaseConnection.php';

$topicID = "4";
$topicArea = $_POST['title'];
$topicName = $_POST['content'];

echo "$topicID <br> $topicArea <br> $topicName";

$stmt = $conn->prepare("INSERT INTO topic VALUES (?,?,?)");
$stmt ->bind_param("sss",$topicID, $topicArea, $topicName);

if($topicArea=="" || $topicName==""){
    header("Location: createpost.php?post=failed");
}else if(strlen($topicArea)>100){
    header("Location: createpost.php?post=failedtooLong");
}else if($user_id==""){
    header("Location: createpost.php?post=failedNoLogin");
}else{
    $stmt->execute();
    header("Location: index.php?post=success");
}

?>