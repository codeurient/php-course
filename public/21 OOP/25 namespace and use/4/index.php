<!-- 
 

Əgər iki fərqli namespace-də eyni adlı siniflər varsa, alias istifadə edərək onlara ləqəb verə bilərsiniz.


-->

<?php
require_once 'src/ProjectA/User.php';
require_once 'src/ProjectB/User.php';

use ProjectA\User as UserA;
use ProjectB\User as UserB;

$userA = new UserA();
echo $userA->greet()   . '<br>'; // Salam, ProjectA-dan!

$userB = new UserB();
echo $userB->greet()   . '<br>'; // Salam, ProjectB-dən!
