<!--

    usort, verilmiş arraydaki elementləri (object) iki-iki müqayisə edir və sıralama qaydasına uyğun olaraq dəyişdirir. Gəlin bunu addım-addım təhlil edək.


    Kodun İşləmə Məntiqi

        Massivdəki Elementlər: $arr massivində 3 obyekt mövcuddur:
            - Birinci obyekt: (x = 12, y = 5)
            - İkinci obyekt: (x = 1, y = 1)
            - Üçüncü obyekt: (x = 4, y = 10)


        usort Funksiyası:
            - usort hər dəfə iki elementi (obyekt) müqayisə etmək üçün anonim funksiyanı çağırır.
            - Bu anonim funksiya $a və $b kimi iki obyekt alır və müqayisə nəticəsində:
            - Mənfi bir dəyər qaytarırsa, $a birinci gəlir.
            - Müsbət bir dəyər qaytarırsa, $b birinci gəlir.
            - Sıfır qaytarırsa, sıralama dəyişməz.



        Kodda Müqayisə Məntiqi Yoxdur:
            Funksiyada yalnız obyektlərin məlumatlarını çap edirik və müqayisə üçün heç bir qaytarma (return) yoxdur.
            Nəticədə, usort-un işləmə mexanizmi pozulur, lakin obyektlər iki-iki müqayisə edildiyi üçün çap nəticələri göstərilir.


            Point Object
            (
                [x] => 12
                [y] => 5
            )
            Point Object
            (
                [x] => 1
                [y] => 1
            )
            Point Object
            (
                [x] => 1
                [y] => 1
            )
            Point Object
            (
                [x] => 4
                [y] => 10
            )

-->




<?php


class Point {
    public $x;
    public $y;
}

$fst = new Point;
$fst->x = 12;
$fst->y = 5;
    

$snd = new Point;
$snd->x = 1;
$snd->y = 1;

$thd = new Point;
$thd->x = 4;
$thd->y = 10;

$arr = [$fst, $snd, $thd];


usort($arr, function ($a, $b) {

    echo '<pre>';
        print_r($a);
    echo '</pre>';

    echo '<pre>';
        print_r($b);
    echo '</pre>';

});

