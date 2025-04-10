<!-- 
       

-->

<?php

        class Product {

                public $name;
                public $price;

                // Constructor metodu
                public function __construct($name, $price) {
                        $this->name = $name;
                        $this->price = $price;
                }

                public function display() {
                        echo "Məhsul: {$this->name}, Qiymət: {$this->price} AZN.\n";
                }
                
        }

        // Yeni obyektlər yaratmaq
        $product1 = new Product("Telefon", 1500);
        $product2 = new Product("Noutbuk", 3000);

        $product1->display();  // Nəticə: Məhsul: Telefon, Qiymət: 1500 AZN.
        $product2->display();  // Nəticə: Məhsul: Noutbuk, Qiymət: 3000 AZN.



?>