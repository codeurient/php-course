<?php
// Sessiyanı başlatmaq
session_start();

if (    isset($_SESSION['user_name']) && !empty($_SESSION['user_name'])  ) {
    $name = $_SESSION['user_name'];
    echo "Salam, $name! Sessiyada məlumat saxlanilib.";
} else {
    echo "Ad daxil edilməyib. Zəhmət olmasa geri qayidin və adinizi daxil edin.";
}
?>
