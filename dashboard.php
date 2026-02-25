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
            <th>Action</th>
        </tr>
        <?php
            $query = "select * from users";
            $result = mysqli_query($con,$query); /* Answer is in true or false */
            $sno = 1;
            while($row = mysqli_fetch_assoc($result))
            {
                echo "
                    <tr>
                        <td>".$sno++."</td>
                        <td>".$row['username']."</td>
                        <td>".$row['email']."</td>
                        <td>".$row['age']."</td>
                        <td>".$row['phone']."</td>
                        <td>".$row['description']."</td>
                        <td><a href='update.php?id=".$row['id']."'>Update</a> | <a href='delete.php?id=".$row['id']."''>Delete</a></td>
                    </tr>
                ";
            }
            /* $data = mysqli_fetch_all($result,MYSQLI_ASSOC);
            $sno = 1;
            foreach($data as $row) //row is loop variable
            {
                echo "
                    <tr>
                        <td>".$sno++."</td>
                        <td>".$row['username']."</td>
                        <td>".$row['email']."</td>
                        <td>".$row['age']."</td>
                        <td>".$row['phone']."</td>
                        <td>".$row['description']."</td>
                    </tr>
                ";
            } */
        ?>
    </table>
    <a href="logout.php">Logout</a>
</body>
</html>

