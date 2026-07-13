<?php
// proxy.php
header("Access-Control-Allow-Origin: *"); 
header("Content-Type: application/json");

$url = $_GET['url']; // A URL da API que o seu site vai chamar
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

echo $response;
?>
