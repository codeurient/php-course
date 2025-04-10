<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Radio seçim
    if (isset($_POST['drink'])) {
        $drink = $_POST['drink'];
        echo "Seçdiyiniz içki: " . htmlspecialchars($drink) . "<br>";
    } else {
        echo "İçki seçilməyib.<br>";
    }




    // Checkbox seçimlər
    if (isset($_POST['food'])) {
        $foods = $_POST['food'];
        echo "Seçdiyiniz yeməklər: <br>";


        foreach ($foods as $food) {
            echo "- " . htmlspecialchars($food) . "<br>";
        }
    } 
    
    else {
        echo "Heç bir yemək seçilməyib.<br>";
    }
}

