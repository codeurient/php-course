<!-- 

    PHP-də API istifadə edərək məlumat çəkmək üçün cURL və ya PHP-nin daxili funksiyalarından (file_get_contents) istifadə edə bilərsiniz. 

-->

<?php
$url = "https://jsonplaceholder.typicode.com/photos";

// curl_init() funksiyası, PHP-də cURL (Client URL) kitabxanasını istifadə etməyə başlamaq üçün istifadə olunan bir funksiyadır. Bu funksiya, 
// cURL sessiyasını başlatmaq üçün lazımdır. Əgər cURL ilə HTTP sorğuları göndərmək istəyirsinizsə, ilk addım olaraq curl_init() funksiyasını çağırmalısınız.
$ch = curl_init(); 



// Sessiyanı başlatdıqdan sonra, cURL sessiyasını konfiqurasiya etməlisiniz, yəni sorğunun necə işləyəcəyini müəyyən etməlisiniz. Bu, curl_setopt() funksiyası ilə həyata keçirilir:
// 
//      CURLOPT_URL: Sorğunun göndəriləcəyi URL-i təyin edir.
//      CURLOPT_RETURNTRANSFER: Cavabın ekrana deyil, bir dəyişənə (bu halda $response) qaytarılmasını təmin edir.
//      CURLOPT_SSL_VERIFYPEER: SSL sertifikatı yoxlamasını deaktiv edir (bunu yalnız test üçün etmək lazımdır, real mühitdə SSL yoxlaması edilməlidir).
curl_setopt($ch, CURLOPT_URL, $url);                // URL təyin et
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);     // Cavabı qaytarmasını istə
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);    // SSL sertifikatını yoxlamasın (test üçün)

// Cavabı al
$response = curl_exec($ch);


// Hər hansı bir xəta varsa yoxla
if (curl_errno($ch)) {
    echo "cURL Xətasi: " . curl_error($ch);
} else {
    // Cavabı işləyir
    $data = json_decode($response, true); // JSON massivə çevir
    echo "<pre>"; 
        print_r($data); 
    echo "</pre>";
}

// cURL obyektini bağla
curl_close($ch);