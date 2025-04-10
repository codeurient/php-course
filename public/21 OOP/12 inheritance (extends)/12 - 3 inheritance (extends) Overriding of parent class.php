<!-- 

    Parent Class-ın Overriding (Yenidən Yazılması)
    Child class, parent class-dakı metodu özünə uyğun olaraq dəyişdirə bilər.

-->

<?php

    class Animal {
        public function sound() {
            echo "Heyvan səs cixarir. <br>";
        }
    }

    class Cat extends Animal {
        public function sound() {
            echo "Pişik miyoldayir. <br>";
        }
    }

    $cat = new Cat();
    $cat->sound();      // Nəticə: Pişik miyoldayır.




?>