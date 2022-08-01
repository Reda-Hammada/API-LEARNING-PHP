<?php

$header = [


    "Authorization: token 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 ",



];

$payload =  json_encode([

    "name" => "Created From API",
    "description" =>"API test",
]);


$curl_session = curl_init();


curl_setopt_array($curl_session ,

[

    CURLOPT_URL =>"https://api.github.com/user/repos",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => $header,
    CURLOPT_USERAGENT=> "Reda-Hammada",
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS=>$payload,




]);



$response = curl_exec($curl_session);


