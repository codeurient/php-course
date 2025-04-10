<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <?php
    // 1. Arifmetik Operatorlar
    $result1 = 5 + 3;               // 8
    $result2 = 10 - 3;              // 7
    $result3 = 4 * 5;               // 20
    $result4 = 20 / 4;              // 5
    $result5 = 10 % 3;              // 1







    // 2. Müqayisə Operatorları
    // <            - Kiçikdir.
    // <=           - Kiçik və ya bərabərdir.
    // >            - Böyükdür.
    // >=           - Böyük və ya bərabərdir.
    // ==           - Bərabərdir (dəyəri müqayisə edir).
    // !=           - Bərabər deyil (dəyəri müqayisə edir).
    // <>           - Bərabər deyil (alternativ yazılış).  <> operatoru PHP-də bərabərsizliyi yoxlamaq üçün istifadə olunur və eyni məqsədlə istifadə edilən != operatorunun alternatividir.
    // ===          - Bərabərdir və tipi də eynidir.
    // !==          - Bərabər deyil və tipi də fərqlidir.
    // <=>          - (Spaceship) Operatoru: 
    $result6 = (5 == 5);             // true
    $result7 = (5 === "5");          // false
    $result8 = (5 != 4);             // true
    $result9 = (5 < 10);             // true
    $result10 = (5 <= 5);             // true

    // <=> (Spaceship) operatoru PHP 7 və sonrakı versiyalarda mövcuddur. Bu operator iki dəyər arasında müqayisə aparır və aşağıdakı nəticələri qaytarır:
    $a < $b;     // olduqda -1 qaytarır.
    $a == $b;    // olduqda  0 qaytarır.
    $a > $b;     // olduqda  1 qaytarır.




    // 3. Logical Operatorlar
    $result11 = (true && false);      // false
    $result12 = (true || false);      // true
    $result13 = !true;                // false






    // 4. Qısaldılmış Operatorlar (Assignment Operators)
    $x = 10;
    $x += 5;                        // $x = $x + 5
    $x -= 2;                        // $x = $x - 2






    // 5. Bitwise Operatorlar: PHP-də bitwise operatorlar ədədlərin bit səviyyəsində müqayisə və əməliyyatlarını yerinə yetirir.
    $result14 = 5 & 3;        // 1        - AND (&)
    $result15 = 5 | 3;        // 7        - OR  (|)
    $result16 = 5 ^ 3;        // 6        - XOR (^)
    $result17 = ~5;           // -6       - NOT (~)

    // AND ( | ): Bitwise AND operatoru. Hər iki bit 1 olduqda nəticə 1 olur.
    echo 5 | 3;  // 7 (0101 | 0011 = 0111)

    // OR ( & ): Bitwise OR operatoru. Ən az bir bit 1 olduqda nəticə 1 olur.
    echo 5 & 3;  // 1 (0101 & 0011 = 0001)

    // XOR ( ^ ): Bitwise XOR operatoru. Yalnız bir bit 1 olduqda nəticə 1 olur (hər iki bit eyni olduqda nəticə 0 olur).
    echo 5 ^ 3;  // 6 (0101 ^ 0011 = 0110)

    // NOT ( ~ ): Bitwise NOT operatoru, bitləri tərsinə çevirir (1-ləri 0-a, 0-ları 1-ə çevirir). Symbol tilda. 
    echo ~5;  // -6 (Çünki 5 binar olaraq 0101-dir və tərsinə çevrilir)

    // <<: Sol tərəfə bit shift (bitləri sola hərəkət etdirir).
    echo 5 << 1;  // 10 (0101 << 1 = 1010)

    // >>: Sağ tərəfə bit shift (bitləri sağa hərəkət etdirir).
    echo 5 >> 1;  // 2 (0101 >> 1 = 0010)






    // 6. Digər Operatorlar
    $result18 = "Salam" . " dünya!";                  // String birləşdirmə (.)
    $result19 = ($age > 18) ? "Böyük" : "Kiçik";      // Ternary Operatoru (?:)

    $result20 = $undefinedVariable ?? "Default";    // Null Coalescing (??): Null dəyəri yoxlamaq üçün istifadə olunur. Əgər birinci operand 
                                                    // müəyyən olunub və null deyilsə, həmin operandın dəyəri qaytarılır. Əks halda, növbəti 
                                                    // operand yoxlanılır və eyni qaydada davam edir. Bütün operandlar null və ya müəyyən olunmayıbsa, 
                                                    // sonuncu operand qaytarılır: $variable = $value1 ?? $value2 ?? $value3;

    $name = null;
    $defaultName = "Her hansisa bir deyer";

    $result21 = $name ?? $defaultName;
    echo $result21; // Her hansisa bir deyer


                                                    

    
    // 7. Ferqli say sistemlerinden olan deyerleride toplamaq ve.s mumkundur. Meselen HEX:
    echo 0xA   +   0xF;     // 25





    // 8. Increment (++)
    // PHP-də ++ operatoru bir dəyişəni 1 artırmaq üçün istifadə olunur. Bu operator həm pre (ön) həm də post (sonra) şəkildə istifadə edilə bilər.
    $x = 5;
    echo ++$x;  // 6
    echo $x++;  // 6, sonra $x 7 olur
    echo $x;    // 7

    



    // 9. Decrement (--)
    $x = 5;
    echo --$x;  // 4
    echo $x--;  // 4, sonra $x 3 olur
    echo $x;    // 3
    




    // 10.   Ternary Operator (?:)    və     Null Coalescing Operator (??):
    // ?:    Ternary (üçlü) operatoru, şərtli ifadələr üçün istifadə olunur. Əgər şərt doğru olarsa, birinci dəyəri, yoxsa ikinci dəyəri qaytarır.
    $age = 20;
    echo     $age >= 18     ?    'Yetkin'      :     'Uşaqlar';
    


    // ??    Null coalescing operatoru, bir dəyişənin dəyəri mövcud deyilsə, ikinci dəyəri qaytarır.
    $name = null;
    echo $name ?? 'Ad daxil edilməyib';     // 'Ad daxil edilməyib'





    // 11 PHP-də goto operatoru, kod axışını müəyyən bir nöqtəyə keçirmək üçün istifadə olunur. Bu, proqramın istənilən hissəsindən başqa bir yerə 
    // keçməyi təmin edən bir komanda növüdür. Lakin goto operatorunun istifadəsi, adətən yaxşı proqramlaşdırma təcrübələrinə uyğun deyil, çünki bu, 
    // kodu daha çətin oxunur və izlənilir hala gətirə bilər.
    // Sintaksis:   goto label;
    // label bir identifikatordur və istənilən yerə keçmək istədiyiniz nöqtədir. Label adətən bir etiket olaraq istifadə edilir və ona : simvolu ilə müraciət olunur.
    echo "İlk sətrin baslangici   <br>";

    goto skip;  // "skip" etiketinə keç

    echo "Bu sətri keçəcək";

    skip:
    echo "Bu sətrin sonu <br>";


    ?>
    
</body>
</html>