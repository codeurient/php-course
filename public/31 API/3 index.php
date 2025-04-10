<!-- 

    Real Həyat Nümunəsi
    Təsəvvür edin ki, API valyuta məzənnələrini qaytarır:

-->

<?php

    $url = "https://api.exchangerate-api.com/v4/latest/USD";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    curl_close($ch);

    if ($response !== false) {
        $data = json_decode($response, true);
        echo "1 USD -> EUR: " . $data['rates']['EUR'] . "<br>";
        echo "1 USD -> AZN: " . $data['rates']['AZN'] . "<br>";
    } else {
        echo "API sorğusu uğursuz oldu!";
    }
