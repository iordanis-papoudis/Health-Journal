<?php
    require_once "config.php";
    session_start();
    $post = $_GET['id'];
    $text = mysqli_real_escape_string($conn, $_POST['reply']);
    $author = $_SESSION['id'];
    //date_default_timezone_set('Europe/Athens');
    //$date = date('m/d/Y h:i:s a', time());

    $sql = "INSERT INTO replies (post_id, user_id, reply_text, reply_date)
        VALUES ('$post', '$author', '$text', NOW())";

    if (mysqli_query($conn, $sql)) {
         echo "Reply posted successfuly.";
         mysqli_query($conn,"UPDATE posts SET last_update=NOW(), post_replies=post_replies+1 WHERE post_id='$post'");
         header("Location: forum_post.php?id=".$post);
    } 
    else {
     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }


    mysqli_close($conn);
?>