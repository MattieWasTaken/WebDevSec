<!doctype html>
<html lang="en">
<div class="bg-image" style="background-image: url('https://ae01.alicdn.com/kf/HTB1CKe5QNTpK1RjSZFKq6y2wXXaC/LIFE-MAGIC-BOX-Black-Brick-Wall-for-Photo-Background-for-Photo-Sessions-for-Photography-Birthday-Backdrops.jpg_Q90.jpg_.webp'); height: 110vh;">
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

    $limit = 8;

if(!isset($_GET['page'])){
    header("Location: subforumselection.php?page=1");
}   
if(isset($_GET['page'])){
    if($_GET['page']<1){
        header("Location: subforumselection.php?page=1");
    }else{
        $page=$_GET['page'];
    }  }
$start = ($page-1) * $limit;

?>
  
<body>
<div class="container-fluid">
    <div class="row p-3 mb-2 mt-2 bg-secondary text-white rounded">
        <h3 class="text-left"><a class='text-white'href="subforum.php?page=1">Available Subforums</a></h3>
    </div>
</div>
<?php 

$query = "SELECT * FROM topic;";
$result = mysqli_query($conn, $query);
$resultCheck = mysqli_num_rows($result);
$counter=0;
$postCounter=1;
while($rows[]=mysqli_fetch_array($result)){
    $title= $rows[$counter]['topic_name'];
    $topicID = $rows[$counter]['TopicID'];
    $description = nl2br($rows[$counter]['topic_description']);
    echo "   
    <div class='container-fluid'>
    <div class='row'>
    <div class='col-sm-1 p-3 mb-2 bg-secondary text-center text-white rounded ml-2 mr-1'>
    <span>$postCounter.</span>
    </div>
    <div class='col-lg p-3 mb-2 bg-secondary text-white rounded ml-1 mr-1'>
    <form method='GET'>
    <input type='hidden' name='$topicID' $topicID> 
    <a class='text-white' href='subforum.php?subtopic=$title&page=1'><h5 class='text-left'>$title</h3></a>
    </form>
   <small class='overflow-hidden'>$description</small>
    </div>
    </div>
</div>";
$counter++;
$postCounter++;
}

$query1 = "SELECT count(TopicID) AS TopicID FROM topic;";
$result1 = $conn->query($query1);
$topicReturn = $result1->fetch_all(MYSQLI_ASSOC);
$totalPostCount= $topicReturn[0]['TopicID'];
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
        echo "<li class='page-item'><a class='page-link' href='subforumselection.php?page=$prevPage'>$prevPage</a></li>";}
    ?>
    <li class="page-item active"><a class="page-link" href="subforumselection.php?page=<?php echo $page?>"><?php echo $page?></a></li>
    <?php 
    if($_GET['page']!=$totalPages){
        $nextPage = $page+1;
      echo "<li class='page-item'><a class='page-link' href='subforum.php?subtopic=$subtopic&page=$nextPage'>$nextPage</a></li>";
      echo " <li class='page-item'>
      <a class='page-link' href='subforum.php?subtopic=$subtopic&page=$nextPage'>Next</a>
    </li>";
       
    }
endif;
    ?>
  </ul>
</nav>
  </body>

  <?php include_once('footer.php')?>
</html>