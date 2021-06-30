<?php

    session_start();

    $email = $_SESSION["user_email"];

    include("connect.php");
    $sql = "SELECT * FROM verified_users WHERE email = '$email'";
    $result = $connection->query($sql);

    if ($result->num_rows > 0)
    {
        $row = $result->fetch_assoc();
        $_SESSION["user_email_verified"] = $row["email_verified"];
        $_SESSION["user_phone_verified"] = $row["phone_verified"];
    } 

    else
    {
        $_SESSION["user_email_verified"] = false;
        $_SESSION["user_phone_verified"] = false;
    }
      
    $connection -> close();

$data = array("fname"=>$_SESSION["user_first_name"], "lname"=>$_SESSION["user_last_name"], 
                "email"=>$email, "phone"=>$_SESSION["user_phone"], 
                "email_verified"=>$_SESSION["user_email_verified"], 
                "phone_verified"=>$_SESSION["user_phone_verified"]
            );

echo json_encode($data);

?>