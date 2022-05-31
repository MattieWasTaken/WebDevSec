<?php include_once 'databaseConnection.php'?>

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
<form action="login.php" method=POST>
   
        <div class="row">
        <h1>Login</h1>
        <p> Please Enter Your Details</p>
        </div>
        <div class="row">
        <div class="input-group mb-3 shadow-sm">
        <span class="input-group-text" id="basic-addon1">Username:</span>
        <input type="text" name="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>  
        </div>
        <div class="row">
        <div class="input-group mb-3 shadow-sm">
        <span class="input-group-text" id="basic-addon1">Set Password:</span>
        <input type="password" name="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" required>
        </div>  
        </div>
        <input type="submit" name="login" value="Login!">
    
   </form> 



<div>
<?php if(isset($_POST['login'])){
            $username = $_POST['username'];
            $password = $_POST['password'];

            if($username=="" || $password == ""){
                echo "<br> You must type a username and password";
            }else{
               $userExists = userExists($conn, $username, $password);
               if($userExists==false){
                   echo "You Dun Fucked Up";
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
