<html lang="en">
<body>
    <!--    

    PHP-də for dövrü müəyyən sayda təkrarlama üçün istifadə olunur. Onun sintaksisi 3 hissədən ibarətdir: 
        
        başlanğıc dəyəri
        
        
        şərt
        
        
        artım/dəyişmə əməliyyatı.


        for (   startValue;        condition;       increase   )      {       }


    -->

<?php

        // 1
        for ($i = 0; $i < 5; $i++) {

            echo "Say: $i" . PHP_EOL;   // PHP_EOL (PHP End Of Line) adətən \r\n simvollarını əvəz edir.
                                        // Əgər PHP Linux və ya macOS üzərində işləyirsə, PHP_EOL avtomatik olaraq \n (newline) dəyərini alır.
                                        // Əgər PHP Windows üzərində işləyirsə, PHP_EOL \r\n (carriage return + newline) dəyərini alır.
                                        // Əgər PHP kodunu brauzer vasitəsilə çalışdırırsınızsa, \n  ( echo "Say: $i\n";) və ya PHP_EOL HTML-də görünməyəcək. 
                                        // Bunun əvəzinə <br> istifadə edin: echo "Say: $i<br>";
        }
        // Çıxış:
        // Sayı: 0
        // Sayı: 1
        // Sayı: 2
        // Sayı: 3
        // Sayı: 4





        // 2
        $i = 0;
        for (; $i < 5; ) {

            echo "Say: $i" . '<br>';  

            $i++;
                                        
        }







        // 3
        for ($i=5,   $j=0;   $i>0,   $j<5;     $i--,  $j++) {
            echo "$i   -   $j   <br>";
        }






        //  4 - ;; bu mörtərizə içində True yazaraq sonsuz dövr yaratmağa bərabərdir.
        for (;;) {
            echo "hello";
        }


?>


</body>
</html>