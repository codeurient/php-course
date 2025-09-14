<?php
header("Content-Type: application/json");

// HTTP request body-ni oxu
$rawData = file_get_contents("php://input");

// JSON-a çevir (assosiativ array formasında)
$data = json_decode($rawData, true);

// Əgər məlumat boşdursa
if (!$data) {
    echo json_encode(["error" => "Heç bir məlumat göndərilməyib"]);
    exit;
}

// Gələn məlumatı cavab olaraq qaytar
echo json_encode([
    "message" => "Məlumat uğurla alındı",
    "gelen_data" => $data
]);
