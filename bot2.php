
<?php

require "vendor/autoload.php";
require_once('vendor/linecorp/line-bot-sdk/line-bot-sdk-tiny/LINEBotTiny.php');
use LINEBotTiny;


$access_token = 'FZldEem8ostD63IqQ5NQ0mZnYHK/NSzQutlkVIFLa9rRzFYQ3SXMvnzr6gM/rrBPK4wdLlSgA8Ba7vOJMajRtzAYouW9l8rQ3xlQeiDlBS48fUbw41nCul84q4NKVpQ53r/5mF4CUx1CNQfS3+iBbwdB04t89/1O/w1cDnyilFU=';

$bot = new LINEBotTiny();

$stat = $bot->profil('U669d211bf92aca29db6e6fc4dafab857')

echo $stat;
  
  
?>
