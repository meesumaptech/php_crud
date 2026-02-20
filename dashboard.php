<?php
session_start();

if(isset($_SESSION['username'])=="")
{
    header("Location:login.php");
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
    <h1>Hello <?php echo $_SESSION['username']; ?></h1>

    <!-- <form action="" method="post">
        <input type="submit" name="btnlogout" value="Logout">
    </form> -->

    <a href="logout.php">Logout</a>
</body>
</html>

