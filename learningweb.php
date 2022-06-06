<!doctype html>
<html lang="en">
    <div class="bg-image" style="background-image: url('https://ae01.alicdn.com/kf/HTB1CKe5QNTpK1RjSZFKq6y2wXXaC/LIFE-MAGIC-BOX-Black-Brick-Wall-for-Photo-Background-for-Photo-Sessions-for-Photography-Birthday-Backdrops.jpg_Q90.jpg_.webp'); height: 110vh;">
  <head>
    <title>Learning Web Designing</title>
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
        <h3 class="text-left">Here we are to recommend you how to make a website.</h3>
    </div>
  </div>

  <div class="accordion" id="accordionExample">
    <div class="card bg-secondary">
      <div class="card-header" id="headingOne">
        <h2 class="mb-0">
          <button class="btn btn-link text-white" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Starting
          </button>
        </h2>
      </div>

      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
        <div class="card-body">
          <h5>We would like you to begin with. . .</h5>                  
          <p>-Learning at basics by <a class="text-white" href="https://www.w3schools.com/html/">HTML by W3school</a></p>
          <p>-Learning about how to use external resource with your web designing by <a class="text-white" href="https://getbootstrap.com/">Bootstrap</a></p>
          <p>-Learning how to use java script with HTML to make your HTML look fancier <a class="text-white" href="https://www.w3schools.com/js/default.asp">JavaScript</a></p>
          <p> <a class="text-white" href=""></a></p>
        </div>
      </div>
    </div>

    <div class="card bg-secondary">
      <div class="card-header" id="headingTwo">
        <h2 class="mb-0">
          <button class="btn btn-link collapsed text-white" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Learn more on designing
          </button>
        </h2>
      </div>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
        <div class="card-body">
          <h5>Here is some video about HTML designing. . .</h5>                  
          <p>-Short Video about HTML </p>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/u0OeZfIfBRI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <p>-Short video on how to make HTML</p>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/MDLn5-zSQQI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <p>-Learning how to make an animation by using HTML</p>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/fxJdmBM0SYs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <p>-quick video on how bootstrap works</p>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/yalxT0PEx8c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>

    <div class="card bg-secondary">
      <div class="card-header" id="headingThree">
        <h2 class="mb-0">
            <button class="btn btn-link collapsed text-white" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Here is the resource that we recommend
            </button>
        </h2>
      </div>
      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
        <div class="card-body">
                            <a class="text-white" href="https://www.w3schools.com/php/default.asp">PHP is better than HTML file, have a look into this link! (click me!)</a><br>
                            <a class="text-white" href="https://www.youtube.com/results?search_query=making+website+php">Watch Youtube videos to learn how to make a website like this one.</a><br>
                            <a class="text-white" href="https://www.wampserver.com/en/">Wanna make a database link to your website? Use this database program!</a><br>
        </div>
      </div>
    </div>
  </div>

</body>

  <?php include_once('footer.php')?>
</html>