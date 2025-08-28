

<!Doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>Forum - Health Journal </title>
		<link rel="icon" href="images/logo.png">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="home.css"/>
        <link rel="stylesheet" href="navigation.css"/>
        <link rel="stylesheet" href="forum.css">
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
    <?php if(isset($_SESSION['id'])){
        echo ' <div id="new_topic">
            <button id="myBtn" class="float" ><i class="fa fa-plus"></i></button>
            <div class="label-container">
                <div class="label-text">'.$lang["new topic"].'</div>
                <i class="fa label-arrow"></i>
            </div>
        </div>';
        }
        else{
            echo '<div id="new_topic">
            <button id="myBtn" class="float" disabled ><i class="fa fa-plus"></i></button>
            <div class="label-container">
                <div class="label-text">'.$lang["must be logged"].'</div>
                <i class="fa label-arrow"></i>
            </div>
        </div>';
        }
        ?>
	
<div id="myModal" class="modal">

  <div class="modal-content">
    <div class="modal-header">
	  <h2><?php echo $lang["new topic"]; ?></h2>
      <span class="close close-black">&times;</span>
    </div>
    <div class="form">
      <form action="create_topic.php" method="POST">
        <div class="form-group"> 
            <label for="title"><?php echo $lang["topic title"]; ?></label>
            <input type="text" class="text" name="title" value="" placeholder="<?php echo $lang['summary']; ?>" required />
        </div>
        <div class="form-group">
            <label id="text-area" for="content"><?php echo $lang["thoughts"]; ?></label>
            <textarea type="text" cols="100" rows="10" id="content" class="content" name="content" placeholder="<?php echo $lang['analyse']; ?>" required autofocus  ></textarea>
        </div>
        <div class="form-group">
            <input type="submit" class="btnSubmit" value="<?php echo $lang['create t']; ?>" />
        </div>
      </form>
    </div>
    <div class="modal-footer">
      <h3></h3>
    </div>
  </div>

</div>

<script>

var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
        <div id="main">
            <div class="container-fluid" id="title">
                <h1><?php echo $lang['welcome']; ?></h1>
                <span><?php echo $lang['feel free']; ?></span>
            </div>


            <?php
                //Check in which order the posts will be displayed
                if(isset($_GET['order']) && $_GET['order']!='post_id'){
                    $order = $_GET['order'];
                    if($order=='last_update')
                        $sort = $lang["updated"];
                    else
                        $sort = $lang["replies"];
                }
                else{
                    $order = 'post_id';
                    $sort = $lang["newest"];
                }   //Dropdown to sort the posts
                    echo'<div class="col-md-12">
                    <div class="row" style="display:flex; justify-content:center; text-align:center; margin-bottom:50px;">
                                <span id="sort_text">'.$lang["sort"].'</span>
                                <div class="dropdown" style="margin-right:10px;">
                                    <button id="sort" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">'.$sort.'<span class="caret"></span></button>
                                    <ul class="dropdown-menu dropdown-menu-right sort_drop">
                                           <li><a href="?order=post_id"><button id="1" class="sort_btn">'.$lang["newest"].'</button></a></li>
                                           <li><a href="?order=last_update"><button id="2" class="sort_btn">'.$lang["updated"].'</button></a></li>
                                           <li><a href="?order=post_replies"><button id="3" class="sort_btn">'.$lang["replies"].'</button></a></li>
                                    </ul>
                                </div>
                            </div>';


                            // PHP to display all the topics created!!!
                                require_once ("config.php");
                                $sql = "SELECT * FROM posts INNER JOIN user ON posts.user_id= user.id ORDER BY $order DESC";
                                $result = mysqli_query($conn,$sql);
                                $sql2 = "SELECT username,id,profileImage,post_id,last_update,post_replies FROM user,posts WHERE posts.user_id = user.id ORDER BY $order DESC";
                                $result2 = mysqli_query($conn,$sql2);
								
                                if (mysqli_num_rows($result) > 0) {
                                // output data of each row
                                while($row = mysqli_fetch_assoc($result)) {
                                    $row2 = mysqli_fetch_assoc($result2);
									$replyNum = $row['post_replies'];
                                    $author = $row2['username'];
                                    $title = $row['post_topic'];
                                    $text = $row['post_context'];
									$id=$row['post_id'];
									$userid=$row2['id'];
									$profile = $row2;
                                    include ('profile_image.php');
                                    echo '<div class="row">
                                    <div class="col-md-1">
                                    </div>
                                    <div  class="col-md-10">
                                        <div class="card">
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <div class="row author">
                                                        <div style="text-align:center; margin-left:40px;">
                                                            <a href="account.php?id='.$userid.'" class="username">
                                                                <img src="'.$image.'"></img>
                                                                <span>'.$author.'</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <hr></hr>
                                                    <div class="row post_title">
                                                        <div class="col-md-12"><i class="fa fa-angle-double-right"></i><a href="forum_post.php?id='.$id.'"> '.$title.'</a></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3" style="display:inline-block; position: relative;">

                                                        <div id="replies">
                                                            <span class="fa-stack fa-2x" >
                                                                <i class="fa fa-comment-o fa-stack-1x" style="font-size:50px;"><span style="color:grey;" class="fa-stack-1x fa-stack-text fa-inverse">'.$replyNum.'</span></i>
                                                             </span>
                                                        </div>
                                                        <div id="date">
                                                            <div class="row date_elmnt" style="margin:5px;"><i class="fa fa-calendar" style="font-size:24px; margin-right:10px;"></i>'.$lang["last update"].'</div>
                                                            <div class="row date_elmnt">'.$row['last_update'].'</div>
                                                        </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>';
                                }
                                } else {
                                    $newtopic = "No topics have been created yet!";
                                }

                            ?>

                    </div>
        <?php
		include ("footer.php");
		?>
    
    </body>
    <script src="script.js"></script>
</html>
