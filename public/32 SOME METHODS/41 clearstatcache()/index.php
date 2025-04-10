<!-- 


clearstatcache() funksiyası, fayl sisteminin vəziyyəti haqqında cache yaddaşa alınmış məlumatları təmizləyir. Bu funksiya fayl və ya qovluq 
haqqında məlumatların dəqiq olub olmadığını təmin etmək üçün istifadə olunur.



clearstatcache() Niyə Lazımdır?
    PHP, fayl əməliyyatlarının performansını artırmaq üçün müəyyən məlumatları cache yaddaşa alır. Məsələn:

    Faylın olub-olmaması.
    Faylın ölçüsü.
    Faylın son dəyişmə tarixi.


Əgər skriptinizdə eyni fayl haqqında dəfələrlə məlumat əldə edirsinizsə və fayl aralıq vaxtda dəyişdirilirsə, PHP köhnə məlumatları göstərməyə davam 
edə bilər. Bu halda clearstatcache() istifadə edərək bu önyaddaşı təmizləyə bilərsiniz.





-->


<?php

//  1) 
$filename = 'example.txt';

// Faylı yoxla.
if (file_exists($filename)) {
    echo "Fayl mövcuddur.\n";
} else {
    echo "Fayl mövcud deyil.\n";
}

// Faylı sil.
unlink($filename);

// Yenidən yoxla (önbelleğe görə nəticə səhv ola bilər).
if (file_exists($filename)) {
    echo "Fayl mövcuddur.\n";
} else {
    echo "Fayl mövcud deyil.\n";
}

// Ön belleği təmizlə və yenidən yoxla.
clearstatcache();
if (file_exists($filename)) {
    echo "Fayl mövcuddur.\n";
} else {
    echo "Fayl mövcud deyil.\n";
}




















// 2) $clear_realpath_cache ilə İstifadə:
$filename = '/var/www/html/example.txt';

// Realpath cache təmizlənməsi.
clearstatcache(true, $filename);
