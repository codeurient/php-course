<!-- 


    Praktiki Nümunə


-->

<?php


    class Counter {
        public static $count = 0;

        public static function increment() {
            self::$count++;
        }

        public static function getCount() {
            return self::$count;
        }
    }

    // Static metodları və xassələri birbaşa sinifdən istifadə edirik.
    Counter::increment();
    Counter::increment();

    echo Counter::getCount(); // 2






?>



