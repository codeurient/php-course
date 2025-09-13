<!-- 


-->

<?php
        // __call()

        class MyClass {
            public function __call($name, $arguments) {
                echo "Metod '$name' mövcud deyil.<br>";
                
                print_r($arguments); // Parametrləri çap edir: Array ( [0] => Param1 [1] => Param2 )
            }
        }
        
        $obj = new MyClass();
        $obj->undefinedMethod("Param1", "Param2"); // Çap edəcək: Metod 'undefinedMethod' mövcud deyil.
        
?>



