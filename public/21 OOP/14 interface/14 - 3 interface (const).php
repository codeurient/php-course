<!-- 
 

    PHP-də interface daxilində const elan edilə bilər. Bu const bir sabitdir və müəyyən qaydalar çərçivəsində istifadə olunur:

        
    Statik olaraq istifadə edilir:


    const bir statik dəyərdir, ona görə də instans yaratmağa ehtiyac yoxdur.


    İstifadə etmək üçün interface adı vasitəsilə birbaşa müraciət olunur.


    Dəyişdirilə bilməz: Interface içindəki sabitlər final olaraq qəbul edilir. Yəni, onlar təkrar elan edilə və ya dəyişdirilə bilməz.


-->


<?php


    interface MyInterface {
        const MESSAGE = "Bu bir Interface sabitidir!";
    }

    // Interface sabitinə birbaşa müraciət
    echo MyInterface::MESSAGE; // Bu bir Interface sabitidir!




?>