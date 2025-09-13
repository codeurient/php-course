<!-- 

    Deep Copy (Dərin Kopiya)
    Tamamilə müstəqil obyektlər yaratmaq üçün:

    İçindəki obyektlər də ayrıca klonlanmalıdır.


    Bu misalda:
    __clone() daxilində details obyektinin də klonlanması təmin edilir.
    $product1 və $product2 tam müstəqil olur.

-->

<?php

class Product {
    public $name;
    public $details;

    public function __clone() {
        $this->details = clone $this->details;
    }
}

$details = new stdClass();
$details->description = "A great product";



$product1 = new Product();
$product1->name = "Laptop";
$product1->details = $details;



$product2 = clone $product1;
$product2->details->description = "A cloned product";



echo $product1->details->description; // A great product



