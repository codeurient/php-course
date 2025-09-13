<!-- 
 

    const class daxilində: PHP-də const-lar həm də class daxilində təyin edilə bilər. Bu halda, const-a,  class adı ilə müraciət edilir.


    const ilə təyin edilmiş sabitlər class -ın obyektləri vasitəsilə müraciət edilə bilməz. 

    PHP-də class daxilində const istifadə edildikdə, həmin sabitlər class-ın static xüsusiyyətləri kimi təyin olunur və yalnız class adı ilə müraciət edilə bilər.

-->


<?php

    class Circle {
        const PI = 3.14159;
    }

    $a = new Circle();
    echo  $a->PI;



    // $a = new Circle();
    // echo $a->PI;  // Bu xəta verir

?>