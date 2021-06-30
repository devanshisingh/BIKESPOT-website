<?php

session_start();

$otp = $_REQUEST["otp"];

// Check if OTP is successful
if($otp == $_SESSION["email_verification_otp"])
{

    $_SESSION["user_email_verified"] = true;
    $email = $_SESSION["user_email"];

    // If there is a record in the DB then we will update the record otherwise insert it

    include("connect.php");
    $sql = "SELECT * FROM verified_users WHERE email = '$email'";
    $result = $connection->query($sql);

    // Check if record exists in the table
    if ($result->num_rows > 0)
    {
        // Record exists. Update the record.
        $sql_update = "UPDATE verified_users SET email_verified=1 WHERE email = '$email'";
        $tmp = $connection->query($sql_update);
    } 

    else
    {
        // No record found. Insert new record in verified_users.
        $user_id = $_SESSION['user_id'];
        $fname = $_SESSION['user_first_name'];
        $lname = $_SESSION['user_last_name'];
        $email = $_SESSION['user_email'];
        $phone = $_SESSION['user_phone'];
        $sql_insert = "INSERT INTO verified_users (user_id, firstname, lastname, email, mobile, email_verified) VALUES ('$user_id', '$fname', '$lname', '$email', '$phone', '1')";        
        $tmp = $connection->query($sql_insert);
    }
      
    // OTP successful so return true to the JS Function
    $connection -> close();
    echo "true";
}

else 
{
    echo "false";
}

?>