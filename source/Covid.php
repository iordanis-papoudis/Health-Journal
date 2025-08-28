<?php include ("langconfig.php");?>

<!Doctype html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>Covid - Health Journal </title>
	<link rel="icon" href="images/logo.png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="home.css"/>
		<link rel="stylesheet" href="covid.css">
		<link rel="stylesheet" href="navigation.css"/>
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
		<div class=".container-fluid p-3 my-3" id="top-con">
			<span id="title">Covid-19</span>
			
		</div>
		<div class="container-fluid" id="top-con" style="padding-top: 20px;">
			<div class="row">
				<div class="col-sm-6">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe src="https://www.youtube.com/embed/HjO8IU7Hb6A"  title="YouTube video about Covid-19" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-sm-6">
					<div style="text-align:center;">
						<diV>
							<p class="summary"> <?php echo $lang['covid intro']; ?>
							</p>
						</diV>
					</div>
				</div>
			</div>
		</div>
		<div id="measures">
			<div class=".container-fluid">
				<div>
					<p id="par"> <?php echo $lang['covid outbreak']; ?>
					</p>
				</div>
			</div>
			<div class=".container-fluid" >
				<div class="row icon-boxes">
			        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 my-auto">
			        	<div class="icon-box">
			            	<h4 class="title"> <?php echo $lang['wash hands']; ?> </a></h4>
			        	    <span class="images"><img src="images\hands.jfif" alt= <?php echo $lang['alt covid 1']; ?> ></span>
			        	</div>
			        </div>
			        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 my-auto">
			        	<div class="icon-box">
				        	<h4 class="title"> <?php echo $lang['keep distance']; ?> </h4>
				           	<span class="images"><img src="images\distance.jfif" alt= <?php echo $lang['alt covid 2']; ?> ></span>
			           </div>
			        </div>

			        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 my-auto">
			          <div class="icon-box">
			            <h4 class="title"> <?php echo $lang['wear mask']; ?> </h4>
			            <span class="images"><img src="images\mask.png" alt= <?php echo $lang['alt covid 3']; ?> ></span>
			          </div>
			        </div>

			        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 my-auto">
			        	<div class="icon-box">
			           		<h4 class="title"> <?php echo $lang['visit doctor']; ?> </h4>
			            	<span class="images"><img src="images\syptoms.jpg" alt= <?php echo $lang['alt covid 4']; ?> ></span>
			            </div>
			        </div>
			    </div>
		    </div>
		</div>
		<div class="container-fluid" id="lock">
   			<div class="row text-center">
	        	<div class="col-md-6">
	        		<div>
		            	<p id="locktext"> <?php echo $lang['covid locktext one']; ?> </p>
		            	<p id="locktext"> <?php echo $lang['covid locktext two']; ?> </p>
		            	<p id="locktext"> <?php echo $lang['covid locktext three']; ?> </p>
		            	<p id="locktext"> <?php echo $lang['covid locktext four']; ?>  </p>
	           		</div>
	        	</div>
	        	<div class="col-md-6 ">
	            	<img class="img-lock" src="images\stay_home.jpg" alt= <?php echo $lang['alt covid 5']; ?> >
	        	</div>
	        </div>
	    </div>
		<div class="container-fluid">
			<div id="table">
				<p class="map"> <?php echo $lang['covid tool']; ?> <a href="https://ourworldindata.org/" target="_blank" style="font-size:28px;"> <?php echo $lang['our world in data']; ?> </a> <?php echo $lang['covid around globe']; ?> </p>
				<div class="embed-responsive embed-responsive-16by9 charts">
					<iframe class="embed-responsive-item"  src="https://ourworldindata.org/grapher/total-cases-covid-19?tab=map" width="50%" height="600px"></iframe>
				</div>
			</div>
			<div id="table-alt">
				<p class="map"> <?php echo $lang['covid info']; ?> <a href="https://ourworldindata.org/explorers/coronavirus-data-explorer?tab=map&zoomToSelection=true&hideControls=true&Interval=Cumulative&Relative+to+Population=false&Align+outbreaks=false&country=~OWID_WRL&Metric=Confirmed+cases" target="_blank"> <?php echo $lang['our world in data']; ?> </a> <?php echo $lang['covid new window']; ?> </p>
			</div>
		</div>
		<div class="container-fluid">
			<h3 id="faq"> <?php echo $lang['faq']; ?> </h3>
			<div class="accordion" id="accordionAll">
				<div class="card">
				  <div class="card-header" id="headingOne">
					<h5 class="mb-0">
					  <button class="btn btn-link" data-toggle="collapse"data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
						<?php echo $lang['covid spread']; ?>
					  </button>
					</h5>
				  </div>
			  
				  <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionAll">
					<div class="card-body faq-text">
						<?php echo $lang['spread answer']; ?>
					</div>
				  </div>
				</div>
				<div class="card">
				  <div class="card-header" id="headingTwo">
					<h5 class="mb-0">
					  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						<?php echo $lang['covid infection']; ?>
					</button>
					</h5>
				  </div>
				  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionAll">
					<div class="card-body faq-text">
						<?php echo $lang['infection answer']; ?>
						<ul>
							<li> <?php echo $lang['infection answer one']; ?> </li>
							<li> <?php echo $lang['infection answer two']; ?> </li>
							<li> <?php echo $lang['infection answer three']; ?> </li>
							<li> <?php echo $lang['infection answer four']; ?> </li>
						</ul>
					</div>
				  </div>
				</div>
				<div class="card">
				  <div class="card-header" id="headingThree">
					<h5 class="mb-0">
					  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						 <?php echo $lang['covid greater risk']; ?>
					  </button>
					</h5>
				  </div>
				  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionAll">
					<div class="card-body faq-text">
						<ul>
							<li> <?php echo $lang['greater risk answer one']; ?> </li>
							<li> <?php echo $lang['greater risk answer two']; ?> </li>
							<li> <?php echo $lang['greater risk answer three']; ?> </li>
						</ul>
					</div>
				  </div>
				</div>
				<div class="card">
					<div class="card-header" id="headingFour">
					  <h5 class="mb-0">
						<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
						   <?php echo $lang['covid symptoms']; ?>
					  </button>
					  </h5>
					</div>
					<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionAll">
					  <div class="card-body faq-text">
						 <?php echo $lang['symptoms answer']; ?>
					  </div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingFive">
					  <h5 class="mb-0">
						<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
						   <?php echo $lang['covid contact']; ?>
					  </button>
					  </h5>
					</div>
					<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionAll">
					  <div class="card-body faq-text">
						 <?php echo nl2br($lang['contact answer']); ?>
						<ul>
							<li> <?php echo $lang['contact answer one']; ?> </li>
							<li> <?php echo $lang['contact answer two']; ?> </li>
						</ul>
					</div>
					</div>
				</div>
			</div>
		</div>
		<div class=".container-fluid bg-dark text-white">
			<div class="info">
      			<h4 id="title-foot"> <?php echo $lang['for more info']; ?> </h4>
      			 <?php echo $lang['call']; ?> <ul><li><a href = "tel+301135">+30 1135</a>   <?php echo $lang['eody']; ?> </li></ul>
      			 <?php echo $lang['visit']; ?> <ul><li><a href="https://eody.gov.gr/neos-koronaios-covid-19/" target="_blank"> <?php echo $lang['eody']; ?> </a></li>
      			<li><a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019" target="_blank"> <?php echo $lang['w h o']; ?> </a></li></ul>
      		</div>
      	</div>
	</div>
	<?php
	include ("footer.php");
	?>
	</body>
	<script src="script.js"></script>
</html>