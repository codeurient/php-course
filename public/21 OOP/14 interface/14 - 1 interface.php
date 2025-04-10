<!-- 

    1) Interface, OOP -də, bir növ şablondur. 
            - Interface-də metodlar yalnız elan edilir (yazılır), lakin onların. Implementasiyası ( {} içərisi) yazılmır. 
            - Interface, bir class-ın hansı metodları implement (istifadə etməsi) etməli olduğunu müəyyən edir.
            - Class interface-i implement edirsə, həmin interface-dəki bütün metodları təyin etməlidir.
            - Interface-də property (xüsusiyyət) ola bilməz, yalnız konstantlar ola bilər.
    

    2) Niyə vacibdir?
        Standartlar müəyyən edir: Bütün implementasiya edən class-lar eyni metodlara sahib olmalıdır.
        Çoxsaylı irsiyyət (Multiple Inheritance): PHP bir class-a yalnız bir valideyn class-ı irs (extends) edə bilər. Lakin bir class bir neçə interface implement edə bilər.
        Dizayn prinsiplərinə uyğunluq: Interface-lər proqramın genişləndirilə bilməsini və modulluluğunu təmin edir.


    3) EXTENDS etməklə İMPLEMENT etməyi səhf salmayın. 


    4) Interface ilə bağlı əsas məqamlar
            Interface class deyil: Yalnız metodlar və konstantlar təyin olunur.
            Birbaşa obyekt yaradıla bilmir.
            Methodlar avtomatik olaraq public olur: Metodlara xüsusi (private, protected) giriş hüququ verə bilməzsiniz.
            Bir class birdən çox interface implement edə bilər.
        
-->

<?php

    // Sadə bir Interface nümunəsi. Interface yaradılır
    interface Shape {                       // shape - forma, fiqur demekdir.
        public function area();
        public function perimeter();
    }
   


    // Circle (Dairə) class-ı
    class Circle implements Shape {
        private $radius;

        public function __construct($radius) {
            $this->radius = $radius;
        }

        public function area() {
            return pi() * $this->radius ** 2;
        }

        public function perimeter() {
            return 2 * pi() * $this->radius;
        }
    }

    // Rectangle (Düzbucaqlı) class-ı
    class Rectangle implements Shape {
        private $width, $height;

        public function __construct($width, $height) {
            $this->width = $width;
            $this->height = $height;
        }

        public function area() {
            return $this->width * $this->height;
        }

        public function perimeter() {
            return 2 * ($this->width + $this->height);
        }
    }

    // Obyektlər yaradılır
    $circle = new Circle(5);
    $rectangle = new Rectangle(4, 6);

    echo "Dairənin sahəsi:          "    . $circle->area()           . '<br>';           // Nəticə: 78.54
    echo "Dairənin perimetri:       "    . $circle->perimeter()      . '<br>';           // Nəticə: 31.42
    echo "Duzbucaqlinin sahəsi:     "    . $rectangle->area()        . '<br>';           // Nəticə: 24
    echo "Duzbucaqlinin perimetri:  "    . $rectangle->perimeter()   . '<br>';           // Nəticə: 20

?>