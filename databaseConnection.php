<?php
    $dbServername ="localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbName ="webdevdatabase1";

    $conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
    print("Connection Established");
?>
