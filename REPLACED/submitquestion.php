<?php

include_once 'databaseConnection.php';
$user_id = $_POST['user_id'];
$faqQuestion = $_POST['faq-content'];
$stmt = $conn->prepare("INSERT INTO faq_questions (user_id,user_question) VALUES (?,?)");
$stmt ->bind_param("ss",$user_id, $faqQuestion);

if($user_id=="" || $faqQuestion==""){
    echo "<h3>You must fill out all boxes</h3>";
}else{
    $stmt->execute();
}

header("Location: index.php?submission=success");

?>