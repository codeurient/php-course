<html lang="en">
<body>
    <!--    

        PHP-də funksiyalar kodu təkrar istifadə etmək üçün istifadə olunur. Onlar müəyyən bir işi yerinə yetirən kod bloklarından ibarətdir.

    -->


    <?php
            // 1
            function bir() {
                echo 10 * 5 . '<br>';
            }
            bir() ;




            // 2 
            function funksiyaAdi2() {
                $a = 3;
                $b = 5;
                echo $a * $b . '<br>';
            }
            funksiyaAdi2();



            // 3 - union types adlanan xüsusiyyət istifadə oluna bilər. Xəta varmış kimi göstərir ancaq xəta yoxdur. 
            // Ctrl + , ilə VS Code parametrlərinə gedin.
            // Axtarış bölməsinə php yazın.
            // PHP executable path sahəsində sistemdə quraşdırılmış PHP 8.0 və ya daha yüksək versiyanın yolunu göstərin.
            function funksiyaAdi3(int $a, int|float $b) {
                echo $a * $b . '<br>';
            }
            funksiyaAdi3(3, 4);




            // 4 Funksiya Adlarının Dəyişənlər Kimi İstifadəsi:
            function test($ad) {
                echo "HEllo, $ad" . '<br>';
            }
            
            $funksiyaAdi = 'test';
            $funksiyaAdi('Bob'); 




            // 5 PHP-də global dəyişənlər funksiyalar daxilində avtomatik mövcud olmur. Onları funksiyanın daxilində istifadə etmək üçün xüsusi üsullardan istifadə olunur: 
            // `GLOBAL` açar sözü və ya anonim funksiyalar üçün `USE` açar sözü. global açar sözü funksiyanın daxilində xarici (global) dəyişənləri istifadə etmək üçün istifadə olunur.
            $x = 10; 
            $y = 20;

            function cemiHesabla() {
                global $x, $y; // Global dəyişənlər daxil edilir
                echo $x + $y . '<br>';
            }
            cemiHesabla(); 




            // 6 PHP-də bütün qlobal dəyişənlər $GLOBALS superqlobal massivində saxlanılır. Bu massiv funksiyalarda və istənilən yerdə birbaşa dəyişənlərə giriş imkanı verir.
            $x = 7;
            $y = 8;
            function cemiHesabla2() {
                echo $GLOBALS['x'] + $GLOBALS['y'] . '<br>';
            }
            cemiHesabla2(); 




            // 7 Anonim funksiyalar adlandırılmayan funksiyalardır və closure adlanır. Onlar adətən dəyişənlərə verilir və ya callback kimi təyin edilir. Çağrıldıqda $ simvolu ilə yazılır.
            $funksiyaninAdi = function ($param) {
                echo $param * 2 . '<br>';
            };
            $funksiyaninAdi(4);




            // 8 Anonim funksiyalarda (closure) xarici dəyişənlərə giriş üçün USE açar sözü istifadə olunur. Bu, həmin dəyişənləri funksiyaya "bağlamağa" imkan verir.
            $factor = 3;
            $funksiya = function ($number) use ($factor) {
                echo $number * $factor . '<br>';
            };

            $funksiya(4); 




            // 9 use yalnız dəyəri kopyalayır. Əgər variable, funksiyanın daxilində dəyişdirilərsə, xaricdəki dəyər dəyişməz.
            // Dəyişiklik etmək üçün referans ilə istifadə olunmalıdır. 9 və 10 cu nümunələr. 
            $v = 3;
            $funksiya2 = function () use ($v) {
                echo  $v += 10;
                echo '<br>';
            };

            $funksiya2(4); 
            echo $v = 3  . '<br>';



 
            // 10 global və use arasındakı fərq:
            // global   - Adi funksiyalarda istifadə olunur.            Funksiya daxilində dəyişəni birbaşa aktiv edir.                 global $x;
            // use      - Anonim funksiyalarda istifadə olunur.         Dəyişəni funksiyaya bağlayır.                                   use ($x)
            $i = 10;

            $funksiya3 = function() use (&$i) { // Referans ilə bağlanır
                echo $i += 5;
                echo '<br>';
            };
            $funksiya3();
            echo $i . '<br>'; 




            // 11 PHP 7.4-dən etibarən oxlu funksiyalar əlavə olunub. Bunlar daha qısa və yığcam anonim funksiyalardır. FN açar sözündən oxlu funksiya yaratmaq üçün istifadə edilir.
            // Oxlu funksiyaların əsas xüsusiyyətləri, onların bir sətrdə yazılması və dəyərləri avtomatik olaraq return etmələridir. Ayrıca return yazmağa ehtiyac yoxdur.
            $oxluAnonimFunksiya = fn($param) => $param * 2;
            echo $oxluAnonimFunksiya(3) . '<br>';




            // 12 Oxlu funksiyalar, closure-lardan fərqli olaraq, xarici dəyişənləri avtomatik olaraq bağlayır və USE açar sözünün ayrıca istifadəsini tələb etmir.
            // Burada $x xarici dəyişəndir və use açar sözü olmadan da avtomatik daxil edilir. Xarici dəyişənlər use açar sözü olmadan avtomatik bağlanır.
            $n = 9;
            $test = fn($param) => $param + $n;
            echo $test(5) . '<br>'; 
            echo $n . '<br>';




            // 13 Əgər xarici dəyişənlərin dəyərini dəyişmək lazımdırsa, referans kimi (&) simvolundan istifadə olunur. Dəyəri dəyişmək üçün referansdan (&) istifadə etmək mümkündür.
            $m = 2;
            $numune = fn(&$param) => $param += 20;
            echo $numune($m) . '<br>'; 
            echo $m . '<br>';

            




            // 14  RETURN
            function topla($eded1, $eded2) {
                return $eded1 + $eded2;
            }

            function vurma($say1, $say2) {
                return topla($say1, $say2) * topla($say1, $say2);
            }

            echo vurma(3, 4). '<br>'; 





            // 15 Öz-özünü çağıran funksiyalar rekursiv funksiyalardır. Onlar özlərini təkrar-təkrar çağıraraq müəyyən işləri yerinə yetirir.
            function faktorial($n) {
                if ($n === 0) {
                    return 1; // Əsas dayanma nöqtəsi
                }
                return $n * faktorial($n - 1);
            }
            
            echo faktorial(5); // Çıxış: 5*4*3*2*1 = 120











            // 16
            function sum(&$a) {             //    (&$a)  bunu   ($a)    belə dəyişdirərək aradakı fərqə baxın.   
                $a = $a + 10;
            
                return $a;
            }
            
            $b = 10;
            echo sum($b) . '<br>';
            echo $b;






            // 17 PHP-də ... (splat operatoru) funksiyalara və metodlara dəyişən sayda arqument qəbul etməyə imkan verən bir xüsusiyyətdir. 
            // Kodda ...$items yazılması, həmin funksiyanın qeyri-məhdud sayda arqument qəbul edə biləcəyini ifadə edir.
            // ...$items – funksiyaya ötürülən bütün arqumentləri bir massiv (array) kimi qəbul edir.
            function outArguments(...$items) {
                foreach ($items as $arg) {
                    echo $arg. "<br>";
                }
            }

            outArguments('PHP', 'JS', 'C++', 'Pythons');






            // 18
            function sumNumbers(...$numbers) {
                return array_sum($numbers);
            }
            
            echo sumNumbers(1, 2, 3, 4, 5); // 15







            // 19
            function printLanguages(...$languages) {
                foreach ($languages as $lang) {
                    echo $lang . "<br>";
                }
            }
            
            $languages = ['Java', 'Python', 'Ruby'];
            printLanguages(...$languages);







            // 20
            function printLanguages2($a, $b, $c) {
                echo "$a<br>";
                echo "$b<br>";
                echo "$c<br>";
            }

            $languages2 = ['Java', 'Python', 'Ruby'];
            printLanguages2(...$languages2);
            
            
            




            // 21 
            // PHP-də static açar sözü, dəyişənin dəyərinin funksiyadan funksiyaya saxlanılmasını təmin edir. Yəni, dəyişən yalnız bir dəfə təyin edilir və 
            // funksiyadan çıxdıqda silinmir. Bunun əvəzinə, növbəti dəfə funksiya çağırıldıqda həmin dəyişənin əvvəlki dəyəri xatırlanır.
            // Əsas Xüsusiyyətlər:
            //      a) Dəyərlərin Saxlanması: static ilə elan edilən dəyişən, funksiyanın hər bir çağırışında yenidən başlanğıc vəziyyətinə gətirilməz. Əvvəlki dəyəri qoruyub saxlayar.
            //      b) Yalnız Funksiya Ərazisində Mövcuddur: static dəyişən funksiyanın xaricində istifadə edilə bilməz.
            //      c) Yalnız İlk Dəfə Təyin Olunur: static dəyişən bir dəfə qiymət alır, sonrakı çağırışlarda bu təkrar olunmur.
            function sum2() {
                static $count = 0;

                return ++$count;
            }

            echo sum2()   .   "<br>";    // Output: 1
            echo sum2()   .   "<br>";    // Output: 2
            echo sum2()   .   "<br>";    // Output: 3
            echo sum2()   .   "<br>";    // Output: 4













            // 22 -  Funksiyalar array return edə bilər.
            function formatSize($bytes) {
                $kbytes = $bytes / 1024;
                $mbytes = $bytes / 1024;
                $gbytes = $bytes / 1024;

                return [$bytes, $kbytes, $mbytes, $gbytes];
            }

            echo '<pre>';
                print_r(formatSize(54989777));
            echo '</pre>';
    
    
    
    
    
    

            // 23
            function formatSize2($bytes) {
                $kbytes = $bytes / 1024;
                $mbytes = $bytes / 1024;
                $gbytes = $bytes / 1024;

                return [$bytes, $kbytes, $mbytes, $gbytes];
            }

           
            list($bytes,   $kbytes,   $mbytes,   $gbytes) = formatSize2(54989777);
            echo "$bytes<br>   $kbytes<br>   $mbytes<br>   $gbytes";
            
    





            // 24
            function formatSize3($bytes) {
                $kbytes = $bytes / 1024;
                $mbytes = $bytes / 1024;
                $gbytes = $bytes / 1024;
        
                return [$bytes, $kbytes, $mbytes, $gbytes];
            }
        
           
            $bytes3  = formatSize3(54989777)[0];
            $kbytes3 = formatSize3(54989777)[1];
            $mbytes3 = formatSize3(54989777)[2];
            $gbytes3 = formatSize3(54989777)[3];
            echo "$bytes3<br>   $kbytes3<br>   $mbytes3<br>   $gbytes3";
            
    ?>

</body>
</html>