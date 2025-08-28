<?php include ("langconfig.php");?>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<title>About Diseases - Health Journal</title>
		<link rel="icon" href="images/logo.png">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="navigation.css">
		<link rel="stylesheet" href="diseases.css">
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
			<div id="main" >
				<div class="container-fluid" >
					<h2 class="heading" style="text-align:left; border-bottom:10px solid #37B482;"> <?php echo $lang['about diseases']; ?> </h2>
					<br></br>
					<div class="row" style="background-color:#37B482; color:white; padding:30px; border-radius:10px;">
						<div class="col-sm-2">
						</div>
						<div class="col-sm-8">
							<p> <?php echo $lang['about diseases intro']; ?> </p>
						</div>
					</div>
					<br></br>
					<u><h3 class="heading" style="text-align:left;"> <?php echo $lang['list of diseases']; ?> </h3></u>
					<div class="row">
						<div class="col-sm-3">
							<div class="wrapper">
								<a href="heart disease.php">
								<img src="images/heart.jpg" class="disease" alt="A human heart."></img>
								<div class="overlay">
									<span class="text"> <?php echo $lang['heart disease']; ?> </span>
								</div>
								</a>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="wrapper">
								<a href="cancer.php">
								<img src="images/cancer.jpg" class="disease" alt="A cancer cell."></img>
								<div class="overlay">
									<span class="text"> <?php echo $lang['cancer']; ?> </span>
								</div>
								</a>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="wrapper">
								<a href="respiratory diseases.php">
								<img src="images/respiratory.jpg" class="disease" alt="Human lungs."></img>
								<div class="overlay">
									<span class="text"> <?php echo $lang['respiratory diseases']; ?> </span>
								</div>
								</a>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="wrapper">
								<a href="cerebrovascular diseases.php">
								<img src="images/brain.jpg" class="disease" alt="The human brain"></img>
								<div class="overlay">
									<span class="text"> <?php echo $lang['cerebrovascular diseases']; ?> </span>
								</div>
								</a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3">
							<div class="wrapper">
								<a href="alzheimer.php">
								<img src="images/alzheimers.jpg" class="disease" alt="An abstract depiction of an old man suffering from Alzheimer's Disease."></img>
								<div class="overlay">
									<span class="text"> <?php echo $lang['alzheimer']; ?> </span>
								</div>
								</a>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="wrapper">
								<a href="influenza.php">
								<img src="images/influenza.jpg" class="disease" alt="Influenza virus."></img>
								<div class="overlay">
									<span class="text"> <?php echo $lang['influenza']; ?> </span>
								</div>
								</a>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="wrapper">
								<a href="hiv.php">
								<img src="images/hiv.jpg" class="disease" alt="An HIV virus destroying the cells around it."></img>
								<div class="overlay">
									<span class="text"> <?php echo $lang['hiv']; ?> </span>
								</div>
								</a>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="wrapper">
								<a href="hepatitis.php">
								<img src="images/hepatitis.jpg" class="disease" alt="An abstract depiction of some doctors and scientists studying and medicating a liver."></img>
								<div class="overlay">
									<span class="text"> <?php echo $lang['hepatitis']; ?> </span>
								</div>
								</a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="alert alert-danger" style="margin-top:100px; padding:80px; width:100%;">
							<strong> <?php echo $lang['diseases warn one']; ?> </strong><br></br> <?php echo $lang['diseases warn two']; ?> <strong> <?php echo $lang['diseases warn three']; ?> </strong> <?php echo $lang['diseases warn four']; ?>
						</div>
					</div>
				</div>
			</div>
		<?php
		include ("footer.php");
		?>
	</body>
	<script src="script.js"></script>
</html>