<?php



require "vendor/autoload.php";

$access_token = 'mkw68nWQSj/b7+M5d1Ay6OobN4426/AZ8HoILU0G9uc8U98xWY/+ZF55Ju4uycaR1uyhKnlVFp8SZp0NEy0vYb8sgUuxiFsQHgprAGzhshkpPS2FRSsjHRLQuNuiKJ522ChPflKTlJ7JmPNE0lTkcQdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'f2acf5a43dbbc9a7447f21a81dce189e';

$pushID = '';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







