<?php
namespace ProjectB;

use ProjectA\User;

class UserB {
    public function greet() {
        $userA = new User();
        return $userA->greet();
    }
}