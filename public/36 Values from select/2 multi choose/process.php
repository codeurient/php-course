<?php

// POST sorğusundan massiv dəyərləri qəbul etmək
if (isset($_POST['fruit'])) {
    $fruits = $_POST['fruit']; // $fruits artıq massivdir
    
    foreach ($fruits as $fruit) {
        echo $fruit . "<br>";
    }
}
?>
