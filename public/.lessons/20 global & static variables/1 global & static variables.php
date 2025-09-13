<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<!-- 
PHP-də funksiyalar daxilində dəyişənləri idarə etmək üçün GLOBAL və STATIC sözləri istifadə oluna bilər.

global: Funksiyalardan xaricdəki dəyişənlərə daxil olmaq üçün global sözünü istifadə edə bilərsiniz. -->


<?php

    $ad = 'Semed';
    function goster1() {
        global $ad; // Funksiya daxilindəki dəyişənə daxil olmaq.               global $ad = 'Bextiyar';   Bu cur yazaraq Global deyisene deyer vermek xetaya sebeb olur. 
        echo $ad; 
    }
    goster1();




    $soyad = 'Vurgun';
    function goster2() {
        $soyad = 'Vahabzade'; 
        echo $soyad; 
    }
    goster2();





    function say() {
        static $counter = 0; // Dəyər hər dəfə saxlanılır
        $counter++;
        echo $counter;
    }
    say(); // 1
    say(); // 2
    say(); // 3
?>





</body>
</html>