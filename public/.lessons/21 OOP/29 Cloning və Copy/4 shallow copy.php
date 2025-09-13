<!-- 

    Shallow Copy (Dərin olmayan üzdən kopyalama)

    clone istifadə etdikdə obyektin tərkibindəki sadə dəyərlər (string, integer və s.) tam müstəqil surət olaraq yaradılır. 
    Amma içində başqa obyektlər varsa, həmin obyektlər reference kimi ötürülür.

-->

<?php

class Product {
    public $name;
    public $details;
}

$details = new stdClass();
$details->description = "A great product";




$product1 = new Product();
$product1->name = "Laptop";
$product1->details = $details;



// Bu misalda: $product1 və $product2-dəki details obyektləri eyni istiqaməti paylaşır.
$product2 = clone $product1;
$product2->details->description = "A cloned product";
$product2->name = "A cloned product property";


echo $product1->details->description    . '<br>';    // A cloned product
echo $product1->name                    . '<br>';    // Laptop


