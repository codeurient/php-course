<!-- 
Namespace-lər çox vaxt autoloading (avtomatik yükləmə) ilə birlikdə istifadə olunur. 
PSR-4 standartına əsasən, namespace-lər qovluq strukturuna uyğun olaraq faylları avtomatik yükləyə bilər.

PSR-4 Standartı Nədir?
PSR-4, PHP üçün avtomatik yükləmə standartıdır. Bu standart namespace və fayl strukturu arasında uyğunluq yaratmağı tələb edir:
                                                                                                                                    Namespace: App\Classes\User
                                                                                                                                    Fayl Yolu: src/Classes/User.php

Autoloading nədir?
Autoloading, PHP-də class -ların, interfeyslərin və ya trait-lərin əl ilə require və ya include istifadə etmədən avtomatik olaraq yüklənməsini təmin edən bir mexanizmdir.  

Autoloading, PHP dünyasında geniş yayılmış standartlara uyğun layihə yaratmağa imkan verir.

PHP-də Autoloading Necə İşləyir?
PHP-də autoloading üçün əsas mexanizm     `spl_autoload_register`    funksiyasıdır. Bu funksiya xüsusi bir avtomatik yükləyici (autoload function) təyin etməyə imkan verir.

Autoloading necə qurulur?
1. Əl ilə Autoloading Qurmaq: Əgər özünüz xüsusi bir autoload funksiyası yazmaq istəyirsinizsə, aşağıdakı addımları izləyə bilərsiniz.
2. Composer ilə Autoloading: Composer, PHP-də layihələri idarə etmək və autoloading qurmaq üçün geniş istifadə olunan vasitədir. Composer PSR-4 standartına uyğun olaraq autoloading təmin edir.


Əl ilə Autoloading:         spl_autoload_register ilə öz xüsusi autoload funksiyanızı yazın.
Composer ilə Autoloading:   PSR-4 standartına uyğun avtomatik yükləmə təmin edir.
Tövsiyə:                    Composer istifadə edin, çünki bu üsul daha sürətli, rahat və standartdır.


NOT: Əgər belə bir metod görsəz istifadə etməyin çünki o köhnədir: __autoload()
-->

<?php
// var_dump($class);            - string(16)    "App\Classes\User"
// var_dump(__DIR__);           - string(26)    "C:\OSPanel\home\php-course"
// var_dump($path);             - string(51)    "C:\OSPanel\home\php-course/src/App/Classes/User.php"

// spl_autoload_register() metodunda yazılan callback -in `$class` parametri avtomatik olaraq `App\Classes\User` bu yazını qəbul edir. Use demişik çünki. 

spl_autoload_register(function ($class) {
    $path = __DIR__ . '/src/' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($path)) {
        require_once $path;
    }
});

// Class-lardan istifadə
use App\Classes\User;
use App\Classes\Product;

$user = new User();
echo $user->greet()  . '<br>'; // Salam, mən User sinifiyəm!

$product = new Product();
echo $product->info()  . '<br>'; // Mən Product sinifiyəm!
