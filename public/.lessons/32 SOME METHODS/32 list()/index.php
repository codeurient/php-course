<!--

    list() funksiyası PHP-də bir sıra (array) dəyərlərini dəyişənlərə bir anda təyin etmək üçün istifadə olunur. 
    Yalnız indeksləşdirilmiş massivlərdə işləyir: list() yalnız sıfırdan başlayan indeksli massivlərlə işləyir. Assosiativ massivlərlə istifadə oluna bilmir.

-->




<?php

// 1
$numbers = [1, 2, 3];
list($a, $b, $c) = $numbers;

echo $a; // 1
echo $b; // 2
echo $c; // 3






// 2
function getUser() {
    return ['John', 'Doe', 25];
}
list($firstName, $lastName, $age) = getUser();

echo $firstName; // John
echo $lastName;  // Doe
echo $age;       // 25





// 3
$user = ['firstName' => 'John', 'lastName' => 'Doe'];
list($firstName, $lastName) = $user; // Səhv. Bu, işləməz. Assosiativ Massivdə İstifadə Edilə Bilmir. 





// 4 Alternativ Yanaşma: [] Sürətli İstifadə: PHP 7.1 və daha yuxarı versiyalarda, list() əvəzinə kvadrat mötərizə [ ] istifadə edə bilərsiniz:
$numbers = [100, 200, 300];
[$a, $b, $c] = $numbers;

echo $a; // 100
echo $b; // 200
echo $c; // 300





?>
