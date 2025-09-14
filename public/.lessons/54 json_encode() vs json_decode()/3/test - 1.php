<?php

$json = '[{
            "id":1, 
            "name":"Ali", 
            "email":"ali@example.com"
        }]';

// JSON-u PHP obyekt-ə çevirmək
$data = json_decode($json, true);

echo "<pre>";
    print_r($data);
echo "</pre>";


echo $data[0]['name'] . "<br>"; // Ali


foreach ($data as $user) {
    echo $user['id'] . " - " . $user['name'] . PHP_EOL;
}