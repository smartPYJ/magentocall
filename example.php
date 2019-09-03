<?php
//$request = "http://localhost/magento2/rest/V1/products?Limit=2";
$request = "https://topjoymultiglobal.com/magento2/rest/V1/products/24-MB01";
include_once 'rest.php';
$ch = curl_init($request);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json", "Authorization: Bearer " . json_decode($token)));

$result = curl_exec($ch);
var_dump($result);
