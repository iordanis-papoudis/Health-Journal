<?php      
    include('config.php');
    if(count($_POST)>0){  
    // Takes values from form
    $username = $_POST["username"];
    $password = $_POST["pwd"];

    //to prevent from mysqli injection
    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);
    $sql = "SELECT * FROM user WHERE userName = '$username' ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if($count == 1){// Checks if user password matches and log him in
        $hash = $row['password'];
        if (password_verify($password,$hash)){ // Checks if hashed password matches password given
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['id']=$row['id'];
            $_SESSION['level'] = $row['level'];
            header("Location: home.php");
        }
        else{
            $res = "Login failed. Invalid username or password.";
        }
    }
    else{ 
            $res = "Login failed. Invalid username or password.";
    
        }
    }
?>  