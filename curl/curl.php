<?php

$curl_session = curl_init();

curl_setopt($curl_session,CURLOPT_URL,"https://randomuser.me/api");
curl_setopt($curl_session,CURLOPT_RETURNTRANSFER,true );
curl_setopt($curl_session,CURLOPT_HEADER, false);

$result = curl_exec($curl_session);

curl_close($curl_session);

echo $result;




?>

