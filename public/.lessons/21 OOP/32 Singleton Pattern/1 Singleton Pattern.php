<!-- 

    Singleton Pattern nədir?
    Singleton Pattern, obyektin tək bir nümunəsini (instance) yaratmağı təmin edən dizayn şablonudur. 
    Yəni, bu nümunədən yalnız bir dəfə yaradılır və istənilən yerdə həmin nümunəyə çıxış mümkündür.


    İstifadə məqsədi:
    Bir sinfin yalnız bir obyektinin yaradılmasını istəyirik.
    Məsələn, bir verilənlər bazası bağlantısı və ya konfiqurasiya meneceri üçün Singleton istifadə olunur.


    Necə işləyir?
    Bir class yalnız bir dəfə öz obyektini yaradır.
    Eyni classin bir neçə obyektini yaratmaq əvəzinə, həmişə həmin ilk yaradılan obyekt geri qaytarılır.

    
    Əsas Addımlar
    Konstruktoru private təyin etmək (birbaşa yeni obyekt yaratmağı əngəlləmək üçün).
    Obyektin saxlanması üçün statik bir dəyişən yaratmaq.
    Obyekti qaytaran statik bir metod yaratmaq.


    class obyektini yaratmaq ilə "obyektin tək bir nümunəsini yaratmaq" arasındakı fərq:
        - Bir classin obyektini yaratmaq, o classdan yeni bir nümunə (obyekt) yaradılmasıdır. Bu zaman hər dəfə NEW istifadə edildikdə yeni bir obyekt yaradılır.
        - Singleton Pattern-də, class yalnız bir dəfə yaradılır və bu obyekt hər dəfə çağırıldığında eyni instansiya geri qaytarılır. Bu, yeni obyektlərin yaradılmasının qarşısını alır

    Singleton Pattern nəyə lazımdır: 
        Bir verilənlər bazası əlaqəsi varsa, hər dəfə yeni bir əlaqə yaratmaq yerinə, Singleton Pattern istifadə edərək yalnız bir əlaqə saxlanılır və bu əlaqə hər dəfə istifadə edilir.
        və.s kimi bundan da çox xeyrləri vardır. 

       - Obyektin yalnız bir dəfə yaradılmasına zəmanət verir.
       - Kodun idarə olunmasını asanlaşdırır (xüsusilə resursları idarə edərkən).
       - Eyni obyektə bir neçə yerdən asanlıqla çıxış mümkündür.

    Mənfi Cəhətlər:
        - Çox istifadədə kodun çevikliyini azalda bilər (bütün proqramın Singleton-a bağlılığı arta bilər).
        - Test etməyi çətinləşdirə bilər (çünki obyekt statik olaraq saxlanılır).
-->

<?php

    class DatabaseConnection {
        // Tək obyektin saxlanması üçün dəyişən
        private static $instance = null;
        
        // Private konstruktor (birbaşa yeni obyekt yaratmağı əngəlləyir)
        private function __construct() {
            echo "Database connection established. <br>";
        }

        // Singleton obyekti qaytaran metod
        public static function getInstance() {
            if (self::$instance === null) {
                self::$instance = new DatabaseConnection();
            }
            return self::$instance;
        }

        public function query($sql) {
            echo "Executing query: $sql <br>";
        }
    }

    // Obyekt yaratmağa çalışırıq
    $db1 = DatabaseConnection::getInstance(); // İlk dəfə obyekt yaradılır
    $db2 = DatabaseConnection::getInstance(); // Eyni obyekt geri qaytarılır

    // Obyektlərin eyni olub-olmadığını yoxlayaq
    if ($db1 === $db2) {
        echo "Both are the same instance. <br>";
    }

    // Sorğu icra edirik
    $db1->query("SELECT * FROM users");

