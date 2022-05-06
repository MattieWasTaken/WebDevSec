
<?php
include_once 'databaseConnection.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>

<body>

<?php
$query = "SELECT * FROM forum_posts WHERE user_id='Yea Boy';";
$result = mysqli_query($conn, $query);
$resultCheck = mysqli_num_rows($result);

if($resultCheck>0){
    while($row = mysqli_fetch_assoc($result)){
        echo "<br>";
        $content = $row['content']. "<br>";
        $content = nl2br($content);
        $title = $row['title'];
        $user_id= $row['user_id'];
        echo $title;
        echo "<br>";
        echo $user_id;
        echo "<br>";
        echo $content;
        echo "<br>";
    }
}
?>

</body>
</html>