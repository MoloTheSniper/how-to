<?php

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "epiuse";

$conn =  mysqli_connect($servername,$username ,$password,$db_name);

if($conn->connect_errno)
{
    die("Connection Failed: " . $conn->connect_error);
}else
{
    // echo "Database Connected";
}
?>