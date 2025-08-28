<?php include ("langconfig.php");?>

<?php
include("config.php");
$sql = "SELECT id,userName,email,level FROM user ORDER BY level";
$result2 = mysqli_query($conn,$sql);
include("registration.php");
// Retrieves data based on the username of the currently signed in user

?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<title> Health Journal </title>
		<link rel="icon" href="images/logo.png">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="navigation.css">
		<link rel="stylesheet" href="signin.css">
		<link rel ="stylesheet" href="All_Users.css">
    
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

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px; background-color:#5cb85c;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" method="POST">
          <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> <?php echo $lang['first name']; ?> </label>
              <input type="text" class="form-control" name="fname" placeholder= <?php echo $lang['first name']; ?>* >
            </div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> <?php echo $lang['last name']; ?> </label>
              <input type="text" class="form-control" name="lname" placeholder= <?php echo $lang['last name']; ?>* >
            </div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span>  <?php echo $lang['username']; ?> </label>
              <input type="text" class="form-control" name="usr" placeholder= <?php echo $lang['username']; ?>* >
            </div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> E-mail</label>
              <input type="text" class="form-control" name="e-mail" placeholder="E-mail*">
            </div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span>  <?php echo $lang['password']; ?> </label>
              <input type="password" class="form-control" name="pwd" placeholder= <?php echo $lang['password']; ?>* >
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span>  <?php echo $lang['confirm password']; ?> </label>
              <input type="password" class="form-control" name="conpwd" placeholder= <?php echo $lang['confirm password']; ?>* >
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" name="check"> <?php echo $lang['admin privileges']; ?> </label>
            </div>
              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> <?php echo $lang['create']; ?> </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>  <?php echo $lang['cancel']; ?> </button>
        </div>
      </div>
      
    </div>
  </div> 
</div>

<script>
$(document).ready(function(){
  $("#myBtn").click(function(){
    $("#myModal").modal();
  });
});
</script>
            <!-- Container to hold user data table and php code -->
		<div id="main">
            <div class="container login-container">
            <h2 class="heading"> <?php echo $lang['users']; ?> </h2>
            <?php
            if (mysqli_num_rows($result2) > 0) {
                $num = 1;
                // output data of each row in a form
                echo '<table class="table-responsive table-striped table-dark" id = "users">';
                echo '<thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Users</th>
                            <th scope="col">E-mail Address</th>
                            <th scope="col">Access Level</th>
                            <th scope="col" colspan="2">Actions</th>
                        </tr>
                      </thead>
                      <tbody>';
                while($row = mysqli_fetch_assoc($result2)) {
                    echo '<tr>
                            <th scope="row">' .$num++.'</th>
                            <td scope="row">' .$row['userName'].'</td>
                            <td scope="row">' .$row['email'].'</td>
                            <td scope="row">' .$row['level'].'</td>
                            <td><a onclick="confirmation()" href="makeAdmin.php?id='.$row['id'].'">Make Admin</a></td>
    <td><a onclick="myFunction()" href="delete.php?id='.$row['id'].'">Delete</a></td>
                            </tr>';
                    }
                    echo '</tbody>
                    </table>';
                }
            ?>
            <button type="button" class="btn btn-default btn-lg" style="color:green;" id="myBtn"> <?php echo $lang['create new user']; ?>...</button>
            <!-- Script to appear confirmation box -->
            <script>
                function myFunction(event) {
                var txt;
                var r = confirm("Are you sure you want to delete this user?");
                if (r == true) {
                    txt = "You pressed OK!";

                } else {
                    txt = "You pressed Cancel!";
                    this.event.preventDefault();
                }
                document.getElementById("demo").innerHTML = txt;
                }
            </script>
            <!-- Script that appears confirmation box about making a user administrator -->
            <script>
                function confirmation(event) {
                var txt;
                var r = confirm("Are you sure you want to give this user administrator privileges?");
                if (r == true) {
                    txt = "You pressed OK!";

                } else {
                    txt = "You pressed Cancel!";
                    this.event.preventDefault();
                }
                document.getElementById("demo").innerHTML = txt;
                }
            </script>
            </div>
        </div>
	<?php
	include ("footer.php");
	?>
</body>
<script src="script.js"></script>
</html>