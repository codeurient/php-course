<?php

$json = '{
            "id":1, 
            "name":"Ali", 
            "email":"ali@example.com"
        }';

// JSON-u PHP array-ə çevirmək
$data = json_decode($json, true);

echo "<pre>";
    print_r($data);
echo "</pre>";