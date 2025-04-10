<?php
// Seçimi əldə etmək
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $selected_fruit = $_POST['fruit'];

    // Seçimi göstərmək
    echo "Seçdiyiniz meyvə: " . htmlspecialchars($selected_fruit);
}
?>