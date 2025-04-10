<!-- 

    Self Keyword

-->

<?php


    class MyClass {
        public static $message = "Salam, dünya!";


        public static function showMessage() {
            echo self::$message; // self static xassəyə müraciət edir.
        }
    }

    MyClass::showMessage(); // Çap edəcək: Salam, dünya!


?>



