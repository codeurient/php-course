<!-- 


Apache PHP ilə işləmək üçün geniş şəkildə istifadə edilən bir HTTP server proqramıdır. O, PHP 
tətbiqlərini istifadəçilərə təqdim edən veb server olaraq fəaliyyət göstərir.



1. Veb Server Xidməti:
    PHP kodunu istifadəçilərə təqdim etməzdən əvvəl işləyən bir mühit tələb olunur. Apache, PHP skriptlərini 
    işlədib istifadəçilərə nəticə olaraq HTML, JSON və s. təqdim edir.


2. PHP İnteqrasiyası:
    Apache, PHP ilə yüksək səviyyədə uyğun işləyir. "PHP modulu" (mod_php) Apache serverinə əlavə edilərək, PHP kodunu birbaşa işləmək mümkündür.


3. Dinamik Veb Səhifələr Yaratmaq:
    Apache, PHP tətbiqləri üçün dinamik səhifələrin serverdə yaradılması və istifadəçilərə göndərilməsi üçün istifadə olunur.


4. Multi-Platform Dəstəyi:
    Apache, Windows, Linux, macOS və digər platformalarda işləyir. Bu da PHP layihələrinin müxtəlif əməliyyat sistemlərində test və istifadə edilməsinə imkan verir.





Apache Konfiqurasiyasının Səbəbləri: Apache-nin düzgün işləməsi üçün bəzi konfiqurasiyalar aparılmalıdır. Bunlar PHP tətbiqlərinin daha təhlükəsiz, 
optimallaşdırılmış və funksional işləməsini təmin edir.

1. Serverin Fərdiləşdirilməsi:
    Apache-nin httpd.conf və ya apache2.conf fayllarında xüsusi tətbiq tələblərinə uyğun dəyişikliklər edə bilərsiniz (port, IP təyinatları və s.).

2. PHP Skriptlərini İşlətmək:
    Apache ilə PHP-nin işləməsi üçün PHP modulu (mod_php) və ya FastCGI (PHP-FPM) kimi interfeyslər aktiv edilir.

3. Təhlükəsizlik: Apache təhlükəsizlik parametrləri vasitəsilə:
    - Fayl və qovluq icazələri təyin edilir.
    - .htaccess faylları ilə qovluqlara giriş məhdudlaşdırılır.
    - SSL (HTTPS) dəstəyi əlavə edilir.

4. Performans Optimallaşdırması:
    Gzip sıxılması, keşləmə mexanizmləri və limitlərin tənzimlənməsi kimi xüsusiyyətlər Apache vasitəsilə həyata keçirilir.

5. Virtual Hostlar (VirtualHosts):
    Eyni serverdə bir neçə fərqli sayt və ya tətbiqi idarə etmək üçün istifadə edilir. Hər bir saytın öz domeni və konfiqurasiyası ola bilər.




Apache-nin yanında NGINX, LiteSpeed, və ya digər serverlər də istifadə edilə bilər. Apache daha çox çevikliyi və geniş dəstəyi ilə seçilir, 
lakin performans baxımından NGINX daha yüngül ola bilər.


-->


<?php


