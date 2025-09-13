<!-- 

    PHP-də Reflection API, kodunuzun quruluşunu (class-lar, method-lar, property-lər, və s.) proqram daxilində
    analiz etmək və ya idarə etmək üçün istifadə olunan bir mexanizmdir. Bunun sayəsində kodunuz haqqında "meta-məlumatları" əldə edə və onları dinamik şəkildə dəyişə bilərsiniz.



    Reflection API, xüsusilə:
        - Kodun strukturunu öyrənmək üçün,
        - Dinamik olaraq obyektlər və class-larla işləmək üçün,
        - Testlər yazmaq və ya depolama (debugging) məqsədilə faydalıdır.



    Reflection API-nin əsas class -lari:
        ReflectionClass	          - Bir class haqqında məlumat əldə etmək.
        ReflectionMethod	      - Bir metod haqqında məlumat əldə etmək.
        ReflectionProperty	      - Bir property haqqında məlumat əldə etmək.
        ReflectionFunction	      - Bir funksiya haqqında məlumat əldə etmək.
        ReflectionParameter	      - Metod və ya funksiyanın parametrlərini öyrənmək.
        ReflectionObject	      - Bir obyekt haqqında məlumat əldə etmək.
-->


<?php

    class TestClass {
        public $name;
        private $age;

        public function sayHello() {
            echo "Salam, Dünya!";
        }
    }

    $reflection = new ReflectionClass('TestClass');

    echo "Class adi: " . $reflection->getName() . "<br>";

    echo "Public property-lər:<br>";

    echo "<pre>";
        print_r( $reflection->getProperties(ReflectionProperty::IS_PUBLIC) );
    echo "</pre>";