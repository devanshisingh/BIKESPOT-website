<?php
    session_start();
    include("connect.php");

    $email = $_POST["email"];
    $pwd = md5($_POST["password"]);

    $sql = "SELECT * FROM User_login WHERE email = '$email' and password = '$pwd'";
    $result = $connection->query($sql);

    if ($result->num_rows > 0)
    {
        $row = $result->fetch_assoc();
        $_SESSION['user_id'] = $row["user_id"];
        $_SESSION['user_first_name'] = $row["firstname"];
        $_SESSION['user_last_name'] = $row["lastname"];
        $_SESSION['user_email'] = $row["email"];
        $_SESSION['user_phone'] = $row["phone"];
        $_SESSION['logged_in'] = true;
        echo $_SESSION['user_first_name'].$_SESSION['user_last_name'].$_SESSION['user_email'];

    } 
    else {
        $_SESSION['login_error'] = "Incorrect Email-ID or Password";
    }
      
    $connection -> close();
    header('location: ../home.php');
?>