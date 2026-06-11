<?php
session_start();

if (!isset($_SESSION['users'])) {
    $_SESSION['users'] = [];
}

// Create
if (isset($_POST['Create'])) {
    $_SESSION['users'][] = [
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'phone' => $_POST['phone']
    ];

    header("Location: ".$_SERVER['PHP_SELF']);
    exit();
}

// Update
if (isset($_POST['Update'])) {
    $id = $_POST['id'];

    $_SESSION['users'][$id] = [
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'phone' => $_POST['phone']
    ];

    header("Location: ".$_SERVER['PHP_SELF']);
    exit();
}

// Edit Mode
$edit = false;
$editData = [];

if (isset($_GET['edit'])) {
    $edit = true;
    $id = $_GET['edit'];
    $editData = $_SESSION['users'][$id];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD Operation</title>
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
<!-- Form -->
<div style="display:flex;justify-content:center;margin-top:30px;">

<form method="POST"
      style="display:flex;flex-direction:column;gap:15px;width:350px;">

    <?php if($edit){ ?>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
    <?php } ?>

    <input
        type="text"
        name="name"
        placeholder="Enter Name"
        value="<?php echo $edit ? $editData['name'] : ''; ?>"
        required
        style="padding:10px;">

    <input
        type="email"
        name="email"
        placeholder="Enter Email"
        value="<?php echo $edit ? $editData['email'] : ''; ?>"
        required
        style="padding:10px;">

    <input
        type="text"
        name="phone"
        placeholder="Enter Phone"
        value="<?php echo $edit ? $editData['phone'] : ''; ?>"
        required
        style="padding:10px;">

    <?php if($edit){ ?>
        <input type="submit" name="Update" value="Update">
    <?php } else { ?>
        <input type="submit" name="Create" value="Create"
         style="padding:10px;background:green;color:white;border:none;cursor:pointer;">
    <?php } ?>

</form>

</div>

<!-- Table -->
<div style="display:flex; justify-content:center; margin-top:30px;">

<table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Action</th>
    </tr>

    <?php
    foreach ($_SESSION['users'] as $index => $user) {
        echo "
        <tr>
            <td>".($index+1)."</td>
            <td>{$user['name']}</td>
            <td>{$user['email']}</td>
            <td>{$user['phone']}</td>
            <td>
                <a href='?edit=$index'>
                    <button type='button'>Update</button>
                </a>
            </td>
        </tr>";
    }
    ?>

</table>

</div>

<!-- Footer -->
<footer style="width:100%; text-align:center; color:white; background:#121111; padding:10px 0; position:fixed; bottom:0;">
    &copy; 2024 CRUD Operation. All rights reserved.
</footer>

</body>
</html>