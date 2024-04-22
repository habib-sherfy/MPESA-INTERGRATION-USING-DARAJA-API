<?php

$consumer_key= 'MF2gqv72iqwfqRWQepM3RGyo18RDevSCNtCeIHVAfwflWVt2' ;
$consumer_secret_key= '3X6udbqG1fMhMpIAUDsvsGJ7d795DwLbpkf8IOYqCFcAAcEjiDinjQoPhAXPhBgH' ;

$ch = curl_init('https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials');
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Authorization: Bearer cFJZcjZ6anEwaThMMXp6d1FETUxwWkIzeVBDa2hNc2M6UmYyMkJmWm9nMHFRR2xWOQ==']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($ch);
curl_close($ch);
echo $response;