<!-- 
        Polymorphism çox vaxt interface-lər vasitəsilə həyata keçirilir:
-->

<?php

    // Interface
    interface Shape {
        public function area();
    }

    // Dairə class-ı
    class Circle implements Shape {
        private $radius;
        public function __construct($radius) {
            $this->radius = $radius;
        }
        public function area() {
            return pi() * $this->radius ** 2;
        }
    }

    // Düzbucaqlı class-ı
    class Rectangle implements Shape {
        private $width, $height;
        public function __construct($width, $height) {
            $this->width = $width;
            $this->height = $height;
        }
        public function area() {
            return $this->width * $this->height;
        }
    }

    // Obyektlər yaradıb istifadə edirik
    $circle = new Circle(5);
    $rectangle = new Rectangle(4, 6);

    echo "Dairənin sahəsi:      " .     $circle->area()     .   '<br>';     // Nəticə: 78.54
    echo "Duzbucaqlinin sahəsi: " .     $rectangle->area()  .   '<br>';     // Nəticə: 24



?>