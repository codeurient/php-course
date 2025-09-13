<!-- 

        Trait-lərdə Property-lərin İstifadəsi
        Trait-lərdə property elan edilə bilər və class-lar bu property-ləri istifadə edə bilər.


-->

<?php

// Ancaq Trait icinde yazilan eyni adda property, Class icinde yaradilsa xeta verər.
trait MyTrait {
        public $name = "Trait User";
    
        public function displayName() {
            echo $this->name;
        }
    }
    
     
    class MyClass {
        use MyTrait;
        
    }
    
    $obj = new MyClass();
    echo $obj->name;       // Çap edəcək: Trait User
    $obj->displayName();   // Çap edəcək: Trait User
    
    

?>