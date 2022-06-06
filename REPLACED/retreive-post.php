<html>


<?php
include_once 'databaseConnection.php';
?>
<body>

<?
$query = "SELECT * FROM forum_posts;";
$result = mysqli_query($conn, $query);
echo mysqli_num_rows(($result))
?>

</body>
</html>