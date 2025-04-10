<!-- 


Bu metodlar müəyyən hadisələr baş verdikdə avtomatik olaraq çağırılır və iki alt xətlə (__) başlayır və CLASS daxilində müəyyən davranışları avtomatlaşdırmaq üçün istifadə olunur.

Magic Methods-lara PHP tərəfindən xüsusi şərtlər altında avtomatik olaraq icra edilir.


Əsas Magic Methods:
        1. __construct() və __destruct()
                __construct() sinif obyektini yaradarkən avtomatik çağırılır.
                __destruct() obyektin işi bitdikdə avtomatik çağırılır.
        2. __get()
                Bu metod obyektin mövcud olmayan (və ya əlçatmaz olan) bir xassəsinə (property) daxil olmağa çalışdıqda avtomatik çağırılır.
        3. __set()
                Bu metod mövcud olmayan (və ya əlçatmaz olan) bir xassəyə dəyər təyin etməyə çalışdıqda çağırılır.
        __call()
                Mövcud olmayan (və ya əlçatmaz olan) bir metoda çağırış edildikdə avtomatik olaraq çağırılır.
        __toString()
                Bu metod obyekt bir string kimi istifadə edilməyə çalışıldıqda avtomatik olaraq çağırılır.
        __invoke()
                Bu metod obyekt bir funksiya kimi çağırılmağa çalışıldıqda avtomatik olaraq çağırılır.
        __clone()
                Obyektin klonlanması zamanı avtomatik olaraq çağırılır.

-->

<?php
        // __get()
        class MyClass {
                public function __get($name) {
                        echo "Xassə '$name' mövcud deyil və ya əlçatmazdir.<br>";
                }
        }

        $obj = new MyClass();
        $obj->undefinedProperty;        // Xassə 'undefinedProperty' mövcud deyil və ya əlçatmazdır.



?>



