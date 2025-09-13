<!-- 

    Property Dependency Injection
    Asılılıq birbaşa property olaraq təyin edilir.


    - Dependency Injection, obyektlərin asılılıqlarını idarə etmək üçün vacib bir texnikadır.
    
    - Konstruktor, metod və ya property vasitəsilə həyata keçirilə bilər.

-->

<?php

    class Logger {
        public function log($message) {
            echo "Log: $message\n";
        }
    }

    class UserService {
        public $logger;

        public function registerUser($username) {
            $this->logger->log("User $username registered.");
        }
    }

    $logger = new Logger();
    $service = new UserService();
    $service->logger = $logger; // Logger obyektini property olaraq təyin edirik
    $service->registerUser("Bob");
