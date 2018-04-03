<?php
require_once('model/autoloader.php');
require_once('controller/autoloader.php');

$myQuote = new Quote("iPhone 5");

/*$curl = curl_init();
$curl = $myQuote->createRequest($curl);
$response = curl_exec($curl);
$err = curl_error($curl);

$info = curl_getinfo($curl);
print_r($info['request_header']);
    echo "<br>
";
    echo "<br>
";
    echo "<br>
";
curl_close($curl);*/

$policyGuy = new PolicyHolder("Carl", "Carlson", "carlcarlson@gmail.com", "Carlswork");
$policyCurl = curl_init();
$policyCurl = $policyGuy->createRequest($policyCurl);
$policyResponse = curl_exec($policyCurl);
$error = curl_error($policyCurl);
var_dump($policyCurl);
    
$info = curl_getinfo($policyCurl);
print_r($info['request_header']);

curl_close($policyCurl);

/*if ($err) {
    echo "cURL Error #:" . $err;
} else {
    echo $response;
}*/

echo "<br>
";
echo "<br>
";
echo "<br>
";

if ($error) {
    echo "cURL Error #:" . $error;
} else {
    echo $policyResponse;
}