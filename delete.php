<?php
include("dbconnection.php");

$id = $_GET['id'];

$query = "delete from users where id=$id";
$delete = mysqli_query($con,$query);
if($delete>0)
{
    header("Location:dashboard.php");
}
else
{
    echo "Not Deleted";
}
?>