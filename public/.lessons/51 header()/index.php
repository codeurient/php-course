<?php


// 5. HTTP Status Kodu Nümunəsi
// 404 xətası vermək:
header("HTTP/1.1 404 Not Found");
exit();







// 4. Kuki Quraşdırma Nümunəsi
// Əlavə atributlarla kuki qurmaq: Bu, setcookie()-nin dəstəkləmədiyi atributları əlavə edir.
header('Set-Cookie: name=Burada deyer yazmaq olar; Secure; Path=/; SameSite=None; Partitioned;');





// 3. Keşinq Qadağan Etmə Nümunəsi
// Səhifənin keşlənməsini qadağan etmək üçün: Bu, brauzer və proksilərin səhifəni keşləməsini qadağan edir.
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Keçmiş tarix







// 2. Fayl Endirmə Dialoqu Nümunəsi
// PDF faylını endirmək üçün:
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="downloaded.pdf"');







// 1. Yönləndirmə Nümunəsi
// Bu nümunə brauzeri yeni ünvana yönləndirir. Sonra exit() çağırın ki, skript davam etməsin.
header("Location: http://www.example.com/");
exit();