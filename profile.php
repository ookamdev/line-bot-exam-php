<?php


$access_token = 'mkw68nWQSj/b7+M5d1Ay6OobN4426/AZ8HoILU0G9uc8U98xWY/+ZF55Ju4uycaR1uyhKnlVFp8SZp0NEy0vYb8sgUuxiFsQHgprAGzhshkpPS2FRSsjHRLQuNuiKJ522ChPflKTlJ7JmPNE0lTkcQdB04t89/1O/w1cDnyilFU=';

$userId = 'Ua1daa27a08dc5e578eabf1d5818a7880';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

