<?php
        class Person {
            public $eded1;  
            public $eded2;   

            public function topla() {
                return $this->eded1 + $this->eded2;
            }

            public function vur() {
                echo $this->topla() * $this->topla() ;
            }

        }


        $person1 = new Person();
        $person1->eded1 = 3;
        $person1->eded2 = 4;
        
        $person1->vur(); 
?>