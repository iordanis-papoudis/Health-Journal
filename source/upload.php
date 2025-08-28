<?php
    include ("config.php");
    session_start();
    if(isset($_POST['submit'])){
        $file=$_FILES['file'];
        $name=$file['name'];
        $tmp=$file['tmp_name'];
        $size=$file['size'];
        $error=$file['error'];
        $type=$file['type'];

        $string=explode('.', $name);
        $extension=strtolower(end($string));

        $allow = array('png', 'jpg', 'jpeg');

        if(in_array($extension, $allow)){
            if($error===0){
                if($size <=3000000){
                    $newName = "profile".$_SESSION['id'].".".$extension;
                    $destination = 'uploads/'.$newName;
                    move_uploaded_file($tmp, $destination);
                    $sql="UPDATE user SET profileImage=1 WHERE id='".$_SESSION['id']."'";
                    $result=mysqli_query($conn,$sql);
                    header("Location: account.php?id=".$_SESSION['id']."");
                }
                else
                    echo"File is too big!";
            }
            else
                echo"Error uploading file!";
        }
        else
            echo"Incorrect file type!";
    }
?>