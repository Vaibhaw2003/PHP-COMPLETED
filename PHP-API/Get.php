<?php

if(isset($_GET['Submit'])){
    $name = $_GET['name'];
    $Email = $_GET['Email'];

    echo "<h3>User Details</h3>";
    echo "Name: " . $name . "<br>";
    echo "Email: " . $Email;
}

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
        <header>
            <h2>
                welcome to get methad
            </h2>
            <nav>
                <a href="Home">Home</a>
                <a href="About">About</a>
                <a href="Post.php">PostMethod</a>
            </nav>
        </header>

    </div>
    <div>
        <form method="GET">
            Name:
            <input type="text" name="name" placeholder="Enter the name "><br><br>
            Email:
            <input type="Email" name="Email" placeholder="enter Email"><br><br>

            <input type="submit" name= 'Submit' value="Submit"; >
        </form>
    </div>
    
</body>
</html>