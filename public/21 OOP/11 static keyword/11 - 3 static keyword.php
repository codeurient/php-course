<?php

    // Static ilə Normal Property və Method-un Fərqi

    class Example {
        public static $staticVar = 0; // Static property
        public $normalVar = 0;       // Normal property
    
        public static function staticMethod() {
            echo "This is a static method.";
        }
    
        public function normalMethod() {
            echo "This is a normal method.";
        }
    }
    
    // Static property və method obyekt tələb etmir
    Example::$staticVar = 10;
    Example::staticMethod();
    
    
    // Normal property və method obyekt tələb edir
    $instance = new Example();
    $instance->normalVar = 5;
    $instance->normalMethod();
    
    


?>