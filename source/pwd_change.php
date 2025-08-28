<?php
include ("get_data.php");
include ("langconfig.php");
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$user = $_SESSION['username'];
if(count($_POST)>0) {

    $result = mysqli_query($conn,"SELECT password FROM user WHERE userName='" . $user . "'");
    $row=mysqli_fetch_array($result);
    // Checks for possible errors in the data
    if(strlen($_POST['newpassword'])<6){
        $message = $lang['password error 1'];
        $status="error";
    }
    elseif(password_verify($_POST['currentpassword'],$row['password']) && $_POST["newpassword"] == $_POST["confirmpassword"] ) {
        $pwd = password_hash($_POST['newpassword'],PASSWORD_DEFAULT); // Encryption of the password for the safety of the user
        mysqli_query($conn,"UPDATE user set password='" . $pwd . "' WHERE userName='" . $user . "'");
        $message = $lang['password changed'];
        $status="success";
        // Checks if the passwords given match with that of the database
    } elseif (password_verify($_POST['currentpassword'],$row['password'])== false){
        $message = $lang['password error 2'];
        $status="error";
    }
    else{
        $message = $lang['password error 3'];
        $status="error";
    }
}
header("Location: account.php?id=".$_SESSION['id']."&pwd_changed=$message&status=$status");
?>