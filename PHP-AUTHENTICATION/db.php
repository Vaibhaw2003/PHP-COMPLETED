<?php

$username = "root";
$password = "";
$database = "auth_system";
$servername = "localhost";

$conn = mysqli_connect(
    $servername,
    $username,
    $password,
    $database
);

if(!$conn){
    die("Connection Failed".mysqli_connect_error());
}else{
     echo "Connection Successful";
}

?>