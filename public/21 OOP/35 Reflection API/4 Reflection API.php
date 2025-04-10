<!-- 

    Funksiya Parametrlərini Araşdırmaq


-->

<?php


    function add($a, $b) {
        return $a + $b;
    }

    $reflection = new ReflectionFunction('add');
    echo "Funksiya adi: " . $reflection->getName() . "<br>";

    $params = $reflection->getParameters();

    foreach ($params as $param) {
        echo "Parametr adi: " . $param->getName() . "<br>";
    }


?>



