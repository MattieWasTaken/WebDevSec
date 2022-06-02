<!doctype html>
<html lang="en">
  <head>
    <title>IMD Forum</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>

<?php 
include_once('header.php');
include_once('databaseConnection.php');
?>
  
<body>
<div class="container-fluid p-1 bg-dark">
<div class="container-fluid">
    <div class="row p-3 mb-2 mt-2 bg-secondary text-white rounded">
        <h3 class="text-left">Most Recent Posts</h3>
    </div>
</div>
<?php 

$query = "SELECT * FROM forum_posts ORDER BY `topic_id` DESC LIMIT 10;";
$result = mysqli_query($conn, $query);
$resultCheck = mysqli_num_rows($result);
$counter=0;
$postCounter=1;
while($rows[]=mysqli_fetch_array($result)){
    $title= $rows[$counter]['title'];
    $topicID = $rows[$counter]['topic_id'];
    $userID = $rows[$counter]['user_id'];
    $content = nl2br($rows[$counter]['content']);
    $subtopic = $rows[$counter]['subtopic'];
    $date = $rows[$counter]['date_submitted'];
    echo "   
    <div class='container-fluid'>
    <div class='row'>
    <div class='col-sm-1 p-3 mb-2 bg-secondary text-white rounded ml-2 mr-1'>
    <form method='GET'>
    <input type='hidden' name='$subtopic' $subtopic>
    <span>$postCounter.</span><br>
    <span>Topic:  <a class='text-light' href='subforum.php?subtopic=$subtopic&page=1'>$subtopic</a></span>
    </form>
    </div>
    <div class='col-lg p-3 mb-2 bg-secondary text-white rounded ml-1 mr-1'>
    <form method='GET'>
    <input type='hidden' name='$topicID' $topicID> 
    <a class='text-white' href='Post.php?topic_id=$topicID'><h5 class='text-left'>$title</h3></a>
   <small class='overflow-hidden'>CONTENT PREVIEW</small>
   </form>
    </div>
    <div class='col-sm-1 p-3 mb-2 bg-secondary text-white rounded ml-1 mr-2'>
    <form method='GET' name'$userID' $userID>
    <p class='text-left text=wrap'>Date: $date </p>
    <a class='text-white' href='userprofile.php?user_id=$userID'> <small>By: $userID</small></a>
    </form>
    </div>      
    </div>
</div>";
$counter++;
$postCounter++;
}
?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>

  <?php include_once('footer.php')?>
</html>