<!-- 



PHP Superglobals və Basic Routing Using The Server Info PHP-də tətbiqlərdə səhifələr arasında yönləndirmə üçün istifadə 
edilən əsas prinsiplərdən birinə istinad edir.

PHP Superglobals Nədir?
    PHP-də superglobal dəyişənlər, bütün skriptdə hər yerdən birbaşa istifadə edilə bilən qlobal dəyişənlərdir. Məsələn, 
    superglobals əsasən istifadəçi məlumatlarını əldə etmək, form məlumatlarını emal etmək, sessiyaları idarə etmək və ya server haqqında məlumat əldə etmək üçün istifadə olunur.

Əsas PHP superglobal dəyişənlər:
    - $_GET: URL vasitəsilə ötürülən verilənlər.
    - $_POST: Formlar vasitəsilə göndərilən verilənlər.
    - $_SERVER: Server və istək (request) haqqında məlumatlar.
    - $_COOKIE: Cookie məlumatları.
    - $_SESSION: Sessiya məlumatları.
    - $_FILES: Yüklənən fayllar.
    - $_REQUEST: $_GET, $_POST, və $_COOKIE birləşməsi.
    - $_ENV: Ətraf mühit dəyişənləri.



$_SERVER Superglobal Dəyişəni
    $_SERVER server mühiti haqqında geniş məlumat verir və əsasən serverdəki müraciətlərin istiqamətləndirilməsi üçün istifadə olunur.

    Əsas açarları:
        $_SERVER['REQUEST_URI']:        - Hazırkı URL yolunu əldə edir.
        $_SERVER['QUERY_STRING']:       - URL-dəki sorğu parametrlərini əldə edir.
        $_SERVER['REQUEST_METHOD']:     - HTTP metodu (GET, POST, və s.).
        $_SERVER['HTTP_HOST']:          - Host adı.
        $_SERVER['SCRIPT_NAME']:        - Hal-hazırda işlədilən skriptin adı.
        $_SERVER['SERVER_NAME']:        - Serverin adı.


Basic Routing (Əsas Marşrutlaşdırma)
    PHP-də basic routing serverdən gələn sorğuya əsasən istifadəçini doğru səhifəyə yönləndirmək prosesidir. Bu, əsasən $_SERVER['REQUEST_URI'] 
    istifadə edilərək həyata keçirilir.




Apache Serveri Üçün .htaccess Faylı Qurulması
    Əgər Apache serverindən istifadə edirsinizsə, URL-ləri düzgün marşrutlaşdırmaq üçün .htaccess faylından istifadə etmək geniş yayılmış bir təcrübədir. 
    Layihənizin əsas qovluğunda (index.php və ya əsas PHP faylınızın olduğu yer) .htaccess faylı yaradın və ya mövcud faylı belə bir məzmunla yeniləyin: Bu qaydalar 
    http://php-course/home, http://php-course/about və http://php-course/contact URL-lərini index.php (və ya hansı faylı istifadə edirsinizsə) faylına yönləndirəcək.

        RewriteEngine On
        RewriteBase /
        RewriteRule ^(home|about|contact)$ index.php [L]
-->


<?php
// $_SERVER['REQUEST_URI'] istifadə edərək marşrutlaşdırma. Alternativ olaraq, URI-dən başlanğıcda olan slash (/) simvolunu çıxararaq şərti daha asan idarə etmək mümkündür:
// $uri = ltrim($_SERVER['REQUEST_URI'], '/'); // başdakı slash-ı çıxarır. 
$uri = $_SERVER['REQUEST_URI'];


if ($uri === '/home') {
    echo 'Welcome to the Home Page!';
} elseif ($uri === '/about') {
    echo 'This is the About Page.';
} elseif ($uri === '/contact') {
    echo 'Contact us here.';
} else {
    echo '404 - Page Not Found';
}

// $_SERVER['REQUEST_URI'] URL-dəki yolu götürür. Məsələn, http://php-course/home üçün nəticə /home olacaq.