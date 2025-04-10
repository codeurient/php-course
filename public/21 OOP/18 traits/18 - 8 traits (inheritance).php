<!-- 

        Traits və Inheritance (Miras)
        Trait-lər miras ilə yanaşı istifadə edilə bilər. Əgər trait-in metodu və parent class-ın metodu üst-üstə düşərsə, trait üstünlük təşkil edir.

-->

<?php

        class ParentClass {
                public function sayHello() {
                        echo "Parent class-dan salam!";
                }
        }
        
        trait MyTrait {
                public function sayHello() {
                        echo "Trait-dən salam!";
                }
        }
        
        class ChildClass extends ParentClass {
                use MyTrait;
        }
        
        $obj = new ChildClass();
        $obj->sayHello(); // Trait-dən salam!


        $obj2 = new ParentClass();
        $obj->sayHello(); // Trait-dən salam!
?>