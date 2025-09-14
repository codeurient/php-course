<?php
header('Content-Type: application/json');

// php://input ilə xam məlumat
$raw_data = file_get_contents('php://input');

// $_POST ilə emal edilmiş məlumat
$post_data = $_POST;

echo json_encode([
    'php://input' => $raw_data,
    '$_POST' => $post_data
]);