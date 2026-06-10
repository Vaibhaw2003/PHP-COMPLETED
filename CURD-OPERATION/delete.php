<?php
echo 'thise is delete page';


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
        <a href="index.php" style="color:white; text-decoration:none;">Home</a>
        <a href="create.php" style="color:white; text-decoration:none;">Create</a>
        <a href="update.php" style="color:white; text-decoration:none;">Update</a>
        <a href="delete.php" style="color:white; text-decoration:none;">Delete</a>
    </nav>

</div>
    <div style="text-align: left;">
            <table border="1">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                    </tr>
    </div>
        <div>
            <form action="" method="post">
                <input type="text" name="name" placeholder="Enter Name" required><br><br>
                <input type="email" name="email" placeholder="Enter Email" required><br><br>
                <input type="text" name="phone" placeholder="Enter Phone" required><br><br>
                <input type="submit" value="Delete">
            </form>
        </div>

    </div>
    <div>
        <footer style="width: 100%; text-align: center; margin-top: 20px;color: white; background-color: #121111; padding: 10px 0; position: fixed; bottom: 0; left: 0; right: 0;">
            <p style="text-align: center; margin-bottom: 20px;">&copy; 2024 CURD Operation. All rights reserved.</p>
        </footer>
     </div>
</body>
</html>