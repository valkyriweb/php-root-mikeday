<?php
require_once('model/Quote.php');

$myQuote = new Quote("iPhone 5");
$thisQuote = $myQuote->getJSON();
echo "<pre>";
print_r($thisQuote);
echo "</pre>";

$curl = curl_init();
$curl = $myQuote->createRequest($curl);
$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    echo $response;
}