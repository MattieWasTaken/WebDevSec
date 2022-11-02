
<!DOCTYPE html>
<html>
<div class="bg-image" style="background-image: url('https://ae01.alicdn.com/kf/HTB1CKe5QNTpK1RjSZFKq6y2wXXaC/LIFE-MAGIC-BOX-Black-Brick-Wall-for-Photo-Background-for-Photo-Sessions-for-Photography-Birthday-Backdrops.jpg_Q90.jpg_.webp'); height: 100vh;">

<title>IMD Forum</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>

<header>
<?php include_once 'header.php'; 
 ob_start();?>
</header>

<body>
<div class="container-fluid mt-2 bg-secondary text-white rounded">
<?php 
include 'databaseConnection.php';
?>
<form action="registration.php" method=POST>
        <div class="row">
        <h1 class="ml-2"> Register Now!</h1>
        </div>
        <div class="row ml-1">
        <p> Please Enter Your Details</p>
        </div>
        <div class ='row pl-2 mb-3'>
        <select class="form-control" select name='type' id='selection'>
        <option>Select Student Or Teacher</option>
        <option value='student'>Student</option>
        <option value='teacher'>Teacher</option>
        </select>
        </div>
        <div class ='row pl-2 mb-3'>
        <select class="form-control" select name='classSelection' id='selection'>
        <option>Please Select your Class</option>
       <?php 
       $classQuery = "SELECT * FROM `courses`;";
       $classQueryResult = mysqli_query($conn, $classQuery);
       $queryCounter = 0;
       while($classes[]=mysqli_fetch_array($classQueryResult)){
        $classID = $classes[$queryCounter]['courseID'];
        $className= $classes[$queryCounter]['courseName'];
        echo "<option value='$classID'>$className</option>";
        $queryCounter++;
       }
       ?>
        </select>
        </div>
        <div class="row pl-2">
        <div class="input-group mb-3 shadow-sm">
        <span class="input-group-text" id="basic-addon1">First Name:</span>
        <input type="text" name="fname" class="form-control" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>  
        </div>
        <div class="row pl-2">
        <div class="input-group mb-3 shadow-sm">
        <span class="input-group-text" id="basic-addon1">Last Name:</span>
        <input type="text" name="lname" class="form-control" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>  
        </div>
        <div class="row pl-2">
        <div class="input-group mb-3 shadow-sm">
        <span class="input-group-text" id="basic-addon1">Gender:</span>
        <input type="text" name="gender" class="form-control" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>  
        </div>
        <div class="row pl-2">
        <div class="input-group mb-3 shadow-sm">
        <span class="input-group-text" id="basic-addon1">Date of Birth</span>
        <input type="text" name="DOB" class="form-control" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>  
        </div>
        <div class="row pl-2">
        <div class="input-group mb-3 shadow-sm">
        <span class="input-group-text" id="basic-addon1">Age:</span>
        <input type="text" name="age" class="form-control"  aria-label="Password" aria-describedby="basic-addon1" required>
        </div>  
        </div>
        <div class="row pl-2">
        <div class="input-group mb-3 shadow-sm">
        <span class="input-group-text" id="basic-addon1">Set Password:</span>
        <input type="password" name="password" class="form-control"  aria-label="Password" aria-describedby="basic-addon1" required>
        </div>  
        </div>
        <div class="row pl-2">
        <div class="input-group mb-3 shadow-sm">
        <span class="input-group-text" id="basic-addon1">Confirm Password:</span>
        <input type="password" name="cpassword" class="form-control"  aria-label="ConfirmPass" aria-describedby="basic-addon1" required>
        </div>  
        </div>
        <div class="row pl-2">
        <div class="input-group mb-3 shadow-sm">
        <span class="input-group-text" id="basic-addon1">Set Email:</span>
        <input type="text" name="email" class="form-control" aria-label="Email" aria-describedby="basic-addon1" required>
        </div>    
        </div>
        <input class="mb-2" type="submit" name="create" value="Create Account!">
   </form> 



<div>
<?php 
error_reporting(true);
include('databaseConnection.php');
if(isset($_POST['create'])){
            $fname = ($_POST['fname']);
            $lname = ($_POST['lname']);
            $password = ($_POST['password']);
            $gender = ($_POST['gender']);
            $DOB = ($_POST['DOB']);
            $age = ($_POST['age']);
            $email = ($_POST['email']);
            $courseID = ($_POST['classSelection']);
            $email = $_POST['email'];
            $confirmPassword = $_POST['cpassword'];
            $type = $_POST['type'];
            $daysMissed = 0;
                if($password!=$confirmPassword){
                    echo "Passwords Do Not Match";
                }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    echo "Please Enter Valid Email";
                }else{
                    $adminStatus = 0;
                    $stmt = $conn->prepare("INSERT INTO personid (type, password, firstName, lastName, gender, age, DOB, email, classID, daysMissed) VALUES (?,?,?,?,?,?,?,?,?,?);");
                    $stmt -> bind_param("sssssissii", $type, $password, $fname, $lname, $gender,$age, $DOB, $email, $courseID, $daysMissed);
                    $stmt->execute();
                   $accountCreated = true;
                   if($accountCreated){
                    header("Location: index.php?createAccount=success");
                    exit();
                   }
                   
            }
       
    }


?>

</div>
</div>
</div>
<?php if($accountCreated){
    
    echo $accountCreated;
}?>
</body>





<footer><?php include_once 'footer.php'?>
</html>
<?php 
if(isset($_REQUEST['registrationFailed'])){ 
    if($_GET['registrationFailed']=="InvalidCharacter"){
        echo "<script type='text/javascript'>
        alert('Your Username Contains an illegal character') </script>";
    }

}

?>