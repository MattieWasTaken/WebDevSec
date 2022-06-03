<!doctype html>
<html lang="en">
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
<div class="container-fluid p-1 bg-dark">
    <div class="container-fluid">
        <div class="row p-3 mb-2 mt-2 bg-secondary text-white rounded">
            <h3 class="text-left">Support from us</h3>
        </div>
    </div>

    <div class='container-fluid'>
        <div class='row'>
            <div class='col-lg-2 p- mb-2 bg-secondary rounded ml-2 mr-1 '> 
                <p class="text-center "><a href="FAQ.php">Frequently Asked Questions</a></p>
            </div>
			
            <div class='col-lg-2 p- mb-2 bg-secondary rounded ml-2 mr-1'>                    
                <p class="text-center"><a href="ContactUs.php">Send Us A Message</a></p>
            </div>
            
            <div class='col-lg-2 p- mb-2 bg-secondary rounded ml-2 mr-1'>
                <p class="text-center"><a href="contentpolicy.php">User Policy</a></p>
            </div>
        </div>
    </div>
		
        <div class="container-fluid">
            <div class="row">    
                <div class='col-sm-5 p- mb-2 bg-secondary rounded ml-2 mr-1 '>
                    <h2><a href=" ">Gaming?</a></h2>
                </div>
            </div>

            <p>
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    Some Gaming Suggestions For People Looking To Try New Games.
                </button>
            </p>
          
            <div class="collapse collapse-horizontal" id="collapseWidthExample">
                <div class="card card-body col-sm-5 p- mb-2 bg-secondary rounded ml-2 mr-1">
                        <a href=" ">MMORPG: Runescape</a>
                        <a href=" ">RPG: Elden Ring</a>
                        <a href=" ">Turn-based: Age Of Mythology</a>
                        <a href=" ">Indie: Life is Strange</a>
                </div>        
            </div>    
        </div>  

        <div class="container-fluid">
            <div class="row">  
                <div class='col-sm-5 p- mb-2 bg-secondary rounded ml-2 mr-1 '>
                        <h2><a href=" ">Have too much time too use?</a></h2>    
                </div>
            </div>

            <p>
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">        
                        Read these then!?
                </button>
            </p>

            <div class="collapse collapse-horizontal" id="collapseWidthExample">
                <div class="card card-body col-sm-5 p- mb-2 bg-secondary rounded ml-2 mr-1 ">
                        <a href=" ">Check out the home page for the most recent posts by clicking on OnlineTopia.com</a>
                        <a href=" ">Watch Youtube videos to learn how to make a website like this one.</a>
                        <a href=" ">Wanna be cool like Inbus? He's not cool either, dont worry.</a>   
                </div>        
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