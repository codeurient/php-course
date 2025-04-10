<html lang="en">
<body>
    <!--    
        PHP-də foreach yalnız massivlər və ya obyektlər üzərində işləmək üçün nəzərdə tutulmuş xüsusi bir dövr operatorudur.


        foreach ($array as $dəyər) {
            // Təkrarlanacaq kod
        }
    -->

<?php

            // 1) 
            $fruits = ["alma", "armud", "banan"];

            foreach ($fruits as $fruit) {
                echo $fruit . "<br>";
            }


            

            // 2)  Açar və Dəyər ilə işləmə:
            $users = [
                "ad1" => "Elçin",
                "ad2" => "Leyla"
            ];
            foreach ($users as $key => $value) {
                echo "$key: $value" . PHP_EOL;
            }





            // 3
            $transport = [
                'Auto' => ['Lada', 'Chevrolet', 'Dodge'],
                'Samalyot' => ['Il-2', 'I-16', 'Booing-777'],
                'Gemi' => ['Mubariz', 'Freqat', 'Esmines']
            ];
            
            foreach ($transport as $key => $array) {
                echo "<b>$key</b>";
                foreach ($array as $value) {
                    echo "<li>$value</li>";
                } 
                echo "<br>";
            }


?>


</body>
</html>