<html lang="en">
<head>
</head>
<body>




<?php

// PHP-də dəyişənin tipini öyrənmək üçün ən çox istifadə edilən funksiyalardan biri gettype()-dir. Bu funksiya, verilən dəyişənin tipini göstərir.

    $var1 = 5;                      // integer
    $var2 = "Hello, world!";        // string
    $var3 = 3.14;                   // float
    $var4 = true;                   // boolean
    $var5 = [];                     // array

    echo gettype($var1) . '<br>';            // integer
    echo gettype($var2) . '<br>';            // string
    echo gettype($var3) . '<br>';            // double (float ilə eyni mənanı verir)
    echo gettype($var4) . '<br>';            // boolean
    echo gettype($var5) . '<br>';            // array

?>





</body>
</html>