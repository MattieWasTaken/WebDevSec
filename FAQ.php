
<!DOCTYPE html>
<html>

<head>
<title>F.A.Q</title>
<link rel="stylesheet" ref="stylesheet2" href="index.css"/>
<link rel="stylesheet" ref="stylesheet" href="style.css"/>

<header>
<?php include_once 'header.php'; ?>
</header>


<body>
	<br><br><br><br>
    <div class="container">
        <div class="subforum">
			<div class="subforum-title">
                <h1>We are here to help.</h1>
            </div>

            <div>
                <div>
                    <i class="fa fa-car"></i>
                    <h2>Report problem</h2>
                </div>
				
				   <form action="submitquestion.php" method="POST">
                    <span>Username:</span>
                    <input type="text" name="user_id" placeholder="Enter your Display Name">
				 <div class="FAQ-Text">
					<textarea type="text" name="faq-content" id="faq-box" placeholder="Tell us what happened. . ."></textarea>
                     <br>
					<button type="submit" name="submit">Submit</button>
                </div>
                </form>
            </div>
			
			<div class="subforum-title">
            
				<form action="/action_page.php">
                <input type="text" name="q" id="" placeholder="Search keywords...">
                <button type="submit">Dig the words!</button> 
            </form>
            </div>
			
			<div class="subforum-title">
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

	<?php include_once 'footer.php';?>

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






</html>
