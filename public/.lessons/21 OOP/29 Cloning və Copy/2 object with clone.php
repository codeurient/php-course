<!-- 

Clone etmək üçün, clone operatoru istifadə olunur.

Clone istifadə edildiyi üçün $object1 və $object2 tamamilə müstəqil obyektlərdir. Birindəki dəyişiklik digəri üçün təsirli deyil.

-->

<?php

// Clone ilə obyektin surətinin yaradılması


$object1 = new stdClass();
$object1->name = "Object 1";



$object2 = clone $object1; // Obyektin surəti yaradılır
$object2->name = "Object 2";



echo $object1->name; // Object 1
echo $object2->name; // Object 2



