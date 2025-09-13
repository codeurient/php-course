<!--

PHP-də DOM və NODE ilə işləmək üçün metodlar və konstantlar
    PHP, DOM (Document Object Model) ilə işləmək üçün DOM uzantısını təmin edir. Bu uzantı XML və HTML sənədlərini 
    manipulyasiya etmək üçün istifadə edilir. Aşağıda DOM ilə əlaqəli bütün əsas metodlar, konstantlar və xüsusiyyətlərin siyahısı verilmişdir.

DOM ilə İşləmək üçün Əsas Siniflər
    DOMDocument - Əsas sənəd obyektini təmsil edir.
    DOMElement - XML və ya HTML elementlərini təmsil edir.
    DOMAttr - Atributları təmsil edir.
    DOMNode - DOM ağacında hər hansı bir nodu təmsil edir.
    DOMText - Mətn nodlarını təmsil edir.
    DOMComment - Şərh nodlarını təmsil edir.
    DOMCdataSection - CDATA bölmələrini təmsil edir.
    DOMXPath - XPath sorğularını həyata keçirmək üçün istifadə edilir.


DOMDocument Sinfinin Əsas Metodları
    load($filename) - XML və ya HTML faylını yükləyir.
    loadHTML($string) - HTML sənədini string şəklində yükləyir.
    save($filename) - Sənədi fayla yazır.
    saveHTML() - Sənədi HTML şəklində qaytarır.
    createElement($name, $value = "") - Yeni element yaradır.
    createTextNode($content) - Mətn nodu yaradır.
    appendChild($newNode) - Yeni nodu mövcud nodun altına əlavə edir.
    getElementById($id) - ID-yə görə element qaytarır.
    getElementsByTagName($tagName) - Etiket adına görə elementlər qaytarır.


DOMNode Sinfinin Əsas Metodları
    cloneNode($deep) - Nodun kopyasını yaradır.
    hasChildNodes() - Nodun uşaq nodları olub-olmadığını yoxlayır.
    insertBefore($newNode, $referenceNode) - Noddan əvvəl başqa bir nod əlavə edir.
    removeChild($oldNode) - Uşaq nodunu silir.
    replaceChild($newNode, $oldNode) - Mövcud nodu başqa bir nod ilə əvəz edir.


DOMXPath Sinfinin Əsas Metodları
    query($expression) - XPath ifadəsinə əsasən nodları qaytarır.
    evaluate($expression) - XPath ifadəsini qiymətləndirir və nəticəni qaytarır.


DOM ilə İşləmək üçün Konstantlar
    XML_ELEMENT_NODE - Element nodu.
    XML_ATTRIBUTE_NODE - Atribut nodu.
    XML_TEXT_NODE - Mətn nodu.
    XML_COMMENT_NODE - Şərh nodu.
    XML_CDATA_SECTION_NODE - CDATA bölməsi.
    XML_DOCUMENT_NODE - Sənəd nodu.



Real Həyatdan Nümunə: XML Menyu Sənədinin Manipulyasiyası
Problem:
Bir restoran menyusu XML faylında saxlanılır. Biz bu menyuya yeni bir yemək əlavə etmək istəyirik.


-->




<?php
    class MenuManager
    {
        private $dom;
        private $menu;

        public function __construct($filePath)
        {
            $this->dom = new DOMDocument();
            $this->dom->load($filePath); // XML faylını yükləyirik
            $this->menu = $this->dom->getElementsByTagName("menu")->item(0); // Əsas menyu nodu
        }

        public function addDish($name, $price)
        {
            // Yeni yemək elementi yaradılır
            $dish = $this->dom->createElement("dish");

            // Yeməyin adı və qiyməti üçün elementlər yaradılır
            $nameElement = $this->dom->createElement("name", $name);
            $priceElement = $this->dom->createElement("price", $price);

            // Yeni elementlər yemək noduna əlavə edilir
            $dish->appendChild($nameElement);
            $dish->appendChild($priceElement);

            // Yemək nodu menyuya əlavə edilir
            $this->menu->appendChild($dish);

            // Yenilənmiş XML faylını saxlayırıq
            $this->dom->save("menu.xml");
        }
    }

    // İstifadə
    $menuManager = new MenuManager("menu.xml");
    $menuManager->addDish("Burger", "8.99");

    echo "Yeni yemək menyuya əlavə edildi!";

?>
