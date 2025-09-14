<?php

$meyveler = ["alma", "banan", "portağal"];

echo json_encode($meyveler);                            // Çıxış: ["alma","banan","porta\u011fal"] (Unicode escape)

echo json_encode($meyveler, JSON_UNESCAPED_UNICODE);    // Çıxış: ["alma","banan","portağal"]