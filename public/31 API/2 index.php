<!-- 

    file_get_contents ilə Məlumat Çəkmək

        Addımlar:
            - API-yə birbaşa HTTP sorğu göndərmək üçün file_get_contents funksiyasını istifadə edin.
            - Cavabı json_decode funksiyası ilə oxuyun.


                echo "<pre>"; 
                    print_r($data); 
                echo "</pre>";

-->

<?php

    $url = "https://jsonplaceholder.typicode.com/photos";


    // API-dən məlumatı çəkmək
    $response = file_get_contents($url);

    // Məlumatı yoxla və JSON-u massivə çevir
    if ($response !== false) {
        $data = json_decode($response, true);
        echo "<pre>"; 
            print_r($data); 
        echo "</pre>";
    } else {
        echo "API-dən məlumat çəkilmədi!";
    }
