<!-- 

        Traits ilə Abstrakt Metodlar
        Trait içində abstrakt metod elan edilib, onun implementasiyası class tərəfindən yazıla bilər.

-->

<?php

    
        trait MyTrait {
                abstract public function greet(); // Abstrakt metod
        }
        
        class MyClass {
                use MyTrait;
        
                public function greet() {
                        echo "Abstrakt metodun implementasiyasi!";
                }
        }
        
        $obj = new MyClass();
        $obj->greet(); //  Abstrakt metodun implementasiyası!
    

?>