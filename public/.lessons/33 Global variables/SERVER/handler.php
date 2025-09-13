<!-- 


$_SERVER:
Server və mühit dəyişənləri haqqında məlumat saxlayır.

    

-->
<?php 

// Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36POST
echo $_SERVER['HTTP_USER_AGENT'];   // Brauzer haqqında məlumat
echo $_SERVER['REQUEST_METHOD'];    // Sorğu metodu (GET, POST)
