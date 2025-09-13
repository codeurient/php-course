<!-- 

    Polymorphism nədir?
        Polymorphism (çoxşəkillilik), eyni metod adının fərqli class-larda fərqli şəkildə işləyə bilməsi anlamına gəlir. 
        


    Niyə vacibdir?
        Polymorphism proqram təminatını daha çevik və genişlənə bilən edir:
        Kodun yenidən istifadəsini artırır.
        Müxtəlif obyektlərin eyni interfeys və ya metod vasitəsilə idarə edilməsini təmin edir.



    Polymorphism növləri
        1) Compile-time polymorphism (PHP-də dəstəklənmir):     Eyni metodun fərqli parametrlərlə (method overloading) işləməsi.
        2) Run-time polymorphism (PHP-də dəstəklənir):          İrsiyyət və method overriding vasitəsilə həyata keçirilir.


    Polymorphism terimi İnheritance-də (extends) istifadə edilən Overriding teriminə bənzədimi ? Bəli. 
    

    Polymorphism çox vaxt interface-lər vasitəsilə həyata keçirilir. Deməli, Overriding dedikdə İnheritance,
    Polymorphism dedikdə İnterface ağla gəlməlidir. 

    Növbəti addımda İnterface haqqında olan mövzuya baxaq sonra isə təkrar Polymorphism haqqında olan yazımıza dəvam edərik. 

-->

<?php


    // Polymorphism-ə aid sadə nümunə: Burada, fərqli heyvan növlərinin sound() metodunu fərqli şəkildə təyin edirik.

    // Parent class 
    class Animal {
        public function sound() {
            echo "Heyvan səsi cixarir.  <br>";
        }
    }

    // Child class-lar
    class Dog extends Animal {
        public function sound() {
            echo "İt hürür: Hav Hav!  <br>";
        }
    }

     // Child class-lar
    class Cat extends Animal {
        public function sound() {
            echo "Pişik miyoldayir: Miyav Miyav!  <br>";
        }
    }

    // Child class-ları istifadə edərək obyektlər yaradaq
    $dog = new Dog();
    $cat = new Cat();
    $animal = new Animal();

    // Metodları çağırırıq
    $dog->sound();     // Nəticə: İt hürür: Hav Hav!
    $cat->sound();     // Nəticə: Pişik miyoldayır: Miyav Miyav!
    $animal->sound();  // Nəticə: Heyvan səsi çıxarır.


?>