<!-- 
 

    PHP-də fayllar ilə işləmək üçün geniş funksiyalar, konstantlar və metodlar mövcuddur. Onların vasitəsilə fayl 
    oxumaq, yazmaq, silmək, yaratmaq, yerdəyişmək və digər əməliyyatlar həyata keçirilə bilər.



Oxuma və Yazma
    fopen()                 – Faylı açır və ya yeni fayl yaradır.
    fclose()                – Açıq faylı bağlayır.
    fread()                 – Faylı oxuyur.
    fwrite()                – Fayla məlumat yazır.
    file_get_contents()     – Faylın bütün məzmununu bir dəfəlik oxuyur.
    file_put_contents()     – Fayla məlumat yazır (məlumatı əvəz edir və ya əlavə edir).
    fgets()                 – Fayldan bir sətir oxuyur.
    fgetc()                 – Fayldan bir simvol oxuyur.
    fprintf()               – Fayla formatlaşdırılmış məlumat yazır.
    ftruncate()             – Faylı müəyyən bir uzunluğa qədər qısaldır.
    rewind()                – Fayl oxuyucusunu faylın başlanğıcına qaytarır.

Sıfırlama və Yaratma
    touch()                     – Boş bir fayl yaradır və ya mövcud faylın zaman nişanını dəyişir.
    tmpfile()                   – Müvəqqəti fayl yaradır.
    clearstatcache()            – Fayl məlumatlarının keşi təmizləyir.


Fayl Mövcudluğunu Yoxlama
    file_exists()               – Faylın mövcud olub-olmadığını yoxlayır.
    is_file()                   – Fayl olub-olmadığını yoxlayır.
    is_readable()               – Faylın oxuna bilər olub-olmadığını yoxlayır.
    is_writable()               – Faylın yazıla bilər olub-olmadığını yoxlayır.


Fayl Məlumatları
    filesize()                  – Faylın ölçüsünü qaytarır (baytlarla).
    filetype()                  – Faylın növünü qaytarır (məsələn, fayl, kataloq və s.).
    stat()                      – Fayl haqqında məlumatları qaytarır (ölçü, hüquqlar və s.).
    pathinfo()                  – Faylın yol məlumatlarını qaytarır.
    realpath()                  – Faylın tam yolunu qaytarır.
    basename()                  – Faylın adını qaytarır.
    dirname()                   – Faylın kataloqunu qaytarır.
    fstat()                     – Açıq fayl haqqında məlumatları qaytarır.
    

Silinmə və Dəyişdirilmə
    unlink()                    – Faylı silir.
    rename()                    – Faylın adını dəyişir və ya yerdəyişmə edir.
    copy()                      – Faylı kopyalayır.


Faylın Yerləşdirilməsi və Yoxlanması
    feof()                      – Faylın sonuna çatılıb-çatılmadığını yoxlayır.
    ftell()                     – Fayl oxuyucusunun cari mövqeyini qaytarır.
    flock()                     – Faylı bağlayır (read/write əməliyyatları üçün).
    chown()                     – Faylın sahibini dəyişir.
    chmod()                     – Faylın hüquqlarını dəyişir.
    chgrp()                     – Faylın qrupunu dəyişir.


Fayl Sistemləri ilə İşləmək. Kataloqlar
    mkdir()                     – Yeni kataloq yaradır.
    rmdir()                     – Boş bir kataloqu silir.
    scandir()                   – Kataloqun məzmununu oxuyur.
    opendir()                   – Kataloqu açır.
    readdir()                   – Kataloqdan bir fayl və ya alt-kataloq oxuyur.
    closedir()                  – Açıq kataloqu bağlayır.
    is_dir()                    – Bir yolun kataloq olub-olmadığını yoxlayır.
    chdir()                     – Cari işçi kataloqunu dəyişir.
    getcwd()                    – Cari işçi kataloqunu qaytarır.
    dir()                       – Kataloq obyektini yaradır və kataloqu idarə edir.


Fayllarla Əlaqəli Super Qlobal Dəyişənlər
    $_FILES                     – Form vasitəsilə yüklənmiş faylları idarə etmək üçün istifadə olunur.


Fayl İdarəsi ilə Bağlı Konstantlar. Fayl Açma Modları (fopen)
    'r'                         – Faylı oxumaq üçün açır.
    'r+'                        – Faylı oxumaq və yazmaq üçün açır.
    'w'                         – Faylı yazmaq üçün açır (mövcud faylın məzmununu silir).
    'w+'                        – Oxumaq və yazmaq üçün açır (mövcud faylın məzmununu silir).
    'a'                         – Faylı yazmaq üçün açır (sonuna əlavə edir).
    'a+'                        – Oxumaq və yazmaq üçün açır (sonuna əlavə edir).
    'x'                         – Yalnız yazmaq üçün yeni fayl yaradır.
    'x+'                        – Yeni fayl yaradır və oxumaq/yazmaq üçün açır.


Fayl Status Konstantları
    FILE_USE_INCLUDE_PATH       – Faylın yolunu yoxlayır.
    LOCK_EX                     – Eksklüziv bağlama üçün istifadə olunur.
    LOCK_SH                     – Paylaşılan bağlama üçün istifadə olunur.
    LOCK_UN                     – Bağlamanı azad edir.


Fayllar üçün Stream Funksiyaları
    stream_context_create()     – Stream üçün kontekst yaradır.
    stream_context_set_option() – Kontekstə parametrlər əlavə edir.
    stream_get_contents()       – Stream məlumatlarını oxuyur.
    stream_set_timeout()        – Stream vaxtını təyin edir.
    stream_set_blocking()       – Stream bloklanmasını tənzimləyir.


Fayl Yükləmə və Emal
    move_uploaded_file()        – Yüklənmiş faylı yeni yerə köçürür.
    is_uploaded_file()          – Faylın yüklənmiş fayl olub-olmadığını yoxlayır.
-->



<?php

    class FileManager
    {
        private $filePath;

        // Constructor: Fayl yolunu təyin edir
        public function __construct($filePath)
        {
            $this->filePath = $filePath;
        }

        // Fayla yazma metodu
        public function writeToFile($content)
        {
            if (file_put_contents($this->filePath, $content)) {
                return "Fayla uğurla yazildi.";
            } else {
                return "Fayla yazmaq mümkün olmadi.";
            }
        }

        // Faylı oxuma metodu
        public function readFromFile()
        {
            if (file_exists($this->filePath)) {
                return file_get_contents($this->filePath);
            } else {
                return "Fayl mövcud deyil.";
            }
        }

        // Faylı silmə metodu
        public function deleteFile()
        {
            if (file_exists($this->filePath)) {
                unlink($this->filePath);
                return "Fayl silindi.";
            } else {
                return "Fayl mövcud deyil.";
            }
        }
    }

    // Sinifdən istifadə
    $fileManager = new FileManager("example.txt");

    // Fayla yazmaq
    echo $fileManager->writeToFile("Salam, dünya!") . "<br>";

    // Faylı oxumaq
    echo "Fayl məzmunu: " . $fileManager->readFromFile() . "<br>";

    // Faylı silmək
    echo $fileManager->deleteFile() . "<br>";

