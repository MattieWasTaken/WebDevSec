<?php include_once 'databaseConnection.php';
error_reporting(1);?>

<!DOCTYPE html>

<head>
<title>IMD Forum - Create Account </title>
<link rel="stylesheet" ref="stylesheet2" href="index.css"/>
<link rel="stylesheet" ref="stylesheet3" href="style.css"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<header>
    <?php include_once 'header.php'?>
</header>

</head>


<body>

<div class="container bg-info text-dark">
<form action="registration.php" method=POST>
   
        <div class="row">
        <h1> Register Now!</h1>
        <p> Please Enter Your Details</p>
        </div>
        <div class="row">
        <div class="input-group mb-3 shadow-sm">
        <span class="input-group-text" id="basic-addon1">Set Username:</span>
        <input type="text" name="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>  
        </div>
        <div class="row">
        <div class="input-group mb-3 shadow-sm">
        <span class="input-group-text" id="basic-addon1">Set Password:</span>
        <input type="password" name="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" required>
        </div>  
        </div>
        <div class="row">
        <div class="input-group mb-3 shadow-sm">
        <span class="input-group-text" id="basic-addon1">Confirm Password:</span>
        <input type="password" name="cpassword" class="form-control" placeholder="Password" aria-label="ConfirmPass" aria-describedby="basic-addon1" required>
        </div>  
        </div>
        <div class="row">
        <div class="input-group mb-3 shadow-sm">
        <span class="input-group-text" id="basic-addon1">Set Email:</span>
        <input type="text" name="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1" required>
        </div>    
        </div>
        <input type="submit" name="create" value="Create Account!">
    
   </form> 



<div>
<?php if(isset($_POST['create'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $confirmPassword = $_POST['cpassword'];
            $hashed= password_hash($password, PASSWORD_DEFAULT);
            $validUsername = "SELECT * FROM users WHERE username ='$username';";
            $uCheck = mysqli_query($conn, $validUsername);
            $validEmail = "SELECT * FROM users WHERE email ='$email';";
            $eCheck = mysqli_query($conn, $validEmail);
            if(mysqli_num_rows($uCheck)> 0 || $username=="") {
                echo "<script type='text/javascript'>
                alert('Username is Already In Use') </script>";
            }else if(mysqli_num_rows($eCheck)>0 || $email ==""){
                echo "<script type='text/javascript'>
                alert('Email is Already In Use') </script>";
            }else if($password==""){
                echo "<script type='text/javascript'>
                alert('Password does not meet requirements') </script>";
            }else if($password!=$confirmPassword){
                echo "<script type='text/javascript'>
                alert('Passwords do not match') </script>";
            }else{
                $adminStatus = 0;
                $stmt = $conn->prepare("INSERT INTO users (username, password, email) VALUES (?,?,?,?);");
                $stmt -> bind_param("sss", $username, $hashed, $email);
                $result = $stmt->execute();
                if($result){
                    header("Location: index.php?createAccount=success");
                    
            }
    }
}
?>
</div>
</div>
</body>





<footer><?php include_once 'footer.php'?>
</html>
