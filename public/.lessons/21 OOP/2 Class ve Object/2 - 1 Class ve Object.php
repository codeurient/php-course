<!--    

        1. Class və Object


        Class (Sinif):

                Class,  xassələri (property) və funksiyaları (method) əhatə edən obyektlərin şablonudur.
                Class-ın özü təkbaşına işləyə bilmir, yalnız o class -ın obyekti yaradıldıqda mənalı olur.

        Object (Obyekt):

                Object, bir class-dan yaradılmış konkret nümunədir. O, real həyatda mövcud olan bir varlıq kimi düşünülə bilər. Class, obyektin necə görünəcəyini və necə 
                davranacağını müəyyən edir, obyekt isə bu məlumatların konkret tətbiqidir.


        Real həyatdan nümunə:
                Class: "Avtomobil" bir class ola bilər, çünki bütün avtomobillərin ümumi xüsusiyyətləri var (rəng, model, mühərrik həcmi).
                Object: "BMW", "Audi" və "Toyota" bu sinifdən yaradılmış obyektlərdir.

-->

<?php
        class Car {
                // Property-lər
                public $brand;  // Avtomobilin markası
                public $color;  // Avtomobilin rəngi

                // Method
                public function start() {
                        echo "Avtomobil işə düşdü. <br>" ;
                }
        }

        // Car class -ından obyekt yaratmaq
        $car1 = new Car();      // Yeni bir avtomobil obyekti yaradırıq
        $car1->brand = "BMW";   // Obyektin brand xüsusiyyətinə dəyər təyin etmək
        $car1->color = "Qara";  // Obyektin color xüsusiyyətinə dəyər təyin etmək

        // Method-u çağırmaq
        $car1->start();         // Nəticə: Avtomobil işə düşdü.
        echo  $car1->brand . '<br>';
        echo  $car1->color . '<br>';



        
        // Car class -ından obyekt yaratmaq. (    Əgər dəyər ötürülmürsü yumru mörtərizə qoymaq məcbur deyildir:  $car2 = new Car;    )
        $car2 = new Car();      
        $car2->brand = "Toyota";   
        $car2->color = "Ag";  
        
        $car2->start();         
        echo  $car2->brand . '<br>';
        echo  $car2->color . '<br>';

?>