<?php 

echo 'post methode';
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];

    echo "<h3>User Details</h3>";
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email;  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="margin: 0; padding :0">
    <div>
        <header>
            <h2>
                welcome to post Api
            </h2>
            <nav>
                <a href="">Home</a>
                <a href="">Resitation</a>
                <a href="">About</a>
            </nav>
        </header>
    </div>
    <div>
        <form method="post">
            <label for="name" >name:</label>
            <input type="name"; name=" name";  placeholder ="enter the text "><br><br>

            <label for="email">email:</label>
            <input type="email" name="email" placeholder="Enter Email"><br><br>

            <input type="submit"; name="submit"; value="Submit">


        </form>
    </div>
    
</body>
</html>