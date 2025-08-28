<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title> Health Journal </title>
	<link rel="icon" href="images/logo.png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="behealthy-style.css"/>
		<link rel="stylesheet" href="news-style.css"/>
		<link rel="stylesheet" href="navigation.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<html>

	<body>

		<?php
		include ("header.php");
		?>

			<div class="breaking-news-section">
				<span id="btext"><?php echo ''.$lang['breaking_news'].''; ?></span>
				<marquee direction="left" onmouseover="this.stop()" onmouseout="this.start()">
					<a href="#" class="breaking-news">
						<p class="bntime"><?php echo ''.$lang['bnews_time_second'].''; ?></p>
						<a href="https://www.medicalnewstoday.com/articles/covid-19-vaccine-live-updates#1" target="_blank" style="color:white;"> <?php echo ''.$lang['bnews_first'].''; ?></a>
					<a href="#" class="breaking-news"><p class="bntime"><?php echo ''.$lang['bnews_time_second'].''; ?></p><a href="https://www.medicalnewstoday.com/articles/covid-19-vaccine-what-to-do-about-side-effects" target="_blank" style="color:white;"><?php echo ''.$lang['bnews_second'].''; ?></a>
					<a href="#" class="breaking-news"><p class="bntime"><?php echo ''.$lang['bnews_time_second'].''; ?></p><a href="https://www.medicalnewstoday.com/articles/can-food-choices-influence-cancer-risk" target="_blank" style="color:white;"> <?php echo ''.$lang['bnews_third'].''; ?></a>
				</marquee>
			</div>

		<div id="main">
			<div class="container-fluid">
			<article id="popular-news">
				<div id="featured">
					<h2><?php echo ''.$lang['latest'].''; ?></h2>
					<section class="popular-news-carousel">
						<div id="carousel" class="carousel slide" data-ride="carousel">
						  <ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						  </ol>
						  <div class="carousel-inner">
							<div class="carousel-item active">
							  <img class="d-block w-100" src="images/latest-first.jpg" alt="First slide">
								<div class="carousel-caption d-none d-md-block">
									<h5><a href="https://www.sciencedaily.com/releases/2021/06/210611110807.htm" target="_blank" style="color:white;"> <?php echo ''.$lang['latest_first'].''; ?></h5>
									<p><?php echo ''.$lang['bnews_time_second'].''; ?></p>
								 </div>
							</div>
							<div class="carousel-item">
							  <img class="d-block w-100" src="images/latest-second.jpg" alt="Second slide">
								<div class="carousel-caption d-none d-md-block">
									<h5><a href="https://www.sciencedaily.com/releases/2021/06/210601165101.htm" target="_blank" style="color:white;"> <?php echo ''.$lang['latest_second'].''; ?></a></h5>
									<p><?php echo ''.$lang['bnews_time_second'].''; ?></p>
								 </div>
							</div>
							<div class="carousel-item">
							  <img class="d-block w-100" src="images/latest-third.jpg" alt="Third slide">
								<div class="carousel-caption d-none d-md-block">
									<h5><a href="https://www.bbc.com/news/health-57467051" target="_blank" style="color:white;"><?php echo ''.$lang['latest_third'].''; ?></h5>
									<p><?php echo ''.$lang['bnews_time_second'].''; ?></p>
								 </div>
							</div>
						  </div>
						  <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only"><?php echo ''.$lang['previous'].''; ?></span>
						  </a>
						  <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only"><?php echo ''.$lang['next'].''; ?></span>
						  </a>
						</div>
					</section>

				</div>
				<div id="latest">
					<h2><?php echo ''.$lang['world'].''; ?></h2>
					<section class="news">
						<div class="news-container">
							<img src="images/world-first.PNG">
							<p class="carousel-text"><a href="https://www.medicalnewstoday.com/articles/work-and-social-strain-increase-womens-risk-of-coronary-heart-disease" target="_blank" style="color:white;"> <?php echo ''.$lang['world_first'].''; ?></a></p>
						</div>
					</section>
					<section class="news">
						<div class="news-container">
							<img src="images/world-1.jpeg">
							<p class="carousel-text"><a href="https://www.medicalnewstoday.com/articles/diabetes-blood-sugar-control-is-getting-worse-for-us-adults" target="_blank" style="color:white;"> <?php echo ''.$lang['world_second'].''; ?></a></p>
						</div>
					</section>
				</div>

				<div id="our-picks">
					<h2><?php echo ''.$lang['greece'].''; ?></h2>
					<section class="news">
						<div class="news-container">
							<img src="images/greece-first.jpg">
							<p class="carousel-text"><a href="https://greekreporter.com/2021/06/11/first-case-of-brazilian-coronavirus-variant-in-greece/" target="_blank" style="color:white;"> <?php echo ''.$lang['greece_first'].''; ?></a></p>
						</div>
					</section>
					<section class="news">
						<div class="news-container">
							<img src="images/greece1.PNG">
							<p class="carousel-text"><a href="https://greekreporter.com/2021/06/13/greece-coronavirus-cases-hit-record-low-for-months/" target="_blank" style="color:white;"> <?php echo ''.$lang['greece_second'].''; ?></a></p>
						</div>
					</section>
				</div>
			</article>
			<section class="more-news">
				<div class="news-section">
					<article class="world">
						<h2><?php echo ''.$lang['breaking'].''; ?></h2>
						<img src="images/breaking-1.jpg">

						<br><br>
						<h3><a href="https://www.bbc.com/news/uk-57478760" target="_blank" style="color:white;"> <?php echo ''.$lang['breaking_first'].''; ?></a></h3>

						<br><br>
						<img src="images/breaking-3.PNG">
						<h3><a href="https://bestlifeonline.com/health-facts/" target="_blank" style="color:white;"> <?php echo ''.$lang['breaking_third'].''; ?></a></h3>
						<h3><a href="https://bestlifeonline.com/shocking-health-facts/" target="_blank" style="color:white;"> <?php echo ''.$lang['breaking_fourth'].''; ?></a></h3>
						<br><br>

						<img src="images/breaking-4.PNG">
						<br><br>
						<h3><a href="https://www.eatthis.com/mind-blowing-food-facts/" target="_blank" style="color:white;"> <?php echo ''.$lang['breaking_fifth'].''; ?></a></h3>
						<br><br>

					</article>
					<article class="sport">
						<h2><?php echo ''.$lang['technology'].''; ?></h2>
						<img src="images/techno.PNG">
						<h3><a href="https://healthtechmagazine.net/article/2021/04/healthcare-hackers-play-long-game-ransomware" target="_blank" style="color:white;"> <?php echo ''.$lang['technology_first_title'].''; ?></a></h3>
						<p><?php echo ''.$lang['technology_first'].''; ?> </a></p>

						<img src="images/techno-2.jpg">
						<h3><a href="https://healthtechmagazine.net/article/2021/05/fda-plans-oversight-ai-medical-devices-addressing-bias" target="_blank" style="color:white;"> <?php echo ''.$lang['technology_second_title'].''; ?></a></h3>
						<p><?php echo ''.$lang['technology_second'].''; ?> </a></p>

						<img src="images/techno-3.jpg">
						<h3><a href="https://healthtechmagazine.net/article/2021/04/high-performance-computing-powers-medical-research" target="_blank" style="color:white;"> <?php echo ''.$lang['technology_third_title'].''; ?></a></h3>
						<p><?php echo ''.$lang['technology_third'].''; ?> </a></p>


					</article>
				</div>

				<aside>
					<h4><?php echo ''.$lang['recent'].''; ?></h4>
					<div class="recent-news">
						<img src="images/recent1.PNG">
						<p><a href="https://www.webmd.com/eye-health/blue-light-health" target="_blank" style="color:white;"> <?php echo ''.$lang['recent_first'].''; ?></a></p>
					</div>
					<div class="recent-news">
						<img src="images/recent2.PNG">
						<p><a href="https://www.medicalnewstoday.com/articles/pomelo-fruit" target="_blank" style="color:white;"> <?php echo ''.$lang['recent_second'].''; ?></a></p>
					</div>
					<div class="recent-news">
						<img src="images/recent4.PNG">
						<p><a href="https://www.medicalnewstoday.com/articles/exercise-and-mental-health-during-covid-19-study-explores-link-trends" target="_blank" style="color:white;"> <?php echo ''.$lang['recent_third'].''; ?></a></p>
					</div>
					<div class="recent-news">
						<img src="images/recent5.PNG">
						<p><a href="https://www.medicalnewstoday.com/articles/weak-metabolism-in-fat-tissue-may-explain-obesitys-health-effects#:~:text=Research%20shows%20that%20it%20substantially,cardiovascular%20disease%2C%20and%20some%20cancers." target="_blank" style="color:white;"> <?php echo ''.$lang['recent_fourth'].''; ?></a></p>
					</div>

						<div class="recent-news">
							<img src="images/recent6.PNG">
							<p><a href="https://www.medicalnewstoday.com/articles/black-fungus-and-covid-19-myths-and-facts" target="_blank" style="color:white;"> <?php echo ''.$lang['recent_fifth'].''; ?></a></p>
						</div>
						<div class="recent-news">
							<img src="images/recent7.PNG">
							<p><a href="https://www.medicalnewstoday.com/articles/umbilical-cord-cells-may-boost-survival-of-covid-19-patients" target="_blank" style="color:white;"> <?php echo ''.$lang['recent_six'].''; ?></a></p>
						</div>
						<div class="recent-news">
							<img src="images/recent8.PNG">
							<p><a href="https://www.medicalnewstoday.com/articles/medical-myths-all-about-blood-donation" target="_blank" style="color:white;"> <?php echo ''.$lang['recent_seven'].''; ?></a></p>
						</div>
						<div class="recent-news">
							<img src="images/recent9.PNG">
							<p><a href="https://www.medicalnewstoday.com/articles/vitamin-d-supplements-may-not-protect-against-covid-19" target="_blank" style="color:white;"> <?php echo ''.$lang['recent_eigth'].''; ?></a></p>
						</div>



					</div>
				</aside>
			</section>
			</div>
		</div>
		<footer>

		</footer>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>


		<?php
	include ("footer.php");
	?>

	</body>

	<script src="script.js"></script>

</html>
