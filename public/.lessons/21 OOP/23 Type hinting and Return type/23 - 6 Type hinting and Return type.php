<!-- 


   Arrays və Objects ilə Type Hinting

    
-->


<?php

    function sumArray(array $numbers): int {
        
        return array_sum($numbers);
        
    }

    echo sumArray([1, 2, 3, 4]); // Çap edəcək: 10

   



?>



