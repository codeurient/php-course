<!-- 


-->

<?php

    // Bir class bir neçə interface implement edə bilər

    
    // Birinci interface
    interface Engine {
        public function start();
    }

    // İkinci interface
    interface Fuel {
        public function refuel($liters);
    }

    // Car class-ı hər iki interface-i implement edir
    class Car implements Engine, Fuel {
        private $fuelLevel = 0;

        public function start() {
            if ($this->fuelLevel > 0) {
                echo "Masin işə düşdü. <br>";
            } else {
                echo "Yanacaq yoxdur. Masini işə salmaq mümkün deyil!  <br>";
            }
        }

        public function refuel($liters) {
            $this->fuelLevel += $liters;
            echo "Yanacaq dolduruldu: $liters litr. Hazirki səviyyə: $this->fuelLevel litr.  <br>";
        }
    }

    // Obyekt yaradılır
    $car = new Car();
    $car->start();            // Nəticə: Yanacaq yoxdur...
    $car->refuel(20);         // Nəticə: Yanacaq dolduruldu: 20 litr...
    $car->start();            // Nəticə: Maşın işə düşdü.


?>