<!-- 

    Parent Metodundan İstifadə (parent::)

    parent:: qaydasindan istifade ederek ana class -ın metodunu usaq class içində istifadə edə bilərik. 

-->

<?php


        class Animal {
            public function sound() {
                echo "Heyvan səs cixarir. <br>";
            }
        }

        class Dog extends Animal {
            public function sound() {
                parent::sound();            // Parent class-ın metodu
                echo "İt hürür. <br>";
            }
        }

        $dog = new Dog();
        $dog->sound();      // Heyvan səs çıxarır.
                            // İt hürür.
        
       



?>