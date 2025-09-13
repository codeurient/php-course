<!-- 

    Dinamik Obyekt Yaratmaq


-->

<?php

    class DynamicClass {
        public function sayHello() {
            echo "Salam, Dinamik Dünya!";
        }
    }

    $reflection = new ReflectionClass('DynamicClass');
    
    $instance = $reflection->newInstance();
    
    $instance->sayHello();
    


