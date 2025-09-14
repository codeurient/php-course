<?php



// 6 - Buffering Səviyyəsini Yoxlamaq. Yəni Buffering-in olub olmadığını yoxlamaq.
ob_start();
echo "Test";
if (ob_get_level() > 0) {
    echo "<p>Buffering aktivdir!</p>";
}
ob_end_flush();
























// 5 - Çox Səviyyəli Buffering ( Nümunədə callback-lər sadə funksiyalar ola bilərdi. )

ob_start("level1"); // Birinci səviyyə
echo "İlk səviyyə məzmunu\n";

ob_start("level2"); // İkinci səviyyə
echo "İkinci səviyyə məzmunu\n";

ob_end_flush(); // İkinci səviyyəni flush et
ob_end_flush(); // Birinci səviyyəni flush et
























// 4 - GZip Sıxması ilə Callback İstifadəsi ( BU NÜMUNƏNİ İNDİ KEÇMƏYƏ EHTİYAC YOXDUR ) 
// Yalnız brauzer GZip dəstəkləyirsə
if (isset($_SERVER['HTTP_ACCEPT_ENCODING']) && strpos($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip') !== false) {
    ob_start('ob_gzhandler'); // Callback ilə başla (sıxma)
} else {
    ob_start();
}

echo "<p>Böyük mətn buraya... (sixilacaq)</p>"; // Böyük məzmun

ob_end_flush(); // Sıxılmış məzmun göndərilər. Nəticə: Trafik azalır, brauzer avtomatik açır.





















// 3 - Buffer Məzmununu Oxumaq və Modifikasiya Etmək
ob_start();

// Çıxış yaradın
echo "<h1>Orijinal məzmun</h1>";

$content = ob_get_contents();   // Buffer-i oxu (string qaytarır)
ob_clean();                     // Buffer-i təmizlə (silmək)

// Məzmunu dəyişdir
$new_content = str_replace("Orijinal", "Dəyişdirilmiş", $content);

echo $new_content;  // Yeni məzmunu çıxar

ob_end_flush();     // Bitir (artıq boş buffer)
















// 2 - Buffer Məzmununu Oxumaq və Modifikasiya Etmək
ob_start();

// Çıxış yaradın
echo "<h1>Orijinal məzmun</h1>";

$content = ob_get_contents();   // Buffer-i oxu (string qaytarır)

echo $content;  

ob_end_flush();     // Bitir (artıq boş buffer)























// 1 - Nəticə: Header uğurla göndərilir, xəta yaranmır.
ob_start(); // Buffering başla

// Kodunuz: Çıxış yaradın (bu, buffer-ə gedər, brauzerə yox)
echo "<h1>Salam, Dünya!</h1>";
echo "<p>Bu mətn buffer-də saxlanılır.</p>";

// İndi header göndərə bilərik, çünki çıxış hələ göndərilməyib
header("Location: https://www.example.com/"); // Və ya başqa header

ob_end_flush(); // Buffering bitir və məzmunu göndər (header-lə birlikdə)
// Qeyd: Location header ilə brauzer yönləndiriləcək, məzmun göndərilməyəcək