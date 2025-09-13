<!-- 

        Class içində yaradılan property -ni Trait içində istifadə edirik. Ancaq bu çox nadir bir haldır. 
        

-->

<?php

        trait MyTrait {
                public function displayName() {
                        echo $this->name;  // Property class içində yaradılıbdır.
                }
        }


        
        class MyClass {
                use MyTrait;
                
                public $name = "Class User";  // Class içindəki property
        }
        
        $obj = new MyClass();
        echo $obj->name;      // Class User
        $obj->displayName();  // Class User
    
    
    

?>