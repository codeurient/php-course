<!-- 


    PHP-də printf() funksiyası, mətni formatlanmış şəkildə ekrana çap etmək üçün istifadə olunur. Bu funksiya, xüsusi format şablonları 
    ilə dəyişənlərin dəyərlərini birləşdirərək çap etməyə imkan verir. printf() funksiyası, formatlanmış mətnin daha çevik və dəqiq çap edilməsini təmin edir.



    Format simvolları:
        %s: String (mətn) tipi.
        %d: Tam ədəd (integer).
        %f: Ondalık ədəd (float).
        %x: Onaltılıq (hexadecimal) formatında ədəd.
        %b: İkilik (binary) formatında ədəd.
        %e: Elmi notasiya ilə ədəd.

    

-->

<?php

$name = "Əli";
$age = 25;
printf("Ad: %s, Yaş: %d", $name, $age);       // Adı: Əli, Yaşı: 25

