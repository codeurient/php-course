<?php
// JSON məlumatını oxuyuruq (file_get_contents("php://input") PHP-də bir fayldan və ya giriş axınından məlumat oxumaq üçün istifadə edilir. 
// Bu xüsusi olaraq HTTP sorğusunun bədənindəki məlumatı (BODY) oxumaq üçün istifadə olunur.)
$data = json_decode(file_get_contents("php://input"), true);                                            

// Cavabı JSON formatında qaytarırıq
// echo json_encode(["amount" => $data]);          // {"amount":{"amount":"1","currency":"EUR"}}


// Daxil edilən dəyərləri əldə edirik
$amount = $data['amount'];
$currency = $data['currency'];

// cURL ilə məzənnə məlumatlarını çəkirik
class ApiClient
{
    private $baseUrl;

    public function __construct($baseUrl)
    {
        $this->baseUrl = $baseUrl;
    }

    public function get($endpoint)
    {
        $url = $this->baseUrl . $endpoint;
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        curl_close($ch);

        return json_decode($response, true);
    }
}


// API-dən məzənnələri əldə edirik
$apiClient = new ApiClient("https://api.exchangerate-api.com/v4/latest/");
$data = $apiClient->get("USD");

// Valyutanın məzənnəsini tapırıq
if (isset($data['rates'][$currency])) {
    $rate = $data['rates'][$currency];
    $convertedAmount = $amount * $rate;

    // Cavabı JSON formatında qaytarırıq
    echo json_encode([  "convertedAmount" => round($convertedAmount, 2)  ]);        // {"convertedAmount":0.95}
} else {
    echo json_encode([  "error" => "Məzənnə tapilmadi"  ]);
}


?>
