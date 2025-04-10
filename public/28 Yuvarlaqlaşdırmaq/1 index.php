<!-- 
    Ədədləri Yuvarlaqlaşdırmaq üçün PHP Funksiyaları:
    ------------------------------------------------------------------------------------------------------------------------
    ------------------------------------------------------------------------------------------------------------------------
    1. round()
        Ədədi ən yaxın tam ədədə və ya müəyyən bir onluq yer dəqiqliyinə yuvarlaqlaşdırır.
            Parametrlər:
                $num                    - Yuvarlaqlaşdırılacaq ədəd.
                $precision              - Onluq yerlərin sayı (default olaraq 0).
                $mode                   - Yuvarlaqlaşdırma rejimi:
                PHP_ROUND_HALF_UP       - Standart yuvarlaqlaşdırma (default).
                PHP_ROUND_HALF_DOWN     - Yarını aşağı yuvarlaqlaşdırır.
                PHP_ROUND_HALF_EVEN     - Cüt ədədə yuvarlaqlaşdırır.
                PHP_ROUND_HALF_ODD      - Tək ədədə yuvarlaqlaşdırır.
    ------------------------------------------------------------------------------------------------------------------------
    ------------------------------------------------------------------------------------------------------------------------
    2. ceil()
        Ədədi həmişə yuxarı yuvarlaqlaşdırır (növbəti tam ədədə doğru).
    ------------------------------------------------------------------------------------------------------------------------
    ------------------------------------------------------------------------------------------------------------------------
    3. floor()
        Ədədi həmişə aşağı yuvarlaqlaşdırır (öncəki tam ədədə doğru).
    ------------------------------------------------------------------------------------------------------------------------
    ------------------------------------------------------------------------------------------------------------------------
    4. intdiv()
        Tam bölmə əməliyyatı həyata keçirir və nəticəni tam ədəd kimi qaytarır.
    ------------------------------------------------------------------------------------------------------------------------
    ------------------------------------------------------------------------------------------------------------------------
    5. number_format()
        Ədədi müəyyən edilmiş dəqiqliklə yuvarlaqlaşdırır və formatlaşdırır.
    ------------------------------------------------------------------------------------------------------------------------
    ------------------------------------------------------------------------------------------------------------------------
    6. bcadd(), bcsub(), bcmul(), bcdiv(), bcmod(), bcsqrt()
        BC Math kitabxanasının funksiyaları ilə yüksək dəqiqliklə riyazi əməliyyatlar etmək mümkündür. 
        Bunlar müəyyən bir dəqiqliklə hesablamalar və yuvarlaqlaşdırmalar üçün istifadə olunur.
    ------------------------------------------------------------------------------------------------------------------------
    ------------------------------------------------------------------------------------------------------------------------
    PHP Konstantları
        PHP_ROUND_HALF_UP - 0.5 və daha çox olan qiymətləri yuxarı yuvarlaqlaşdırır.
        PHP_ROUND_HALF_DOWN - 0.5 və daha az olan qiymətləri aşağı yuvarlaqlaşdırır.
        PHP_ROUND_HALF_EVEN - Hər iki tam ədədin ortasında cüt ədədə yuvarlaqlaşdırır.
        PHP_ROUND_HALF_ODD - Hər iki tam ədədin ortasında tək ədədə yuvarlaqlaşdırır.
    ------------------------------------------------------------------------------------------------------------------------
    ------------------------------------------------------------------------------------------------------------------------
-->

<?php
    // Real Həyatdan Nümunə: Hesab-Faktura Yuvarlaqlaşdırması
    //     Problem:
    //     Müştərinin ümumi borcunu tam ədədə yuvarlaqlaşdırmaq lazımdır.
    class Invoice
    {
        private $subtotal;
        private $taxRate;
    
        public function __construct(float $subtotal, float $taxRate)
        {
            $this->subtotal = $subtotal;
            $this->taxRate = $taxRate;
        }
    
        public function calculateTotal(): float
        {
            // ƏDV hesablanması
            $tax = $this->subtotal * $this->taxRate;
    
            // Ümumi məbləğ
            $total = $this->subtotal + $tax;
    
            // Ümumi məbləği yuvarlaqlaşdırmaq
            return round($total, 0); // Tam ədədə yuvarlaqlaşdırırıq
        }
    }
    
    // İstifadə
    $invoice = new Invoice(1234.56, 0.18);
    echo "Müştərinin ümumi borcu: " . $invoice->calculateTotal() . " AZN";
?>
    