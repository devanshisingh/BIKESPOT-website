<?php

session_start();

$data = array(  "email_verified"=>$_SESSION["user_email_verified"], 
                "phone_verified"=>$_SESSION["user_phone_verified"]
            );

echo json_encode($data);

?>