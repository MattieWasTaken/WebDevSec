<!doctype html>
<html lang="en">
<div class="bg-image" style="background-image: url('https://ae01.alicdn.com/kf/HTB1CKe5QNTpK1RjSZFKq6y2wXXaC/LIFE-MAGIC-BOX-Black-Brick-Wall-for-Photo-Background-for-Photo-Sessions-for-Photography-Birthday-Backdrops.jpg_Q90.jpg_.webp'); height: 100vh;">
  <head>
    <title>Support</title>
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
    <div class="container-fluid">
        <div class="row p-3 mb-2 mt-2 bg-secondary text-white rounded">
            <h3 class="text-left">Support from us</h3>
        </div>
    </div>

    <div class='container-fluid'>
        <div class='row'>
            <div class='col-lg-2 p- mb-2 bg-secondary rounded ml-2 mr-1 '> 
                <p class="text-center"><a class="text-white"href="FAQ.php">Frequently Asked Questions</a></p>
            </div>
			
            <div class='col-lg-2 p- mb-2 bg-secondary rounded ml-2 mr-1'>                    
                <p class="text-center"><a class="text-white"href="aboutus.php">Send Us A Message</a></p>
            </div>
            
            <div class='col-lg-2 p- mb-2 bg-secondary rounded ml-2 mr-1'>
                <p class="text-center"><a class="text-white" href="contentpolicy.php">User Policy</a></p>
            </div>
        </div>
    </div>

    <div class="accordion" id="accordionExample">
      <div class="card bg-secondary">
        <div class="card-header" id="headingOne">
          <h2 class="mb-0">
            <button class="btn btn-link text-white" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Gaming? Try out these game
            </button>
          </h2>
        </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body">
                            <a class="text-white" href="https://play.runescape.com/">MMORPG: Runescape</a><br>
                            <a class="text-white" href="https://store.steampowered.com/app/1245620/ELDEN_RING/">RPG: Elden Ring</a><br>
                            <a class="text-white" href="https://store.steampowered.com/app/266840/Age_of_Mythology_Extended_Edition/">Turn-based: Age Of Mythology</a><br>
                            <a class="text-white" href="http://www.armadillorun.com/">Indie: Armadillo Run</a>
          </div>
        </div>
      </div>
      <div class="card bg-secondary">
        <div class="card-header" id="headingTwo">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed text-white" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Spare time?
            </button>
          </h2>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
          <div class="card-body">
                            <a class="text-white" href="index.php">Check out the home page for the most recent posts</a><br>
                            <a class="text-white" href="https://www.youtube.com/results?search_query=making+website+php">Watch Youtube videos to learn how to make a website like this one.</a><br>
                            <a class="text-white" href="https://www.youtube.com/watch?v=M0dwYm_BQ5c&ab_channel=HD49">Watch this interesting Video then CLICK ME!</a><br>
                            <a class="text-white" href="https://www.youtube.com/watch?v=Abw77DhBn2o&ab_channel=TheHumanSpider">I got Spider Man for you!</a><br>
          </div>
        </div>
      </div>
    </div>

  </div>

 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </body>

  <?php include_once('footer.php')?>
</html>