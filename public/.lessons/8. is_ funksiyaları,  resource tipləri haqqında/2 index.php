<?php
    
    // ECHO - var_export()
    $tests = array(
        "42",
        1337,
        0x539,
        02471,
        0b10100111001,
        1337e0,
        "0x539",
        "02471",
        "0b10100111001",
        "1337e0",
        "not numeric",
        array(),
        9.1,
        null,
    );

    foreach($tests as $element ) {
        if (is_numeric($element)) {
            // var_export() funksiyası, verilən dəyişəni PHP kodu formatında (sintaksis uyğun olaraq) çıxarır. 
            echo var_export($element, true) . " - eded ", PHP_EOL . "<br>";
        } else {
            echo var_export($element, true) . " - eded deyil ", PHP_EOL . "<br>";
        }
    }
    



    // ECHO 
    $tests = array(
        "42",
        1337,
        0x539,
        02471,
        0b10100111001,
        1337e0,
        "0x539",
        "02471",
        "0b10100111001",
        "1337e0",
        "not numeric",
        array(),
        9.1,
        null,
    );

    foreach($tests as $element ) {
        if (is_numeric($element)) {
            echo $element . " - eded ", PHP_EOL . "<br>";
        } else {
            echo $element . " - eded deyil ", PHP_EOL . "<br>";
        }
    }