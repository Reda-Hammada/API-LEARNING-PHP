<?php

$curl_session = curl_init();
$header = [

];

$response_header = [];


$header_callback = function ($curl_session, $header) use (&$response_header){


    $len = strlen($header);


    $response_header[] = $header;


    return $len;

};


curl_setopt_array(

    $curl_session, [
        CURLOPT_URL =>"https://randomuser.me/api",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => $header,
        CURLOPT_HEADERFUNCTION =>$header_callback,
        
    ]


    );

$result = curl_exec($curl_session);

curl_close($curl_session);


print_r($response_header);
// echo $result;




?>

