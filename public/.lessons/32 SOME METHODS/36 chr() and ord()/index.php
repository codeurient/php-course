<!--

    chr() və ord() funksiyaları simvollar və onların ASCII (və ya Unicode) dəyərləri arasında dönüşüm etmək üçün istifadə olunur.

    chr(): Rəqəm → Simvol.
    ord(): Simvol → Rəqəm.

    Bu funksiyalar şifrələmə, mətn emalı və xüsusi simvol manipulyasiyasında çox istifadə edilir.


    chr(int $ascii): string


-->


<?php

echo chr(65);       // A (ASCII-də 65 "A" hərfinə uyğundur)
echo chr(97);       // a (ASCII-də 97 "a" hərfinə uyğundur)
echo chr(8364);     // € (Unicode rəqəmi üçün də işləyir)



echo ord('A');      // 65
echo ord('a');      // 97
echo ord('€');      // 8364 (Unicode dəyəri)
