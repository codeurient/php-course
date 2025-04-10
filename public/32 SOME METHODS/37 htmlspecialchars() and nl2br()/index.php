<!-- 
 

PHP-də nl2br() və htmlspecialchars() funksiyaları mətnin emalı ilə bağlı müxtəlif məqsədlər üçün istifadə olunur. Hər iki funksiya fərqli problemləri həll edir:
    

1. nl2br()              - Təyinat: Mətn daxilindəki yeni sətr simvollarını (\n) HTML-də sətr qırılmasını göstərən <br> tagına çevirir.
2. htmlspecialchars()   - Təyinat: Xüsusi HTML simvollarını (<, >, ", &, ') təhlükəsizlik üçün onların HTML ekvivalentlərinə çevirir.
    
-->


<?php

// 1
$text = "Bu birinci sətrdir.\nBu ikinci sətrdir.";
echo nl2br($text);






// 2
$text = "<div>Bu \"HTML\" mətnidir & təhlükəsiz deyil.</div>";
echo htmlspecialchars($text);





// Birlikdə İstifadə Misalı. Hər iki funksiya müxtəlif məqsədlərə xidmət etdiyi üçün bəzən birlikdə istifadə edilə bilər:
$text = "Bu <b>HTML</b> mətnidir.\nYeni sətrə keçdi.";
echo nl2br(htmlspecialchars($text)); 