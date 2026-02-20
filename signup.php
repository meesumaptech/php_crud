<?php
    include("dbconnection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">

        <label for="">Name</label>
        <input type="text" name="txtname"><br>

        <label for="">Email</label>
        <input type="text" name="txtemail"><br>

        <label for="">Age</label>
        <input type="text" name="txtage"><br>

        <label for="">Phone</label>
        <input type="text" name="txtphone"><br>

        <label for="">Description</label>
        <textarea name="txtdesc"></textarea><br>

        <label for="">Password</label>
        <input type="password" name="txtpass"><br>

        <input type="submit" name="btnsub"/>
        <!-- <button type="submit"></button> -->
    </form>

    <a href="login.php">Login Page</a>
</body>
</html>

<?php
if(isset($_POST['btnsub']))/* Check if form is submitted or not */
{
    echo $name = $_POST["txtname"];
    echo $email = $_POST["txtemail"];
    echo $age = $_POST["txtage"];
    echo $phone = $_POST["txtphone"];
    echo $desc = $_POST["txtdesc"];
    echo $pass = SHA1($_POST["txtpass"]);

    /* Query Will Run */
    $user = mysqli_query($con , "insert into users(username, email, age, phone, description,pass) values('$name','$email','$age','$phone','$desc','$pass')");

    if($user>0)
    {
        echo "<br> Inserted";
    }
}
?>