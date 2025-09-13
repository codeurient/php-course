<!-- 


   Object Type Hinting

    
-->


<?php

    class User {
        public $name;

        public function __construct(string $name) {
            $this->name = $name;
        }
    }

    function printUser(User $user): string {
        return "İstifadəçi: " . $user->name;
    }



    $user = new User("Rəşad");
    echo printUser($user); // İstifadəçi: Rəşad

   



?>



