<!-- 
 
        __construct() metodu, $person1 və $person2 obyektləri yaradılarkən avtomatik olaraq işə düşür.
        Constructor, obyektin $name və $age xüsusiyyətlərinə dəyərlər təyin edir.

-->


<?php

        class Person {

                public $name;
                public $age;
        
             

                public function __construct($name, $age) {

                        $this->name = $name;  
                        $this->age = $age;

                        echo "Obyekt yaradildi: {$this->name}, {$this->age} yasindadir. <br>";

                }

        }
    
        $person1 = new Person("Aysel", 25);  

        $person2 = new Person("Emin", 30);   


?>