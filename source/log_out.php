<?php
session_start();
// Logs out user from the site and resets values
unset($_SESSION['loggedin']);
unset($_SESSION["username"]);
unset($_SESSION['id']);
unset($_SESSION['level']);
header("Location:login.php");
?>