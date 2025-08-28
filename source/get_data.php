<?php
	if (session_status() === PHP_SESSION_NONE) {
		session_start();
	}
	$user = $_SESSION['username'];
    require_once ("config.php");
	// Retrieves data based on the username of the currently signed in user
	$sql = "SELECT * FROM user WHERE userName='".$user."'";
	$result = mysqli_query($conn,$sql);

	if (mysqli_num_rows($result) > 0) {
 	 // output data of each row in a form
  	while($row = mysqli_fetch_assoc($result)) {
    	$fname = $row['firstName'];
        $lname = $row['lastName'];
        $usr = $row['userName'];
        $email = $row['email'];
        $lvl= $row['level'];
        $posts = $row['forumPosts'];
  	}
	} else {
  	echo "0 results";
	}
//mysqli_close($conn);
?>