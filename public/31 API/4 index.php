<!-- 

    API Üçün Header və Token Tələb Olunursa
    Bəzi API-lərdən məlumat çəkmək üçün əlavə olaraq Header məlumatları və ya Access Token tələb olunur. Bunun üçün cURL parametrlərinə CURLOPT_HTTPHEADER əlavə edirik.

-->

<?php
    $url = "https://api.example.com/protected-data";
    $token = "Bearer YOUR_ACCESS_TOKEN";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Authorization: $token",
        "Content-Type: application/json"
    ]);

    $response = curl_exec($ch);
    curl_close($ch);

    $data = json_decode($response, true);
    print_r($data);
