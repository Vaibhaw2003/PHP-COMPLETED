<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="width: 80%; margin: 0 auto; text-align: center; display: flex; flex-direction: column; align-items: center;">
        <h1 style="text-align: center;color: #333; color: white;background-color: black; width: 100%;height: 50px; line-height: 50px;">Create New Record</h1>
        <nav style="margin-bottom: 20px; display: flex; justify-content: center; gap: 20px;">
            <a href="index.php">Home</a>
            <a href="create.php">Create</a>
            <a href="update.php">Update</a>
            <a href="delete.php">Delete</a>
        </nav>
        <div>
            <form action="" method="post">
                <input type="text" name="name" placeholder="Enter Name" required><br><br>
                <input type="email" name="email" placeholder="Enter Email" required><br><br>
                <input type="text" name="phone" placeholder="Enter Phone" required><br><br>
                <input type="submit" value="Create">
            </form>
        </div>

    </div>
    
</body>
</html>