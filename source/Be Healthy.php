

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>Be Healthy - Health Journal </title>
	<link rel="icon" href="images/logo.png">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="behealthy-style.css">
		<link rel="stylesheet" href="navigation.css">
		<meta name ="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<header>
<body>
	<?php
	include ("header.php");
	?>
<div id="main">
	<div id="banner">
		<div class="banner-text">
			<h1><?php echo ''.$lang['be healthy'].''; ?></h1>
			<p><?php echo ''.$lang['be healthy desc'].''; ?></p>
			<div class="banner-btn">
				<a href="#banner2"><span></span><?php echo ''.$lang['nutrition'].''; ?></a>
			</div>
		</div>
	</div>

	<section id="feature">
		<div class="title-text">
		<?php echo ''.$lang['journey'].''; ?>
		</div>

		<div class="feature-box">
			<div class="features">
				<h1><?php echo ''.$lang['nutrition'].''; ?></h1>
				<div class="features-desc">
					<div class="feature-icon">
						<i class="fa fa-cutlery"></i>
					</div>
					<div class="feature-text">
						<p><?php echo ''.$lang['nutrition desc'].''; ?></p>
					</div>
				</div>
				<br>

				<h1><?php echo ''.$lang['fitness'].''; ?></h1>
				<div class="features-desc">
					<div class="feature-icon">
						<i class="fa fa-heartbeat"></i>
					</div>
					<div class="feature-text">
						<p><?php echo ''.$lang['fitness desc'].''; ?></p>
					</div>
				</div>
				<br>

				<h1><?php echo ''.$lang['meditation'].''; ?></h1>
				<div class="features-desc">
					<div class="feature-icon">
						<i class="fa fa-leaf"></i>
					</div>
					<div class="feature-text">
						<p><?php echo ''.$lang['meditation desc'].''; ?></p>
					</div>
				</div>
				<br>

				<h1><?php echo ''.$lang['purpose'].''; ?></h1>
				<div class="features-desc">
					<div class="feature-icon">
						<i class="fa fa-heart"></i>
					</div>
					<div class="feature-text">
						<p><?php echo ''.$lang['purpose desc'].''; ?></p>
					</div>
				</div>
			</div>
			<div class="features-img">
				<img src="images/gym.jpg">
			</div>
		</div>
	</section>

	<section id="purpose">
		<div class="title-text">
			<p><?php echo ''.$lang['purpose'].''; ?></p>
			<h1><?php echo ''.$lang['the reason'].''; ?></h1>
		</div>
		<div class="purpose-box">
			<div class="single-purpose">
			<a href="#banner2" style="color:white;">
				<img src="images/eating.jpg">
				<div class="overlay"></div>
				<div class="purpose-desc">
					<h3><?php echo ''.$lang['nutrition'].''; ?></h3>
					<hr>
					<p></p>
				</div>
			</a>
			</div>
			<div href="#banner2" class="single-purpose">
			<a href="#banner3" style="color:white;">
				<img src="images/body.jpg">
				<div class="overlay"></div>
				<div class="purpose-desc">
					<h3><?php echo ''.$lang['fitness'].''; ?></h3>
					<hr>
					<p></p>
				</div>
			</a>
			</div>
			<div href="#banner2" class="single-purpose">
			<a href="#banner4" style="color:white;">
				<img src="images/meditate.jpg">
				<div class="overlay"></div>
				<div class="purpose-desc">
					<h3><?php echo ''.$lang['meditation'].''; ?></h3>
					<hr>
					<p></p>
				</div>
			</a>
			</div>
			<div class="single-purpose">
			<a href="#banner5" style="color:white;">
				<img src="images/why.jpg">
				<div class="overlay"></div>
				<div class="purpose-desc">
					<h3><?php echo ''.$lang['your why'].''; ?></h3>
					<hr>
					<p></p>
				</div>
			</a>
			</div>
		</div>
	</section>

	<section id="banner2">
		<div class="banner-text">
			<h1><?php echo ''.$lang['nutrition'].''; ?></h1>
			<p><?php echo ''.$lang['nutrition desc 2'].''; ?></p>
			<div class="banner-btn">
				<a href="#banner"><span></span><?php echo ''.$lang['introduction'].''; ?></a>
				<a href="#banner3"><span></span><?php echo ''.$lang['fitness'].''; ?></a>
			</div>
		</div>
	</section>

	<section id="feature">
		<div class="title-text">
			<p><?php echo ''.$lang['what nutrition'].''; ?></p>
		</div>

		<div class="feature-box">
			<div class="features">
				<h1><?php echo ''.$lang['macronutrients'].''; ?></h1>
				<div class="features-desc">
					<div class="feature-text">
						<p><?php echo ''.$lang['macronutrients desc'].''; ?></p>
					</div>
				</div>
				<br>

				<h1><?php echo ''.$lang['micronutrients'].''; ?></h1>
				<div class="features-desc">
					<div class="feature-text">
						<p><?php echo ''.$lang['micronutrients desc'].''; ?></p>
					</div>
				</div>
				<br>

				<h1><?php echo ''.$lang['vitamins'].''; ?></h1>
				<div class="features-desc">
					<div class="feature-text">
						<p><?php echo ''.$lang['vitamins desc'].''; ?></p>
					</div>
				</div>
				<br>

				<h1><?php echo ''.$lang['antioxidants'].''; ?></h1>
				<div class="features-desc">
					<div class="feature-text">
						<p><?php echo ''.$lang['antioxidants desc'].''; ?></p>
					</div>
				</div>
			</div>
			<div class="features-img">
				<img src="images/eating.jpg">
			</div>
		</div>
		<br>
		<br>
		<br><br><br>


	<section id="important">
		<div class="title-text">
			<p><?php echo ''.$lang['importance'].''; ?></p>
			</div>


			<div class="feature-box">
				<div class="features">


			<div class="features-desc">
				<div class="feature-text">
			<p style="color:black;"><?php echo ''.$lang['importance desc'].''; ?></p>
			</div>
			</div>
	</div>
