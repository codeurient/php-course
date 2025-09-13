<!-- 

   
Bu PHP kodu, verilən bir tam ədədin tək və ya cüt olduğunu müəyyən etməyə çalışır, və burada float və int tip çevirmələri ilə maraqlı bir yanaşma istifadə edilib.


-->

<?php
    
    $num = 24;
    // Bu sətir, əvvəlcə $num-u 2-yə bölür, sonra nəticəni iki fərqli tipə çevirir. Sonra iki nəticə arasındakı fərq hesablanır.
    $f = (float)($num/2) - (int)($num/2);
    // Bu şərt, əgər $f sıfırdan fərqli bir dəyər alarsa, "Number is odd" (Ədəd təkdir) mesajını çap edir. Əgər $f sıfır olarsa, "Number is even" (Ədəd cütdür) mesajını çap edir.
    if ($f)
        echo "Number is odd";
    else
        echo "Number is even";
    