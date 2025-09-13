<!-- 
        Destructor nədir?
        Destructor, obyektin məhv edilməsi zamanı avtomatik olaraq çağırılan xüsusi bir metoddur. Bu, obyekt artıq istifadə olunmadıqda 
        və yaddaşdan silinməyə hazırlandıqda işə düşür. Destructor, əsasən, resursları (fayllar, verilənlər bazası bağlantıları və s.) təmizləmək üçün istifadə olunur.

        Destructor-un Xüsusiyyətləri:

                __destruct() adlı xüsusi bir metoddur.

                Avtomatik olaraq işə düşür – onu əl ilə çağırmağa ehtiyac yoxdur.

                Parametr qəbul etmir.

                Public (ümumiyyətlə açıq) olur.

-->

<?php

        class FileHandler {
                private $file;
        
                public function __construct($filename) {

                        $this->file = fopen($filename, "w");  
                        echo "Fayl acildi: $filename\n";

                }
        
                public function __destruct() {

                        fclose($this->file);  
                        echo "Fayl baglandi.\n";

                }
        }
    
        $fileHandler = new FileHandler("test.txt");  

?>