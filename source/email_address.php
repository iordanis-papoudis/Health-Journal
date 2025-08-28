<?php
include ("get_data.php");
include ("langconfig.php");
$user = $_SESSION['username'];
if(count($_POST)>0) {
	$result = mysqli_query($conn,"SELECT email,password FROM user WHERE userName='" . $user . "'");
	$row=mysqli_fetch_array($result);
	if(password_verify($_POST["password"],$row["password"]) && $_POST["newemail"] == $_POST["confirmemail"] ) {
		$user_check_query = "SELECT * FROM user WHERE userName='$user' OR email='$_POST[newemail]' LIMIT 1";
  		$result1 = mysqli_query($conn, $user_check_query);
  		$row2 = mysqli_fetch_assoc($result1);

		// Checks if email already exists
		if ($_POST['newemail'] == $row2['email']) {
		$message =  $lang['email exists'];
		$status="error";
		}
		else{
			// Changes email in database
			mysqli_query($conn,"UPDATE user set email='" . $_POST["newemail"] . "' WHERE userName='" . $user . "'");
			$message = $lang['email changed'];
			$status="success";
		}
	} else{
		$message = $lang['email pswrd incorrect'];;
		$status="error";
	}
}
header("Location: account.php?id=".$_SESSION['id']."&email_changed=$message&status=$status");
?>