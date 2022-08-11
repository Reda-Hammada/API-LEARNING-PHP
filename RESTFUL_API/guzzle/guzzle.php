<?php 

require  '../../vendor/autoload.php';


$client = new GuzzleHttp\Client;

$response = $client->request("GET", "https://api.github.com/gist"


);

echo $response->getStatusCode() . "\n";

echo $response->getHeader("content-type")[0] . "\n";

echo  $response->getBody();