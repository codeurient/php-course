<!-- 
    Say Sistemləri ilə İşləmək üçün Funksiyalar
    ------------------------------------------------------------------------------------------------------------------------
    ------------------------------------------------------------------------------------------------------------------------
    bindec()
        İkilik (binary) ədədi ondalıq (decimal) ədədə çevirir.
    ------------------------------------------------------------------------------------------------------------------------
    ------------------------------------------------------------------------------------------------------------------------
    hexdec()
        Onaltılıq (hexadecimal) ədədi ondalıq ədədə çevirir.
    ------------------------------------------------------------------------------------------------------------------------
    ------------------------------------------------------------------------------------------------------------------------
    octdec()
        Səkkizlik (octal) ədədi ondalıq ədədə çevirir.
    ------------------------------------------------------------------------------------------------------------------------
    ------------------------------------------------------------------------------------------------------------------------
    base_convert()
        Verilən ədədi bir say sistemindən başqa birinə çevirir.
    ------------------------------------------------------------------------------------------------------------------------
    ------------------------------------------------------------------------------------------------------------------------
    intval()
        İstənilən string ifadəni verilmiş say sistemi əsasında tam ədədə çevirir.
    ------------------------------------------------------------------------------------------------------------------------
    ------------------------------------------------------------------------------------------------------------------------
-->

<?php

// Müxtəlif say sistemlərində verilmiş rəqəmləri decimal formata çevirərək istifadəçi üçün ümumi dəyəri hesablayın.
    class NumberConverter
    {
        public function convertToDecimal(string $number, string $system): int
        {
            switch ($system) {
                case 'binary':
                    return bindec($number);
                case 'hexadecimal':
                    return hexdec($number);
                case 'octal':
                    return octdec($number);
                default:
                    throw new Exception("Düzgün say sistemi seçin: binary, hexadecimal, octal.");
            }
        }
    }

    // İstifadə
    $converter = new NumberConverter();

    try {
        echo "Binary '1010' -> Decimal: "   . $converter->convertToDecimal('1010',  'binary')       . "<br>"; // 10
        echo "Hexadecimal 'A' -> Decimal: " . $converter->convertToDecimal('A',     'hexadecimal')  . "<br>"; // 10
        echo "Octal '12' -> Decimal: "      . $converter->convertToDecimal('12',    'octal')        . "<br>"; // 10
    } catch (Exception $e) {
        echo "Xəta: " . $e->getMessage();
    }
?>
