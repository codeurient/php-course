<!-- 

    API ilə Class Yazmaq

    API istifadə etməzdən əvvəl onun sənədlərini oxuyub düzgün URL və parametrləri yoxlamaq vacibdir.

-->

<?php
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

// İstifadə
$apiClient = new ApiClient("https://api.exchangerate-api.com/v4/latest/");

$data = $apiClient->get("USD");

echo "1 USD -> EUR: " . $data['rates']['EUR'] . "<br>";
