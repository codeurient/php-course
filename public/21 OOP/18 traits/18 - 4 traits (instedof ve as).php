<!-- 

    Trait-lərdə Konfliktlərin Həlli
    Əgər birdən çox trait-də eyni adlı metod varsa, insteadof və as açar sözlərindən istifadə edilir.


-->

<?php

                    
        trait TraitA {
                public function greet() {
                echo "Bu TraitA-dan salamdır!";
                }
        }
        
        trait TraitB {
                public function greet() {
                echo "Bu TraitB-dən salamdır!";
                }
        }
        
        class MyClass {
                use TraitA, TraitB {
                TraitA::greet insteadof TraitB; // TraitA metodunu seçirik
                TraitB::greet as sayHello;      // TraitB metodunu başqa adla istifadə edirik
                }
        }
        
        $obj = new MyClass();
        $obj->greet();     // Çap edəcək: Bu TraitA-dan salamdır!
        $obj->sayHello();  // Çap edəcək: Bu TraitB-dən salamdır!
    
    

?>