<!-- 
 
PHP-də declare əmri, skriptin işləmə davranışını təyin etmək üçün istifadə olunur. 


ticks rejimi:
    - PHP-nin hər N əmrdən sonra müəyyən bir funksiya çağırmasını təmin edir.
    register_tick_function funksiyası ilə birlikdə istifadə olunur.


encoding rejimi:
    - PHP skriptinin mətn kodlaşdırmasını təyin etmək üçün istifadə olunur.
    (Ancaq artıq istifadə olunmur, PHP 7.2-dən çıxarılıb.)


declare(ticks=N) nə edir?
    Bu direktiv PHP-yə bildirir ki, hər N əmrdən sonra müəyyən əmrləri yerinə yetirsin. Bu, əsasən register_tick_function ilə birlikdə işləyir.


declare olmadan ticks işləyərmi?
    Xeyr. ticks rejimi aktiv edilmədən register_tick_function işə düşməyəcək.


Niyə ehtiyatla istifadə olunmalıdır?
    ticks rejimi çox kiçik bir dəyərlə təyin edildikdə (məsələn, ticks=1), hər bir əmrdən sonra funksiyanın çağırılması performansın azalmasına 
    səbəb ola bilər. Ona görə yalnız xüsusi hallarda istifadə olunmalıdır.


İşləmə sxemi:
    - declare aktivləşdirilir.
    - PHP əmrləri sayılır.
    - Müəyyən edilmiş ticks sayına çatdıqda, qeydiyyatdan keçmiş funksiya çağırılır.
    
-->


<?php
    declare(ticks=1);

    function onTick()
    {
        echo "Tick işlədi!<br>";
    }

    // Funksiyanı qeydiyyatdan keçir
    register_tick_function('onTick');

    for ($i = 0; $i < 5; $i++) {
        echo "Dövr: $i<br>";
    }

    // Hər bir PHP əmri (echo, $i++, və s.) işlədildikdə, monitorinq funksiyası çağırılır.