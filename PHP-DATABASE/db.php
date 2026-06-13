< ! -- Database connection -- >

<?php
$username = "root";
$password = "";
$database = "Demo_system";
$servername = "localhost";

$conn = mysqli_connect(
   $servername,
    $username,
    $password,
    $database
);

if(!$conn){
    die(connection_status().'invalid'.mysqli_connect_error()) ;
}else{
    echo 'Done';
}

?>