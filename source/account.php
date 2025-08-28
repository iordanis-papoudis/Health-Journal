

<?php
    include ("check_status.php");
    include ("langconfig.php");
?>


<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
		<title>Account - Health Journal </title>
		<link rel="icon" href="images/logo.png">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="navigation.css">
		<link rel="stylesheet" href="account.css">
		<link rel="stylesheet" href = "signin.css">
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
	<div style="margin-top:50px;"><?php if(isset($_GET['pwd_changed'])) {
	    if($_GET['status']=="error") echo' <span style="color:red;" >'.$_GET["pwd_changed"].'</span>';
	    else echo' <span style="color:green;" >'.$_GET["pwd_changed"].'</span>';
	} ?></div>
	<div style="margin-top:50px;"><?php if(isset($_GET['email_changed'])) {
	    if($_GET['status']=="error") echo' <span style="color:red;" >'.$_GET["email_changed"].'</span>';
     	else echo' <span style="color:green;" >'.$_GET["email_changed"].'</span>';
	 } ?></div>
<div id="main">

	  <div class="content-fluid">
          <div class="row">
                <div class="col-sm-4">
                    <?php
                        $check=isset($_GET['id']) && isset($_SESSION['id']) && $_GET['id']==$_SESSION['id'];
                        if($check)
                            $index=$_SESSION['id'];
                        else
                            $index=$_GET['id'];
                        $checkImage=mysqli_query($conn, "SELECT profileImage,user.id FROM user WHERE id='".$index." '");
                        $profile=mysqli_fetch_assoc($checkImage);
                        include ('profile_image.php');
                        echo '<img id="image" src="'.$image.'"></img>';
                        if($check){
                        echo'<form action="upload.php" method="POST" enctype="multipart/form-data" style="margin-top:50px;">
                              <label class="button" for="upload">'.$lang["upload"].'</label>
                              <input id="upload" type="file" name="file" onchange="previewImage(this);">
                              <button id="submit" class="button" type="submit" name="submit" disabled> '.$lang["save"].' </button>
                        </form>';}
                    ?>
                </div>
                <div class="col-sm-8">
                  <h2 class="heading"> <?php echo $lang['account']; ?> </h2><hr>
                  <?php
                      if($check)
                          include ('get_data.php');
                      else{
                           $result=mysqli_query($conn, "SELECT * FROM user WHERE id='".$_GET['id']."'");
                           $row=mysqli_fetch_assoc($result);
                           $fname=$row['firstName'];
                           $lname=$row['lastName'];
                           $usr=$row['userName'];
                           $email=$row['email'];
                           $lvl=$row['level'];
                           $posts=$row['forumPosts'];
                      }?><div id="info">
                      <div class="group">
                          <label type="text" for="fname"><?php echo ''.$lang['first name'].':'; ?></label>
                          <input type="text" id="fname" class="text" name="fname" value="<?php echo $fname?>" readonly value=""/>
                      </div>
                      <div class="group">
                      <label type="text" for="lname"><?php echo ''.$lang['last name'].':'; ?></label>
                          <input type="text" id="lname" class="text" name="lname" value="<?php echo $lname?>" readonly />
                      </div>
                      <div class="group">
                      <label type="text" for="usr"><?php echo ''.$lang['username'].':'; ?></label>
                          <input type="text" id="usr" class="text" name="usr" value="<?php echo $usr?>" readonly />
                      </div>
                      <div class="group">
                      <label type="email" for="email">E-mail:</label>
                          <input type="email" id="email" class="text" name="e-mail" value="<?php echo $email?>" readonly />
                      </div>
                      <div class="group">
                      <label type="text" for="lvl"><?php echo ''.$lang['access level'].':'; ?></label>
                          <input type="text" id="lvl" class="text" name="lvl" value="<?php echo $lvl?>" readonly />
                      </div>
                      <div class="group">
                          <label type="text" for="lvl"><?php echo ''.$lang['forum posts'].':'; ?></label>
                          <input type="text" id="lvl" class="text" name="lvl" value="<?php echo $posts?>" readonly />
                      </div>
                      </div>


                  <div class="accordion" id="accordionAll">
                        <div><?php if(isset($_GET['email_changed'])) {
                            if($_GET['status']=="error") echo' <span style="color:red;" >'.$_GET["email_changed"].'</span>';
                            else echo' <span style="color:green;" >'.$_GET["email_changed"].'</span>';
                         } ?></div>
                        <?php
                          if($check){
                          echo'
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                              <button class="info_button btn btn-link" data-toggle="collapse"data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                <p>'.$lang["email address"].'</p>
                                '.$lang["email address text"].'
                              </button>
                            </h5>
                        </div>';}?>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionAll">
                            <div class="card-body">
                                <form action="email_address.php" method="POST">
                                <div class="form-group">
                                  <label for="curremail"><?php echo ''.$lang['current email'].''; ?></label>
                                  <input type="email" id="curremail" class="text" name="currentemail" value="<?php echo $email ?>" readonly />
                                  </div>
                                  <div class="form-group">
                                  <label for="newemail"><?php echo ''.$lang['new email'].''; ?></label>
                                  <input type="email" id="newemail" class="text" name="newemail" required />
                                  </div>
                                  <div class="form-group">
                                  <label for="confirmemail"><?php echo ''.$lang['confirm email'].':'; ?></label>
                                  <input type="email" id="confirmemail" class="text" name="confirmemail" required />
                                  </div>
                                  <div class="form-group">
                                  <label for="password"><?php echo ''.$lang['password'].':'; ?></label>
                                  <input type="password" id="password" class="text" name="password" required />
                                  </div>
                                  <input type="submit" class="button submit"/>
                                </form>
                            </div>
                        </div>

                         <div> <?php if(isset($_GET['pwd_changed'])) {
                             if($_GET['status']=="error") echo' <span style="color:red;" >'.$_GET["pwd_changed"].'</span>';
                             else echo' <span style="color:green;" >'.$_GET["pwd_changed"].'</span>';
                         } ?></div>
                        <?php
                        if($check){
                        echo'
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                              <button class="info_button btn btn-link" data-toggle="collapse"data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <p>'.$lang["password"].'</p>
                                '.$lang["password text"].'
                              </button>
                            </h5>
                        </div>';}?>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingThree" data-parent="#accordionAll">
                            <div class="card-body">
                                <form action="pwd_change.php" method="POST">
                                  <label for="mypassword"><?php echo ''.$lang['curr password'].':'; ?></label><br>
                                  <input type="password" class="text" id="mypassword" name="currentpassword" required /><br><br>
                                  <label for="newpassword"><?php echo ''.$lang['new password'].':'; ?></label><br>
                                  <input type="password" class="text" id="newpassword" name="newpassword" required /><br><br>
                                  <label for="confirmpassword"><?php echo ''.$lang['confirm password'].':'; ?></label><br>
                                  <input type="password" class="text" id="confirmpassword" name="confirmpassword" required /><br><br>
                                  <input class="button submit" type="submit" value="Submit">
                               </form>
                            </div>
                        </div>

                        <?php
                          if (session_status() === PHP_SESSION_NONE) {
                              session_start();
                          }
                          if(isset($_SESSION['level']) && $_SESSION['level']=="admin" && $check){
                           echo  '<hr></hr><h4 style="margin-top:20px;">'.$lang["admin privileges"].'</h3>
                           <h3><a href="All_Users.php">'. $lang["inspect users"].' </a></h3>
                          <p>'.$lang["inspect users text"].'</p>
                          <h3><a href="See_mail.php">'.$lang["mail users"].'</a></h3>
                          <p> '.$lang["mail users desc"].' </p>';}
                          ?>
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

<!--Script for profile image preview on upload-->
<script type="text/javascript">
    function previewImage(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#image').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
            document.getElementById("submit").disabled=false;
            document.getElementById("submit").style.background='#37B482';
            document.getElementById("submit").style.color='white';
        }
    }
</script>

</html>