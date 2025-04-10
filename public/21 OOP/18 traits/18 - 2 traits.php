<!-- 




-->

<?php
        // Bir class-da birdən çox trait istifadə edilə bilər:
        
                
        trait TraitA {
                public function methodA() {
                        echo "Bu TraitA-dır!";
                }
        }
        
        trait TraitB {
                public function methodB() {
                        echo "Bu TraitB-dir!";
                }
        }
        


        class MyClass {
                use TraitA, TraitB; // İki trait istifadə edirik
        }
        
        
        $obj = new MyClass();
        $obj->methodA(); // Çap edəcək: Bu TraitA-dır!
        $obj->methodB(); // Çap edəcək: Bu TraitB-dir!
                    

    

?>