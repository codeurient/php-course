<!-- 

    Static Xassələr

-->

<?php


    class MyClass {
        public static $counter = 0;

        public function incrementCounter() {
            self::$counter++;
        }
    }

    MyClass::$counter = 5;              // Static xassəni birbaşa CLASS adı ilə istifadə edirik.
    echo MyClass::$counter . "<br>";    // 5

    $obj1 = new MyClass();
    $obj1->incrementCounter();

    echo MyClass::$counter;             // 6 (çünki static xassə ümumi olur).






?>



