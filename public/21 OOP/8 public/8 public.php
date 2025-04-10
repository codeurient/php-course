<?php

    class Test {

        public $name = "Public Property"; // Public property


        public function sayHello() {    // Public method

            echo "Hello from public method!";

        }

    }

    $obj = new Test();
    
    echo $obj->name; // Hər yerdən əlçatandır
    
    $obj->sayHello(); // Hər yerdən istifadə edilə bilər


?>