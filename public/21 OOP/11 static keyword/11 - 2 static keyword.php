<?php

    // Misal: Static Method

    class Math {
        public static function add($a, $b) {
            return $a + $b;                     // Static method
        }
    }
    
    // Obyekt yaratmadan birbaşa istifadə edilir
    $result = Math::add(5, 10);
    echo $result;                               // Nəticə: 15
    


?>