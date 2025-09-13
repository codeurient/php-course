<!-- 


Sintaksis: json_decode(string $json, bool $assoc = false)
Özət: JSON formatlı mətnləri PHP massivinə və ya obyektinə çevirir.


-->


<?php


$json = '{"name":"John","age":30}';
$data = json_decode($json, true);
print_r($data);     // Array ( [name] => John [age] => 30 )





?>