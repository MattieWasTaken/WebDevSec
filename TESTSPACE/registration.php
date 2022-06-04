<?php include_once 'databaseConnection.php';
?>
<!DOCTYPE html>
<html>

<title>IMD Forum</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>

<header>
<?php include_once 'header.php'; ?>
</header>


<body>
<div class="container-fluid bg-dark text-white pt-3">
<div class="container-fluid mt-2 bg-secondary text-white rounded">
<form action="registration.php" method=POST>
        <div class="row">
        <h1 class="ml-2"> Register Now!</h1>
        </div>
        <div class="row ml-1">
        <p> Please Enter Your Details</p>
        </div>
        <div class="row pl-2">
        <div class="input-group mb-3 shadow-sm">
        <span class="input-group-text" id="basic-addon1">Set Username:</span>
        <input type="text" name="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>  
        </div>
        <div class="row pl-2">
        <div class="input-group mb-3 shadow-sm">
        <span class="input-group-text" id="basic-addon1">Set Password:</span>
        <input type="password" name="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" required>
        </div>  
        </div>
        <div class="row pl-2">
        <div class="input-group mb-3 shadow-sm">
        <span class="input-group-text" id="basic-addon1">Confirm Password:</span>
        <input type="password" name="cpassword" class="form-control" placeholder="Password" aria-label="ConfirmPass" aria-describedby="basic-addon1" required>
        </div>  
        </div>
        <div class="row pl-2">
        <div class="input-group mb-3 shadow-sm">
        <span class="input-group-text" id="basic-addon1">Set Email:</span>
        <input type="text" name="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1" required>
        </div>    
        </div>
        <input class="mb-2" type="submit" name="create" value="Create Account!">
   </form> 



<div>
<?php 
 error_reporting(1);
if(isset($_POST['create'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            echo $username;
            if(str_contains($username, $forbiddenCharacter)!==true){
                echo "No Special Characters Allowed In Username<br>";
                echo "$username<br>";
                echo strpos($username, $forbiddenCharacter);
                /*header('Location: registration.php?registrationFailed=InvalidCharacter');*/
            }
            $email = $_POST['email'];
            $bio ="";
            $forbiddenCharacter = '\'';
            $confirmPassword = $_POST['cpassword'];
            $hashed= password_hash($password, PASSWORD_DEFAULT);
            $validUsername = "SELECT * FROM users WHERE username ='$username';";
            $uCheck = mysqli_query($conn, $validUsername);
            $validEmail = "SELECT * FROM users WHERE email ='$email';";
            $eCheck = mysqli_query($conn, $validEmail);
            $uppercaseCheck = preg_match('@[A-Z]@', $password);
            $lowercaseCheck = preg_match('@[a-z]@', $password);
            $numbersCheck = preg_match('@[0-9]@', $password);
            $specialChars = preg_match('@[^/w]@', $password);
            if(mysqli_num_rows($uCheck)> 0 || $username=="") {
                echo "username exists";
            }else if(mysqli_num_rows($eCheck)>0 || $email ==""){
                echo "email exists";
            }else if(!$uppercaseCheck || !$lowercaseCheck || !$numbersCheck || !$specialChars || strlen($password) < 8){
                echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
            }else if($password!=$confirmPassword){
                echo "passwords do not match";
            }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo "Please Enter Valid Email";
            }else if(preg_match('@[^/w]@', $username)){
                echo "No Special Characters Allowed In Username";
            }else{
                
                $adminStatus = 0;
                echo "admin status assigned<br>";
                $stmt = $conn->prepare("INSERT INTO users (username, password, email, bio, admin_status) VALUES (?,?,?,?,?);");
                echo "statement prepared<br>";
                $stmt -> bind_param("ssssi", $username, $hashed, $email,$bio, $adminStatus);
                echo "statement binded";
                $result = $stmt->execute();
                echo "statement executed";
                if($result){
                    header("Location: index.php?createAccount=success");
                    
            }
    }
}
?>
</div>
</div>
</div>
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