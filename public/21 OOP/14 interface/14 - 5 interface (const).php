<!-- 
 

    Bir class birdən çox interface implement edə bilər və hər bir interface-in sabitlərinə istinad edə bilər:


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
            echo InterfaceA::GREETING; // Çap edəcək: Salam!
            echo InterfaceB::GREETING; // Çap edəcək: Hello!
        }
    }

    $obj = new MyClass();
    $obj->sayHello();







?>