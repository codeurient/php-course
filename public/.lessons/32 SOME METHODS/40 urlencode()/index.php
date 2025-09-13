<!-- 


PHP-də urlencode() funksiyası, URL-lərin düzgün işləməsi üçün lazım olan xüsusi simvolları kodlaşdırır. URL-dəki boşluqlar, xüsusi 
simvollar və qeyri-alfanumerik simvollar (məsələn, &, =, ?, / və s.) düzgün şəkildə URL-də istifadə oluna bilməz və onlar URL kodlaşdırma 
qaydalarına uyğun şəkildə dəyişdirilməlidir. urlencode() funksiyası məhz bu məqsəd üçün istifadə olunur: URL-dəki bütün qeyri-alfanumerik 
simvolları onların uyğun kodlaşdırılmış versiyalarına çevirir.
    


Sintaksis:
    urlencode(string $str): string



Nə zaman istifadə edilir?
    - URL-də göndərilən məlumatların təhlükəsizliyini təmin etmək: URL parametrləri göndərərkən (məsələn, GET sorğuları), URL-də olan boşluqları, 
      xüsusi simvolları və ya qeyri-alfanumerik xarakterləri düzgün şəkildə kodlaşdırmaq üçün istifadə olunur.
    - Form məlumatları: HTML formalarından serverə göndərilən URL məlumatları da urlencode() ilə kodlaşdırılmalıdır.

    
-->

<?php


// urlencode() funksiyası, URL-də istifadə oluna biləcək hər hansı bir xüsusi simvolu (məsələn, boşluqları və xüsusi işarələri) % ilə başlayan kodlara çevirir.
$text = "PHP funksiyasi urlencode() ilə kodlaşdirilir!";
$encoded_text = urlencode($text);
echo $encoded_text;                     // PHP+funksiyas%C4%B1+urlencode%28%29+ile+kodlandirilir%21

