<?php

session_start();
require_once __DIR__ . '/db.php';

if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users
            WHERE email='$email'";

    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)==1)
    {
        $user = mysqli_fetch_assoc($result);

        if(password_verify(
            $password,
            $user['password']
        ))
        {
            $_SESSION['user_id']
                = $user['id'];

            $_SESSION['name']
                = $user['name'];

            header("Location: dashboard.php");
        }
        else
        {
            echo "Wrong Password";
        }
    }
    else
    {
        echo "User Not Found";
    }
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

    <div style="margin-bottom: 20px; ">
         <h2 style="color: black; ">Login</h2>
        <h2 style="color: black;">Don't have an account?</h2>
        <a style="color: blue; text-decoration: underline; " href="register.php">Register Here</a>
    </div>

    <div style="margin-bottom: 20px; display: flex; justify-content: center;">
        <form style="height: 300px; width: 300px;color: black;background-color: lightgray;display: flex;flex-direction: column;justify-content: space-between;padding: 20px; " method="POST">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="Enter your email">

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" placeholder="Enter your password">

            <input style="background-color: #007bff; color: white; border: none; padding: 10px; cursor: pointer;" type="submit" name="login">
        </form>
    </div>
    
</body>
</html>