<?php

$url = 'https://jsonplaceholder.typicode.com/users';
// Sample example to get data.
$resource = curl_init($url);
curl_setopt($resource,CURLOPT_RETURNTRANSFER,true);// set the key to true for $resource
$result = curl_exec($resource);
// echo $result;
$info = curl_getinfo($resource);
echo '<pre>';
var_dump($info);
echo '</pre>';
// Get response status code

// set_opt_array

// Post request