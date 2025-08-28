<?php

include "config.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$del ="UPDATE user SET level = 'admin' WHERE id = '$id'"; // delete query
$res = mysqli_query($conn,$del);
if($res)
{
     // Close connection
    header("location:All_Users.php"); // redirects to all records page
    exit;	
}
else
{
    echo $id;
    echo "Error deleting record"; // display error message if not delete
}
mysqli_close($conn);
?>