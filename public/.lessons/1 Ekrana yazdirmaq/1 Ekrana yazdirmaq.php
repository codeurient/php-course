<html lang="en">
    <!-- Məlumat çıxarmaq üçün istifadə olunan funksiyalar və üsullar: -->
<head>
    <!-- 8.    -->
    <title>   <?= 'Hello World!'  ?>   </title>
</head>
<body>

<?php
    // 1) Echo funksiya deyil, dil konstruksiyasıdır, buna görə mötərizə tələb etmir. Bir yaxud bir neçə dəyər yazdırmaq üçün istifadə edilir. 
    echo 'Echo text' . "<br/><br/>"; // Bir dəyər çap edir
    echo "Bir ", "Iki ", "Uc " . "<br/><br/>"; // Birdən çox dəyəri çap edir


    // 2) Dəyişənin dəyəri və tipi haqqında ətraflı məlumat çıxarır. Debug üçün istifadə olunur.
    var_dump('Var Dump using')  . "<br/><br/>";

    echo "<pre>";
        var_dump( ['alma', 'armud', 'nar'] );
    echo "</pre><br/><br/>";

    
    echo "<pre>";
        var_dump( ['ad' => 'Semed', 'soyad' => 'Vurgun'] );
    echo "</pre><br/><br/>";

    // 3) Print dil konstruksiyasıdır və echo ilə oxşardır, amma yalnız bir parametr qəbul edir.
    print('Print using')  . "<br/><br/>";

    echo "<pre>";
        print( ['alma', 'armud', 'nar'] );
    echo "</pre><br/><br/>";


    // 4) Məlumat strukturlarını oxunaqlı şəkildə çap edir. Çox vaxt massivləri (arrays) çap etmək üçün istifadə olunur.
    print_r('PrintR using')  . "<br/><br/>";

    echo "<pre>";
        print_r( ['alma', 'armud', 'nar'] );
    echo "</pre><br/><br/>";

    echo "<pre>";
        print_r( ['ad' => 'Semed', 'soyad' => 'Vurgun'] );
    echo "</pre><br/><br/>";


    // 5) Formatlaşdırılmış mətni çap edir (printf) və ya dəyəri qaytarır (sprintf).
    printf('PrintF using' . "<br/><br/>");

    printf("Salam, mənim adim %s və yasim %d-dir.", "Əli", 25). "<br/><br/>";



    // 6) 
    sprintf('SPrintF using')  . "<br/><br/>";

 
    // 7) Mesajları PHP error log-a (və ya təyin olunmuş fayla) yazır. Debug məqsədləri üçün faydalıdır.
    error_log('Error Log using')  . "<br/><br/>";


    // 8) Ekrana deyil, fayla məlumat yazır. İstifadəçiyə göstərmək üçün faydalı ola bilər.
    file_put_contents("log.txt", 'Hello World')  . "<br/><br/>";
?>    
</body>
</html>