<?php
include("dbconnection.php");
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

    <table border="1" width="50%" style="border-collapse:collapse">
        <tr>
            <th>S.No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>Phone</th>
            <th>Description</th>
        </tr>
        <?php
            $query = "select * from users";
            $result = mysqli_query($con,$query); /* Answer is in true or false */
            $data = mysqli_fetch_all($result,MYSQLI_NUM);
            $sno = 1;
            foreach($data as $row) //row is loop variable
            {
                echo "
                    <tr>
                        <td>".$sno++."</td>
                        <td>".$row[1]."</td>
                        <td>".$row[2]."</td>
                        <td>".$row[3]."</td>
                        <td>".$row[4]."</td>
                        <td>".$row[5]."</td>
                    </tr>
                ";
            }
        ?>
    </table>

    <a href="logout.php">Logout</a>
</body>
</html>

