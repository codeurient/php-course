<!-- 

    Anonymous Classes interfeysləri implement edə bilər:

    Anonymous Class, Greetable interfeysini implement edir. Bu zaman greet() metodunu mütləq çağırmaq lazımdır.

-->

<?php


interface Greetable {
    public function greet();
}

$object = new class implements Greetable {
    public function greet() {
        return "Hello, World!";
    }
};

echo $object->greet(); // Hello, World!
