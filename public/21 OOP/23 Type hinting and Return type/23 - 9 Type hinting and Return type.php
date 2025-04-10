<!-- 

    Type Hinting ilə callable and void


    PHP-də void növü funksiyanın heç bir dəyər qaytarmadığını bildirir. Yəni, bir funksiya void növü ilə müəyyən olunarsa, bu funksiya heç bir nəticə (dəyər) qaytarmamalıdır.

    Verilən nümunədə, execute() funksiyasının void tipi ilə təyin olunduğunu görürük. Bu, o deməkdir ki, execute funksiyası heç bir dəyər qaytarmamalıdır (yəni, heç bir return əmri 
    yoxdur və funksiya nəticə döndərmir).


-->


<?php

    function execute(callable $callback, string $name): void {

        echo $callback($name);

    }


    // $callback funksiyası Salam, Rəşad! şəklində nəticə qaytarır, amma execute funksiyasının özü void tipli olduğu üçün 
    // heç bir dəyər qaytarmır. Sadəcə, echo ilə callback funksiyasından gələn nəticə çap olunur.
    execute(function($name) {
        return "Salam, $name!";
    }, "Rəşad");                    // Salam, Rəşad!

        

?>



