<?php

$name   = $_POST['name'] ?? '';
$email  = $_POST['email'] ?? '';
$phone  = $_POST['phone'] ?? '';
$age    = $_POST['age'] ?? '';
$gendar = $_POST['gendar'] ?? '';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body style="margin:0; padding:0;">

<div style="display:flex; justify-content:space-between; align-items:center; color:red; height:50px; background-color:black; padding:0 20px;">
    <h2>Dashboard</h2>

    <nav style="display:flex; gap:20px;">
        <a href="Form.php" style="color:white; text-decoration:none;">Home</a>
        <a href="#" style="color:white; text-decoration:none;">About</a>
        <a href="Dashboard.php" style="color:white; text-decoration:none;">Dashboard</a>
    </nav>
</div>

<div style="padding:30px; ">

    <h2 style="font:bold; text-align:center; color:blue">User Details</h2>

    <table border="2" cellpadding="10" cellspacing="0" style="width:100%; text-align:center; font:bold; background:lightgray;">
        <tr style="color:red;">
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Age</th>
            <th>Gender</th>
        </tr>

        <tr>
            <td><?php echo $name; ?></td>
            <td><?php echo $email; ?></td>
            <td><?php echo $phone; ?></td>
            <td><?php echo $age; ?></td>
            <td><?php echo $gendar; ?></td>
        </tr>
    </table>

</div>

<footer style="background:black; color:white; padding:20px; text-align:center; position:fixed; bottom:0; width:100%;">
    <p>&copy; 2026 My Website. All rights reserved.</p>
</footer>

</body>
</html>