<?php

session_start();


    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    require 'vendor/autoload.php';

    $email = $_SESSION["user_email"];

    $mail = new PHPMailer; 
    
    $mail->isSMTP();                      // Set mailer to use SMTP 
    $mail->Host = 'smtp.gmail.com';       // Specify main and backup SMTP servers 
    $mail->SMTPAuth = true;               // Enable SMTP authentication 
    $mail->Username = 'forrphotos2020@gmail.com';   // SMTP username 
    $mail->Password = 'i6miuh48';   // SMTP password 
    $mail->SMTPSecure = 'tls';            // Enable TLS encryption, `ssl` also accepted 
    $mail->Port = 587;                    // TCP port to connect to 
    
    // Sender info 
    $mail->setFrom('forrphotos2020@gmail.com', 'BIKESPOT'); 
    
    // Add a recipient 
    $mail->addAddress($email); 
    
    // Set email format to HTML 
    $mail->isHTML(true); 
    
    // Mail subject 
    $mail->Subject = 'One Time Password for Email Verification';
    $otp = rand(100000,999999); 
    $_SESSION["email_verification_otp"] = $otp;    
    
    // Mail body content 
    $bodyContent = '<h1>One Time Password for Email Verification</h1>'; 
    $bodyContent .= '<p>Dear customer, Your OTP for Email Verification is <b>'.$otp.'</b>. </p>'; 
    $mail->Body    = $bodyContent; 
    
    // Send email 
    if(!$mail->send()) { 
        echo '<script>alert("OTP could not be sent. Mailer Error: '.$mail->ErrorInfo.'");</script>'; 
    } else { 
        echo $_SESSION["email_verification_otp"];
    } 
 
?>