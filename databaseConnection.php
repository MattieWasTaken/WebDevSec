<?php
    $dbServername ="localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbName ="attendancedatabase";

    $conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
    if($conn->connect_error) die("Fatal Error");
?>
