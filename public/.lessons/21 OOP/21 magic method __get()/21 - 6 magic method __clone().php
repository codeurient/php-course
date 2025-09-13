<!-- 


-->

<?php

        // __clone()
        class MyClass {
            public $name;

            public function __construct($name) {
                $this->name = $name;
            }

            public function __clone() {
                $this->name = "Klonlanmiş " . $this->name;
            }
        }

        $obj1 = new MyClass("Obyekt1");
        $obj2 = clone $obj1;

        echo $obj1->name . '<br>'; // Obyekt1
        echo $obj2->name . '<br>'; // Klonlanmış Obyekt1

?>



