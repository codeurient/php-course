<!-- 
    Custom Exceptions (Xüsusi İstisnalar)
        İstisnaları öz siniflərinizlə fərdiləşdirə bilərsiniz.

    İstifadəçi yanlış şifrə daxil edərsə və ya hesabı deaktiv olarsa, xüsusi bir istisna atılacaq.


    1.  AuthenticationException: Bu, Exception sinifindən miras alınan xüsusi bir istisnadır. İstifadəçi doğrulama (authentication) 
        ilə bağlı səhvləri idarə etmək üçün istifadə olunur.

    2.  User sinifi: İstifadəçi obyekti username, password və isActive (hesabın aktiv olub-olmaması) xüsusiyyətlərinə sahibdir. authenticate 
        metodu daxil edilmiş şifrənin düzgün olub-olmamasını və hesabın aktiv olub-olmamasını yoxlayır.

    3.  İstisna idarə etmə: Əgər hesab deaktivdirsə və ya şifrə səhvdirsə, authenticate metodu AuthenticationException atır. try-catch blokunda 
        bu istisna tutulur və müvafiq səhv mesajı göstərilir.
    

        Bu cür xüsusi istisnalar real həyatda tətbiqlərdə geniş istifadə olunur. Məsələn:
            - Yanlış istifadəçi adı və ya şifrə daxil edildikdə
            - İstifadəçinin hesabı deaktiv edildikdə
            - Hesab bir neçə dəfə yanlış şifrə ilə daxil olmağa cəhd edildikdən sonra bloklandıqda

-->

<?php
    class AuthenticationException extends Exception {}

    class User {
        private $username;
        private $password;
        private $isActive;

        public function __construct($username, $password, $isActive = true) {
            $this->username = $username;
            $this->password = $password;
            $this->isActive = $isActive;
        }


        public function authenticate($enteredPassword) {
            // Hesab aktiv deyilsə, istisna atılır
            if (!$this->isActive) {
                throw new AuthenticationException("İstifadəçi hesabi deaktiv edilib.");
            }

            // Şifrə yanlış olduqda istisna atılır
            if ($enteredPassword !== $this->password) {
                throw new AuthenticationException("Yanliş şifrə.");
            }

            return true; // Daxil olma uğurludur
        }
    }


    try {
        // Yeni bir istifadəçi obyekti yaratdıq, hesabı deaktiv olunmuşdur
        $user = new User('john_doe', 'securepassword123', false);

        // İstifadəçini şifrə ilə doğrulamağa çalışırıq
        $user->authenticate('securepassword123');
    } catch (AuthenticationException $e) {
        echo "Daxil olma uğursuz oldu: " . $e->getMessage();
    }
