<?php include ("langconfig.php");?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<title> Health Journal </title>
		<link rel="icon" href="images/logo.png">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="navigation.css">
		<link rel="stylesheet" href="home.css">
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
			<div class="container">
				<div style="text-align:center;">
					<h2 id="head2"><?php echo $lang['home moto a']?><hr></hr></h2>
					<div class="embed-responsive embed-responsive-16by9 video">
						<iframe src="https://www.youtube.com/embed/z_jjX-i45hU" frameborder="0" allowfullscreen></iframe>
					</div>
					<p class="paragraph" style="text-align:center">
						<?php echo $lang['home text a']?>
						<br></br>
						<?php echo $lang['home text b']?>
					</p>
					<div class="row" style="margin-top:200px; margin-bottom:250px;">
						<div class="col-sm-6">
							<div class="embed-responsive embed-responsive-16by9 video ">
								<iframe src="https://www.youtube.com/embed/Fzz3Rr8fd2Q" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
						<div class="col-sm-6">
						<br></br>
							<?php echo $lang['home text c']?>
						</div>
					</div>
				</div>
				<div style="margin-top:100px; margin-bottom:100px;">
						<p><?php echo $lang['facts a']?><span style="font-size:28px; font-weight:bold;"> <?php echo $lang['facts b']?></span> <?php echo $lang['facts c']?> <a href="https://www.un.org/sustainabledevelopment/health/" target="_blank" style="color:#4AFCAC; font-size:20px;"><?php echo $lang['united nations']?></a></p>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<h3>400 <?php echo $lang['million']?></h3>
						<p><?php echo $lang['statistics a']?></p>
					</div>
					<div class="col-sm-4">
						<h3>1.6 <?php echo $lang['billion']?></h3>
						<p><?php echo $lang['statistics b']?></p>
					</div>
					<div class="col-sm-4">
						<h3>15 <?php echo $lang['million']?></h3>
						<p><?php echo $lang['statistics c']?></p>
					</div>
				</div>
				<div class="row" style="margin-top:30px;">
					<div class="col-sm-4">
						<h3>2 <?php echo $lang['seconds']?></h3>
						<p><?php echo $lang['statistics d']?></p>
					</div>
					<div class="col-sm-4">
						<h3>7 <?php echo $lang['million']?></h3>
						<p><?php echo $lang['statistics e']?></p>
					</div>
					<div class="col-sm-4">
						<h3>1 <?php echo $lang['in']?> 3</h3>
						<p><?php echo $lang['statistics f']?></p>
					</div>
				</div>
				
				<div class="row" style="margin-top:150px;">
					<div class="col-sm-6">
						<?php echo $lang['home text d']?>
						<br></br>
						<?php echo $lang['home text e']?>
						<br></br>
					</div>
					<div class="col-sm-6">
					<br></br>
						<div class="embed-responsive embed-responsive-16by9 video">
							<iframe src="https://www.youtube.com/embed/ZVqSC_hN2lk" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
				</div>
				<div class="row" style="margin-bottom:50px;">
					<?php echo $lang['home text f']?>
				</div>
				<hr></hr>
				<h2 style="margin-bottom:150px; text-align:center; margin-top:75px;"><?php echo $lang['home moto b']?></h2>
			</div>
		</div>
		
		<?php
		include ("footer.php");
		?>
	</body>
	
	<script src="script.js"></script>

</html>