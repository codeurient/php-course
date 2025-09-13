<html lang="en">
<body>
    <!--    

        PHP-də break, dövrləri (for, while, do-while) və ya switch-case-i dayandırmaq üçün istifadə olunur.

    -->


    <?php

            
        for ($i = 0; $i < 10; $i++) {

            if ($i == 5) {
                break; // Dövr dayandırılır
            }

            echo "Say: $i <br>";
        }


    ?>

</body>
</html>