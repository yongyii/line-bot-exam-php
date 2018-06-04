<?php



require "vendor/autoload.php";

$access_token = 'd6BNLniI9CyAQP0BTZCX2GCtP3lqxMvKKV7sU1lYx1Ed8Z34/AXlnTxKJc0xNSjphpKilolRBrv0i8qrBmtWVVAI1hB6g81g4SKDFjmla8Kx/8Tljw6cPhXsG9Bo+NBnGr75pT/87TLMgq5rJA4O1AdB04t89/1O/w1cDnyilFU=
';

$channelSecret = 'b13a73ff7a57390391c2482922fe056d';

$pushID = 'U29f06c88d566795f139d51c8c33798ee';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







