<?php
    require_once "config.php";
    session_start();
    $topic = mysqli_real_escape_string($conn, $_POST["title"]);
    $text = mysqli_real_escape_string($conn, $_POST["content"]);
    $author = $_SESSION['id'];

    $sql = "INSERT INTO posts (user_id, post_topic, post_context, post_date, last_update)
        VALUES ('$author','$topic', '$text', NOW(), NOW())";

    if (mysqli_query($conn, $sql)) {
         echo "New topic created successfully";
         $sql="UPDATE user SET forumPosts=forumPosts+1 WHERE id='".$_SESSION['id']."'";
         mysqli_query($conn, $sql);
         header("Location: forum.php");
    } 
    else {
     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>