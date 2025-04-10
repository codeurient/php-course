<!-- 

PHP JSON-lar ilə işləmək üçün çoxlu sayda funksiyalar və konstantlar təqdim edir. 
JSON (JavaScript Object Notation) məlumatların yığcam şəkildə saxlanması və ötürülməsi üçün geniş istifadə olunan formatdır

-----------------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------    
1. json_encode($value, $flags = 0, $depth = 512)
        PHP obyektini və ya massivini JSON-a çevirir.

        Parametrlər:
            $value: Çevriləcək obyekt və ya massiv.
            $flags: Seçimlər (məsələn, xüsusi formatlama).
            $depth: Maksimum dərinlik.
-----------------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------
2. json_decode($json, $assoc = false, $depth = 512, $flags = 0)
        JSON sətrini PHP obyektinə və ya massivinə çevirir.

        Parametrlər:
            $json: Çevriləcək JSON sətiri.
            $assoc: true olduqda massiv, false olduqda obyekt qaytarır.
            $depth: Maksimum dərinlik.
-----------------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------
3. json_last_error()
        Son JSON əməliyyatının xətasını qaytarır.
-----------------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------
4. json_last_error_msg()
        Son JSON xətasının açıqlama mətni.
-----------------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------
JSON Konstantları. Xəta Kodları:
    JSON_ERROR_NONE - Heç bir xəta yoxdur.
    JSON_ERROR_DEPTH - Maksimum dərinlik aşımı.
    JSON_ERROR_STATE_MISMATCH - Tutaşmazlıq və ya struktur səhvi.
    JSON_ERROR_CTRL_CHAR - Nəzarət simvolu xətası.
    JSON_ERROR_SYNTAX - Sintaksis səhvi.
    JSON_ERROR_UTF8 - UTF-8 ilə əlaqəli xəta.
    JSON_ERROR_RECURSION - Rekursiya aşkar edilib.
    JSON_ERROR_INF_OR_NAN - INF və ya NAN tapılıb.
    JSON_ERROR_UNSUPPORTED_TYPE - Dəstəklənməyən növ.
-----------------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------
Kodlaşdırma Seçimləri:
    JSON_PRETTY_PRINT - JSON-u oxunaqlı şəkildə çap edir.
    JSON_FORCE_OBJECT - Array-i obyektə çevirir.
    JSON_NUMERIC_CHECK - String tipindəki rəqəmləri tam ədədlərə çevirir.
    JSON_UNESCAPED_SLASHES - \/ işarələrini escapeləmir.
    JSON_UNESCAPED_UNICODE - Unicode xarakterlərini escapeləmir.
    JSON_PARTIAL_OUTPUT_ON_ERROR - Xəta olsa da, qismən nəticə qaytarır.
-----------------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------
Dekodlaşdırma Seçimləri:
    JSON_BIGINT_AS_STRING - Böyük tam ədədləri string kimi qaytarır.
-----------------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------


Bu nümunədə biz bir məhsul məlumatlarını JSON formatında saxlamaq və oxumaq üçün sinifdən istifadə edəcəyik.

-->

    <?php
    class ProductManager
    {
        private $filePath;

        public function __construct($filePath)
        {
            $this->filePath = $filePath;
        }

        // Məhsulları JSON olaraq fayla yazmaq
        public function saveProducts(array $products)
        {
            $jsonData = json_encode($products, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
            if (json_last_error() === JSON_ERROR_NONE) {
                file_put_contents($this->filePath, $jsonData);
                echo "Məhsullar uğurla saxlanıldı!\n";
            } else {
                echo "JSON xəta: " . json_last_error_msg() . "\n";
            }
        }

        // JSON faylından məhsulları oxumaq
        public function loadProducts()
        {
            if (!file_exists($this->filePath)) {
                echo "Fayl mövcud deyil.\n";
                return [];
            }

            $jsonData = file_get_contents($this->filePath);
            $products = json_decode($jsonData, true);

            if (json_last_error() === JSON_ERROR_NONE) {
                return $products;
            } else {
                echo "JSON xəta: " . json_last_error_msg() . "\n";
                return [];
            }
        }
    }

    // Sinifdən istifadə
    $productManager = new ProductManager('products.json');

    // Yeni məhsullar
    $products = [
        [
            'id' => 1,
            'name' => 'Telefon',
            'price' => 1000,
            'stock' => 50
        ],
        [
            'id' => 2,
            'name' => 'Laptop',
            'price' => 2000,
            'stock' => 20
        ]
    ];

    // Məhsulları JSON-a yazmaq
    $productManager->saveProducts($products);

    // JSON-dan məhsulları oxumaq
    $loadedProducts = $productManager->loadProducts();

    echo '<pre>'; 
        print_r($loadedProducts); 
    echo '</pre>';






// Nəticə, məhsulları saxla:
//      Məhsullar products.json adlı faylda JSON formatında saxlanacaq.
// 
// Məhsulları oxu:
//      Fayldan məhsullar oxunub array kimi geri qaytarılacaq.
//      Bu nümunə real həyatda məhsul idarəetmə sistemlərində, API məlumatlarını fayllarda saxlamaq üçün və ya məlumatların ötürülməsində istifadə oluna bilər. 