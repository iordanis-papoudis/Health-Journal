<?php include("config.php")?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<title>Search for "<?php echo $_GET['search'];?>" - Health Journal </title>
		<link rel="icon" href="images/logo.png">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="navigation.css">
		<link rel="stylesheet" href="search.css">
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
			    if($_GET['search']=="" || ctype_space($_GET['search']) || ctype_punct($_GET['search']))
			        header('Location: ' . $_SERVER['HTTP_REFERER']);
				elseif(isset($_GET['submit_search'])){
					$search = mysqli_real_escape_string($conn, $_GET['search']);
					$flag=false;

					//search in content section
					if($_SESSION['lang'] == "en")
					    $sql = "SELECT * FROM pages WHERE description_en LIKE '%$search%' OR keywords_en LIKE '%$search%'";
					elseif($_SESSION['lang'] == "gr")
		                $sql = "SELECT * FROM pages WHERE description_gr LIKE '%$search%' OR keywords_gr LIKE '%$search%'";
					$result = mysqli_query($conn, $sql);

					if($result!=false && mysqli_num_rows($result)>0){
						$queryResult=mysqli_num_rows($result);
						echo "<p>".$lang['results a']." ".$queryResult." ".$lang['results b']." <span class='term'>".$_GET['search']."</span> ".$lang['results main']."</p><hr></hr>";
						
						while($row = mysqli_fetch_assoc($result)){
						    if($_SESSION['lang'] == "en"){
							echo "<div class='result''>
								<h3><a class='result_text' href='".$row['title'].".php'>".$lang[$row['title']]."</a></h3>
								<p>".$row['description_en']."</p>
							</div>";
							}
							elseif($_SESSION['lang'] == "gr"){
							    echo "<div class='result'>
                                <h3><a class='result_text' href='".$row['title'].".php'>".$lang[$row['title']]."</a></h3>
                                <p>".$row['description_gr']."</p>
                            </div>";
							}
						}
					}
					else{
						echo "<p>".$lang['no results']." <span class='term'>".$_GET['search']."</span> ".$lang['results main']."</p>";
					}

					//search for forum posts

                    $sql = "SELECT * FROM posts WHERE post_topic LIKE '%$search%' OR post_context LIKE '%$search%'";
                    $result = mysqli_query($conn, $sql);
                    $queryResult = mysqli_num_rows($result);

                    echo "<hr></hr>";

                    if($queryResult > 0){

                        echo "<p>".$lang['results a']." ".$queryResult." ".$lang['results b']." <span class='term'>".$_GET['search']."</span> ".$lang['results forum']."</p><hr></hr>";

                        while($row = mysqli_fetch_assoc($result)){
                            if(strlen($row['post_context'])>200){
                                $pos=strpos($row['post_context'], ' ', 200);
                                $content=substr($row['post_context'],0,$pos);
                                $content.="...";
                            }
                            else
                                $content=$row['post_context'];
                            echo "<div class='result'>
                                <h3><a class='result_text' href='forum_post.php?id=".$row['post_id'].".php'>".$row['post_topic']."</a></h3>
                                <p>".$content."</p>
                            </div>";
                        }
                    }
                    else{
                        echo "<p>".$lang['no results']." <span class='term'>".$_GET['search']."</span> ".$lang['results forum']."</p><hr></hr>";
                    }
				}
			?>
		</div>

		<?php
        include ("footer.php");
        ?>
    </body>

    <script src="script.js"></script>

</html>