<?php


$access_token = 'FZldEem8ostD63IqQ5NQ0mZnYHK/NSzQutlkVIFLa9rRzFYQ3SXMvnzr6gM/rrBPK4wdLlSgA8Ba7vOJMajRtzAYouW9l8rQ3xlQeiDlBS48fUbw41nCul84q4NKVpQ53r/5mF4CUx1CNQfS3+iBbwdB04t89/1O/w1cDnyilFU=';

$userId = 'U669d211bf92aca29db6e6fc4dafab857';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

