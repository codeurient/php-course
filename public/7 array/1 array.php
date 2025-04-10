<html lang="en">
<head>
</head>
<body>
    <!--    

    PHP-də array (massiv) verilənlər strukturu birdən çox dəyəri bir yerdə saxlamaq üçün istifadə olunur. PHP-də massivlər dinamikdir, 
    yəni onların ölçüsü dəyişə bilər, və həm indeksli, həm də assosiativ ola bilərlər.

    PHP-də array (massiv) ilə işləmək üçün bir çox metod və funksiya mövcuddur. Bu funksiyalar array-ləri idarə etmək, 
    dəyişdirmək, yoxlamaq və daha çox əməliyyat aparmaq üçün istifadə edilir. 


    Array Yaratmaq və Strukturla İşləmək
        array() - Yeni array yaradır.
        [] - Qısa sintaksis ilə yeni array yaradır.


    Array Elementlərinə Giriş
        $array[key] - Müəyyən açar ilə elementə daxil olmaq.
        isset($array[key]) - Array elementinin mövcudluğunu yoxlamaq.
        unset($array[key]) - Array-dən elementi silmək.


    Element Əlavə Etmək
        $array[] = value; - Array-ə yeni element əlavə etmək.
        array_push($array, $value1, $value2, ...) - Array-in sonuna bir və ya daha çox element əlavə etmək.
        $array[key] = value; - Müəyyən açarla element əlavə etmək.

            
    Array-dən Element Silmək
        array_pop($array) - Sonuncu elementi silmək və geri qaytarmaq.
        array_shift($array) - Birinci elementi silmək və geri qaytarmaq.
        unset($array[key]) - Müəyyən açar ilə elementi silmək.
        array_splice($array, $offset, $length, $replacement) - Array-dən müəyyən hissəni çıxarmaq və ya dəyişdirmək.


    Array Məlumatını Yoxlamaq
        count($array) - Array-in element sayını qaytarır.
        sizeof($array) - count() ilə eyni funksiyanı yerinə yetirir.
        in_array($needle, $array, $strict) - Elementin array-də olub-olmadığını yoxlayır.
        array_key_exists($key, $array) - Müəyyən açarın array-də mövcudluğunu yoxlayır.
        is_array($var) - Dəyişənin array olub-olmadığını yoxlayır.
        array_is_list($array) - Array-in yalnız ardıcıl rəqəmli açarlardan ibarət olub-olmadığını yoxlayır (PHP 8.1+).


    Array Açarlı və Dəyərləri ilə İşləmək
        array_keys($array, $search_value, $strict) - Array-in bütün açarlarını qaytarır.
        array_values($array) - Array-in bütün dəyərlərini qaytarır.
        array_flip($array) - Array-in açarlarını və dəyərlərini dəyişdirir.
        array_combine($keys, $values) - İki array-i açar və dəyər kimi birləşdirir.


    Array-lərin Sıralanması
        sort($array) - Array-i artan qaydada sıralayır (dəyərlərə əsasən).
        rsort($array) - Array-i azalan qaydada sıralayır (dəyərlərə əsasən).
        asort($array) - Array-i artan qaydada sıralayır (dəyərlərə əsasən, açarları saxlayır).
        arsort($array) - Array-i azalan qaydada sıralayır (dəyərlərə əsasən, açarları saxlayır).
        ksort($array) - Array-i açarlarına görə artan qaydada sıralayır.
        krsort($array) - Array-i açarlarına görə azalan qaydada sıralayır.
        usort($array, $callback) - İstifadəçi təyin etdiyi funksiya ilə sıralayır.
        uksort($array, $callback) - Açarları istifadəçi təyin etdiyi funksiya ilə sıralayır.
        uasort($array, $callback) - Dəyərləri istifadəçi təyin etdiyi funksiya ilə sıralayır.
        natcasesort($array) - Təbii qaydada sıralayır (böyük-kiçik hərfləri nəzərə almadan).


    Array-dən Yeni Array Yaratmaq
        array_merge($array1, $array2, ...) - Bir neçə array-i birləşdirir.
        array_replace($array1, $array2) - Array-də dəyərləri dəyişdirir.
        array_slice($array, $offset, $length, $preserve_keys) - Array-dən bir hissə çıxarır.
        array_map($callback, $array) - Hər elementə funksiya tətbiq edərək yeni array yaradır.
        array_filter($array, $callback, $mode) - Şərtə uyğun elementlərdən yeni array yaradır.
        array_reduce($array, $callback, $initial) - Array-i vahid dəyərə qədər azaldır.


    Array-ləri Müqayisə Etmək
        array_diff($array1, $array2, ...) - Array-lər arasındakı fərqləri qaytarır.
        array_intersect($array1, $array2, ...) - Array-lərin kəsişməsini qaytarır.
        array_diff_key($array1, $array2) - Açarları müqayisə edərək fərqi qaytarır.
        array_intersect_key($array1, $array2) - Açarları müqayisə edərək kəsişməni qaytarır.


    Array-də Hesablamalar
        array_sum($array) - Array-dakı rəqəmlərin cəmini qaytarır.
        array_product($array) - Array-dakı rəqəmlərin hasilini qaytarır.
        Array-də Təkrarlar və Bənzərliklər
        array_unique($array) - Array-də təkrarlanan dəyərləri çıxarır.
        array_count_values($array) - Dəyərlərin neçə dəfə təkrarlandığını qaytarır.


    Array-i Çevirmək
        implode($separator, $array) - Array-i sətrə çevirir.
        explode($separator, $string) - Sətri array-ə çevirir.


    Array-lə Dövrələr
        foreach - Array üzərində iterasiya etmək üçün istifadə olunur.


    Digər Funksiyalar
        array_reverse($array, $preserve_keys) - Array-in elementlərini tərsinə çevirir.
        shuffle($array) - Array-in elementlərini təsadüfi qaydada qarışdırır.
        array_walk($array, $callback, $userdata) - Hər elementə funksiya tətbiq edir.
        array_walk_recursive($array, $callback, $userdata) - Dərinlikdə hər elementə funksiya tətbiq edir.
        compact($var1, $var2, ...) - Dəyişənlərdən array yaradır.
        extract($array, $flags) - Array-dən dəyişənlər yaradır.
        range($start, $end, $step) - Məlum diapazonda array yaradır.


    Konstantlar
        ARRAY_FILTER_USE_KEY - array_filter üçün açarları filtrasiya etmək.
        ARRAY_FILTER_USE_BOTH - array_filter üçün həm açarları, həm də dəyərləri filtrasiya etmək.

