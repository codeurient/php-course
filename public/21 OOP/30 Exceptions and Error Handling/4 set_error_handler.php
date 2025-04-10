<!-- 

    Xətaları idarə etmək üçün set_error_handler
    Xətaları idarə etmək üçün xüsusi funksiya yazmaq olar.


-->

<?php

   function customErrorHandler($errno, $errstr) {
       echo "Custom Error: [$errno] $errstr\n";
   }
   
   set_error_handler("customErrorHandler");
   


   echo 10 / 0;     // Xəta yaranır
   