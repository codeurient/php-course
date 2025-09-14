<?php

class Insan {

    public $ad = "Ali";
    public $yas = 25;

}

$insan = new Insan();

echo '<pre>';
    echo json_encode($insan, JSON_PRETTY_PRINT);  // Çıxış: {"ad":"Ali","yas":25}
echo '</pre>';
