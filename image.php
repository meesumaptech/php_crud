<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="myfile" accept=".pdf , .png , .jpg"><br>
        <input type="submit" value="Upload" name="btnsub">
    </form>
</body>
</html>

<?php
if(isset($_POST['btnsub']))
{   
    /* Get Original File Name */
   $filename = $_FILES['myfile']['name'];

    /* Get Temporary File Name */
    $templocation = $_FILES['myfile']['tmp_name'];

    /*Check File Extension (.pdf , .png)  */
    echo $fileextenion = strtolower(pathinfo($filename, PATHINFO_EXTENSION ));

    /* Allowed File Extensions */
    $allowed_extension = array("pdf" , "png");

    /* Check if the file extension is .pdf or .png */

    if(in_array($fileextenion,$allowed_extension))
    {
        /* Folder where the file will be saved */
    $targetdir = "uploads/";

    /* Full path where the file will be saved */
    $targetpath = $targetdir . $filename;

    /* Move the file from temporary Location To Uploads foder */
    if(move_uploaded_file($templocation , $targetpath))
    {
        echo "Successfully Saved";
    }
    else
    {
        echo "failed";
    }
    }

    else
    {
        echo "Incorrect Extension";
    }

    
}
?>