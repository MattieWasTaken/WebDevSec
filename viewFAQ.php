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

    
if(isset($_GET['page'])){
    if($_GET['page']<1){
        header("Location: viewFAQ.php?page=1");
    }else{
        $page=$_GET['page'];
    }  }
$start = ($page-1) * $limit;
?>
  
<body>
<div class="container-fluid bg-dark text-white pt-3">
    <div class="container-fluid text-center">
        <h1 class="text-center mb-2">Asked FAQ Questions</h1>
    </div>
<?php 

$query = "SELECT * FROM faq_questions LIMIT $start,8;";
$result = mysqli_query($conn, $query);
$resultCheck = mysqli_num_rows($result);
$counter=0;
$postCounter=1;
while($rows[]=mysqli_fetch_array($result)){
    $question= nl2br($rows[$counter]['user_question']);
    $qID = $rows[$counter]['question_id'];
    $userID = $rows[$counter]['user_id'];
    echo "   
    <div class='container-fluid'>
    <div class='row'>
    <div class='col-sm-1 p-3 mb-2 bg-secondary text-center text-white rounded ml-2 mr-1'>
    <span>$postCounter.</span>
    </div>
    <div class='col-lg p-3 mb-2 bg-secondary text-white rounded ml-1 mr-1'>
    <form method='GET'>
    <input type='hidden' name='$qID' $qID> 
    <a class='text-white' href='Post.php?topic_id=$topicID&subtopic=$subtopic'><h5 class='text-left'>$question</h3></a>
    </form>
    </div>
    <div class='col-sm-1 p-3 mb-2 bg-secondary text-white rounded ml-1 mr-2'>
    <form method='GET' name'$userID' $userID>
    <a class='text-white' href='user.php?user_id=$userID&display=posts'> <small>By: $userID</small></a>
    </form>
    </div>      
    </div>
</div>";
$counter++;
$postCounter++;
}

?>
</div>
  </body>

  <?php include_once('footer.php')?>
</html>