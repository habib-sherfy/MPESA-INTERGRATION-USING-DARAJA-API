<?php

// For you to access any api you need to have an access token first.
// So this is the first step to take and consider.


$consumer_key= 'MF2gqv72iqwfqRWQepM3RGyo18RDevSCNtCeIHVAfwflWVt2' ;
$consumer_secret= '3X6udbqG1fMhMpIAUDsvsGJ7d795DwLbpkf8IOYqCFcAAcEjiDinjQoPhAXPhBgH' ;

// This url is for mpesa endpoint 

$access_token_url = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';

// header for stk push
$headers = ['Content-Type:application/json; charset=utf8'];


$curl = curl_init($access_token_url);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($curl, CURLOPT_HEADER, FALSE);
curl_setopt($curl, CURLOPT_USERPWD, $consumer_key . ':' . $consumer_secret);
$result = curl_exec($curl);
$status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
$result = json_decode($result);
echo $access_token = $result->access_token;
curl_close($curl);