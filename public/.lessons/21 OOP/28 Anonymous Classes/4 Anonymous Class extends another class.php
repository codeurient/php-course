<!-- 


    Anonymous Class-lar digər class -lardan miras ala bilər:


-->

<?php

class BaseClass {
    public function getMessage() {
        return "This is a base class!";
    }
}




$object = new class extends BaseClass {
    public function getMessage() {
        return parent::getMessage();
    }
};

echo $object->getMessage(); 


