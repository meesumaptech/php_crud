<?php
include("dbconnection.php");
$id = $_GET['id']; //string query data

$query = "select * from users where id= $id";
$result = mysqli_query($con,$query); // will answer in true or false
$row = mysqli_fetch_array($result);
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
        <input type="text" name="txtname" value="<?php echo $row[1] ?>"><br>

        <label for="">Email</label>
        <input type="text" name="txtemail" value="<?php echo $row[2] ?>"><br>

        <label for="">Age</label>
        <input type="text" name="txtage" value="<?php echo $row[3] ?>"><br>

        <label for="">Phone</label>
        <input type="text" name="txtphone" value="<?php echo $row[4] ?>"><br>

        <label for="">Description</label>
        <textarea name="txtdesc""><?php echo $row[5] ?></textarea><br>

        <input type="submit" name="btnsub" value="Update"/>
        <!-- <button type="submit"></button> -->
    </form>
</body>
</html>

<?php

if(isset($_POST['btnsub']))
{
    $name = $_POST['txtname'];
    $email = $_POST['txtemail'];
    $age = $_POST['txtage'];
    $phone = $_POST['txtphone'];
    $desc = $_POST['txtdesc'];

    $query = "update users set username='$name' , email='$email' , age = '$age' , phone = '$phone' , description = '$desc' where id=$id";

    $result = mysqli_query($con,$query);

    if($result>0)
    {
        echo "Updated";
    }
    else
    {
        echo "Masla hai";
    }

}

?>