<html lang="en">
<body>
    <!--    

    PHP-də try-catch-finally, səhvləri və istisnaları (exceptions) idarə etmək üçün istifadə olunur. Bu struktur, proqramın çalışması 
    zamanı baş verən problemləri düzgün idarə etmək və kodun dayanmamasını təmin etmək üçün vacibdir.

    try bloku: Kodun təhlükəli (potensial olaraq səhv verə bilən) hissəsini yazdığınız yer.

    catch bloku: try blokunda baş verən istisnaları (exceptions) tutmaq üçün istifadə olunur.

    finally bloku (optional): İstisnadan asılı olmayaraq mütləq işləyən kod parçasını yazmaq üçün istifadə olunur. Məsələn, faylları bağlamaq, resursları sərbəst buraxmaq və s.

    -->


    <?php
        // 1) 
        try {

            throw new Exception("Süni bir xəta baş verdi!"); // İstisna yaradılır və ötürülür catch blokuna 

        } catch (Exception $e) {

            echo "Xəta: " . $e->getMessage();       // İstisna ekrana çap etdirilir

        } finally {

            echo "Istisna olsada olmasada finally bloku işləyəcək";    

        }


        
        // 2) 
        try {
            $number = 5;
            if ($number > 3) {
                throw new Exception("Sayi çox böyükdür!"); 
            }
        } catch (Exception $e) {
            echo "Nəticəni çap edirik: " . $e->getMessage();
        }
    ?>

</body>
</html>