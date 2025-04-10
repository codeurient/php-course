<!-- 

    Ard-arda olan inheritance nümunəsi
    Bu misalda, bir class başqa bir class-dan irsiyyət alır və bu irsiyyət zənciri növbəti class-lara ötürülür:

-->

<?php
        // Ən əsas parent class
        class A {
            public function methodA() {
                echo "Bu, Class A-dan gəlir.   <br>";
            }
        }

        // İkinci class, birinci class-dan irsiyyət alır
        class B extends A {
            public function methodB() {
                echo "Bu, Class B-dən gəlir.   <br>";
            }
        }

        // Üçüncü class, ikinci class-dan irsiyyət alır
        class C extends B {
            public function methodC() {
                echo "Bu, Class C-dən gəlir.   <br>";
            }
        }

        // Dördüncü class, üçüncü class-dan irsiyyət alır
        class D extends C {
            public function methodD() {
                echo "Bu, Class D-dən gəlir.   <br>";
            }
        }

        // Ən son class-ın obyektini yaradıb bütün metodlara giriş əldə edə bilərik
        $d = new D();

        $d->methodA(); // Nəticə: Bu, Class A-dan gəlir.
        $d->methodB(); // Nəticə: Bu, Class B-dən gəlir.
        $d->methodC(); // Nəticə: Bu, Class C-dən gəlir.
        $d->methodD(); // Nəticə: Bu, Class D-dən gəlir.
?>