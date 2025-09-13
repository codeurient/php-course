<?php
namespace ProjectB;

use ProjectA\User;

class UserB {
    public function greetA() {
        $userA = new User();
        return $userA->greet();
    }
}

$userB = new UserB();
echo $userB->greetA(); // Çap edəcək: Salam, ProjectA-dan!
