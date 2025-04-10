<!-- 


PHP-də & simvolu referans operatörü olaraq istifadə edilir. Bu operator, bir dəyişənin referansını (yəni, həmin dəyişənin birbaşa yaddaş ünvanını) 
digər bir dəyişənə təyin etməyə imkan verir.



Başqa sözlə, & ilə bir dəyişəni digər dəyişənə təyin etdikdə, iki dəyişən eyni yaddaş yerini paylaşır. Bu halda, bir dəyişəndə edilən dəyişiklik 
digərini də avtomatik olaraq təsir edəcək.



& Operatorunun İstifadəsi:
    - Dəyər ilə təyin etmə (Kopyalama): Bir dəyişənin dəyəri digərinə kopyalanır. Bu zaman orijinal dəyişənin dəyəri dəyişməz qalır.
    - Referans ilə təyin etmə: Bir dəyişənin referansı digərinə təyin edilir. Bu zaman dəyişənlər bir-biri ilə əlaqəlidir və birinin dəyəri dəyişdikdə digərinin də dəyəri dəyişir.


-->


<?php


    $bir = 5;
    $iki = $bir;
    $iki = 10;
    echo $bir . "<br>";
    echo $iki . "<br>";






    $uc = 5;
    $dord = &$uc;
    $dord = 10;
    echo $uc . "<br>";
    echo $dord . "<br>";


?>