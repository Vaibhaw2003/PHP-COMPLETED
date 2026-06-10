<?php

$name = $_GET['name'] ?? '';
$email = $_GET['email'] ?? '';
$phone = $_GET['phone'] ?? '';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Data</title>
</head>

<body style="margin:0; padding:0;">

    <!-- Header -->
    <div style="width:100%; background-color:#121111; padding:10px 20px; display:flex; justify-content:space-between; align-items:center; box-sizing:border-box;">

        <h1 style="margin:0; color:white; font-size:30px;">
            CRUD OPERATION
        </h1>

        <nav style="display:flex; gap:20px;">
            <a href="index.php" style="color:white; text-decoration:none;">Home</a>
            <a href="create.php" style="color:white; text-decoration:none;">Create</a>
            <a href="update.php" style="color:white; text-decoration:none;">Update</a>
            <a href="delete.php" style="color:white; text-decoration:none;">Delete</a>
        </nav>

    </div>

    <!-- Table -->
    <div style="padding:20px;">
        <table border="1" cellpadding="10" cellspacing="0">

            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>

            <tr>
                <td>1</td>
                <td><?php echo $name; ?></td>
                <td><?php echo $email; ?></td>
                <td><?php echo $phone; ?></td>
            </tr>

        </table>
    </div>

    <!-- Footer -->
    <footer style="width:100%; text-align:center; color:white; background-color:#121111; padding:10px 0; position:fixed; bottom:0;">
        <p>&copy; 2024 CRUD Operation. All rights reserved.</p>
    </footer>

</body>
</html>