</div>
<br>
<br><br>
<br>
</section>

<section id="banner3">
	<div class="banner-text">
		<h1><?php echo ''.$lang['exercise and fitness'].''; ?></h1>
		<p><?php echo ''.$lang['exercise desc'].''; ?></p>
		<div class="banner-btn">
			<a href="#banner"><span></span><?php echo ''.$lang['intro'].''; ?></a>
			<a href="#banner4"><span></span><?php echo ''.$lang['meditation'].''; ?></a>
		</div>
	</div>
</section>

<section id="feature">
	<div class="title-text">
		<p><?php echo ''.$lang['difference'].''; ?></p>
	</div>
	<div class="feature-box">
		<div class="features">
			<h1><?php echo ''.$lang['exercise'].''; ?></h1>
			<div class="features-desc">
				<div class="feature-text">
					<p><?php echo ''.$lang['exercise desc 2'].''; ?></p>
				</div>
			</div>
			<br>
			<h1><?php echo ''.$lang['physical activity'].''; ?></h1>
			<div class="features-desc">
				<div class="feature-text">
					<p><?php echo ''.$lang['physical activity desc'].''; ?></p>
				</div>
			</div>
			<br>
			<h1><?php echo ''.$lang['physical fitness'].''; ?></h1>
			<div class="features-desc">
				<div class="feature-text">
					<p><?php echo ''.$lang['physical fitness desc'].''; ?></p>
				</div>
			</div>
			<br>
		</div>
		<div class="features-img" >
			<img src="images/fit1.jpg">
			<br>
			<br>
			<img src="images/fit2.jpg">
			<br>
			<br>
			<img src="images/fit3.jpg">
			<br>
			<br>
		</div>
	</div>
</section>

<div id="important">
	<div class="title-text">
		<p><?php echo ''.$lang['components'].''; ?></p>
	</div>
		<p style="color:black"><?php echo ''.$lang['components desc'].''; ?></p>

</div>



<section id="types">
	<div class="types-box">
		<div class="types">
<div class="title-text">
		<p><?php echo ''.$lang['types'].''; ?></p>
			</div>
		<h1><?php echo ''.$lang['muscular'].''; ?></h1>
		<div class="features-desc">
			<div class="feature-text">
				<p><?php echo ''.$lang['muscular desc'].''; ?></p>
			</div>
		</div>
		<br>
		<h1><?php echo ''.$lang['muscular endurance'].''; ?></h1>
		<div class="features-desc">
			<div class="feature-text">
				<p><?php echo ''.$lang['muscular endurance desc'].''; ?></p>
			</div>
		</div>
		<br>
		<h1><?php echo ''.$lang['cardiovascular endurance'].''; ?></h1>
		<div class="features-desc">
			<div class="feature-text">
				<p><?php echo ''.$lang['cardiovascular endurance desc'].''; ?></p>
			</div>
		</div>
		<br>

		<h1><?php echo ''.$lang['flexibility'].''; ?></h1>
		<div class="features-desc">
			<div class="feature-text">
				<p><?php echo ''.$lang['flexibility desc'].''; ?></p>
			</div>
		</div>
		<br>

		<h1><?php echo ''.$lang['body fat'].''; ?></h1>
		<div class="features-desc">
			<div class="feature-text">
				<p><?php echo ''.$lang['body fat desc'].''; ?></p>
			</div>
		</div>
		<br>


	</div>
	<div class="features-img">
		<img src="images/strength.PNG" style="margin-top:100px; width:40%;">
		<br>
		<br>
		<img src="images/endurance.PNG" style="margin-top:100px; width:40%;">
		<br>
		<br>
		<img src="images/cardiovascular.PNG" style="margin-top:100px; width:40%;">
		<br>
		<br>
		<img src="images/flexible.PNG" style="margin-top:100px; width:40%;">
		<br>
		<br><img src="images/bodyfat.PNG" style="margin-top:100px; width:40%;">
		<br>
		<br>
	</div>
