<!-- 

    Return Types 

-->

<?php

    function getGreeting(string $name): string {
        return "Salam, $name!";
    }

    echo getGreeting("Rəşad"); // Salam, Rəşad!

    // function getGreeting(123): string { ... } // Səhv verəcək, çünki giriş tipi səhvdir.


   



?>



