<?php

$json = '{
            "id":1, 
            "name":"Ali", 
            "email":"ali@example.com"
        }';

// JSON-u PHP obyekt-ə çevirmək
$data = json_decode($json);

echo "<pre>";
    print_r($data);
echo "</pre>";


echo $data->name; // Ali