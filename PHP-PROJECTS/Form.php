<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <header style="background-color: red; color: white; text-align: center; justify-content: space-between;gap: 20px; display: flex; align-items: center;height: 60px;padding: 0 20px;">
            <h1>Student Registration Form</h1>
            <nav>
                <a href="#home.html" style="color: white; margin: 0 10px;">Home</a>
                <a href="#about.html" style="color: white; margin: 0 10px;">About</a>
                <a href="#contact.html" style="color: white; margin: 0 10px;">Contact</a>
            </nav>
        </header>
    </div>
    <div style="background-color: black; color: white; padding: 20px;">
        <h2 style="text-align: center; font-weight: bold; color: white;font-family: Arial, sans-serif;">Please Fill the Form Below</h2>
        <form action="" method="get" style="display: flex; flex-direction: column; width: 300px;padding: 20px; background-color: white; color: black; margin: 0 auto; border-radius: 20px;">

                <label style="margin-top: 10px; font-weight: bold;" for="name">Name</label>
                <input style="margin-top: 10px; padding: 5px; border: 1px solid #ccc; border-radius: 5px;" type="text" name="name" id="" placeholder="enter your name"><br>
                <label style="margin-top: 10px; font-weight: bold;" for="email">Email</label>
                <input style="margin-top: 10px; padding: 5px; border: 1px solid #ccc; border-radius: 5px;" type="email" name="email" id="" placeholder="enter your email"><br>
                <label style="margin-top: 10px; font-weight: bold;" for="password">Password</label>
                <input style="margin-top: 10px; padding: 5px; border: 1px solid #ccc; border-radius: 5px;" type="password" name="password" id="" placeholder="enter your password"><br>
                <label style="margin-top: 10px; font-weight: bold;" for="gender">Gender</label>
                <select style="margin-top: 10px; color: black; height: 30px; background-color: white;" name="gender" id="">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select><br>

                <input style="margin-top: 10px; padding: 5px; border: 1px solid #ccc; border-radius: 5px;" type="submit" value="submit">
        </form>
    </div>
    <div>
        <footer style="background-color: black; color: white; padding: 20px; text-align: center; margin-top: 20px;height: 40px; display: flex; align-items: center; justify-content: center;">
            <p>&copy; 2023 My Website. All rights reserved.</p>

        </footer>
    </div>
    
</body>
</html>

<?php
echo "<pre>";
print_r($_GET);
echo "</pre>";

?>