<?php

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://api.coinbase.com/v2/prices/spot?currency=DKK");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$headers = [
   'CB-VERSION: 2017-12-09',
   'Authorization: Bearer <temporary access token>' // du skal ændre denne linje og erstatte <temporary access token med dit eget access token
];

curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$server_output = curl_exec ($ch);

curl_close ($ch);

echo "BTC: " . substr($server_output, 49, -3) . "&nbsp;" . "DKK";
?>
