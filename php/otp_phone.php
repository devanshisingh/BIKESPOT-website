<?php

session_start();

$otp = rand(100000, 999999);
$_SESSION["phone_verification_otp"] = $otp;
echo $otp;

// $num = $_SESSION["user_phone"];

// $curl = curl_init();

// curl_setopt_array($curl, array(
//   CURLOPT_URL => "http://2factor.in/API/V1/42ccfdc0-d6b4-11eb-8089-0200cd936042/SMS/".$num."/".$otp."",
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_ENCODING => "",
//   CURLOPT_MAXREDIRS => 10,
//   CURLOPT_TIMEOUT => 30,
//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST => "GET",
//   CURLOPT_POSTFIELDS => "",
//   CURLOPT_HTTPHEADER => array(
//     "content-type: application/x-www-form-urlencoded"
//   ),
// ));

// $response = curl_exec($curl);
// $err = curl_error($curl);

// curl_close($curl);

// if ($err) {
//   echo '<script>alert("OTP could not be sent. cURL Error #: '.$err.'");</script>'; 
// } else {
//   echo $otp;
// }

?>