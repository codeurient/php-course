<!-- 


    self istifadə edərək type hinting, bir CLASS-ın özünə işarə etmək olur. 

    Bu, xüsusilə obyektin metodları və property-ləri ilə işləyərkən istifadə olunur və self açar sözü CLASS-ın özünə bir referans verir.


    public function createInstance(): self:     Burada `createInstance` metodunun type hinting-i var. Bu metodun dönüş tipi self olaraq 
                                                müəyyən edilib. Bu o deməkdir ki, `createInstance` metodu bu sinifdən (MyClass) bir obyekt qaytaracaq.

    new self(): Bu, self açar sözünü istifadə edərək sinifin özündən yeni bir obyekt yaradır. Yəni, bu metod yeni bir MyClass obyekti yaratmaq və onu qaytarmaq üçün istifadə olunur.


    
-->


<?php

        class MyClass {
            public function createInstance(): self {
                return new self();
            }
        }


        $myClass = new MyClass();
        $newObject = $myClass->createInstance();
        var_dump($newObject);
        



?>



