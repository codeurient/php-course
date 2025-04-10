<!-- 

        Encapsulation, bir class-ın daxili məlumatlarını (property-lər və metodlar) xarici təsirlərdən qorumaq və yalnız müəyyən metodlarla həmin məlumatlara girişə icazə verməkdir.


        Encapsulation-ın Əsas Prinsipləri:
                1. Məlumatların gizlədilməsi (Data Hiding): Class daxilində olan property-lər və metodlar private və ya protected access 
                modifiers ilə qorunur, beləliklə, onlar birbaşa xaricdən əldə edilə bilmir.

                2. Kontrollu giriş: public metodlar vasitəsilə bu məlumatlara giriş təmin edilir. Bu metodlara getter və setter metodları deyilir:
                        - Getter: Məlumatları əldə etmək üçün istifadə olunur.
                        - Setter: Məlumatları dəyişdirmək üçün istifadə olunur.

                3. Məlumatların tamlığı (Data Integrity): Setter metodları məlumatlara nəzarət etməyə imkan verir. Məsələn, yalnız düzgün dəyərin qəbul edilməsini təmin etmək mümkündür.

        Niyə Encapsulation-dan istifadə olunur?
                - Təhlükəsizlik: Class daxilindəki məlumatlar təsadüfi və ya icazəsiz dəyişikliklərdən qorunur.
                - Modulluluq:    Kod daha modullu olur, yəni dəyişikliklər yalnız həmin class daxilində edilir.

-->

<?php


        class User {
        // Gizli məlumat (private property)
        private $name;

        // Setter metodu (məlumatı təyin edir)
        public function setName($name) {
                if (strlen($name) > 2) { // Dəyərin uzunluğunu yoxlayırıq
                        $this->name = $name;
                } else {
                        echo "Ad ən azi 3 simvol olmalidir!<br>";
                }
        }

        // Getter metodu (məlumatı qaytarır)
        public function getName() {
                return $this->name;
        }
        }

        // Class-dan obyekt yaradırıq
        $user = new User();

        // Setter vasitəsilə məlumat təyin edirik
        $user->setName("Ali");                  // Doğru dəyər
        echo $user->getName() . '<br>';         // Çap edəcək: Ali

        $user->setName("A");                    // Yanlış dəyər
       




?>




<!-- Encapsulation olmadan problem: -->
<?php

        class User {
        public $name; // Məlumat birbaşa əldə edilə bilər
        }

        $user = new User();
        $user->name = "Ali"; // Adı təyin etdik
        echo $user->name;    // Çap edəcək: Ali

        $user->name = "";    // Səhv dəyər təyin olundu
        echo $user->name;    // Çap edəcək: (boş dəyər)

?>