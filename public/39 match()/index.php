<!-- 
 

match ifadəsi şəraitlərin müqayisəsi üçün istifadə edilir. PHP 8-də əlavə edilmiş daha müasir bir ifadədir.


Match -in işləmə prinsipi demək olarki Switch ilə eynidir. 


match ifadəsi bir dəyərin müəyyən şəraitlərə uyğunluğunu yoxlayır və müvafiq bir dəyəri qaytarır.
    Xüsusiyyətləri:
        - Dəqiq Tip Uyğunluğu (Strict Comparison): match ifadəsi tip dəqiqliyi ilə müqayisə aparır (===).
        - Geri Dəyər Döndərir: Hər bir şəraitdə bir dəyər döndərmək tələb olunur.
        - Varsayılan (Default) Məcburidir: Əgər heç bir şərait uyğun gəlmirsə, default mütləq qeyd edilməlidir.
        - Bir Sətirlik Syntax: Daha qısa və oxunaqlıdır.
        - Yan Təsir (Side Effect) Yoxdur: Kodda əlavə əməliyyatlar yerinə yetirmək üçün nəzərdə tutulmayıb.



Fərqlər:
    Xüsusiyyət	                                    match	                                            switch
    Müqayisə Növü	                                Tip dəqiqliyi (===)	                                Geniş uyğunluq (==)
    Geri Dəyər Döndərmə	                            Məcburi	                                            İxtiyari
    Varsayılan Şərait	                            Məcburi (default)	                                İxtiyari
    Syntax	                                        Qısa və oxunaqlı	                                Uzun və qarışıq ola bilər
    break Lazım mı?	                                Lazım deyil	                                        Lazımdır
    Yan Təsirlər	                                Yox	                                                Var (əmrlər icra edilə bilər)



Hansını Seçməli?
    - Qısa və oxunaqlı kod istəyirsinizsə, match ifadəsi daha yaxşıdır.
    - Əgər əmrlər icra etmək və ya geniş uyğunluğu istifadə etmək lazımdırsa, switch daha uyğundur.
    - PHP 8+ istifadə edirsinizsə və çox sayda dəyər müqayisə edirsinizsə, match daha effektiv bir seçimdir.

    
-->


<?php
// 1
$food = 'cake';

$return_value = match ($food) {
    'apple' => 'This food is an apple',
    'bar' => 'This food is a bar',
    'cake' => 'This food is a cake',
};

var_dump($return_value);




// 2
$age = 18;

$output = match (true) {
    $age < 2 => "Baby",
    $age < 13 => "Child",
    $age <= 19 => "Teenager",
    $age >= 40 => "Old adult",
    $age > 19 => "Young adult",
};

var_dump($output);







//  3 match ilə mümkün olmayan bir nümunə:
$action = 'save';

// Bu kod işləməyəcək, çünki match daxilində əmrlər icra etmək olmaz.
$result = match ($action) {
    'save' => file_put_contents("data.txt", "Example data"), // Xəta verəcək
    'delete' => unlink("data.txt"), // Xəta verəcək
    default => 'No valid action',
};
