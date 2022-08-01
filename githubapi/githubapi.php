<?php

$header = [


    "Authorization: token YOUR-TOKEN-HERE ",
    "User-Agent: Reda Hammada",



];


$curl_session = curl_init();


curl_setopt_array($curl_session ,

[

    CURLOPT_URL =>"https://api.github.com/user/starred",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => $header,



]);

$response = curl_exec($curl_session);

curl_close($curl_session);

echo $response;