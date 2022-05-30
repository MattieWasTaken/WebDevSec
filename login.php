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

<div>
    <?php if(isset($_POST['create'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];

            $stmt = $conn->prepare("INSERT INTO users (username, password, email) VALUES (?,?,?);");
            $stmt -> bind_param("sss", $username, $password, $email);
            $result = $stmt->execute();
            if($result){
                echo "Account Created!";
            }

    }
        /*
        $sql_u = "SELECT * FROM users WHERE username ='$username'";
        $sql_e = "SELECT * FROM users WHERE email ='$email'";
        $res_u = mysqli_query($conn, $mysql_u);
        $res_e = mysqli_query($conn, $mysql_e);
        
        if(mysqli_num_rows($res_u)> 0 ){
            $name_error = "This name is already in use";
        }else if(mysqli_num_rows($res_e) > 0 ){
            $email_error = "This Email is already in use";
        }else{
            $stmt = $conn->prepare("INSERT INTO users (username, password, email) VALUES (?,?,?);");
            $stmt -> bind_param("sss", $username, $password, $email);
            $result = $stmt->execute();
            if($result){
                echo "Account Created!";
                exit();
            }
           
        }
    }
    */
        

    ?>
</div>


</body>





<footer><?php include_once 'footer.php'?>
</html>