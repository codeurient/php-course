<!DOCTYPE html>
<body>
    <!-- 

    require, include, require_once, və include_once faylları proqramınıza daxil etmək üçün istifadə olunur. 
    Bu anlayışları bir-birindən fərqləndirən məqamlar davranışlarına və faylın daxil edilmə tərzinə bağlıdır.



    require:        Verilmiş faylı proqramınıza daxil edir. Əgər fayl tapılmazsa, dərhal kritik bir xəta (fatal error) atır və proqramın icrasını dayandırır.
    Xüsusiyyət:     Faylın daxil edilməsi məcburidir, əks halda proqram işləməyəcək.


    include:        Verilmiş faylı proqramınıza daxil edir. Fayl tapılmazsa, xəbərdarlıq (warning) mesajı çıxarır, lakin proqramın icrası davam edir.
    Xüsusiyyət:     Faylın daxil edilməsi məcburi deyil.


    require_once:   Faylı yalnız bir dəfə daxil edir. Əgər artıq həmin fayl daxil edilibsə, yenidən daxil edilmir.
    Xüsusiyyət:     Fayl daxil edilməzsə, require kimi fatal error atır.


    include_once:   Faylı yalnız bir dəfə daxil edir. Əgər artıq daxil edilibsə, yenidən daxil edilmir.
    Xüsusiyyət:     Fayl daxil edilməzsə, include kimi warning çıxarır və proqram davam edir.


    

    Funksiya                Fayl Tapılmadıqda	                    Faylın Birdən Çox Daxil Edilməsi

    require	                Fatal error (icra dayanır)	            Fayl hər dəfə daxil edilir
    include	                Warning (icra davam edir)	            Fayl hər dəfə daxil edilir
    require_once	        Fatal error (icra dayanır)	            Fayl yalnız bir dəfə daxil edilir
    include_once	        Warning (icra davam edir)	            Fayl yalnız bir dəfə daxil edilir


-->
    

    <?php  require_once 'header.php'  ?>



    <p>burada basqa kodlar var</p>
    
</body>
</html>