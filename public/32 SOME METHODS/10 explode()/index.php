<!-- 


Sintaksis: explode(string $separator, string $string, int $limit = PHP_INT_MAX)
Özət: Sətiri separator vasitəsilə massivə çevirir.


-->


<?php



$text = "apple, banana, orange";
$array = explode(",", $text);
print_r($array); //  Array ( [0] => apple [1] => banana [2] => orange )



?>