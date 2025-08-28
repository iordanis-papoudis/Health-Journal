<?php include ("langconfig.php");?>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<title>Respiratory Diseases - Health Journal </title>
		<link rel="icon" href="images/logo.png">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="navigation.css">
		<link rel="stylesheet" href="disease.css">
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
			<button id="up" onclick="scrollToTop();"><i class="fa fa-chevron-up"></i></button>
			<div id="main" >
				<div class="container-fluid" >
					<h2 class="heading" style="text-align:left; border-bottom:10px solid #37B482;"> <?php echo $lang['respiratory diseases']; ?> </h2>
					
					<div class="tip" style="float:left;">
						<a href="cancer.php"><i id="arrow" class="material-icons">arrow_back</i></a>
						<span style="color:white;"class="tooltiptext"> <?php echo $lang['cancer']; ?> </span>
					</div>
					
					<div class="tip" style="float:right;">
						<a href="cerebrovascular diseases.php"><i id="arrow" class="material-icons">arrow_forward</i></a>
						<span style="color:white;"class="tooltiptext"> <?php echo $lang['cerebrovascular diseases']; ?> </span>
					</div>
					
					
					<br></br><br></br>
					
					<div class="row" style="background-color:#37B482; color:white; border-radius:10px; padding:20px;">
						<div class="col-sm-2">
						</div>
						<div class="col-sm-8">
							<p> <?php echo $lang['respiratory diseases intro']; ?> </p>
						</div>
					</div>
					<br></br><br></br>
					<h3 class="heading" style="text-align:left;"> <?php echo $lang['symptoms']; ?> </h3>
					
					<div class="row">
						
						<div class="col-sm-8">
							<br></br>
							<p> <?php echo nl2br($lang['respiratory diseases symptoms']); ?> </p>
						</div>
						<div class="col-sm-4">
							<img src="images/respiratory.jpg" alt= <?php echo $lang['alt about diseases 3']; ?>  class="image"></img>
						</div>
					</div>
					
					<br></br><br></br>
					<h3 class="heading" style="text-align:left;"> <?php echo $lang['causes']; ?> </h3>
					<div class="row">
						
							<br></br>
							<p> <?php echo $lang['respiratory diseases causes']; ?> </p>
					</div>
					
					
					<br></br><br></br>
					
					<div class="row" style="background-color:#37B482; border-radius:10px; padding:20px">
						<h3 class="heading" style="text-align:left;"> <?php echo $lang['prevention']; ?> </h3>
							<br></br>
							<p> <?php echo $lang['respiratory diseases prevention']; ?> </p>
					</div>
				</div>
			</div>
			
			<?php
			include ("footer.php");
			?>
	</body>
	<script src="script.js"></script>
</html>