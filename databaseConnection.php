<?php
    $dbServername ="localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbName ="webdevdatabase1";

    $conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
    if($conn->connect_error) die("Fatal Error");
    print("Connection Established");
?>
