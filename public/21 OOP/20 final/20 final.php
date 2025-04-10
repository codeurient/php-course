<!-- 
        PHP-də final açar sözü (keyword), OOP-də, class-lar və metodlar üzərində məhdudiyyətlər qoymaq üçün istifadə edilir. 
        Bu açar sözü istifadə edərək, aşağıdakıları təmin etmək mümkündür:
                - Bir class-ın başqa bir class tərəfindən miras alınmasının qarşısını almaq. 
                - Bir metodun miras alınan class-lar tərəfindən override (yenidən yazılmasının) qarşısını almaq.



        Final Keyword ilə bağlı Qaydalar:
                Final Class:
                        - final elan edilən bir class başqa bir class tərəfindən miras alına bilməz.
                        - final class daxilindəki metodlar avtomatik olaraq final sayılmır, bunu ayrıca qeyd etmək lazımdır.

                Final Metod:
                        - Final metod miras alınan class-lar tərəfindən override edilə bilməz.
                        - Final metod yalnız public və ya protected ola bilər. private metodlar onsuz da override edilə bilməz.
-->

<?php

// Əgər bir class final olaraq elan edilərsə, o class başqa bir class tərəfindən miras alına bilməz. Bu, həmin class-ın "son" (final) olduğunu bildirir.

        final class MyClass {
                public function sayHello() {
                        echo "Salam, bu MyClass-dir!";
                }
        }

        // Bu aşağıdakı kod səhv verəcək, çünki MyClass final elan edilib.
        class ChildClass extends MyClass {
                // Səhv: Final class miras alına bilməz.
        }

        $obj = new MyClass();
        $obj->sayHello(); // Çap edəcək: Salam, bu MyClass-dır!





// Əgər bir metod final olaraq elan edilərsə, həmin metod miras alınan class-lar tərəfindən override edilə bilməz.
        class ParentClass {
                final public function greet() {
                        echo "Salam, bu ParentClass-dan bir mesajdir!";
                }
        }

        class ChildClass extends ParentClass {
                // Bu aşağıdakı kod səhv verəcək, çünki greet metodu final elan edilib.
                public function greet() {
                        echo "Bu ChildClass-dan bir mesajdir!";
                }
        }

        $obj = new ParentClass();
        $obj->greet(); // Çap edəcək: Salam, bu ParentClass-dan bir mesajdır!



// Final Class və Metodların bir yerdə istifadəsi:
    final class FinalClass {
        public function sayHi() {
            echo "Salam, bu final class-dir!";
        }

        final public function greet() {
            echo "Salam, bu final metod-dur!";
        }
    }

    // Bu class miras alına bilməz:
    // class AnotherClass extends FinalClass { }

    $obj = new FinalClass();
    $obj->sayHi();  // Çap edəcək: Salam, bu final class-dır!
    $obj->greet();  // Çap edəcək: Salam, bu final metod-dur!

?>



