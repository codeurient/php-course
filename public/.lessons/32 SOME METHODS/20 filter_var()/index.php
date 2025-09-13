<!-- 


filter_var()
Sintaksis: filter_var(mixed $value, int $filter)
Özət: Dəyəri müxtəlif filtrlərdən keçirir (məs., email yoxlama).


-->


<?php


$email = "codeurient@gmail.com";


if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    
    echo "Valid email.";
    
}



?>