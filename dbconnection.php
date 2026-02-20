<?php
    /* Will return Answer in True or False */
    $con = mysqli_connect("localhost","root","","db_crud");

    if($con==TRUE)
    {
        /* echo "Connected"; */
        return $con;
    }

    
    
?>