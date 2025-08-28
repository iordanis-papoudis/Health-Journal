<?php
    require_once "config.php";
if(count($_POST)>0){ 
    $count = 0;
    // Reads data with safety from mysqli injection
    $firstName = mysqli_real_escape_string($conn, $_POST['fname']);
    $lastName = mysqli_real_escape_string($conn, $_POST['lname']);
    $userName = mysqli_real_escape_string($conn, $_POST['usr']);
    $email = mysqli_real_escape_string($conn, $_POST['e-mail']);
    $password = mysqli_real_escape_string($conn, $_POST['pwd']);
    $confirmPassword = mysqli_real_escape_string($conn, $_POST['conpwd']);
    if (empty($firstName)) { $error1 =  "First Name is required"; $count++; }
    if (empty($lastName)) {$error2 =  "Last Name is required"; $count++; }
    if (empty($userName)) { $error3 =  "Username is required"; $count++; }
    if (empty($email)) { $error4 =  "E-mail Name is required";  $count++;}
    if (empty($password)) { $error5 =  "Password Name is required"; $count++; }


    if ($password != $confirmPassword) {
        $error6 =  "Passwords doesn't match";
        $count++;
    }
    if(strlen($password)<6)
    {
      $error6 = "Password must have a size of 6 or more!";
      $count++;
    }

  $user_check_query = "SELECT * FROM user WHERE userName='$userName' OR email='$email' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['userName'] === $userName) {
      $error3 =  "Username already exists!";
      $count++;
    }

    if ($user['email'] === $email) { // If email already exists
      $error4 =  "E-mail already exists!";
      $count++;
    }
  }
  if(isset($_POST['check'])){
    $lvl = 'admin';
  }
  else{
    $lvl = 'user';
  }
  // If no errors occured
  if ($count == 0) {
    $pwd = password_hash($password,PASSWORD_DEFAULT); // Password Encryption with hashing
    $sql = "INSERT INTO user (firstName, lastName,userName,email,password,level)
        VALUES ('$firstName','$lastName', '$userName', '$email','$pwd','$lvl')";

    if ($row = mysqli_query($conn, $sql)) {
      if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
      if(isset($_SESSION['loggedin'])){
          header("Location: All_Users.php");
      }
      else{
        $last_id = mysqli_insert_id($conn);
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $userName;
        $_SESSION['id']=$last_id;
        $_SESSION['level'] = $lvl;
         header("Location: home.php");
      } 
    }
    else{
      echo "error in db";
    } 
  }
  else{
    if(isset($_SESSION['loggedin'])){
      header("Location: All_Users.php");
      }
  }
}
?>