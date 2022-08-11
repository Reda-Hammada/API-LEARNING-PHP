<?php 



$curl_session = curl_init();

curl_setopt_array($curl_session,

                  [
                    
                    CURLOPT_URL =>"https://api.github.com/gists",
                    CURLOPT_RETURNTRANSFER => TRUE,
                    CURLOPT_USERAGENT=> "Reda-Hammada"

                  ]);

$response = curl_exec($curl_session);


curl_close($curl_session);


$data  = json_decode($response, true);


foreach($data as $gist):
   echo '<pre />';
  echo $gist['description'];
  echo $gist['id'];
  echo'<pre />';


endforeach;