<html lang="en">
<head>
</head>
<body>
    <!--    

    PHP-də if, if-else və if-elseif-else strukturundan istifadə edərək müxtəlif şərtləri yoxlayıb, uyğun əmrləri yerinə yetirmək mümkündür. 
    Bu strukturlar kodun axışını idarə etməyə və fərqli hallarda müxtəlif əmrlərin icra olunmasına imkan yaradır.

    -->
<?php


    // 1) if şərt bəyanatı müəyyən bir şərti yoxlayır və şərt doğrudursa (true), həmin şərtə uyğun kodu icra edir:      if (şərt) { Şərt doğrudursa, bu kod işləyəcək.}
    $number = 10;

    if ($number > 5) {
        echo "Rəqəm 5-dən böyükdür.";
    }




    // 2) if-else şərt bəyanatı birinci şərt doğrudursa, bir əməli icra edir; əgər şərt yanlışdırsa (false), alternativ əməli icra edir.
    $age = 18;

    if ($age >= 18) {
        echo "Siz səs verə bilərsiniz.";
    } else {
        echo "Siz səs verə bilməzsiniz.";
    }



    // 3) if-elseif-else bəyanatı birdən çox şərti yoxlamaq üçün istifadə olunur.
    $grade = 85;

    if ($grade >= 90) {
        echo "Qiymətiniz: A";
    } elseif ($grade >= 80) {
        echo "Qiymətiniz: B";
    } elseif ($grade >= 70) {
        echo "Qiymətiniz: C";
    } else {
        echo "Qiymətiniz: F";
    }






    // 4) Əgər if və ya else blokunda yalnız bir əməliyyat varsa, {} mötərizələrindən istifadə etmək məcburi deyil:
    $number = 5;
    
    if ($number > 3)
        echo "5 rəqəmi 3-dən böyükdür.";
    else
        echo "5 rəqəmi 3-dən kiçik və ya bərabərdir.";






    // 5) Şərtləri bir-birinin içərisinə yazmaq mümkündür. Bu, daha mürəkkəb qərarların icrası üçün istifadə olunur:
    $age = 20;
    $hasPermission = true;

    if ($age >= 18) {
        if ($hasPermission) {
            echo "Siz tədbirə qatila bilərsiniz.";
        } else {
            echo "Siz tədbirə qatila bilməzsiniz.";
        }
    } else {
        echo "Yasiniz kifayət deyil.";
    }   

?>



    <!-- 6) PHP-də if, else və elseif üçün alternativ bir sintaksis mövcuddur, xüsusilə HTML içərisində PHP yazarkən faydalıdır: -->
    <?php $şərt = 5; if ($şərt == 5): ?>
        <h1>Birinci sert yerine yetirildi</h1>
    <?php elseif ($şərt2 > 5): ?>
        <h1>İkinci sert yerine yetirildi</h1>
    <?php else: ?>
        <h1>Ucuncu sert yerine yetirildi</h1>
    <?php endif; ?>



    <?php $loggedIn = true; ?>

    <?php if ($loggedIn): ?>
        <p>Hesabiniza xoş gəlmisiniz!</p>
    <?php else: ?>
        <p>Zəhmət olmasa, daxil olun.</p>
    <?php endif; ?>



</body>
</html>