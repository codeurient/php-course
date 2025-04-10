<!-- 
 

PHP-də bütün xəta göstəricilərini aktiv etmək üçün php.ini faylında bəzi parametrləri dəyişdirmək və ya runtime (işləmə vaxtı) olaraq 
ini_set() funksiyasından istifadə etmək mümkündür. Ən yaxşı yanaşma, inkişaf mühitində mümkün olan bütün səhvlərin göstərilməsini təmin 
etməkdir, beləliklə kodda olan hər hansı bir səhvi tez bir zamanda tapa bilərsiniz.


1. php.ini Faylında Xəta Göstərməyi Aktiv Etmək: Əgər serverdə php.ini faylını idarə etmək hüququnuz varsa, orada xəta göstəricilərini aktiv 
etmək üçün aşağıdakı parametrləri istifadə edə bilərsiniz.
    - display_errors: Bu parametrlə xəta mesajlarının ekranda göstərilməsini təmin edirik. Bu, inkişaf mühiti üçün faydalıdır, ancaq istehsal mühitində 
        təhlükəsizlik səbəbilə Off olmalıdır.
    - error_reporting: Bu parametr, PHP-nin hansı səhvləri göstərməli olduğunu təyin edir. E_ALL bütün səhvləri, xəbərdarlıqları və bildirişləri göstərir.
    - Bu dəyişiklikləri etdikdən sonra serveri yenidən başlatmalısınız ki, dəyişikliklər qüvvəyə minsin.

display_errors = On
error_reporting = E_ALL




2. Runtime (İşləmə Vaxtı) Qəbul Etmək: ini_set() Funksiyası: Əgər php.ini faylını dəyişdirmək mümkün deyilsə, həmçinin işləmə vaxtı bu parametrləri ini_set() 
funksiyası ilə təyin edə bilərsiniz. Aşağıdakı kodları faylınıza əlavə etməklə bütün xəta göstəricilərini aktiv edə bilərsiniz (Bu kodları ən başda yazın, 
çünki PHP işləməyə başlamadan bu parametrlərin təyin edilməsi vacibdir): 

ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);



3. Ən Yaxşı Yanaşma: Ən yaxşı təcrübə istifadəçi interfeysində səhvlərin göstərilməsini yalnız inkişaf mühitində saxlamaqdır. İstehsal mühitində display_errors 
OFF edilməli və səhvlər error_log faylında saxlanmalıdır. İstehsal mühiti üçün:
    display_errors = Off
    log_errors = On
    error_log = /path/to/error.log

Və ya işə salmaq üçün PHP kodunda:
    ini_set('display_errors', 0); // İstehsalda səhvlər ekranda göstərilməsin
    ini_set('log_errors', 1); // Səhvlər log faylında saxlanılsın
    ini_set('error_log', '/path/to/error.log'); // Log faylının yolu

- İnkişaf mühiti: Proqramın yazıldığı, təkmilləşdirildiyi və test edildiyi mühitdir.
- İstehsal mühiti: Proqramın canlı istifadəçilər tərəfindən istifadə edildiyi, təhlükəsiz və etibarlı şəkildə işlədiyi mühitdir.


-->


<?php
