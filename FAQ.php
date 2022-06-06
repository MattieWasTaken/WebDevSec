<!doctype html>
<html lang="en">
	<div class="bg-image" style="background-image: url('https://ae01.alicdn.com/kf/HTB1CKe5QNTpK1RjSZFKq6y2wXXaC/LIFE-MAGIC-BOX-Black-Brick-Wall-for-Photo-Background-for-Photo-Sessions-for-Photography-Birthday-Backdrops.jpg_Q90.jpg_.webp'); height: 100vh;">
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
	<div class="container-fluid">
		<div class="row p-3 mb-2 mt-2 bg-secondary text-white rounded">
			<h3 class="text-left">We are here to help</h3>
		</div>
		<div class="row p-3 mb-2 mt-2 bg-secondary text-white rounded">
			<h5 class="text-left">Let us know what you are thinking. . .</h5>
		</div>
	</div>

	<div class="accordion" id="accordionExample">
		<div class="card bg-secondary">
			<div class="card-header" id="headingOne">
			<h2 class="mb-0">
				<button class="btn btn-link text-white" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
				Report problem
				</button>
			</h2>
			</div>

			<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
				<div class="card-body">
					<div>
						<form action="submitquestion.php" method="POST">
						<span class="text-nowrap bg-light border" style="width: 9rem;">Username:</span>
						<input type="text" name="user_id" placeholder="Enter your Display Name">
					</div>
					<div class="FAQ-Text">
						<textarea type="text" name="faq-content" id="faq-box" style="width: 20rem; height: 10rem;" placeholder="Tell us what happened. . ."></textarea>
						<br>
						<button type="submit" name="submit">Submit</button>
					</div>
						</form>
				</div>
			</div>
		</div>

		

		<div class="card bg-secondary">
			<div class="card-header" id="headingTwo">
			<h2 class="mb-0">
				<button class="btn btn-link collapsed text-white" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
				Here is what we were asked lately. . .
				</button>
			</h2>
			</div>
				<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
					<div>
					<br>
						<h3>Q: How to create an account?</h3>
					</div>
					<div>
						<p>A:Click on Register button at the top of the page or <a href="registration.php" class="text-reset">HERE!</a></p>
						<p>A:Follow the instruction at the Registartion page</p>
						<p>A:You will need to set Your Username, password and email</p>
					</div>
					
					<div>
					<br>
						<h3>Q: Cannot find a certain page? Here is how to!</h3>
					</div>
					<div>
						<p>A:You can use the search feature at the search bar at the very top of every page.</p>
						<p>A:It will provide you with a list of pages that contain your keyword</p>
					</div>
					
					<div>
					<br>
						<h3>Q: How to reset password?</h3>
					</div>
					<div>
						<p>A:The search feature has not yet been completed.</p>
						<p>A:This feature is not yet available. Stay tuned for further updates!</p>
						<p>A:This feature is not yet available. Stay tuned for further updates!</p>
						<p>A:This feature is not yet available. Stay tuned for further updates!</p>
					</div>
					

					<div>
					<br>
						<h3>Q: Found something not right? Here is how to Report an unappropriate post!</h3>
					</div>					
					<div >
						<p>A: Please submit a report in the box within the above section</p>
					</div>
					
					<div>
					<br>
						<h3>Q: What can we do?</h3>
					</div>
					<div>
						<p>A: We can do whatever you would like us to!</p>
					</div>
				
					<div>
					<br>
						<h3>Q: Want to learn how to learn to do these stuffs?</h3>
					</div>
					<div>
					<a href="learningweb.php" class="text-reset">A: Click me, I will show you what you need to look at to do website designing</a>
					
					</div>
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

  <?php include_once('footer.php')?>
</html>