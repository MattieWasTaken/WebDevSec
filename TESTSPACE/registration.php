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
                $stmt = $conn->prepare("INSERT INTO users (username, password, email, admin) VALUES (?,?,?,?);");
                $stmt -> bind_param("sssi", $username, $hashed, $email, $adminStatus);
                $result = $stmt->execute();
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
