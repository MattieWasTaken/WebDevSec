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



if(isset($_REQUEST['subtopic'])){
    if(!empty($_GET['subtopic'])){
      $subtopic = ucwords($_GET['subtopic']);
    }else if(empty($_GET['subtopic'])){
        header("Location: 404page.php?error=notopic");
    } 
    } else {
    header("Location: 404page.php?error=undefinedrequest");
    }   

    $limit = 8;

    if(!isset($_GET['page'])){
    header("Location: subforum.php?subtopic=$subtopic&page=1");
    }
    
if(isset($_GET['page'])){
    if($_GET['page']<1){
        header("Location: subforum.php?subtopic=$subtopic&page=1");
    }else{
        $page=$_GET['page'];
    }  }
$start = ($page-1) * $limit;
?>
  
<body>
<div class="container-fluid p-1 bg-dark">
<div class="container-fluid">
    <div class="row p-3 mb-2 mt-2 bg-secondary text-white rounded">
        <h3 class="text-left"><a class='text-white'href="subforum.php?subtopic=<?php echo $subtopic?>&page=1"><?php echo $subtopic?> Posts</a></h3>
    </div>
</div>
<?php 

$query = "SELECT * FROM forum_posts WHERE subtopic='$subtopic' ORDER BY `topic_id` DESC LIMIT $start,8;";
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
    <div class='col-sm-1 p-3 mb-2 bg-secondary text-center text-white rounded ml-2 mr-1'>
    <span>$postCounter.</span>
    </div>
    <div class='col-lg p-3 mb-2 bg-secondary text-white rounded ml-1 mr-1'>
    <form method='GET'>
    <input type='hidden' name='$topicID' $topicID> 
    <a class='text-white' href='Post.php?topic_id=$topicID&subtopic=$subtopic'><h5 class='text-left'>$title</h3></a>
    </form>
   <small class='overflow-hidden'>CONTENT PREVIEW</small>
    </div>
    <div class='col-sm-1 p-3 mb-2 bg-secondary text-white rounded ml-1 mr-2'>
    <form method='GET' name'$userID' $userID>
    <p class='text-left'>Date: $date</p>
    <a class='text-white' href='user.php?user_id=$userID&display=posts'> <small>By: $userID</small></a>
    </form>
    </div>      
    </div>
</div>";
$counter++;
$postCounter++;
}

$query1 = "SELECT count(topic_id) AS topic_id FROM forum_posts WHERE subtopic='$subtopic';";
$result1 = $conn->query($query1);
$topicReturn = $result1->fetch_all(MYSQLI_ASSOC);
$totalPostCount= $topicReturn[0]['topic_id'];
$totalPages = ceil($totalPostCount/$limit);
?>
<?php if(!$totalPages==0):?>
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-start mt-2 ml-2">
   
    <?php 
    if($_GET['page']>1){
        $prevPage = $page-1;
        echo " <li class='page-item'>
        <a class='page-link' href='subforum.php?subtopic=$subtopic&page=$prevPage' tabindex='-1' aria-disabled='true'>Previous</a>
      </li>";
        echo "<li class='page-item'><a class='page-link' href='subforum.php?subtopic=$subtopic&page=$prevPage'>$prevPage</a></li>";}
    ?>
    <li class="page-item active"><a class="page-link" href="subforum.php?subtopic=<?php echo $subtopic ?>&page=<?php echo $page?>"><?php echo $page?></a></li>
    <?php 
    if($_GET['page']!=$totalPages){
        $nextPage = $page+1;
      echo "<li class='page-item'><a class='page-link' href='subforum.php?subtopic=$subtopic&page=$nextPage'>$nextPage</a></li>";
      echo " <li class='page-item'>
      <a class='page-link' href='subforum.php?subtopic=$subtopic&page=$nextPage'>Next</a>
    </li>";
       
    }

    ?>
  </ul>
</nav>
<?php else:?>
  <div class="container-fluid">
  <div class="row p-1 mb-2 mt-1 bg-secondary text-black rounded">
  <h3>This Subforum Has No Posts</h3>
</div>
</div>
  <?php endif;?>
  </body>

  <?php include_once('footer.php')?>
</html>