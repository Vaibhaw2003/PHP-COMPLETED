< ! -- Database connection -- >

<?php
$username = "root";
$password = "";
$database = "Demo_system";
$servername = "localhost";

$conn = mysqli_connect(
    $username,
    $password,
    $database,
    $servername,
);

if(!$conn){
    die(connection_status().'invalid'.mysqli_connect_error()) ;
}else{
    echo 'Done';
}

?>