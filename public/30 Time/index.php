<!-- 
    1. Tarix və Vaxt Funksiyaları
        Funksiya	                            Təsviri

        date()	                                Tarixi və vaxtı verilən formatda qaytarır.
        time()	                                Hazırkı vaxtın Unix zaman damğasını (timestamp) qaytarır.
        mktime()	                            Verilən tarix və vaxta uyğun Unix zaman damğasını yaradır.
        strtotime()	                            Tarix və vaxtı string formatında Unix zaman damğasına çevirir.
        checkdate()	                            Verilən tarixdəki ay, gün və ilin düzgünlüyünü yoxlayır.
        date_default_timezone_get()	            Hazırda istifadə edilən zaman zonasını qaytarır.
        date_default_timezone_set()	            Zaman zonasını təyin edir.
        gmdate()	                            UTC (GMT) vaxtında formatlaşdırılmış tarix və vaxtı qaytarır.
        gmmktime()	                            UTC vaxtında Unix zaman damğasını yaradır.
        idate()	                                Verilən formatda tam ədəd tipində tarix elementini qaytarır.
        getdate()	                            Unix zaman damğasından detallarını (il, ay, gün və s.) qaytarır.
        localtime()	                            Vaxtı yerli vaxt zonasına görə massiv formatında qaytarır.
        microtime()	                            Mikrosaniyələr daxil olmaqla hazırkı vaxtı qaytarır.
        strftime()	                            Tarix və vaxtı yerli dilə uyğun formatda qaytarır (bu funksiya artıq tövsiyə edilmir).
        date_parse()	                        Tarixi string formatında analiz edərək detallarını qaytarır.
        date_parse_from_format()	            Verilən formatdan tarix və vaxtı analiz edir.
        date_sunrise()	                        Gündoğumunun vaxtını qaytarır.
        date_sunset()	                        Günbatımının vaxtını qaytarır.
        timezone_identifiers_list()	            Mövcud olan zaman zonalarının siyahısını qaytarır.
        timezone_name_from_abbr()	            Qısaltmalardan zaman zonasının adını tapır.
        timezone_offset_get()	                Zaman zonasının UTC ilə fərqini qaytarır.
        timezone_open()	                        Zaman zonası obyektini yaradır.


    2. Əsas Konstantlar
        Konstant	                            Təsviri

        DATE_ATOM	                            Atom formatında tarix.
        DATE_COOKIE	                            Cookie formatında tarix.
        DATE_ISO8601	                        ISO-8601 formatında tarix.
        DATE_RFC2822	                        RFC 2822 formatında tarix.
        DATE_RFC3339	                        RFC 3339 formatında tarix.
        DATE_RSS	                            RSS formatında tarix.
        DATE_W3C	                            W3C formatında tarix.

    3. Tarix və Vaxt Obyektləri (OOP)
        Class	                                Təsviri

        DateTime	                            Tarix və vaxtla işləmək üçün obyekt əsaslı sinif.
        DateTimeImmutable	                    Dəyişdirilməz tarix və vaxt obyektlərini təmsil edir.
        DateTimeZone	                        Zaman zonaları ilə işləmək üçün sinif.
        DateInterval	                        İki tarix arasındakı intervalı təmsil edir.
        DatePeriod	                            Təkrarlanan tarix aralıqlarını təmsil edir.

    4. Tarix və Vaxt Formatları
        Format	                                Təsviri

        Y	                                    İl                          (tam şəkildə, məsələn: 2024).
        m	                                    Ay                          (iki rəqəmli: 01-12).
        d	                                    Gün                         (iki rəqəmli: 01-31).
        H	                                    Saat                        (24-saat formatında: 00-23).
        i	                                    Dəqiqə                      (iki rəqəmli: 00-59).
        s	                                    Saniyə                      (iki rəqəmli: 00-59).
        A	                                    Günün yarısı                (AM/PM).
        l	                                    Həftənin tam adı            (məsələn: Monday).
        D	                                    Həftənin qısaldılmış adı    (məsələn: Mon).
        M	                                    Ayın qısaldılmış adı        (məsələn: Jan).
-->

<?php

// İstifadəçinin zaman zonasına əsasən indiki vaxtı göstərən bir sinif yazın.
class TimeHelper
{
    private $timezone;

    public function __construct($timezone = 'UTC')
    {
        $this->timezone = new DateTimeZone($timezone);
    }

    public function getCurrentTime()
    {
        $datetime = new DateTime('now', $this->timezone);
        return $datetime->format('Y-m-d H:i:s');
    }

    public function setTimeZone($timezone)
    {
        $this->timezone = new DateTimeZone($timezone);
    }
}

// İstifadə
$timeHelper = new TimeHelper('Asia/Baku');
echo "Hazirki vaxt (Baki):      "    . $timeHelper->getCurrentTime() . "<br>";

$timeHelper->setTimeZone('America/New_York');
echo "Hazirki vaxt (New York): "    . $timeHelper->getCurrentTime() . "<br>";



