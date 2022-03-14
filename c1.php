<?php 

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://localhost/curl/curl.php');
curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'POST' );
curl_setopt( $ch, CURLOPT_POSTFIELDS, 'secret=noodles' );
curl_exec($ch);
