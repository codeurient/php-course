<html lang="en">
<body>
    <!--    

        PHP-də    ', ", və `     simvollarından mətn təyin etmək üçün istifadə olunur. Hər birinin fərqli davranışı və istifadə sahəsi var.



                        Dəyişənləri analiz edir                 Simvollarını dəstəkləyir            İstifadə sahəsi
        ' (Tək)	                Xeyr	                                Yalnız \', \\	                Sadə mətni saxlamaq.
        " (Cüt)	                Bəli	                                Bəli	                        Dinamik mətnlər yaratmaq.
        ` (Geri)                Xeyr	                                Xeyr	                        PHP-də istifadə olunmur.
        Heredoc	                Bəli	                                Bəli	                        Böyük dinamik mətnlər üçün.
        Nowdoc	                Xeyr	                                Xeyr	                        Böyük sadə mətni saxlamaq.



        Heredoc (<<<) və Nowdoc (<<<') böyük mətnləri təyin etmək üçün istifadə olunur. Çoxsətirli mətnlər üçün idealdır.
 
    -->


    <?php


    // 1 Tək dırnaq işarəsi (') ilə yazılan sətirlər sadə mətni ifadə edir.
    $bir = 'Bob';
    echo 'Salam $bir\n'; 




    // 2 Cüt dırnaq işarəsi (") ilə yazılan sətirlər dəyişənləri analiz edir və xüsusi simvolları (\n, \t və s.) işləyir.
    $iki = "Bob";
    echo "Salam $iki\n"; 
    
       

    // 3
    $uc = 'Bob';

    $metn1 = <<<EOL
    Salam $uc,
    Bu, heredoc "ilə" yazilmis 'bir' cümlədir\n.
    EOL;

    echo $metn1;




    // 4
    $dord = 'Bob';

    $metn2 = <<<'EOL'
    Salam $dord,
    Bu, heredoc "ilə" yazilmis 'bir' cümlədir\n.
    EOL;

    echo $metn2;

            
    ?>

</body>
</html>