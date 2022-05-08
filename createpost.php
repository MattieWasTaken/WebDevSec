
<!DOCTYPE html>
<html>

<head>
<title>Potato Forum </title>
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
            <a href="FAQ.php"><button>F.A.Q</button></a>
            <a href="index.php"><button>Home</button></a>
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
<div class="create-post">
        <div class="post-title">
            <h1>Create Post</h1>
        </div>
</div>
<div class="make-post">
<form action="submitpost.php" method="POST">

    <span> Author Name:</span>
    <input type="text" name="user_id" placeholder="Enter your Display Name">
    <br>
    <br>
    <span>Title:</span>
    <textarea id="title" type="text" name="title" placeholder="Title"></textarea>
    <br>
    <br>
    <label for="subtopic">Choose a Subtopic</label>
    <select name="subtopic" id="subtopic">Subtopics
    <option value="potato">Potato</option>
    <option value="gaming">Gaming</option>
    <option value="lifestyle">Lifestyle</option>
    </select>
    <br>
    <br>
    <p>Post Content</p>
    <textarea type="text" name="content" id="content" placeholder="Speak Your Mind..."></textarea>
    <br>    
    <button type="submit" name="submit">Post</button>
</div>
</form>
</body>
</html>
