<?php
    session_start();
    include("connect.php");

    $email = $_POST["email"];

    $sql = "SELECT firstname FROM User_login WHERE email = '$email'";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) 
    {
        $_SESSION['register_error'] = true;
    } 
    else 
    {
        $fname = ucfirst($_POST["fname"]);
        $lname = ucfirst($_POST["lname"]);
        $phone = $_POST["phone"];
        $pwd = md5($_POST["password"]);
        if (!$connection -> query("INSERT INTO User_login(firstname, lastname, email, phone, password) VALUES ('$fname', '$lname', '$email', '$phone', '$pwd')")) {
            echo("Error description: " . $connection -> error);
        }
        
        $connection -> close();
        
        $_SESSION['user_first_name'] = $fname;
        $_SESSION['user_last_name'] = $lname;
        $_SESSION['user_email'] = $email;
        $_SESSION['user_phone'] = $phone;
        $_SESSION['user_id'] = $row["user_id"];
        $_SESSION['logged_in'] = true;
    }

    header('location: ../home.php');

?>

