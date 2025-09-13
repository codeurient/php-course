<!-- 


Sintaksis: array_merge(array $array1, array $array2, ...)
Özət: İki və ya daha çox massivi birləşdirir.


-->


<?php


$array1 = ["a" => "apple"];
$array2 = ["b" => "banana"];
$result = array_merge($array1, $array2);
print_r($result); 





$test1 = ["a" => "apple", "b" => "banana"];
$test2 = ["b" => "apple"];
$result2 = array_merge($test1, $test2);
print_r($result); 

?>