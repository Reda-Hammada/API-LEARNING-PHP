<?php

$curl_session = curl_init();
$header = [

    "Authorization: Client-ID ICu4ggjQ_1B3va1W7ESkMgNeUAnmd8A8SiqKrrsLZqQ
    ",
];
curl_setopt_array(
    $curl_session, [
        CURLOPT_URL =>"https://api.unsplash.com/photos/random",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => $header,
        
    ]


    );

$result = curl_exec($curl_session);

curl_close($curl_session);


$status_code =  curl_getinfo($curl_session,  CURLINFO_HTTP_CODE);

echo $result;




?>