</div>
</section>

<div id="banner4">
	<div class="banner-text">
		<h1><?php echo ''.$lang['meditation'].''; ?></h1>
		<p><?php echo ''.$lang['meditation desc 2'].''; ?></p>
		<div class="banner-btn">
			<a href="#banner"><span></span><?php echo ''.$lang['intro'].''; ?></a>
			<a href="#banner5"><span></span><?php echo ''.$lang['purpose'].''; ?></a>
		</div>
	</div>
</div>

<section id="feature">
	<div class="title-text">
		<p><?php echo ''.$lang['start journey'].''; ?></p>
		<h1><?php echo ''.$lang['benefits'].''; ?></h1>
	</div>

	<div class="feature-box">
		<div class="features">
			<h1><?php echo ''.$lang['listed benefits'].''; ?></h1>
	<div class="features-desc">
		<div class="feature-text">
			<p></p>
		</div>
	</div>

</section>

<section id="purpose">
	<div class="title-text">
		<p><?php echo ''.$lang['types'].''; ?></p>
		<h1><?php echo ''.$lang['meditation types'].''; ?></h1>
	</div>
	<div class="purpose-box">
		<div class="single-purpose">
			<img src="images/mindfulness.jpg">
			<div class="overlay"></div>
			<div class="purpose-desc">
				<h3><?php echo ''.$lang['mindfullness'].''; ?></h3>
				<hr>
				<p><?php echo ''.$lang['mindfullness desc'].''; ?></p>
			</div>
		</div>
		<div class="single-purpose">
			<img src="images/Spiritual.jpg">
			<div class="overlay"></div>
			<div class="purpose-desc">
				<h3><?php echo ''.$lang['spiritual'].''; ?></h3>
				<hr>
				<p><?php echo ''.$lang['spiritual desc'].''; ?></p>
			</div>
		</div>
		<div class="single-purpose">
			<img src="images/mantra.jpg">
			<div class="overlay"></div>
			<div class="purpose-desc">
				<h3><?php echo ''.$lang['mantra'].''; ?></h3>
				<hr>
				<p><?php echo ''.$lang['mantra desc'].''; ?></p>
			</div>
		</div>
		<div class="single-purpose">
			<img src="images/visualization.jpg">
			<div class="overlay"></div>
			<div class="purpose-desc">
				<h3><?php echo ''.$lang['visualization'].''; ?></h3>
				<hr>
				<p><?php echo ''.$lang['visualization desc'].''; ?></p>
			</div>
		</div>
	</div>
</section>

<div id="banner5">
	<div class="banner-text">
		<h1><?php echo ''.$lang['love yourself'].''; ?></h1>
		<p><?php echo ''.$lang['love yourself par'].''; ?></p>
		<div class="banner-btn">
			<a href="#banner"><span></span><?php echo ''.$lang['intro'].''; ?></a>
		</div>
	</div>
</div>



	<div class="container">
		<div style="text-align:center;">
			<h2 id="head2"></h2>

			<p class="paragraph" style="text-align:center">
			<?php echo ''.$lang['doctors office'].''; ?>
			</p>
		</div>
	</div>

<section id="feature">
	<div class="title-text">
		<p><?php echo ''.$lang['must'].''; ?></p>
		<h1><?php echo ''.$lang['eating healthy'].''; ?></h1>
	</div>

	<div class="feature-box">
		<div class="features">
			<h1><?php echo ''.$lang['living longer'].''; ?></h1>
			<div class="features-desc">
				<div class="feature-text">
					<p><?php echo ''.$lang['living longer desc'].''; ?></p>
				</div>
			</div>
			<br>

			<h1><?php echo ''.$lang['is connected'].''; ?></h1>
			<div class="features-desc">
				<div class="feature-text">
					<p><?php echo ''.$lang['is connected desc'].''; ?></p>
				</div>
			</div>
			<br>

			<h1><?php echo ''.$lang['be healthy conclussion'].''; ?></h1>
			<div class="features-desc">
				<div class="feature-text">
					<p><?php echo ''.$lang['be healthy conclussion par'].''; ?></p>
				</div>
			</div>
			<br>
		</div>
		<div class="features-img">
			<img src="images/why.jpg">
			<img src="images/question.jpg">
			<img src="images/fittt.jpg">
		</div>
	</div>
</section>
</div>
</div>
	<?php
	include ("footer.php");
	?>
	</body>
	<script src="script.js"></script>
	<script>
	function scroll() {
	if(document.body.scrollTop > 500 || document.documentElement.scrollTop > 500){
	upbutton.style.display="block";
	}
	else {
	upbutton.style.display="none";
	}
			
	if(window.pageYOffset >= stick){
		nav.classList.add("stick");
		search.style.display="none";
		main.style.marginTop="130px";
		title.style.display="none";
	}else{
		nav.classList.remove("stick");
		search.style.display="inline-block";
		main.style.marginTop="0px";
		title.style.display="inline-block";
	}
}
	</script>
</html>