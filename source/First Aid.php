<?php include ("langconfig.php");?>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<title>First Aid - Health Journal </title>
		<link rel="icon" href="images/logo.png">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="navigation.css">
		<link rel="stylesheet" href="first_aid.css">
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
				<div class="container-fluid" >
					<h2 class="heading" style="text-align:left; border-bottom:10px solid #37B482;"> <?php echo $lang['first aid']; ?> </h2>
						<br></br>
					<div class="row" style="background-color:#37B482; color:white; padding:30px; border-radius:10px;">
						<div class="col-sm-2">
						</div>
						<div class="col-sm-8">
							<p> <?php echo nl2br($lang['first aid intro']); ?> </p>
						</div>
					</div>
					<div class="row" style=" margin:50px;">
						<div class="col-sm-4 ">
						</div>
						<div class="col-sm-4">
							<h3 class="heading"> <?php echo $lang['sections']; ?> </h3><br></br>
							<a href="#a" style="color:#37B482"> <?php echo $lang['section a']; ?> </a><br></br>
							<a href="#b" style="color:#37B482"> <?php echo $lang['section b']; ?> </a><br></br>
							<a href="#c" style="color:#37B482"> <?php echo $lang['section c']; ?> </a><br></br>
							<a href="#d" style="color:#37B482"> <?php echo $lang['section d']; ?> </a><br></br>
							<a href="#e" style="color:#37B482"> <?php echo $lang['section e']; ?> </a><br></br>
							<a href="#f" style="color:#37B482"> <?php echo $lang['section f']; ?> </a><br></br>
						</div>
					</div>
					
					<u><h3 class="heading"> <?php echo $lang['section a']; ?> </h3></u><br></br>
					<div class="row" id="a">	
							<div class="col-sm-6 my-auto">
								
								<h4 class="heading" style="text-align:left; font-size:22px;"> <?php echo $lang['section a1']; ?> </h4><br></br>
								<p> <?php echo $lang['sec a1 text']; ?> </p>
							</div>
							<div class="col-sm-6 my-auto">
								<img src="images/call.jpg" class="image" alt= <?php echo $lang['alt first aid 1']; ?> ></img>
							</div>
					</div>
					
					<div class="row" style="background-color:#37B482;">
							<div class="col-sm-6 my-auto">
								<h4 class="heading" style="text-align:left; font-size:22px; margin:50px;"> <?php echo $lang['section a2']; ?> </h4>
								<img src="images/shout.jpg" class="image" alt= <?php echo $lang['alt first aid 2']; ?> ></img>
							</div>
							<div class="col-sm-6 my-auto">
							<br></br><br></br>
								
								<p> <?php echo $lang['sec a2 text']; ?> </p>
							</div>
					</div>
					
					<div class="row">
							<div class="col-sm-6 my-auto">
								<br></br>
								<h4 class="heading" style="text-align:left; font-size:22px;"> <?php echo $lang['section a3']; ?> </h4><br></br>
								<p> <?php echo nl2br($lang['sec a3 text']); ?> </p>
							</div>
							<div class="col-sm-6 my-auto">
							<br></br><br></br>
								<img src="images/pulse.jpg" class="image" alt= <?php echo $lang['alt first aid 3']; ?> ></img>
							</div>
					</div>
					<div class="row" style="background-color:#37B482;">
							<div class="col-sm-6 my-auto">
								<h4 class="heading" style="text-align:left; font-size:22px; margin:50px;"> <?php echo $lang['section a4']; ?> </h4>
								<img src="images/ambulance.jpg" class="image" alt= <?php echo $lang['alt first aid 4']; ?> ></img>
							</div>
							<div class="col-sm-6 my-auto">
								<br></br><br></br>
								<p>  <?php echo $lang['sec a4 text']; ?> </p>
							</div>
					</div>

					
					<br></br><br></br><br></br><br></br>
					<div class="row" id="b" >
							<div class="col-sm-6 my-auto">
							<u><h3 class="heading" style="text-align:left;"> <?php echo $lang['section b']; ?> </h3></u><br></br>
								<img src="images/bandaid.jpg" class="image" alt= <?php echo $lang['alt first aid 5']; ?> ></img>
							</div>
							<div class="col-sm-6 my-auto">
							<br></br><br></br>
								<p> <?php echo nl2br($lang['sec b text']); ?> </p>
							</div>
					</div>
					
					<br></br><br></br><br></br><br></br>
					<div class="row" id="c" style="background-color:#37B482;">
							<div class="col-sm-6 my-auto">
							<u><h3 class="heading" style="text-align:left;"> <?php echo $lang['section c']; ?> </h3></u><br></br><br></br><br></br>
								<p> <?php echo $lang['sec c text']; ?> </p>
							</div>
							<div class="col-sm-6 my-auto">
							<br></br><br></br>
								<img src="images/fire.jpg" class="image" alt= <?php echo $lang['alt first aid 6']; ?> ></img>
							</div>
					</div>
					
					<br></br><br></br><br>
					<div class="row" id="d">
							<div class="col-sm-6 my-auto">
							<u><h3 class="heading" style="text-align:left;"> <?php echo $lang['section d']; ?> </h3></u><br></br>
								<img src="images/allergy.jpg" class="image" alt= <?php echo $lang['alt first aid 7']; ?> ></img>
							</div>
							<div class="col-sm-6 my-auto">
							<br></br><br></br><br></br><br></br>
								<p> <?php echo nl2br($lang['sec d text']); ?> </p>
							</div>
					</div>
					
					<br></br><br></br><br></br>
					<div class="row" id="e" style="background-color:#37B482;">
							<div class="col-sm-6 my-auto">
							<u><h3 class="heading" style="text-align:left;"> <?php echo $lang['section e']; ?> </h3></u><br></br><br></br><br></br>
								<p> <?php echo nl2br($lang['sec e text']); ?> </p>
							</div>
							<div class="col-sm-6 my-auto">
							<br></br><br></br>
								<img src="images/thrust.jpg" class="image" alt= <?php echo $lang['alt first aid 8']; ?> ></img>
								<img src="images/cardioplumenary.jpg" class="image" alt= <?php echo $lang['alt first aid 9']; ?> ></img>
							</div>
					</div>
					
					<div class="row" id="f">
							<div class="col-sm-6 my-auto">
							<u><h3 class="heading" style="text-align:left;"> <?php echo $lang['section f']; ?> </h3></u><br></br>
								<img src="images/heart_attack.jpg" class="image" alt= <?php echo $lang['alt first aid 10']; ?> ></img>
							</div>
							<div class="col-sm-6 my-auto">
							<br></br><br></br><br></br>
								<p> <?php echo nl2br($lang['sec f text']); ?> </p>
							</div>
					</div>
					<div class="alert alert-danger" style="margin-top:100px; padding:80px;">
						 <?php echo nl2br($lang['first aid important']); ?> <br></br>
						<a href="https://en.wikipedia.org/wiki/List_of_emergency_telephone_numbers" target="_blank" style="font-size:25px;"> <?php echo $lang['emergency numbers']; ?> </a>
					</div>
				</div>
			</div>
			
			<?php
			include ("footer.php");
			?>
	</body>
	
	<script src="script.js"></script>
	
</html>