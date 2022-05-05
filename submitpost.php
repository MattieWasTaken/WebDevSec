
<?php
include_once 'databaseConnection.php';

$sql = "INSERT INTO forum_posts (user_id, title, content) VALUES ('1','How Potatos are made','FADNGJKNASDGNAN');";
mysqli_query($conn,$sql);

header("Location: index.php?signup=success");
?>