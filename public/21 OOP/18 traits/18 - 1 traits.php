<!-- 

        PHP bir class-ın yalnız bir class-ı miras almasına (single inheritance (extends)) icazə verir. Amma bəzən bir neçə 
        class-da eyni funksionallığı təkrar istifadə etmək lazımdır. 
        
        Bu halda, Traits problemi həll edir:
                Eyni kodu təkrar-təkrar yazmağa ehtiyac qalmır.
                Kod daha azad şəkildə paylaşılır.
                Miras (inheritance) ilə deyil, use açar sözü ilə class-a əlavə edilir.



        Traits necə işləyir?
                trait açar sözü ilə yaradılır.
                Class daxilində use açar sözü ilə istifadə olunur.

-->

<?php


        // Trait yaradırıq
        trait SayHello {
                public function hello() {
                        echo "Salam, dünya!";
                }
        }
        
        // Class yaradırıq və trait-i istifadə edirik
        class MyClass {
                use SayHello; // Trait-i əlavə edirik
        }
        
        $obj = new MyClass();
        $obj->hello(); // Çap edəcək: Salam, dünya!

    

?>