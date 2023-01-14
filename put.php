<?php
$url = "http://127.0.0.1/Formation/1"; // modifier la formation 1
$data = array('nom' => 'formation1', 'description' => '.....', 'prix' => '30 000Ar', 'convention' => '1');

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($data));

$response = curl_exec($ch);

var_dump($response);

if (!$response) 
{
    return false;
}
?>