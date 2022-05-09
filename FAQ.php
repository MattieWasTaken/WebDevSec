
<!DOCTYPE html>
<html>

<head>
<title>F.A.Q</title>
<link rel="stylesheet" ref="stylesheet2" href="index.css"/>
<link rel="stylesheet" ref="stylesheet" href="style.css"/>
<header>

<div>
	<img src="https://i.ibb.co/894Xm19/278471543-727015038329277-2731362503377802712-n.png" alt="Site Logo" border="0" style="width:75px; height:75px;" img align="left">
    
    <div class="row">
        
        <div class="column left">
        <a href="index.php"> <p class="mainheading" > OnlineTopia.com </p></a>

            <form action="/action_page.php">
                <input type="text" name="q" id="" placeholder="Search...">
                <button type="submit">Submit</button> 
            </form>
        </div>
        
        <div class="column middle">
            <a href="aboutus.php"><button>Contact Us</button></a>
            <a href="index.php"><button>Home</button></a>
            <a href="createpost.php"><button>Submit Post</button></a>
            <br>  
        </div>
            
        <div class="column right">
            <button class="smallbutton" href="#CreateAcc"> Create Account </button>
            <button class="smallbutton" href="#LOGINPAGE"> Log In </button>
        </div>
        
    </div>

</div>
    
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
			
			
			
			<button type="button" class="collapsible" style="color:white" ><h2>Here is what we were asked lately. . .</h2></button>
   
            <div class="content">
				<<div class="subforum-icon subform-column center">
                    <i class="fa fa-car"></i>
                    <p>How to create an account?</p>
                </div>
				
				<div class="subforum-icon subform-column center">
                    <i class="fa fa-car"></i>
                    <p>Cannot find a certain page? Here is how to!</p>
                </div>
				
				<div class="subforum-icon subform-column center">
                    <i class="fa fa-car"></i>
                    <p>Found something not right? Here is how to Report an unappropriate post!</p>
                </div>
				
				<div class="subforum-icon subform-column center">
                    <i class="fa fa-car"></i>
                    <p>What can we do?</p>
                </div>

				<div class="subforum-icon subform-column center">
                    <i class="fa fa-car"></i>
                    <p>Want to learn how to learn to do these stuffs? You better not!</p>
                </div>
			</div>
		</div>
     


    </div>

	<footer>
	<div class="footerarea">
		<a href="ContactUs.php"> <f style = "border:red; border-width:2px; border-style:solid;">Contact US</f></a>
        <a href="FAQ.php"><f  style = "border:red; border-width:2px; border-style:solid;">F.A.Q.</f></a>
        <a href="support.php"><f style = "border:red; border-width:2px; border-style:solid;">Support</f></a>
		<a href="aboutus.php"> <f style = "border:red; border-width:2px; border-style:solid;">About Us</f></a>
        <a href="contentpolicy.php"><f href="#Content Policy" style = "border:red; border-width:2px; border-style:solid;">Content Policy</f></a>
        <div class="copyright">
        <small>&copy; Copyright 2018, IMD Internet Solutions Inc</small>
        </div>
    </div>
	
	
	</footer>

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
