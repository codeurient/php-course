<!-- 


Sintaksis: unset(mixed $var)
Özət: Dəyişəni silir.


-->


<?php
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);


$a = 10;
unset($a);
echo $a; // Xəta: Undefined variable.





?>