<!-- 

Trait-lərdə Metodların Override Edilməsi
Eyni metod adı həm trait-də, həm də class-da varsa, class-dakı metod üstünlük təşkil edir.


-->

<?php

                    

        trait MyTrait {
                public function greet() {
                        echo "Trait-dən salam!";
                }
        }
        

        class MyClass {
                use MyTrait;
        
                public function greet() {
                        echo "Class-dan salam!";
                }
        }
        
        $obj = new MyClass();
        $obj->greet(); // Çap edəcək: Class-dan salam!
    

?>