-->



<?php

    // 1) İndeksli Massiv (Indexed Array): Bu massivlərdə hər bir element avtomatik olaraq rəqəmli indekslə təyin edilir. İndekslər sıfırdan başlayır.
    $fruits = ["alma", "armud", "banan"];
    echo $fruits[0]; 




    // 2) Bu massivlər iç-içə massivlərdən ibarət olur.
    $students = [
        "alma", "armud", "banan", ['kelem', 'sogan', 'yer koku']
    ];
    echo $students[3][2]; 



    // 3) Assosiativ Massiv (Associative Array): Bu tip massivlərdə açar (key) və dəyər (value) cütlükləri saxlanılır.
    $user = [
        "ad" => "Elçin",
        "yas" => 25,
        "email" => "elcin@example.com"
    ];
    echo $user["ad"]; 



    // 4) Çoxölçülü (Multi-dimensional) Massiv: Bu massivlər iç-içə massivlərdən ibarət olur.
    $students = [
        ["ad" => "Elçin", "yas" => 25],
        ["ad" => "Leyla", "yas" => 22],
        ["ad" => "Emin", "yas" => 30]
    ];
    
    echo $students[1]["ad"]; // Çıxış: Leyla
    


    // 5) İç-içə Array-lar (Nested Arrays) PHP-də array-lər başqa array-lərdən ibarət ola bilər. Bu, daha mürəkkəb strukturlar yaratmaq üçün istifadə olunur.
    $company = [
        "department1" => ["worker1", "worker2"],
        "department2" => ["worker3", "worker4"]
    ];
    
    echo $company["department1"][0]; 






    // 6
    $arr[0] = 16;
    echo "Text $arr[0] and some another text";          // Text 16 and some another text
    

    $arr2[0][0] = 16;
    echo "Text $arr2[0][0] and some another text";          // Xetali - Text 16[0] and some another text


    $arr3[0][0] = 16;
    echo "Text {$arr3[0][0]} and some another text";          // Dogru - Text 16 and some another text


    $arr4[0][0] = 16;
    echo "Text " . $arr4[0][0] .  " and some another text";           // Text 16 and some another text
?>





</body>
</html>