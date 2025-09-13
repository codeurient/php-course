<!-- 

Anonymous Classes (Adsız Siniflər), adından da göründüyü kimi, xüsusi bir ad vermədən class yaratmağa imkan verir. Bu class əsasən sadə və qısamüddətli istifadələr üçün nəzərdə tutulub. 


Anonymous Class Nədir?
    - Anonymous Class bir class-dir, lakin ad verilmir.
    - Bir dəfəlik istifadə üçün yaradılır, məsələn, kiçik bir obyekt yaratmaq və onun funksionallığından istifadə etmək üçün.
    - Adi siniflər kimi method və property-lərə sahib ola bilər.
    - Daha çevik və yüngül istifadəni təmin edir.

-->

<?php

// Anonymous Class $object dəyişəninə təyin edilib.
$newObject = new class {
    // Property və Method-lar burada yaradılır
    public $name = "Anonymous Class";

    public function sayHello() {
        return "Hello from " . $this->name . "!";
    }
};
echo $newObject->sayHello();