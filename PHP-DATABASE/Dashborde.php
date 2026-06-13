<?php

$name = "";
$email = "";
$phone = "";
$age = "";
$gendar = "";

if(isset($_POST['Create']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];
    $gendar = $_POST['gendar'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="margin: 0; padding : 0">
    <div style="display:flex; justify-content:space-between; align-items:center; color:red; height:50px; background-color:black; padding:0 20px;">
    <h2>Fill Your Form</h2>
    <nav style="display:flex; gap:20px;">
        <a href="Form.php" style="color:white; text-decoration:none;">Home</a>
        <a href="#" style="color:white; text-decoration:none;">About</a>
        <a href="Dashborde.php" style="color:white; text-decoration:none;">Dashboard</a>
    </nav>
</div>
  <div>
    <table border="1" cellpadding="10">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Age</th>
            <th>Gendar</th>
        </tr>

        <tr>
            <td><?php echo $name; ?></td>
            <td><?php echo $email; ?></td>
            <td><?php echo $phone; ?></td>
            <td><?php echo $age; ?></td>
            <td><?php echo $gendar ?></td>
        </tr>
    </table>
</div>
<div>
     <footer style="background-color: black; color: white; padding: 20px; text-align: center; margin-top: 500px;height: 40px; display: flex; align-items: center; justify-content: center;">
            <p>&copy; 2023 My Website. All rights reserved.</p>
     </footer>
</div>
    
    
</body>
</html>