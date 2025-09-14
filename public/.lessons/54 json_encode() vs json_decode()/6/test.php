<?php


$data = [
    "ad" => "Veli",
    "sevdiyi_meyveler" => ["alma", "banan"],

    "dostlar" => [
        ["ad" => "Ayşe", "yas" => 24],

        ["ad" => "Mehmet", "yas" => 26]
    ]

];

echo "<pre>";
    echo json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
echo "</pre>";

