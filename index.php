<?php

require_once('model/Quote.php');

$myQuote = new Quote("iPhone 5");
$thisQuote = $myQuote->getJSON();
echo "<pre>";
print_r($thisQuote);
echo "</pre>";

$response = $myQuote->createRequest();

try {
    $response = $request->send();
    echo $response->getBody();
} catch (HttpException $ex) {
    echo $ex;
}