<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Faylın olub olmadığını yoxla
    if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {

        $fileTmpPath    = $_FILES['file']['tmp_name'];
        $fileName       = $_FILES['file']['name'];
        $fileSize       = $_FILES['file']['size'];
        $fileType       = $_FILES['file']['type'];
        $uploadPath     = 'uploads/' . $fileName;


        echo $fileTmpPath   . '<br>';
        echo $fileName  . '<br>';
        echo $fileSize  . '<br>';
        echo $fileType  . '<br>';
        echo $uploadPath    . '<br>';

        // Faylın serverə yüklənməsi
        // if (move_uploaded_file($fileTmpPath, $uploadPath)) {
        //     echo "Fayl uğurla yükləndi: " . htmlspecialchars($fileName);
        // } else {
        //     echo "Fayl yükləmə zamani xəta baş verdi.";
        // }
    } 
    
    
    else {
        echo "Fayl yüklənməyib və ya xəta baş verib.";
    }
}