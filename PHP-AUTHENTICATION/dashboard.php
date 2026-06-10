<?php

session_start();

if(!isset($_SESSION['user_id']))
{
    header("Location: login.php");
    exit();
}

$id = $_SESSION['user_id'];
$name = $_SESSION['name'];
$email = $_SESSION['email'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="font-family: Arial, sans-serif;margin: 0; padding: 0; background-color: #f0f0f0;">
    
    <div style="margin-bottom: 20px;background-color: black;padding: 20px;color: white; display: flex; justify-content: space-between; align-items: center;">
        <h1 style="color: white;font-family: Arial, sans-serif;font-size: 24px;">Dashboard</h1>
        <nav style="display: flex; gap: 20px;">
            <a style="color: white;" href="dashboard.php">Dashboard</a>
            <a style="color: white; " href="register.php">Register</a>
            <a style="color: white;" href="login.php">Login</a>
        </nav>
    </div>

    <div style="margin-top: 20px;">
    <table style="width: 100%; border-collapse: collapse; text-align: left;">
        <tr>
            <th style="padding: 10px; border: 1px solid black;">ID</th>
            <th style="padding: 10px; border: 1px solid black;">Name</th>
           
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid black;">
                <?php echo $id; ?>
            </td>
            <td style="padding: 10px; border: 1px solid black;">
                <?php echo $name; ?>
            </td>
        </tr>
    </table>
</div>

    <div style="margin-bottom: 20px;">
        <h2 style="color: black;">Welcome, <?php echo $_SESSION['name']; ?></h2>
        <a style="color: black; background-color: #007bff; padding: 10px; font-weight: bold; text-decoration: none;" href="logout.php">Logout</a>
    </div>
    
</body>
</html>