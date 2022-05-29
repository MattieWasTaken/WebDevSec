<?php
    include_once 'databaseConnection.php';
?>

<?php

if(isset($_REQUEST['search'])){
    $search = $_REQUEST['search'];
}

$query = "SELECT * FROM forum_posts WHERE topic_id LIKE '{$search}%' OR user_id LIKE '{$search}%' OR title LIKE '{$search}%' OR content LIKE '{$search}%';";
$result = mysqli_query($conn, $query);
$resultCheck = mysqli_num_rows($result);

if($resultCheck>0){
    while($row = mysqli_fetch_assoc($result)){
        echo "<br>";
        $topicID = $row['topic_id'];
        $content = $row['content']. "<br>";
        $content = nl2br($content);
        $title = $row['title'];
        $user_id= $row['user_id'];
        echo "
                <div class='subforum-row'>
        <div class='subforum-icon subform-column center'>
            </div>
                
                <form method='GET'>
                        <div class='subforum-description subform-column'>
                        <input type='hidden' name='$topicID'$topicID>
                        <h1> <a href='Post.php?topic_id=$topicID'>$title</a></h1>
                        <p>Click To View Post!</p></div></form>
                    
                        <div class='subforum-statistics subform-column center'>
                        <span>0 Comments | 0 Users Viewing</span>
                    </div>
        
                    <div class='subforum-info subforum-column'>
                      <b> <a href=''>Post</a> </b> By <a href=''>$user_id</a>
                        <br>
                        On <small>22 Apr 2022</small>
                    </div>
                    </div>
                    </div>
                        ";
    }
}
?>

<!DOCTYPE html>
<html>
<title> Search </title>
<link rel="stylesheet" ref="stylesheet2" href="lifestyle.css"/>
<link rel="stylesheet" ref="stylesheet" href="style.css"/>



</html>
