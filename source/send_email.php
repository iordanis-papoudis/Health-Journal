<?php
    include "config.php";
if(count($_POST)>0){ 
    $count = 0;
    // Reads data with safety from mysqli injection
    $firstName = mysqli_real_escape_string($conn, $_POST['fname']);
    $lastName = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $subj = mysqli_real_escape_string($conn, $_POST['subject']);
    $msg = mysqli_real_escape_string($conn, $_POST['message']);
    if (empty($firstName)) { $error1 =  "First Name is required"; $count++; }
    if (empty($lastName)) {$error2 =  "Last Name is required"; $count++; }
    if (empty($email)) { $error9 =  "E-mail is required"; $count++; }
    if (empty($subj)) { $error3 =  "Subject is required"; $count++; }
    if (empty($msg)) { $error4 =  "Message Name is required";  $count++;}
  // If no errors occured
  if ($count == 0) {
    $sql = "INSERT INTO mail (firstName, lastName,email,subject,message,sendDate)
        VALUES ('$firstName','$lastName', '$email', '$subj','$msg',NOW())";

    if (mysqli_query($conn, $sql)) {
      $message = "Thank you for contacting us! We will reply to you soon.";
    }
    else{
      $message = "Error while trying to send message!";
    } 
  }
  else{
    $message = "Error while trying to send message!";
  }
}
?>