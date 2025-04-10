<!-- 

1. Sessiya idarəetmə funksiyaları:
    - session_start()

2. Sessiyanı başlatmaq üçün istifadə olunur. Məsələn, sessiya dəyişənlərinə giriş etmək üçün bu funksiyanı hər bir səhifədə çağırmaq lazımdır.
    - session_destroy()

3. Mövcud sessiyanı tamamilə silir. Bu, sessiyanı ləğv edir, lakin dəyişənləri dərhal silmir (faylları serverdən silmək üçün növbəti sorğu gözlənilir).
    - session_unset()


Bütün sessiya dəyişənlərini sıfırlayır (dəyərləri boşaldır), lakin sessiyanı saxlayır.

Sessiyanın idarəetmə mexanizmi PHP-nin özü tərəfindən həyata keçirilir. Səhifənin işlənməsi bitəndə sessiya avtomatik olaraq bağlanır və dəyişənlər saxlanır.
Sessiyanı "bağlamaq" və ya "dayandırmaq" üçün xüsusi bir funksiyaya ehtiyac yoxdur. Sessiya faylları və məlumatları PHP tərəfindən səhifənin icrası başa çatanda saxlanılır.




Sessiya idarəsi ilə bağlı tövsiyələr:
    Lazım gəldikdə sessiyanı məhv edin:
    Sessiya dəyişənlərinə daha ehtiyac olmadıqda və ya istifadəçini çıxış etdirmək istədikdə session_destroy() funksiyasını çağırmaq lazımdır.

Sessiyanın dəyişənlərini təmizləyin:
    Məsələn, istifadəçi çıxış edirsə, session_unset() və session_destroy() istifadə edərək həm dəyişənləri, həm də sessiyanı silmək olar.
         
         
-->