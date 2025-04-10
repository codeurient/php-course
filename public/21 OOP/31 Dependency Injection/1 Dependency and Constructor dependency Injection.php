<!-- 

    
    Dependency Injection (DI) obyektlər arasındakı asılılıqları (dependencies) idarə etmək və onların bir-birinə sıx bağlı 
    olmasının qarşısını almaq üçün istifadə olunan bir texnikadır. Bunun məqsədi kodun daha çevik, yenidən istifadə oluna 
    bilən və test edilə bilən olmasını təmin etməkdir.


    Adətən, bir obyekt digər obyektə ehtiyac duyur və həmin obyektin içində birbaşa yaradılır. Bu, asılılıq yaradır və dəyişiklik etmək çətinləşir.

-->

<?php
    class Logger {
        public function log($message) {
            echo "Log: $message\n";
        }
    }

    class UserService {
        private $logger;

        public function __construct() {
            $this->logger = new Logger(); // Logger birbaşa burada yaradılır
        }

        public function registerUser($username) {
            // İstifadəçini qeydiyyatdan keçirmək
            $this->logger->log("User $username registered.");
        }
    }

    $service = new UserService();
    $service->registerUser("JohnDoe");


    // Problem:
    // UserService Logger-dən birbaşa asılıdır.
    // Əgər Logger dəyişdirilməli olsa, UserService də dəyişdirilməlidir.


   
?>









<?php

    // Həll: Dependency Injection
    // DI texnikasında, asılılıq obyektin içində YARADILMIR. Bunun əvəzinə, kənardan (məsələn, konstruktor vasitəsilə) ötürülür. Bu, daha çevik yanaşmadır.

    class Logger {
        public function log($message) {
            echo "Log: $message\n";
        }
    }

    class UserService {
        private $logger;

        // Logger kənardan ötürülür
        public function __construct(Logger $logger) {
            $this->logger = $logger;
        }

        public function registerUser($username) {
            $this->logger->log("User $username registered.");
        }
    }

    // Logger obyektini UserService-ə ötürürük
    $logger = new Logger();
    $service = new UserService($logger);
    $service->registerUser("JaneDoe");


    // UserService artıq Logger-dan birbaşa asılı deyil.
    // Logger dəyişdirilməli olsa belə, UserService dəyişməyəcək.