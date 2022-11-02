<!doctype html>
<html lang="en">
  <div class="bg-image" style="background-image: url('https://ae01.alicdn.com/kf/HTB1CKe5QNTpK1RjSZFKq6y2wXXaC/LIFE-MAGIC-BOX-Black-Brick-Wall-for-Photo-Background-for-Photo-Sessions-for-Photography-Birthday-Backdrops.jpg_Q90.jpg_.webp'); height: 100vh;">
  <head>
    <title>IMD Forum</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <?php
    include_once 'databaseConnection.php';
    include_once 'header.php';

    if(isset($_REQUEST['topic_id'])){
    $topic_id = $_REQUEST['topic_id'];
    for($i = 0; $i < strlen($topic_id); $i++){
      if(!ctype_digit($topic_id[$i])){
        $allNumbers = false;
        break;
      }else $allNumbers=true;
    }
    if(!$allNumbers){
      header("Location: index.php?error=noTopicSupplied");
    }
    }
    

$query = "SELECT * FROM courses WHERE courseID= $topic_id;";
$result = mysqli_query($conn, $query);
$resultCheck = mysqli_num_rows($result);
if($resultCheck>0){
    while($row = mysqli_fetch_assoc($result)){
        $courseName = $row['courseName'];
        $courseID = $row['courseID'];
        $courseDescription= $row['courseDescription'];
    }
}
?>

<body>
<div class="container-fluid">
    <div class="row p-1 mt-2 bg-secondary text-white rounded-top">
        <h3 class="text-left"><?php echo $courseName?></h3>
        </div>
</div>
    <?php $postContent = addslashes($content);?>
    <div class='container-fluid mt-2'>
    <div class='row'>
    <div class='col-lg p-3 mb-2 bg-secondary text-white rounded ml-1 mr-1'>
    <p class="text-break"><?php echo $courseDescription?></p>
    
    </div>
    </div>    
    </div>
    </div>
    </form>
    </div>
    </div>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>

  <?php include_once('footer.php')?>
</html>