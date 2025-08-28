<?php
include("config.php");
$sql = "SELECT * FROM mail";
$result2 = mysqli_query($conn,$sql);
// Retrieves data from table containing e-mails
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<title> Health Journal </title>
		<link rel="icon" href="images/logo.png">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="navigation.css">
		<link rel="stylesheet" href="signin.css">
		<link rel ="stylesheet" href="All_Users.css">
    
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		
		
	</head>
		<body id="signup">
			<?php
			include ("header.php");
            ?>


            <!-- Container to hold user data table and php code -->
		<div id="main">
            <div class="container login-container">
            <h2 class="heading"><?php echo $lang['mail users']; ?></h2>
            <?php
            if (mysqli_num_rows($result2) > 0) {
                $num = 1;
                // output data of each row in a form
                echo '<div class="accordion" id="accordionAll">';
                while($row = mysqli_fetch_assoc($result2)) {
                    echo '
                    <div class="card">
                    <div class="card-header" id="head'.$row['mail_id'].'">
                      <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse"data-target="#body'.$row['mail_id'].'" aria-expanded="false" aria-controls="body'.$row['mail_id'].'">
                         <pre>Sent by: '.$row['firstName'].' '.$row['lastName'].' - At: '.$row['sendDate'].' <br></br> E-mail:'.$row['email'].'</pre>
                        </button>
                      </h5>
                    </div>
                
                    <div id="body'.$row['mail_id'].'" class="collapse" aria-labelledby="head'.$row['mail_id'].'" data-parent="#accordionAll">
                      <div class="card-body">
                         <p>Subject: '.nl2br($row['subject']).'</p> <br></br>
                         <p>'.nl2br($row['message']).'</p>
                      </div>
                    </div>
                  </div>';
                    }
                    echo '</div>';
                }
            ?>
            </div>
            </div>
	<?php
	include ("footer.php");
	?>
</body>
<script src="script.js"></script>
</html>