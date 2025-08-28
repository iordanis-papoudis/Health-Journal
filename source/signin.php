<?php include("registration.php")?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<title> Health Journal </title>
		<link rel="icon" href="images/logo.png">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="home.css">
		<link rel="stylesheet" href="navigation.css">
        <link rel="stylesheet" href="signin.css">
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
		<div id="main">
        <div class="container login-container">
            <div class="row">
                <div class="col-md-6 login-box-1">
                    <h3 id="title"><?php echo $lang['new account']; ?></h3>
					<form method="POST" >		<!-- This will with php in the future/-->
                        <div class="form-group"> 
                            <input type="text" class="text" name="fname" placeholder="<?php echo $lang['first name']; ?>"  value=""  />
                            <div style="color:red;"><?php if(isset($error1)) { echo $error1; } ?></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="text" name="lname" placeholder="<?php echo $lang['last name']; ?>" value=""  />
                            <div style="color:red;"><?php if(isset($error2)) { echo $error2; } ?></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="text" name="usr" placeholder="<?php echo $lang['username']; ?>" value=""  />
                            <div style="color:red;"><?php if(isset($error3)) { echo $error3; } ?></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="text" name="e-mail" placeholder="<?php echo $lang['email address']; ?>" value=""  />
                            <div style="color:red;"><?php if(isset($error4)) { echo $error4; } ?></div>
                        </div>
                        <div class="form-group">
                            <input type="password" class="text" name="pwd" placeholder="<?php echo $lang['password']; ?>" value=""  />
                            <div style="color:red;"><?php if(isset($error5)) { echo $error5; } ?></div>
                        </div>
                        <div class="form-group">
                            <input type="password" class="text" name="conpwd" placeholder="<?php echo $lang['confirm password']; ?>" value=""  />
                            <div style="color:red;"><?php if(isset($error6)) { echo $error6; } ?></div>
                        </div>
						<div class="form-group">
                           <input type="submit"  class="button btnSubmit" value="<?php echo $lang['register']; ?>" />
						</div>
                        <div style="color:red;"><?php if(isset($res)) { echo $res; } ?></div>
					</form>
					
                    <a class="na" href="login.php"><?php echo $lang['already account']; ?></a>
                </div>
                <div class="col-md-6 login-box-2">
                    <h3 id="title"><?php echo $lang['social']; ?></h3>
                    <div id="links">
                        <a href="https://www.facebook.com" class="fb btn">
                            <i class="fa fa-facebook fa-fw"></i> <?php echo $lang['facebook']; ?>
                        </a>
                        <a href="https://www.twitter.com" class="twitter btn">
                            <i class="fa fa-twitter fa-fw"></i> <?php echo $lang['twitter']; ?>
                        </a>
                        <a href="https://accounts.google.com/" class="google btn">
                            <i class="fa fa-google fa-fw"></i> <?php echo $lang['google']; ?>
                        </a>
                    </div>
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