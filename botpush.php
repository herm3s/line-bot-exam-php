<?php



require "vendor/autoload.php";

$access_token = 'FZldEem8ostD63IqQ5NQ0mZnYHK/NSzQutlkVIFLa9rRzFYQ3SXMvnzr6gM/rrBPK4wdLlSgA8Ba7vOJMajRtzAYouW9l8rQ3xlQeiDlBS48fUbw41nCul84q4NKVpQ53r/5mF4CUx1CNQfS3+iBbwdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'e5d464aa428fdb58ede0e1a877108551';

$pushID = 'C60d524f3fbe6ca9df96e1788e4f4916d';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);


฿text_send = $_POST['name'];

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder(฿text_send);
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







