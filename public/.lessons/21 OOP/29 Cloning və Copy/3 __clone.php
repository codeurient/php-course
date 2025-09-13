<!-- 

Əgər obyektinizdə xüsusi klonlama davranışı tətbiq etmək istəyirsinizsə, __clone() adlı magic method-dan istifadə edə bilərsiniz.

-->

<?php


class Product {
    public $name;
    
    // __clone() metodu klonlama zamanı avtomatik olaraq işə düşür.
    public function __clone() {
        $this->name = "Cloned - " . $this->name;
    }
}

$product1 = new Product();
$product1->name = "Laptop";

$product2 = clone $product1;        // Klonlama baş verir

echo $product1->name; // Laptop
echo $product2->name; // Cloned - Laptop



