<!-- 

    Static Keyword nədir?
        PHP-də static keyword bir property və ya method-u birbaşa class-a bağlamaq üçün istifadə olunur. 
        Bu, həmin property və ya method-un obyekt (object) yaradılmadan istifadə edilə biləcəyini ifadə edir.


    Static Property və Method-lar:
        Static Property: Class-a məxsusdur və bütün obyektlər üçün eynidir. Yəni, static property bir dəfə təyin olunur və bütün obyektlər üçün dəyişilməz olaraq qalır.
        Static Method:   Class-a məxsus bir funksiyadır və obyekt yaradılmadan birbaşa istifadə oluna bilər.


    Static Property və Method-un Xüsusiyyətləri:
        Obyekt yaratmadan birbaşa class adı ilə çağırıla bilər.
        $this açar sözü ilə istifadə edilə bilməz. Əvəzində self və ya static istifadə olunur.
        Static property və method-lar yalnız :: (scope resolution operator)` ilə çağırılır.



    Static ilə Normal Property və Method-un Fərqi:
        Xüsusiyyət	                        Static	                                            Normal (Non-static)
        Əlçatanlıq	                        Class adı ilə (Obyekt tələb olunmur)	            Obyekt vasitəsilə
        Dəyərin saxlanması	                Dəyər bütün obyektlər üçün eynidir	                Hər obyekt üçün ayrıca saxlanır

-->

<?php

    // Misal: Static Property

    class Counter {
        public static $count = 0;       // Static property

        public static function increment() {
            self::$count++;             // Static property-i artırır
        }
    }

    Counter::increment();               // Obyekt yaratmadan çağırılır
    Counter::increment();
    
    echo Counter::$count;               // Nəticə: 2


?>