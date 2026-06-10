<?php

include 'db.php';

if(isset($_POST['register']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];

    $password = password_hash(
        $_POST['password'],
        PASSWORD_DEFAULT
    );

    $sql = "INSERT INTO users(name,email,password)
            VALUES('$name','$email','$password')";

    mysqli_query($conn,$sql);

    echo "Registration Successful";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="font-family: Arial, sans-serif;margin: 0; padding: 0; background-color: #f0f0f0;text-align: center;">
   
     <div style="margin-bottom: 20px;background-color: black;padding: 20px;color: white; display: flex; justify-content: space-between; align-items: center;">
        <h1 style="color: white;font-family: Arial, sans-serif;font-size: 24px;">Dashboard</h1>
        <nav style="display: flex; gap: 20px; text-decoration: none;">
            <a style="color: white;" href="dashboard.php">Dashboard</a>
            <a style="color: white; " href="register.php">Register</a>
            <a style="color: white;" href="login.php">Login</a>
        </nav>
    </div>


    <div style="margin-bottom: 20px;" >
        <h2 style="color: black; ">Register</h2>
    </div>
    
    <div style="margin-top: 20px; display: flex; justify-content: center;">
        <form style="height: 300px; width: 300px;color: black;background-color: lightgray;display: flex;flex-direction: column;justify-content: space-between;padding: 20px; " method="POST">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" placeholder="Enter your name">

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="Enter your email">

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" placeholder="Enter your password">

            <input style="background-color: #007bff; color: white; border: none; padding: 10px; cursor: pointer;" type="submit" name="register">
        </form>
    </div>
</body>
</html>