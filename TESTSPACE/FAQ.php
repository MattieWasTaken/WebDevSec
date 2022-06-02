<!doctype html>
<html lang="en">
  <head>
    <title>FAQ</title>
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
        <h3 class="text-left">We are here to help</h3>
    </div>
	<div class="row p-3 mb-2 mt-2 bg-secondary text-white rounded">
        <h5 class="text-left">Let us know what you are thinking. . .</h5>
    </div>
</div>
<?php 

    echo "
	//1st
<div class='container-fluid'>
    <div>
                <div>
                  
                    <h2>Report problem</h2>
                </div>
				<div>
				   <form action="submitquestion.php" method="POST">
                    <span>Username:</span>
                    <input type="text" name="user_id" placeholder="Enter your Display Name">
				</div>
				<div class="FAQ-Text">
					<textarea type="text" name="faq-content" id="faq-box" placeholder="Tell us what happened. . ."></textarea>
                     <br>
					<button type="submit" name="submit">Submit</button>
                </div>
                </form>
            
			
			<div>
            
				<form action="/action_page.php">
                <input type="text" name="q" id="" placeholder="Search keywords...">
                <button type="submit">Dig the words!</button> 
            </form>
            </div>
	</div>
	
	<div >
                <h1>Here is what we were asked lately. . .</h1>
            </div>
			
			<button type="button" class="collapsible" style="color:white" ><h3>Q:How to create an account?</h3></button>
			<div class="content">
				<p>A:This feature is not yet available. Stay tuned for further updates!</p>
			</div>
			
			<button type="button" class="collapsible" style="color:white" ><h3>Q:Cannot find a certain page? Here is how to!</h3></button>
			<div class="content">
				<p>A:The search feature has not yet been completed.</p>
			</div>
			
			<button type="button" class="collapsible" style="color:white" ><h3>Q:Found something not right? Here is how to Report an unappropriate post!</h3></button>
			<div class="content">
				<p>A:Please submit a report in the above text box provided!</p>
			</div>
			
			<button type="button" class="collapsible" style="color:white" ><h3>Q:What can we do?</h3></button>
			<div class="content">
				<p>A:We can do whatever you would like us to!</p>
			</div>
		
			<button type="button" class="collapsible" style="color:white" ><h3>Q:Want to learn how to learn to do these stuffs?</h3></button>
			<div class="content">
				<p>A:Youtube tutorials help a lot...</p>
			</div>
	</div>
</div>

 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script>
	var coll = document.getElementsByClassName("collapsible");
	var i;

	for (i = 0; i < coll.length; i++) {
	  coll[i].addEventListener("click", function() {
		this.classList.toggle("active");
		var content = this.nextElementSibling;
		if (content.style.display === "block") {
		  content.style.display = "none";
		} else {
		  content.style.display = "block";
		}
	  });
	}
	</script>
  </body>

  <?php include_once('footer.php')?>
</html>