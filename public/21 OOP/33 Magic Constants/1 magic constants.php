<!-- 



    PHP-də Magic Constants öncədən təyin edilmiş xüsusi konstantlardır. Onlar kodun işləmə zamanı dəyişən dəyərləri təyin etmək üçün istifadə olunur.

    Bu konstantlar həmişə iki alt xətt (__) ilə başlayır və iki alt xətt (__) ilə bitir. Sehirli konstantlar proqramın müəyyən kontekstindən asılı olaraq fərqli dəyərlər qaytarır.



    Əsas Sehirli Konstantlar və İzahları
        __LINE__	         - Kodun işlədiyi sətirin nömrəsini qaytarır.
        __FILE__	         - Hal-hazırda işləyən faylın tam yolunu və adını qaytarır.
        __DIR__	             - Faylın olduğu qovluğun tam yolunu qaytarır.
        __FUNCTION__	     - Hal-hazırda icra olunan funksiyanın adını qaytarır.
        __CLASS__	         - Hal-hazırda işləyən class-ın adını qaytarır.
        __TRAIT__	         - Hal-hazırda istifadə olunan trait-in adını qaytarır.
        __METHOD__	         - Hal-hazırda icra olunan metodun tam adını qaytarır.
        __NAMESPACE__	     - Hal-hazırda işləyən namespace-in adını qaytarır.

-->


<?php
echo "Bu sətirin nömrəsi: " . __LINE__   . '<br>';         // Çıxış: Bu sətirin nömrəsi: 25
echo "Bu faylin tam yolu: " . __FILE__  . '<br>';
echo "Bu faylin qovluğu: " . __DIR__    . '<br>';










function exampleFunction() {
    echo "Bu funksiyanin adi: " . __FUNCTION__  .'<br>';
}
exampleFunction(); // Bu funksiyanin adi: exampleFunction









class ExampleClass {
    public function getClassName() {
        echo "Bu class-in adi: " . __CLASS__    .'<br>';
    }
}
$obj = new ExampleClass();
$obj->getClassName(); // Bu class-in adi: ExampleClass








class ExampleClass2 {
    public function exampleMethod() {
        echo "Bu metodun adi:  " . __METHOD__      .'<br>' ;
    }
}
$obj = new ExampleClass2();
$obj->exampleMethod(); // Bu metodun adi: ExampleClass::exampleMethod
?>

