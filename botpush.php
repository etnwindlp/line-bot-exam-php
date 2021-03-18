<?php



require "vendor/autoload.php";

$access_token = 'y6A0qb6g3IYdOgP0qIMugXb/Dv8c5ra2RcABD9ET+EZwGh+7VWteIy6P0Vup2GWUO7lM/5M8BnuknzkmCmTz4/eRb41CkR+lQwSqrmorMX0KF1rqWJH9RGItzjHCOcPCGtBjfHMsFggZOy2SEjSPCwdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'b415b669077cab5abc79b66c1643ad49';

$pushID = 'U544d2c17391a78adf8d4c18feff70866';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







