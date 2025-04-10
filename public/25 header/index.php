<?php
class ApiResponse
{
    // Status kodlarını saxlayır
    private $statusCode;
    private $headers = [];
    private $data;

    public function __construct(int $statusCode = 200)
    {
        $this->statusCode = $statusCode;
    }

    // Başlıq əlavə et
    public function addHeader(string $key, string $value)
    {
        $this->headers[] = "$key: $value";
    }

    // Məlumatı təyin et
    public function setData(array $data)
    {
        $this->data = $data;
    }

    // Cavabı göndər
    public function send()
    {
        // Status kodu təyin edir
        http_response_code($this->statusCode);

        // Başlıqları göndərir
        foreach ($this->headers as $header) {
            header($header);
        }

        // JSON məlumatını göndərir
        echo json_encode($this->data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    }
}

// Sinifdən istifadə
$response = new ApiResponse(200);
$response->addHeader('Content-Type', 'application/json');
$response->addHeader('Cache-Control', 'no-cache');

// API cavabı üçün məlumat
$data = [
    'success' => true,
    'message' => 'Məlumat uğurla əldə edildi.',
    'data' => [
        'id' => 1,
        'name' => 'Test Məhsulu',
        'price' => 100
    ]
];
$response->setData($data);

// Cavabı göndər
$response->send();
?>

