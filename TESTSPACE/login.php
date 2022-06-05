
<!DOCTYPE html>
<head>
    <title>IMD Forum</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>

<?php 
include_once('header.php');
include_once('databaseConnection.php');

if (isset($_SESSION["loginLocked"])){
    $difference = time() - $_SESSION['loginLocked'];
    if($difference > 60){
        unset($_SESSION['loginFailed']);
        unset($_SESSION['loginLocked']);
    }
}

?>


<body>

<div class="container-fluid bg-dark text-white pt-3">
<form action="login.php" method=POST>
   
        <div class="row bg-secondary rounded">
        <h1>Login</h1>
        </div>
        <div class="row bg-secondary rounded">
        <p>Please Enter Your Details</p>
        </div>
       <?php if(isset($_REQUEST['Loginfailed'])){
    if($_GET['Loginfailed']=="invalidPass"){
        echo "<div class='row bg-secondary rounded'> Error: Invalid Username/Password Combination</div>";
        $_SESSION["loginFailed"] +=1;
    }else if($_GET['Loginfailed']=="wrongUID"){
        echo "<div class='row bg-secondary rounded'> Error: Invalid Username/Password Combination</div>";
        $_SESSION["loginFailed"] +=1;
    }
}       ?>
        <div class="row bg-secondary rounded">
        <div class="input-group mb-3 shadow-sm">
        <span class="input-group-text" id="basic-addon1">Username:</span>
        <input type="text" name="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>  
        </div>
        <div class="row bg-secondary rounded">
        <div class="input-group mb-3 shadow-sm">
        <span class="input-group-text" id="basic-addon1">Set Password:</span>
        <input type="password" name="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" required>
        </div>  
        </div>
        <div class="row bg-secondary pb-3 rounded">
            <?php 
                if($_SESSION['loginFailed']>5){
                    $_SESSION['loginLocked']= time();
                    echo "Exceeded Max Login Attempts. Please Wait 1 Minute Before Retrying";

                } else{
                    echo "<input type='submit' name='login' value='Login!'>";
                }
            ?>
        
</div>
   </form> 



<div>
<?php

 if(isset($_POST['login'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $_SESSION['lastLogin']= time();
            unset($_SESSION['loginFailed']);
            unset($_SESSION['loginLocked']);
            if($username=="" || $password == ""){
                echo "<br> You must type a username and password";
            }else{
               $userExists = userExists($conn, $username, $password);
               if($userExists==false){
                   echo "Username does not exist <br>";
                   header("Location: login.php?LoginFailed=wrongUID");
               } 
               $hashedPassword = $userExists['password'];
               if(password_verify($password, $hashedPassword)){
                   session_start();
                   $_SESSION["userid"] = $userExists['user_id'];
                   $_SESSION['username'] = $userExists['username'];
                   header("Location: index.php?Login=success");
                   exit();
               }else{
                   echo "Wrong Username/Password Combination";
                   header("Location: login.php?Loginfailed=invalidPass");
               }
            }
        }
                
            

            
function userExists($conn, $username, $password){
    $sql ="SELECT * FROM users WHERE username = ?;";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);
    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    } else {
        $result = false;
        return $result;
    }
}    

?>


</div>
</div>
</body>





<footer><?php include_once 'footer.php'?>
</html>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>