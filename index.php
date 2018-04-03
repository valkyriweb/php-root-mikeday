<?php

require_once('model/Quote.php');

$myQuote = new Quote("iPhone 5");
$thisQuote = $myQuote->getJSON();
echo "<pre>";
print_r($thisQuote);
echo "</pre>";

git add README.md
 echo "Yeah";










/* 
file_put_contents('log.txt', "Start");
/* $fp = fopen('log2.txt', '23123123123'); */
/* file_put_contents('log2.json', file_get_contents('php://input')); */
/* file_put_contents('log2.txt', $_POST); */

/* 
 if($json = json_decode($_POST, true)) {

     print_r($json);

     $data = $json;

 } else {

     print_r($_POST);

     $data = $_POST;

 }

 file_put_contents('log.txt', "After JSON connect");

 echo "Saving data ...\n";

 $url = "http://localhost:8081";

 $meta = ["received" => time(),

     "status" => "new",

     "agent" => $_SERVER['HTTP_USER_AGENT']];

 $options = ["http" => [

     "method" => "POST",

     "header" => ["Content-Type: application/json"],

     "content" => json_encode(["data" => $data, "meta" => $meta])]

     ];
file_put_contents('log.txt', "creating post");

 $context = stream_context_create($options);

 $response = file_get_contents($url, false, $context);

 file_put_contents('log.txt', $response); */