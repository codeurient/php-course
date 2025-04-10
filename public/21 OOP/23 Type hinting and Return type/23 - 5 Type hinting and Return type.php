<!-- 


    Nullable Type Hinting

    
-->



<?php

    function greet(?string $name): string {

        
        return $name ? "Salam, $name!" : "Salam, qonaq!";


    }

    echo greet("Rəşad"); // Çap edəcək: Salam, Rəşad!
    echo greet(null);     // Çap edəcək: Salam, qonaq!




?>



