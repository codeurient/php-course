<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Faylın olub olmadığını yoxla
    if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {

        $fileTmpPath    = $_FILES['file']['tmp_name'];
        $fileName       = $_FILES['file']['name'];
        $fileSize       = $_FILES['file']['size'];
        $fileType       = $_FILES['file']['type'];
        $uploadPath     = 'temp/' . $fileName;
        // Aşağıdakı kimi yazmaqda olar. Yuxarıdakı kimi yazmaqda olar. 
        // $uploadPath     = __DIR__.'\\temp\\' . $fileName;

        if ($fileSize > 3 * 1024 * 1024) {
            exit('FIle size is more than 3 mb');
        }
       
        // Faylın serverə yüklənməsi
        if (move_uploaded_file($fileTmpPath, $uploadPath)) {
            echo "Fayl uğurla yükləndi: " . htmlspecialchars($fileName);
        } else {
            echo "Fayl yükləmə zamani xəta baş verdi.";
        }
    } 
    
    

    else {
        echo "Fayl yüklənməyib və ya xəta baş verib.";
    }
}

?>

<!-- 


- Birincisi (slayş /), Unix/Linux və ya Cross-platform tətbiqləri üçün daha uyğundur.
- İkincisi (tərs slayş \\), yalnız Windows əməliyyat sisteminə uyğun gəlir.



Tövsiyə: PHP-də platformadan asılı olmayan bir şəkildə işləmək üçün DIRECTORY_SEPARATOR istifadə 
etmək yaxşıdır. Bu, müvafiq yol separatorunu avtomatik olaraq təyin edir. 



Windows-da \ (tərs slayş) əvəzinə / (slayş) istifadə edərək yola daxil olmağımızın işləməsinin səbəbi PHP-nin cross-platform (platformadan asılı olmayan) 
xüsusiyyətlərindən qaynaqlanır. PHP, xüsusilə Windows əməliyyat sistemində, \ və / separatorlarını düzgün idarə edə bilir.



Windows əməliyyat sistemində fayl yolu separatoru \ olsa da, PHP fayl yollarını çox vaxt / ilə də düzgün təhlil edir. PHP-də / separatoru həm Windows, 
həm də Unix/Linux sistemlərində işləyir, çünki PHP avtomatik olaraq bu yolda dəyişiklik edir və fayl yolunu düzgün təhlil edir.



Bəzi əhəmiyyətli məqamlar:
    Windows-da / və \\ işləyir: PHP-də Windows əməliyyat sistemində \ istifadə edərkən xüsusi simvol sayılır və ya \\ yazılmalıdır 
    (çünki \ simvolu xüsusi simvolların əvvəlindəki escape karakteri kimi işləyir). Lakin PHP, \\ və / istifadə edilən yolları düzgün təhlil edir.

    Unix/Linux sistemlərində isə yalnız / işləyir: Unix və Linux əməliyyat sistemlərində yalnız / separatoru qəbul edilir.




Lakin platformadan asılı olmamaq üçün daha təmiz və doğru bir yanaşma olaraq, DIRECTORY_SEPARATOR istifadə etmək tövsiyə olunur. 
Bu, PHP-nin avtomatik olaraq sistemə uyğun doğru separatoru seçməsinə imkan verir.

    $uploadPath = __DIR__ . DIRECTORY_SEPARATOR . 'temp' . DIRECTORY_SEPARATOR . $fileName;

Bu şəkildə, kodunuz hər iki əməliyyat sistemində də uyğun işləyəcək və yol separatoru avtomatik olaraq düzgün təyin olunacaq.


-->