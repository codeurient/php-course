<!-- 

    PHP-də (int) sintaksisi casting (tip çevirmə) əməliyyatıdır. Bu əməliyyat, bir dəyişəni konkret tipə çevirmək 
    üçün istifadə olunur. Belə ki, $floatNumber dəyişəninin tipi float (onlu ədəd) olsa da, (int) ilə bu dəyişəni 
    tam ədədə çevirmək mümkündür.

-->

<?php
    
    // 1) Bu əməliyyat float (onlu ədəd) tipini int (tam ədəd) tipinə çevirmək üçün istifadə edilir
    $floatNumber = 4.9;
    $intNumber = (int)$floatNumber;
    echo $intNumber;  // 4


    
    // 2) intval() funksiyası, verilən dəyəri tam ədədə çevirmək üçün istifadə olunur. 
    $floatNumber = 4.3;
    $intNumber = intval($floatNumber);  
    echo $intNumber;  // 4
    


    // Digər tip çevirmə metodları
    // a. (int) və intval()
    // b. (float) və floatval()
    // c. (bool) və boolval()
    // d. (string) və strval()
    // e. (array) Bu, bir dəyişəni array tipinə çevirmək üçün istifadə olunur (baxmayaraq ki, birbaşa çevirmə çox vaxt istifadə olunmur).