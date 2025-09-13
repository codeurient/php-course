<!-- 

GET və POST, HTTP protokolunda məlumatların müştəri (brauzer) ilə server arasında ötürülməsi üçün istifadə olunan 
metodlardır. PHP-də bu metodlarla ötürülən məlumatlar qlobal massivlər vasitəsilə əldə edilir.


GET metodu məlumatları URL-də ötürür. Sorğuda ötürülən məlumatlar açıq şəkildə URL-də görünür. Xüsusiyyətləri:
    - Məlumat URL-də ötürülür (məsələn, http://example.com/page.php?name=John&age=25).
    - Maksimum məlumat məhdudiyyəti var (serverə görə dəyişə bilər, təxminən 2000 simvol).
    - Geri baxma tarixi və səhifə yenilənməsi üçün əlverişlidir.
    - Təhlükəsizlik məqsədləri üçün həssas məlumatların (məsələn, şifrə) ötürülməsi üçün istifadə edilmir.

    

-->
<?php 

// URL: http://example.com/page.php?name=John&age=25
$name = $_GET['name'];
$age = $_GET['age'];

echo "Ad: $name, Yaş: $age"; // Çıxış: Ad: John, Yaş: 25
