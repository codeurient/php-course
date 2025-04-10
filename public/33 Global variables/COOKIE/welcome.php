<?php

// $_COOKIE:
// Müştəri tərəfdən göndərilən "cookie"-ləri saxlayır.

if (isset($_COOKIE['user_name'])) {


    $name = $_COOKIE['user_name'];
    echo "Salam, $name! Kukidə məlumat saxlanildi.";


} else {


    echo "Ad daxil edilməyib. Zəhmət olmasa geri qayidin və adinizi daxil edin.";


}
?>
