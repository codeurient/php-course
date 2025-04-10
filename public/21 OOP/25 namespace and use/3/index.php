<?php
require_once 'src/ProjectA/User.php';
require_once 'src/ProjectB/UserB.php';

use ProjectB\UserB;

$userB = new UserB();
echo $userB->greet();       // Salam, ProjectA-dan!
