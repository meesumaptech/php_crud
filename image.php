<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>image</title>
</head>
<body>
    
    <form action="" method="post" enctype="multipart/form-data">

    <input type="file" name="myfile" accept=".pdf , .png "><br><br>
    <input type="submit" value="Upload" name="btnsub">

    </form>
</body>
</html>

<?php

if(isset($_POST['btnsub']))
{
    /* Orignal File */
    $filename = $_FILES['myfile']['name'];

    /* Temp File */
    $templocation = $_FILES['myfile']['tmp_name'];

    /* Target Directory */
    $targetdir = "uploads/".$filename;

    /* Finding File Extension */
    $fileextention = strtolower(pathinfo($filename , PATHINFO_EXTENSION));
    $allowerd_extension = array("pdf" , "png");

    /* Finding File Size */
    $filesize = $_FILES['myfile']['size'];

    /* Restricting File Size for 2 MB */
    $maxsize = 2 * 1024 * 1024;

    /* Checking File Size is greate than 2MB */
    if($filesize > $maxsize)
    {
        echo "File is Greater Than 2MB";
    }
    /* Checking FIle Exntensions */
    elseif(!in_array($fileextention , $allowerd_extension))
    {  
        echo "File Extension Should be .PNG Or .PDF ";
    }

    /* Uploading File */
    else
    {
        if(move_uploaded_file($templocation , $targetdir))
        {
            echo "Uploaded";
        }
        else
        {
            echo " Not Uploaded";
        }
    }
}

?>