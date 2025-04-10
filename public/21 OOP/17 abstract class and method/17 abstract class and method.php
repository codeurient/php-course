<!-- 

        Abstract Class nədir?
                - Abstract class obyekt yaradılmayan (instansiya alınmayan) bir class-dır.
                - Sadəcə digər class-lar tərəfindən inheritance (extends) edilə bilər.
                - Abstract class həm konkret metodlar (daxili məzmunu olan metodlar), həm də abstract metodlar (daxili məzmunu olmayan metodlar) ehtiva edə bilər.



        Abstract Method nədir?
                - Abstract method daxili məzmunu olmayan, sadəcə təyin edilən metodlardır.
                - Abstract method abstract class daxilində olmalıdır.
                


        - Abstract Class: "Həm hazır kod verirəm, həm də müəyyən şərtlər qoyuram."
        - Interface: "Mən yalnız şərt qoyuram, implement edən class-lar bunu özləri həll edəcək."



        Üstünlüklər və məhdudiyyətlər:
                - Abstract Class:
                        Sadəcə bir ana class extends edilə bilər.
                        Həm konkret metod, həm abstract metod ehtiva edə bilir.
                - Interface:
                        Çox sayda implement edilə bilər.
                        Daha sərt strukturdur, kod daxilində məzmun təqdim edə bilmir
-->

<?php

        // Abstract class təyin edilir
        abstract class Shape {
                // Abstract method (məzmun yoxdur)
                abstract public function area();
        
                // Konkret method (məzmun var)
                public function describe() {
                        return "Bu bir şəkil obyektidir.";
                }
        }
        
        // Rectangle (düzbucaqlı) class-ı Shape-dən extends edir
        class Rectangle extends Shape {
                private $width;
                private $height;
        
                public function __construct($width, $height) {
                        $this->width = $width;
                        $this->height = $height;
                }
        
                // Abstract method-un məzmunu yazılır
                public function area() {
                        return $this->width * $this->height;
                }
        }
        
        // Circle (dairə) class-ı Shape-dən extends edir
        class Circle extends Shape {
                private $radius;
        
                public function __construct($radius) {
                        $this->radius = $radius;
                }
        
                // Abstract method-un məzmunu yazılır
                public function area() {
                        return pi() * $this->radius ** 2;
                }
        }
        
        // İstifadə
        $rectangle = new Rectangle(4, 5);
        echo $rectangle->area();        // Nəticə: 20
        echo $rectangle->describe();    // Nəticə: Bu bir şəkil obyektidir.
        
        $circle = new Circle(3);
        echo $circle->area();           // Nəticə: 28.27
        echo $circle->describe();       // Nəticə: Bu bir şəkil obyektidir.
    








?>