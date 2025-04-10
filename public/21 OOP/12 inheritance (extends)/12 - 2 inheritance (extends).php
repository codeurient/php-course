<?php

    class Vehicle {                 // vi : kl    - neqliyyat vasitesi
        public $brand;

        public function start() {
            echo $this->brand . " işə düşür. <br>";
        }
    }



    class Car extends Vehicle {
        public $seats;

        public function displaySeats() {
            echo $this->brand . " nəqliyyat vasitəsində " . $this->seats . " oturacaq var. <br>";
        }
    }

    $car = new Car();
    
    $car->brand = "BMW";
    $car->seats = 5;
    $car->start();       // Nəticə: BMW işə düşür.
    $car->displaySeats(); // Nəticə: BMW 5 oturacaq var.



?>