<!-- 

    Property-ləri Dəyişdirmək

    Reflection API performans baxımından baha başa gəlir. Ona görə də yalnız lazım olduğu yerlərdə istifadə edilməlidir.
-->

<?php

    class User {
        private $name = "Anar";
    }

    $reflection = new ReflectionClass('User');

    $property = $reflection->getProperty('name');


    // protected veya private bir property-ni əl çatan edir.
    $property->setAccessible(true);


    
    $instance = new User();

    
    echo "Əvvəl: " . $property->getValue($instance) . "<br>";

    $property->setValue($instance, "Elvin");


    echo "Sonra: " . $property->getValue($instance) . "<br>";

?>




