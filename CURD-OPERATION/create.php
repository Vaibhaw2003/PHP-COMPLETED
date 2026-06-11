<?php
session_start();

if (!isset($_SESSION['users'])) {
    $_SESSION['users'] = [];
}

if (isset($_POST['Create'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $_SESSION['users'][] = [
        'name' => $name,
        'email' => $email,
        'phone' => $phone
    ];

    header("Location: " . $_SERVER['PHP_SELF']);
exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="margin:0; padding:0;">
   <div style="width:100%; background-color:#121111; padding:10px 20px; display:flex; justify-content:space-between; align-items:center; box-sizing:border-box;">

    <h1 style="margin:0; color:white; font-size:30px;">
        CRUD OPERATION
    </h1>

    <nav style="display:flex; gap:20px;">
        <a href="create.php" style="color:white; text-decoration:none;">Create</a>
        <a href="update.php" style="color:white; text-decoration:none;">Update</a>
        <a href="delete.php" style="color:white; text-decoration:none;">Delete</a>
    </nav>
</div>
<div>
    <h2 style="color: red;background: #000; height : 50px; with: 50px; display:flex; justify-content:center; margin-top:30px">
            ENTER YOUR DETAILS
        </h2>
</div>
    <div style="display:flex; justify-content:center; margin-top:30px;">
     <form action="" method="POST" style="display:flex;flex-direction:column;gap:15px;width:350px;">
        <input type="text" name="name" placeholder="Enter Name" required>
        <input type="email" name="email" placeholder="Enter Email" required>
        <input type="text" name="phone" placeholder="Enter Phone" required>
        <input  style="padding:10px;background:green;color:white;border:none;cursor:pointer; " type="submit" name="Create" value="Create">
     </form>     
</div>
    <div style="display:flex; justify-content:center; margin-top:30px;">
            <table border="1">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                    </tr>

                     <?php
    $id = 1;
    foreach ($_SESSION['users'] as $user) {
        echo "<tr>
                <td>$id</td>
                <td>{$user['name']}</td>
                <td>{$user['email']}</td>
                <td>{$user['phone']}</td>
              </tr>";
        $id++;
    }
    ?>
            </table>
    </div>
    <div>
        <footer style="width: 100%; text-align: center; margin-top: 20px;color: white; background-color: #121111; padding: 10px 0; position: fixed; bottom: 0; left: 0; right: 0;">
            <p style="text-align: center; margin-bottom: 20px;">&copy; 2024 CURD Operation. All rights reserved.</p>
        </footer>
     </div>
    
</body>
</html>

