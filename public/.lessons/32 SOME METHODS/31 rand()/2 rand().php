<?php

$length = rand(5, 10);

$array = [];

for ($i = 0; $i < $length; $i++) {
    $array[$i] = rand(1, 100);
}

echo "<pre>"; 
    print_r($array); 
echo "</pre>";