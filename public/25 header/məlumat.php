<!-- 

NOT: BU commenti ən üstə kod olan faylda yazsaydıq onda xəta mesajı alacaqdıq. Bu cür xətalar, header() və ya setcookie() kimi funksiyaları istifadə edərkən, səhvən faylın əvvəllərində və ya 
başqa bir yerdə artıq bir çıxış (output) baş verildiyi halda yaranır. PHP-də HTTP başlıqları yalnız hər hansı bir çıxış başlamadan əvvəl göndərilə bilər. Əgər faylda artıq bir 
boşluq, yeni sətir, və ya hər hansı bir mətn çıxışı varsa, başlıqları dəyişmək mümkün olmur.

Problemə Səbəb Ola Biləcək Hallar
    - Faylın başlanğıcında və ya PHP tag (< ? php) önündə boşluq və ya gizli simvol.
    - echo, print, var_dump() və ya digər çıxış funksiyalarının header-dan əvvəl istifadəsi.
    - UTF-8 BOM (Byte Order Mark) formatında fayl saxlanması.



    

PHP-də HTTP(s) və Header-lərlə İşləmək üçün İstifadə Olunan Funksiya, Konstant və Digər Vasitələrin Siyahısı

-----------------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------    
header(string $header, bool $replace = true, int $response_code = 0)
    HTTP başlıqları göndərmək üçün istifadə olunur. 
        Parametrlər:
            - $header: Göndəriləcək başlıq (məsələn, Content-Type: application/json).
            - $replace: Eyni adda olan əvvəlki başlığı əvəz edib-etməməsi.
            - $response_code: HTTP status kodu göndərmək üçün.
-----------------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------
headers_sent()
    Header-ların artıq göndərilib-göndərilmədiyini yoxlayır.

-----------------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------
headers_list()
    Göndərilmiş başlıqların siyahısını qaytarır.
-----------------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------
setcookie(string $name, string $value = "", int $expires = 0, string $path = "", string $domain = "", bool $secure = false, bool $httponly = false)
    HTTP cookie başlıqları əlavə etmək üçün istifadə olunur.
-----------------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------
setrawcookie()
    Cookie dəyərlərini xüsusi simvol escape etmədən göndərmək üçün istifadə olunur.
-----------------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------
http_response_code([int $response_code])
    HTTP status kodunu təyin edir və ya mövcud kodu qaytarır.
-----------------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------
Dekodlaşdırma Seçimləri:
    JSON_BIGINT_AS_STRING - Böyük tam ədədləri string kimi qaytarır.
-----------------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------
Status Kodu Konstantları (PHP 7.4+):
    \http\Client\Response::STATUS_OK - 200
    \http\Client\Response::STATUS_NOT_FOUND - 404
    \http\Client\Response::STATUS_INTERNAL_SERVER_ERROR - 500
-----------------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------
HTTP ilə Əlaqəli Başlıq Konstantları:
    CONTENT_TYPE - application/json, text/html, və s.
    ACCEPT_LANGUAGE - Dili müəyyən edir.
-----------------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------
cURL (Client URL Library Functions):
    curl_init(): Yeni cURL sessiyası başladır.
    curl_setopt(): cURL üçün parametrləri təyin edir.
    curl_exec(): Sorğunu icra edir.
    curl_close(): cURL sessiyasını bağlayır.
-----------------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------
file_get_contents() və stream_context_create()
    HTTP(s) URL-lərdən məlumat əldə etmək üçün istifadə olunur.
-----------------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------
http_build_query(array $query_data)
    Sorğu parametrlərini string formatına çevirir.
-----------------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------

Aşağıdakı nümunədə biz HTTP başlıqlarını və status kodlarını istifadə edərək API cavablarını idarə edən bir class yaradırıq.
Bu class, API-lar üçün cavab göndərməkdə istifadə olunur. Məsələn, front-end tətbiqlərinə məlumat ötürmək üçün uyğundur.


-->







<!-- 

Nəticə
Başlıqlar:

Content-Type: application/json


Cache-Control: no-cache


Status Kodu: 200 OK


JSON Cavab: 
{
    "success": true,
    "message": "Məlumat uğurla əldə edildi.",
    "data": {
        "id": 1,
        "name": "Test Məhsulu",
        "price": 100
    }
}


-->