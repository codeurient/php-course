<!-- 

    Inheritance (İrsiyyət) nədir?
        Inheritance (İrsiyyət), OOP-də bir class-ın (parent class) xüsusiyyətlərini və funksionallığını başqa bir class-a (child class) ötürməsi üsuludur.


    Niyə Inheritance istifadə olunur?
        Kodun təkrar istifadəsi: Mövcud class-ın xüsusiyyətlərini və metodlarını yenidən yazmağa ehtiyac olmadan istifadə edə bilərsiniz.
        Hiyerarşik struktur: Class-lar arasında əlaqələri daha yaxşı təşkil etmək üçün istifadə olunur.


    Inheritance necə işləyir?
        Bir class başqa bir class-dan irsiyyət alarkən, EXTENDS açar sözündən istifadə edir.


    Terminlər
        Parent Class (Base Class, Super Class): Xüsusiyyətlərini və metodlarını paylaşan class.
        Child Class (Derived Class, Sub Class): İrsiyyət alan class.

-->

<?php

        class Animal {
            public $name;

            public function eat() {
                echo $this->name . " yeyir. <br>";
            }
        }

        class Dog extends Animal {
            public function bark() {
                echo $this->name . " hürür. <br>";
            }
        }

        // Parent class-dan property və method istifadə edilir
        $dog = new Dog();
        $dog->name = "Doby";
        $dog->eat();  // Nəticə: Doby yeyir.
        $dog->bark(); // Nəticə: Doby hürür.




?>