<html lang="en">
<body>
    <!--    

        Dövr içində switch ilə continue işlədərkən diqqətli olun:
        continue xarici dövrə aid olacaqsa, continue 2 istifadə edin.
        Əks halda, break istifadə etmək daha uyğundur.


        break	    - switch-dən çıxır və kodun davamını icra edir.
        continue	- Dövr daxilində işlədilərsə, növbəti iterasiyaya keçir. switch içində isə break kimi davranır.
        continue 2	- Xarici dövrə aid növbəti iterasiyaya keçir.


        continue        - hazırda yalnıQz switch-dən çıxır.
        continue 2      - isə həm switch-dən çıxır, həm də xarici dövrün növbəti iterasiyasına keçir.

    -->

    <?php

            for ($i = 0; $i < 10; $i++) {


                switch ($i) {

                    case 2:
                        echo "Case 1\n";
                        continue 2; // Dövrün növbəti iterasiyasına keçir


                    case 3:
                        echo "Case 2\n";
                        break; // switch-dən çıxır

                }



                echo "Dövr: $i <br>";
            }
    ?>

</body>
</html>