<?php
echo "<pre>";
print_r($_GET);
echo "</pre>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <header style="background-color: red; color: white; text-align: center; justify-content: space-between;gap: 20px; display: flex; align-items: center;height: 40px;">
            <h1>Welcome to My Website</h1>
            <nav>
                <a href="#home.html" style="color: white; margin: 0 10px;">Home</a>
                <a href="#about.html" style="color: white; margin: 0 10px;">About</a>
                <a href="#contact.html" style="color: white; margin: 0 10px;">Contact</a>
            </nav>
        </header>
    </div>
    <div style="background-color: black; color: white; padding: 20px;">
        <form action="" method="get" style="display: flex; flex-direction: column; width: 300px;">
                <label style="margin-top: 10px;" for="name">Name</label>
                <input type="text" name="name" id=""><br>
                <label style="margin-top: 10px;" for="email">Email</label>
                <input type="email" name="email" id=""><br>
                <label style="margin-top: 10px;" for="password">Password</label>
                <input type="password" name="password" id=""><br>

                <input type="submit" value="submit">
        </form>
    </div>
    <div>
        <footer style="background-color: black; color: white; padding: 20px; text-align: center; margin-top: 20px;height: 40px; display: flex; align-items: center; justify-content: center;">
            <p>&copy; 2023 My Website. All rights reserved.</p>

        </footer>
    </div>
    
</body>
</html>