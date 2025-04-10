<!-- 


POST metodu məlumatları HTTP başlıqlarında ötürür. Bu metodla məlumatlar URL-də görünmür.

Xüsusiyyətləri:
    - Məlumatlar HTTP başlığında ötürüldüyü üçün URL-də görünmür.
    - Böyük həcmdə məlumat ötürülə bilər.
    - Təhlükəsiz məlumat ötürülməsi üçün daha uyğundur (hətta bu da əlavə təhlükəsizlik tədbirləri tələb edir, məsələn, SSL).
    - Geri baxma tarixi və səhifə yenilənməsində məlumatlar yenidən göndərilir.

    

-->
<?php 

// URL: http://php-course/handler.php

echo htmlspecialchars(strip_tags($_POST['msg']));
