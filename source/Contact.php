
<?php
    include_once ("langconfig.php"); // Php file to change languages
	include("send_email.php"); // PHP file to send e-mail
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
		<link rel="stylesheet" href="account.css">
		<link rel="stylesheet" href="signin.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


	</head>
	<body>
		<?php
		include ("header.php");
		?>
			<div id="main">
				<div class="container-fluid">
				<h2 class="heading"> <?php echo $lang['contact us']; ?> </h2>
				<hr></hr>
				<p> <?php echo $lang['contact text']; ?> </p>
				<br></br>
				<!-- Message for warnings when submitting form -->
				<div style="color:red;"><?php if(isset($message)) { echo $message; } ?></div>
				<!-- Form for sending e-mail -->
					<form method="POST">
						
						<h4 style="text-align:left;"> <?php echo $lang['first name']; ?> </h4>
						<input class="text" type="text" name="fname" style="float:left; width:100%;" required />
						<br></br>
						<h4 style="text-align:left;"> <?php echo $lang['last name']; ?> </h4>
						<input class="text" type="text" name="lname" style="float:left; width:100%;" required />
						<br></br>
						<h4 style="text-align:left;">E-mail</h4>
						<input class="text" type="email" name="email" style="float:left; width:100%;" required />
						<br></br>
						<h4 style="text-align:left;"> <?php echo $lang['contact subject']; ?> </h4>
						<input class="text" type="text" name="subject" style="float:left; width:100%;" required />
						<br></br>
						<h4 style="text-align:left;"> <?php echo $lang['contact description']; ?> </h4>
						<textarea placeholder=" <?php echo $lang['describe the subject']; ?>" name="message" style="height:200px; width:100%;"></textarea required>
						<br></br>
						<input type="submit" class="button submit" name="submit" value="<?php echo $lang['submit']; ?>"></input>
					</form>
					<br></br>
					<hr></hr>
					<!-- Information about the owners of the site -->
					<h3 style="font-size:22px;"> <?php echo $lang['contact info']; ?> </h3>
					<div class="row" style="color:#37B482;">
						<div  class="col-sm-6">
							<span style="color:black;">E-mail  <i class="fa fa-send"></i></span><br></br>
							<span ><a class="mail" href="mailto:mpreventas@csd.auth.gr">mprevent@csd.auth.gr</a></span><br></br>
							<span ><a class="mail" href="mailto:kasarchou@csd.auth.gr">kasarchou@csd.auth.gr</a></span><br></br>
							<span ><a class="mail" href="mailto:ipapoudis@csd.auth.gr">ipapoudis@csd.auth.gr</a></span><br></br>
							<span ><a class="mail" href="mailto:epatsili@csd.auth.gr">epatsili@csd.auth.gr</a></span><br></br>

						</div>
						<div class="col-sm-6">
							<span style="color:black;"> <?php echo $lang['phone']; ?>  <i class="fa fa-phone"></i></span><br></br>
							<span>+30-698-555-6954</span>
						</div>
					</div>
				</div>
			</div>
			
			<?php
			include ("footer.php"); //PHP file that contains the footer
			?>
	</body>
	
	<script src="script.js"></script>
	
</html>