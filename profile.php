<?php


$access_token = 'j8jJSGH+Ey4KY7CR58pc/CteGaBje3Tn86maEm/kQXTGgnT1I/P2mstMV6oiKFsFaZsmXDYlUuNNYR3FEnh9D3Y/Tl6rvr4i3yitT7z0RzFodoOgfc1OcrRc3W31rMjX3tP7/rA22pFUdJRFoRiwzgdB04t89/1O/w1cDnyilFU=';

$userId = 'U76dde620544d7d0183f950135103b25a';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

