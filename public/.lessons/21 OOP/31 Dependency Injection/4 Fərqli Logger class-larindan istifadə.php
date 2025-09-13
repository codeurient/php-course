<!-- 

    Əsas üstünlüklər:

    Çeviklik:               Obyektlərin bir-birinə sıx bağlılığını azaldır.
    Test edilə bilənlik:    İstisna hallar üçün fərqli obyektlər (mock və ya fake obyektlər) istifadə oluna bilər.
    Təkrar istifadə:        Asılılıqlar dəyişdirilə bilər.
    
-->

<?php
    // Məsələn, fərqli Logger class-larindan istifadə edə bilərik:

    interface LoggerInterface {
        public function log($message);
    }
    
    class FileLogger implements LoggerInterface {
        public function log($message) {
            echo "Logging to a file: $message\n";
        }
    }
    
    class DatabaseLogger implements LoggerInterface {
        public function log($message) {
            echo "Logging to a database: $message\n";
        }
    }
    
    class UserService {
        private $logger;
    
        public function __construct(LoggerInterface $logger) {
            $this->logger = $logger;
        }
    
        public function registerUser($username) {
            $this->logger->log("User $username registered.");
        }
    }
    
    // Fərqli logger-lərdən istifadə edirik
    $fileLogger = new FileLogger();
    $dbLogger = new DatabaseLogger();
    
    $service1 = new UserService($fileLogger);
    $service1->registerUser("Chris");
    
    $service2 = new UserService($dbLogger);
    $service2->registerUser("Emma");
    
