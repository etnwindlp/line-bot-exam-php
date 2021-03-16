<?php



require "vendor/autoload.php";

$access_token = 'j8jJSGH+Ey4KY7CR58pc/CteGaBje3Tn86maEm/kQXTGgnT1I/P2mstMV6oiKFsFaZsmXDYlUuNNYR3FEnh9D3Y/Tl6rvr4i3yitT7z0RzFodoOgfc1OcrRc3W31rMjX3tP7/rA22pFUdJRFoRiwzgdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'ac4ad22419232f1b128f17b6b1b3e163';

$pushID = 'U76dde620544d7d0183f';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







