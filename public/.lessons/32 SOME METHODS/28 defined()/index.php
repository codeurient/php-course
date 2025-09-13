<!--

    PHP-də defined() funksiyası, verilən sabitin (constant) müəyyən edilib-edilmədiyini yoxlayır. Əgər sabit təyin edilibsə, funksiya true, yoxsa false qaytarır.

-->




<?php



define('MY_CONSTANT', 100);

if (defined('MY_CONSTANT')) {
    echo 'Sabit təyin edilib!';
} else {
    echo 'Sabit təyin edilməyib!';
}




?>
