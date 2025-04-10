<!-- 


    Real Həyat Misalı
    Bir vebsaytda, istifadəçilərin sayını izləmək üçün static property-dən istifadə edə bilərsiniz:


-->

<?php


    class User {
        public static $userCount = 0; // Static property

        public function __construct() {
            self::$userCount++;     // Yeni istifadəçi əlavə olunduqda artırılır
        }
    }

    // Yeni istifadəçilər yaradılır
    $user1 = new User();
    $user2 = new User();

    echo "İstifadəçi sayi: " . User::$userCount; // Nəticə: 2



?>