<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    require 'vendor/autoload.php';

    include("connect.php");

    $name = $_POST["name"];
    $email = $_POST["email"];
    $msg = $_POST["msg"];

    $stmt = $connection -> prepare ("insert into feedback(Name, Email, Message) values(?,?,?)");
    $stmt -> bind_param("sss", $name, $email, $msg);
    $stmt -> execute();
    $stmt -> close();
    $connection -> close();


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
    
    //$mail->addCC('cc@example.com'); 
    //$mail->addBCC('bcc@example.com'); 
    
    // Set email format to HTML 
    $mail->isHTML(true); 
    
    // Mail subject 
    $mail->Subject = 'Thank You for your Feedback!'; 
    
    // Mail body content 
    $bodyContent = '<h3>Message sent to BIKESPOT</h3>'; 
    $bodyContent .= '<p>Your message has been added to our database. We will see your message and reply to you shortly.</p>'; 
    $bodyContent .= '<p style="bottom:0">For any further queries / assistance, call us at 0123456789 or email us at xyz@gmail.com</p>'; 
    $mail->Body    = $bodyContent; 
    
    // Send email 
    if(!$mail->send()) { 
        echo '<script>alert("Message could not be sent. Mailer Error: '.$mail->ErrorInfo.'");</script>';
    } else { 
        echo '<script>alert("Thank You for your feedback");</script>';
    } 

    header('location: ../home.php');
 
?>