<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- 

    gettype() ilə müqayisə etmək üçün is_* funksiyaları
    PHP-də müəyyən bir tipin olub olmadığını yoxlamaq üçün is_* ilə başlayan funksiyalar mövcuddur. Məsələn, is_int(), is_string(), is_array(), və s.

-->
<?php
        $var1 = 5;
        $var2 = "Hello, world!";
        $var3 = [];

        echo is_int($var1) ? "Integer" : "Not Integer";  // Integer
        echo is_string($var2) ? "String" : "Not String";  // String
        echo is_array($var3) ? "Array" : "Not Array";  // Array


        // Bu funksiyalar müxtəlif tipləri yoxlamaq üçün çox faydalıdır və true və ya false qaytarır. is_* funksiyaları arasında ən çox istifadə olunanlardan bəziləri bunlardır:
        is_int($var);
        is_string($var);
        is_float($var) / is_double($var);
        is_bool($var);
        is_array($var);
        is_object($var);
        is_null($var);

        // PHP-də is_resource($var) funksiyası, verilən dəyişənin resource tipində olub olmadığını yoxlamaq üçün istifadə edilir. Resource, PHP-də xüsusi obyektlərə və ya 
        // resurslara işarə edən xüsusi verilənlər növüdür. Bu cür resurslar, əsasən sistem resursları və ya xarici xidmətlərlə əlaqədar verilənlərdir, məsələn, verilənlər 
        // bazası əlaqələri, fayl əşyaları, və ya şəbəkə bağlantıları.
        // 
        // PHP-də resource tipi ümumiyyətlə aşağıdakılara işarə edir (bu metod haqqında ayrıca dərs olacaq):
        // Fayl resursları (açıq fayl kəsiyləri),
        // Verilənlər bazası əlaqələri (MySQL, PostgreSQL və s.),
        // Socket bağlantıları (şəbəkə əlaqələri),
        // cURL handlerləri (HTTP sorğuları üçün resurslar),
        // SQL query handlerləri (sorgular üçün resurslar),
        // Image handlerləri (şəkil resursları).
        is_resource($var)   

?>


    
</body>
</html>