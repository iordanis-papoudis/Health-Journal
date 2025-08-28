<?php include ("check_status.php"); ?>
<?php include ("langconfig.php");?>
<header>
			<a href="Home.php"><h1 id="head1">Health Journal</h1></a>
			<form action="search.php" method="GET" id="search">
				<input type="text" name="search" placeholder= <?php echo $lang['search']; ?> />
				<button type="submit" name="submit_search" class="button"><i class="material-icons" style="color:black;">search</i></button>
			</form>
			<div id="navbar" class="navbar navbar-expand-lg navbar-custom">
				<a class="navbar-brand" href="Home.php"><span class="material-icons" style="font-size:21px;">home</span></a>
				<div class="navbar-header">
					<button style="margin-bottom:10px; outline:none;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span  class="material-icons">menu</span>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">

					<ul class="nav navbar-nav">
						<li><a href="News.php"> <?php echo $lang['news']; ?> </a></li>
						<li><a href="Covid.php">COVID</a></li>
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> <?php echo $lang['guides']; ?> </span></a>
							<ul class="dropdown-menu">
								<li><a href="First Aid.php"> <?php echo $lang['first aid']; ?> </a></li>
								<li><a href="About Diseases.php"> <?php echo $lang['about diseases']; ?> </a></li>
							</ul>
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> <?php echo $lang['be healthy']; ?> </span></a>
							<ul class="dropdown-menu">
								<li><a href="Be Healthy.php"> <?php echo $lang['introduction']; ?> </a></li>
								<li><a href="Be Healthy.php#banner2"> <?php echo $lang['nutrition']; ?> </a></li>
								<li><a href="Be Healthy.php#banner3"> <?php echo $lang['fitness']; ?> </a></li>
								<li><a href="Be Healthy.php#banner4"> <?php echo $lang['meditation']; ?> </a></li>
								<li><a href="Be Healthy.php#banner5"> <?php echo $lang['purpose']; ?> </a></li>
								<li><a href="BMI Calculator.php"> <?php echo $lang['bmi calculator']; ?> </a></li>
							</ul>
						</li>
						<li><a href="Forum.php"> <?php echo $lang['forum']; ?> </a></li>
					</ul>
					<ul class="nav navbar-nav ml-auto">
						<li class="dropdown">
							<a href="#" onclick="" class="dropdown-toggle" data-toggle="dropdown" style="font-size:18px;"><i class="fa fa-globe"></i></a>
							<ul class="dropdown-menu dropdown-menu-right">

                            <?php
                                $page = basename($_SERVER['PHP_SELF']);
                                //if($page=="forum_post.php")
                                    //$page="forum.php";
                                    if(isset($_GET['search'])) $index='search='.$_GET['search'].'&submit_search=';
                                    elseif(isset($_GET['id'])) $index='id='.$_GET['id'];
                                    else $index='';

                            ?>

								<li><a href="<?php echo $page.'?'.$index;?>&lang=en">English</a></li>
								<li><a href="<?php echo $page.'?'.$index;?>&lang=gr">Ελληνικά</a></li>
							</ul>

							<?php require_once('config.php');
							//if the user is logged in
                            if (isset($_SESSION['loggedin'])){
                                $result=mysqli_query($conn, "SELECT profileImage,id FROM user WHERE id='".$_SESSION['id']."'");
                                $profile=mysqli_fetch_assoc($result);
                                include ('profile_image.php');
                                echo'<li class="dropdown"><a id="online" href="#" class="dropdown-toggle" data-toggle="dropdown"><img id="profile_img" src="'.$image.'"></img>'.$_SESSION['username'].'</a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="account.php?id='.$_SESSION['id'].'">'.$lang['management'].'</a></li>
                                    <li><a href="log_out.php">'.$lang['log out'].'</a></li>';

                            //if the user is not logged in
                            }else{
                                echo '<li><a id="signin" href="signin.php" class="account">'.$lang['sign in'].'</a></li>
                                <li><a href="login.php" class="account">'.$lang['log in'].'</a></li>';
                            }?>
					</ul>
				</div>
			</div>
		</header>
		<button id="up" onclick="scrollToTop();"><i class="fa fa-chevron-up"></i></button>