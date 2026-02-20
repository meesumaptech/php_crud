<?php
    include("dbconnection.php");
    session_start();
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

        <label for="">Password</label>
        <input type="text" name="txtpass"><br>

        <input type="submit" name="btnsub"/>
        <!-- <button type="submit"></button> -->
    </form>

    <a href="Signup.php">Login Page</a>
</body>
</html>

<?php 
    if(isset($_POST['btnsub']))
    {
        $name = $_POST['txtname'];
        $pass = SHA1($_POST['txtpass']);

        $query = mysqli_query($con,"select * from users where username='$name' AND pass='$pass' ");

        $result = mysqli_fetch_array($query);
        
        if($result>0)
        {
            header("Location:dashboard.php");
            /* Session for username */
            $_SESSION['username'] = $result[1];
            /* echo "<script>window.location.href='dashboard.php'</script>";

            echo "<script>window.location('dashboard.php')</script>"; */
        }
        else
        {
            echo "Not found";
        }
    }
?>