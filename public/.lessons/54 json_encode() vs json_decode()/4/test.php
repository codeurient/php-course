<?php

$user = [
    "id" => 3,
    "name" => "Aysel",
    "email" => "aysel@example.com"
];

// PHP array → JSON
$json = json_encode($user, JSON_PRETTY_PRINT);



echo "<pre>";
    print_r($json);
echo "</pre>";
