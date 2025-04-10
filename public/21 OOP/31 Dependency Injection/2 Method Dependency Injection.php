<!-- 

    
    Method Dependency Injection
    Asılılıq metodu çağırarkən ötürülür.

-->

<?php

class Logger {

    public function log($message) {
        echo "Log: $message\n";
    }

}




class UserService {

    public function registerUser($username, Logger $logger) {
        $logger->log("User $username registered.");
    }

}

$logger = new Logger();
$service = new UserService();
$service->registerUser("Alice", $logger);


