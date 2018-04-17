
<?php

require "vendor/autoload.php";
require_once('vendor/linecorp/line-bot-sdk/line-bot-sdk-tiny/LINEBotTiny.php');

$access_token = 'FZldEem8ostD63IqQ5NQ0mZnYHK/NSzQutlkVIFLa9rRzFYQ3SXMvnzr6gM/rrBPK4wdLlSgA8Ba7vOJMajRtzAYouW9l8rQ3xlQeiDlBS48fUbw41nCul84q4NKVpQ53r/5mF4CUx1CNQfS3+iBbwdB04t89/1O/w1cDnyilFU=';
$channelSecret = 'e5d464aa428fdb58ede0e1a877108551';
$pushID = 'C60d524f3fbe6ca9df96e1788e4f4916d';








$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, new VideoMessageBuilder('https://www.quirksmode.org/html5/videos/big_buck_bunny.mp4', 'https://thumb.ibb.co/isTQZ7/prev.jpg'));
echo $response->getHTTPStatus() . ' ' . $response->getRawBody();




  
?>
