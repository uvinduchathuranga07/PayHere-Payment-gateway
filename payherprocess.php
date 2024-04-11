<?php 

$amount = 3000;
$merchant_id         = 1234;//paste your merchant id
$order_id            = uniqid();
$currency    = 'LKR';


$merchant_secret = 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx'; // Replace with your Merchant Secret

$hash = strtoupper(
    md5(
        $merchant_id . 
        $order_id . 
        number_format($amount, 2, '.', '') . 
        $currency .  
        strtoupper(md5($merchant_secret)) 
    ) 
);


$array = [];
$array["hash"] = $hash;
$array["amount"] = $amount;
$array["merchant_id"] = $merchant_id;
$array["order_id"] = $order_id;
$array["items"] = "wireles";
$array["currency"] = $currency;
$array["first_name"] = "Saman";
$array["last_name"] =  "Perera";
$array["email"] = "samanp@gmail.com";
$array["phone"] = "0771234567";
$array["address"] = "No.1, Galle Road";


$jsonObj = json_encode($array);

echo $jsonObj;


?>