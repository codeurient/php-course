<!-- 
 

    Bir class eyni adda birdən çox interface implement edə bilmez.


-->


<?php

    interface InterfaceA {
        const GREETING = "Salam!";
    }

    interface InterfaceB {
        const GREETING = "Hello!";
    }

    class MyClass implements InterfaceA, InterfaceB {
        public function sayHello() {
            echo InterfaceA::GREETING; // Xeta
            echo InterfaceB::GREETING; // Xeta
        }
    }

    $obj = new MyClass();
    $obj->sayHello();







?>