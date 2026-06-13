<?php

if(isset($_POST['Submit']))
{
    $user = [
        "name"  => $_POST['name'].'<br>',
        "email" => $_POST['email'].'<br>',
        "phone" => $_POST['phone'].'<br>',
        "Age" => $_POST['age'].'<br>',
        "Gender" => $_POST['gender']
    ];

    print_r($user);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="margin: 0; padding : 0";>

    <div style="display:flex; justify-content:space-between; align-items:center; color:red; height:60px; background-color:black; padding:0 20px;">
    <h2>Fill Your Form</h2>
    <nav style="display:flex; gap:20px;">
        <a href="Form.php" style="color:white; text-decoration:none;">Home</a>
        <a href="#" style="color:white; text-decoration:none;">About</a>
        <a href="Dashborde.php" style="color:white; text-decoration:none;">Dashboard</a>
    </nav>
</div>

   <div style="display:flex; justify-content:center; align-items:center; height:80vh; background:#f5f5f5;">

    <form action="Dashboard.php" method="POST"
          style="width:500px; padding:25px; border:2px solid rgb(229, 51, 51); border-radius:10px; background:rgb(51, 161, 229); display:flex; flex-direction:column; gap:10px;">

        <h2 style="text-align:center; margin-bottom:10px; color: rgb(24, 23, 22)">
            Registration Form
        </h2>

        <label>Name</label>
        <input type="text" name="name"
               placeholder="Enter your name"
               style="padding:8px; color:rgb(111, 225, 35)">

        <label>Email</label>
        <input type="email" name="email"
               placeholder="Enter your email"
               style="padding:8px;">

        <label>Phone</label>
        <input type="number" name="phone"
               placeholder="Enter your phone number"
               style="padding:8px;">

        <label>Age</label>
        <input type="number" name="age"
               placeholder="Enter your age"
               style="padding:8px;">

        <label>Gender</label>
        <select name="gender" style="padding:8px;">
            <option value="">Select Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select>

        <input type="submit" name="Submit"  value="Submit" 
               style="padding:10px; background:black; color:white; border:none; cursor:pointer; border-radius:5px;">
    </form>
</div>
<div>
     <footer style="background-color: black; color: white; padding: 20px; text-align: center; margin-top: 10px;height: 30px; display: flex; align-items: center; justify-content: center;">
            <p>&copy; 2023 My Website. All rights reserved.</p>
     </footer>
</div>
    
</body>
</html>