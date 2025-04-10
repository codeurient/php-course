<html lang="en">
<body>
    <!--    

        PHP-də continue, dövrün qalan hissəsini atlayaraq növbəti iterasiyaya keçmək üçün istifadə olunur.

    -->


    <?php
            
        for ($i = 0; $i < 10; $i++) {
            
            if ($i % 2 == 0) {

                continue;           // Cüt ədədləri atlayır

            }

            echo "Tək Say: $i <br>";
        }



    ?>

</body>
</html>