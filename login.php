
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
   
        <div class="row bg-secondary rounded-top">
        <h1 class='ml-2'>Login</h1>
        </div>
        <div class="row bg-secondary">
        <p class='ml-2'>Please Enter Your Details</p>
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
        <div class="row bg-secondary">
        <div class="input-group mb-3 shadow-sm ml-2">
        <span class="input-group-text" id="basic-addon1">Username:</span>
        <input type="text" name="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>  
        </div>
        <div class="row bg-secondary">
        <div class="input-group mb-3 shadow-sm ml-2">
        <span class="input-group-text" id="basic-addon1">Set Password:</span>
        <input type="password" name="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" required>
        </div>  
        </div>
        <div class="row bg-secondary pb-3 rounded-bottom">
            <?php 
                if($_SESSION['loginFailed']>5){
                    $_SESSION['loginLocked']= time();
                    echo "Exceeded Max Login Attempts. Please Wait 1 Minute Before Retrying";

                } else{
                    echo "<input type='submit' class='ml-2' name='login' value='Login!'>";
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
                   $_SESSION['adminStatus']= $userExists['admin_status'];
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

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</div>
</div>


</body>





<footer><?php include_once 'footer.php'?>
</html>
