<!-- 

    Obyekt yaradılarkən PHP dəyəri ötürülür və getLanguage() metodundan istifadə edilir.

-->

<?php

$object = new class("PHP") {

    private $language;

    public function __construct($language) {
        $this->language = $language;
    }


    public function getLanguage() {
        return "I am learning " . $this->language . "!";
    }


};

echo $object->getLanguage(); // I am learning PHP!
