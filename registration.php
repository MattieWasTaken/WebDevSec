<?php include_once 'databaseConnection.php'?>

<!DOCTYPE html>

<head>
<title>IMD Forum - Create Account </title>

<link rel="stylesheet" ref="stylesheet3" href="style.css"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<link rel="stylesheet" ref="stylesheet2" href="index.css"/>

</head>

<header> <?php include_once 'header.php'?>

<body>

<div>
<form action="registration.php" method=POST>
    <div class="container bg-transparent">
        <div class="row">
        <h1> Register Now!</h1>
        <p> Please Enter Your Details</p>
        </div>

        <div class="row">
        <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Set Username:</span>
        <input type="text" name="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>  
        </div>
        <div class="row">
        <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Set Password:</span>
        <input type="text" name="password" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>  
        </div>
        <div class="row">
        <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Set Email:</span>
        <input type="text" name="email" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>    
        </div>
        </div>
        </div>
        <input type="submit" name="create" value="Create Account!">
    </div></form>
</div>

    
</body>





<footer><?php include_once 'footer.php'?>
</html>
<?php if(isset($_POST['create'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];

            $validUsername = "SELECT * FROM users WHERE username ='$username';";
            $uCheck = mysqli_query($conn, $validUsername);
            $validEmail = "SELECT * FROM users WHERE email ='$email';";
            $eCheck = mysqli_query($conn, $validEmail);
            if(mysqli_num_rows($uCheck)> 0 || $username="") {
                echo "<script type='text/javascript'>
                alert('Username is Already In Use') </script>";
            }else if(mysqli_num_rows($eCheck)>0 || $email ==""){
                echo "<script type='text/javascript'>
                alert('Email is Already In Use') </script>";
            }else if($password==""){
                echo "<script type='text/javascript'>
                alert('Password does not meet requirements') </script>";
            }else{
                $stmt = $conn->prepare("INSERT INTO users (username, password, email) VALUES (?,?,?);");
                $stmt -> bind_param("sss", $username, $password, $email);
                $result = $stmt->execute();
                if($result){
                    header("Location: index.php?createAccount=true");
                    
            }
    }
}
    ?>