
<?php

include_once '\vendor\linecorp\line-bot-sdk\tests\LINEBot\SendVideoTest.php';

use SendVideoTest;

$send1 = new SendVideoTest();
$send1->testPushVideo();

echo $send1;

?>
