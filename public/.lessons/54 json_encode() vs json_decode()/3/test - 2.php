<?php

$json = '["alma", "banan"]';

$meyveler = json_decode($json);  // Array: [0 => "alma", 1 => "banan"]

echo '<pre>';
    print_r($meyveler) ;
echo '</pre>';