<!-- 


-->


<?php

    class Example {
        public function greet($name) {
            return "Salam, $name!";
        }
    }

    $reflection = new ReflectionMethod('Example', 'greet');

    
    echo "Metod adi: " . $reflection->getName() . "<br>";

    
    echo "Publicdir? " . ($reflection->isPublic() ? "Bəli" : "Xeyr") . "<br>";
