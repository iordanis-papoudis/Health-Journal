<?php
		    //Find the post topic in the database
		    require_once ("config.php");
			if($_GET["id"]){
				$query = mysqli_query($conn,"SELECT post_topic FROM posts WHERE post_id = '".$_GET['id']."'");
				$result = mysqli_fetch_assoc($query);}?>

<!Doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title><?php echo $result["post_topic"]?> - Health Journal </title>
		<link rel="icon" href="images/logo.png">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="forum_template.css"/>
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
	
	

		<?php
		    //Find the post topic in the database
		    require_once ("config.php");
			if($_GET["id"]){
				$query = mysqli_query($conn,"SELECT post_topic FROM posts WHERE post_id = '".$_GET['id']."'");
				$result = mysqli_fetch_assoc($query);

				echo'<div class="container-fluid">
					<div class="row">
						<div id="topic">
						    <span class="heading" style="font-size:30px;">Topic: '.nl2br($result["post_topic"]).'</span>
						</div>
					</div>
				</div>

				<hr></hr>';

				//Get the user's post data with their username

				$check = mysqli_query($conn,"SELECT * FROM posts WHERE post_id = '".$_GET['id']."'");

				if(mysqli_num_rows($check)>0){

					while($row = mysqli_fetch_assoc($check)){
					    $sql = mysqli_query($conn,"SELECT id,username,post_date,profileImage FROM user INNER JOIN posts WHERE user_id = user.id AND post_id ='".$_GET['id']."'");
					    $row2 = mysqli_fetch_assoc($sql);
					    $profile = $row2;
					    include ('profile_image.php');
					    $author = $row2["username"];
                        $userid = $row2['id'];
					    //Get the date the post was made
					    $sql = mysqli_query($conn,"SELECT post_date FROM posts WHERE post_context = '".$row['post_context']."'");
					    $row3= mysqli_fetch_assoc($sql);
					    $date = $row3["post_date"];
						echo'<div class="post">
						    <div style="margin-top:10px; margin-left:10px; top:0; position:absolute; display:inline-block;">
                                <a class="username" href="account.php?id='.$userid.'">
                                    <img src="'.$image.'"></img>
                                    <span style="margin: 10px 0px 10px;">'.$author.'</span>
                                </a>
                                <span class="date" style="margin-left:5px;">- '.$date.'</span>
                            </div>

                            <hr></hr>
                            <div class="row">
                                 <span type="text" id="context" readonly>'.nl2br($row["post_context"]).'</span>
                            </div>

						</div>';
					}

				}

                //Get the number of replies on the post
				$replies = mysqli_query($conn,"SELECT * FROM replies WHERE post_id = '".$_GET['id']."'");

				echo'<br></br>
				    <div class="reply_box">
					<h3 class="heading">'.$lang["replies"].'('.mysqli_num_rows($replies).')</h3>
					<hr></hr>';


				if(mysqli_num_rows($replies)>0){

                    //Get the posted replies along with the usernames, images, dates
					while($row = mysqli_fetch_assoc($replies)){
                        $sql = mysqli_query($conn,"SELECT id,username,profileImage,reply_date FROM user INNER JOIN replies WHERE user_id = user.id AND post_id = '".$_GET['id']."' AND reply_date='".$row['reply_date']."'");
                        $row2 = mysqli_fetch_assoc($sql);
                        $author = $row2["username"];
                        $userid = $row2['id'];
                        $date = $row2["reply_date"];
                        $profile = $row2;
                        include ('profile_image.php');
                        echo'<div class="reply">
                            <div style="margin-top:10px; margin-left:10px; top:0; position:absolute; display:inline-block;">
                                <a class="username" href="account.php?id='.$userid.'">
                                    <img src="'.$image.'"></img>
                                    <span style="margin: 10px 0px 10px;">'.$author.'</span>
                                </a>
                                <span class="date" style="margin-left:5px;">- '.$date.'</span>
                            </div>

                            <hr></hr>
                            <div class="row">
                                <span type="text" id="context" readonly>'.nl2br($row["reply_text"]).'</span>
                            </div>

                        </div>';

                    }

				}
				echo '</div>';
			}
		?>

	    <hr></hr>
	    <br></br>



        <div class="container-fluid" >
            <div class="row" id="comment-area">
                <div class="col-md-1 my-auto">
                    <?php
                    //Input to write a reply if the user is logged in, if not the input is disabled

                    //If user is logged in find their profile image
                    if(isset($_SESSION['id'])){
                        $result=mysqli_query($conn, "SELECT profileImage,id FROM user WHERE id='".$_SESSION['id']."'");
                        $row=mysqli_fetch_assoc($result);
                        $profile = $row;
                        include ('profile_image.php');
                    }
                    else
                        $image="uploads/profiledefault.jpg";
                        echo '<img src="'.$image.'"></img>';
                    ?>

                </div>
                <div class="col-md-11">
                    <form class="row" action="post_reply.php?id=<?php echo $_GET['id'];?>" method="POST">

						<!-- Locks comment section if user is not signed in -->
						<?php if(isset($_SESSION['id'])){
                            echo '<div class="col-md-10">
                            <textarea id="comment" name="reply" type="text" placeholder="'.$lang["comment"].'" required></textarea>
						</div>
							<div class="col-md-2 my-auto">
								<input class="button" type="submit" value="'.$lang["submit"].'" id="btn" ></button>
							</div>';
						}
						else{
							echo '<div class="col-md-10">
							    <textarea id="comment" name="reply" type="text" placeholder="'.$lang["must be logged"].'" readonly></textarea>
							</div>
							<div class="col-md-2 my-auto">
								<input class="button" type="submit" value="'.$lang["submit"].'" id="btn" disabled></button>
							</div>';
						}
						?>
                    </form>
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
