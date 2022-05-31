<?php 

session_start();
error_reporting(0);
?>

<!DOCTYPE html>
<html>

<header>


<div>
	<img src="https://i.ibb.co/894Xm19/278471543-727015038329277-2731362503377802712-n.png" alt="Site Logo" border="0" style="width:75px; height:75px;" img align="left">
    
    <div class="row">
        
        <div class="column left">
           <a href="index.php"> <p class="mainheading" > OnlineTopia.com </p></a>

            <form action="search.php">
                <input type="text" name="search" id="" placeholder="Search...">
               <a href='search.php?search='id> <button type="submit">Submit</button> </a>
            </form>
        </div>
        
        <div class="column middle">
            <a href="ContactUs.php"><button>Contact Us</button></a>
            <a href="FAQ.php"><button>F.A.Q</button></a>
            <a href="createpost.php"><button>Submit Post</button></a>
            <br>  
        </div>
            
        <div class="column right">
        
        <?php 
        if(isset($_SESSION['userid'])){
            echo "<a href='registration.php'> <button class='smallbutton' > My Profile </button></a>";
            echo "<a href='logout.php'> <button class='smallbutton' >Logout</button></a>";
            
        }else {
           echo "<a href='registration.php'> <button class='smallbutton' > Create Account</button></a>";
           echo "<a href='login.php'> <button class='smallbutton' > Login </button></a>";
        }

        ?>
        
        </div>
        
    </div>

</div>
    
</header> 
</html>