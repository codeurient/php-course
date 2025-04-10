<!-- 
 
    Obyektin icinde xasselere ve metodlara THİS acar sozu ile muraciet edilir ve onlari cagirmaq ucun -> simvolundan istifade edilir.
    
    Obyektin xaricinde xasse ve obyektlere muraciet etmek ucun -> simvolundan istifade edilir.

-->


<?php
        class Person {
            public $name;  
            public $age;   

            public function introduce() {
                echo "Mənim adim " . $this->name . " və mənim yasim " . $this->age . "dir.";
            }

        }


        $person1 = new Person();
        $person1->name = "Aysel";
        $person1->age = 25;
        $person1->introduce(); // Nəticə: Mənim adım Aysel və mənim yaşım 25-dir.
?>