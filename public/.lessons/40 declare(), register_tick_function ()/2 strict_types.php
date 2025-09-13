<!-- 
 
    declare(strict_types=1) direktivi PHP-də məcburi tipi yoxlama rejimini aktivləşdirmək üçün istifadə olunur. 
    Bu, funksiyaların və metodların qəbul etdiyi və ya qaytardığı dəyərlərin tipini dəqiq müəyyən etməyə imkan verir.

    

    1. Normal rejimdə (strict_types olmadan), PHP parametrlərin və qaytarılan dəyərlərin tipini avtomatik olaraq uyğunlaşdırmağa (type juggling) çalışır.
        Məsələn, int gözlənilsə də, string tipində bir dəyəri avtomatik olaraq tam ədədə çevirir.

    2. strict_types=1 rejimində PHP heç bir tip uyğunlaşdırması etmir. Əgər uyğun olmayan tip verilərsə, xəta baş verir.




    Strict Types-ın Tətbiqi
        - Məcburi Tip Yoxlaması: Dəqiq və etibarlı kod yazmağı təmin edir.
        - Kodun Stabil Olması: Müxtəlif növ məlumatlarla işləyərkən səhv davranışın qarşısını alır.
        - Performans və Təhlükəsizlik: Kodunuzun gözlənilməyən tip uyğunlaşmalarından (type juggling) təsirlənməsini minimuma endirir.



    Vacib Nöqtələr
        - strict_types=1 yalnız həmin faylda təsirli olur. Başqa fayldan çağırılan funksiyalar bu rejimə təsir etməz.
        - Əgər strict_types=0 istifadə etsəniz, PHP əvvəlki (lax) davranışına davam edər.

-->


<?php

// 1 
function addNumbers(int $a, int $b): int {
    return $a + $b;
}

echo addNumbers(5, "10"); // 15 (PHP string'i avtomatik olaraq int-ə çevirir)






// 2 
declare(strict_types=1);

function addNumbers(int $a, int $b): int {
    return $a + $b;
}

echo addNumbers(5, "10"); // Fatal Error: Argument 2 must be of type int, string given
